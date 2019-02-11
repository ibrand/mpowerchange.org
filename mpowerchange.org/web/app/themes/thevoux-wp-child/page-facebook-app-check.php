<?php
require_once('src/Facebook/autoload.php');
global $facebook;


$fb = new Facebook\Facebook([
  'app_id' => '164367160774850',
  'app_secret' => 'd46ea226983a06b5907cc70591afc6b6',
  'default_graph_version' => 'v2.2',
  ]);
  
   $helper = $fb->getRedirectLoginHelper();
if (isset($_GET['state'])) {
    $helper->getPersistentDataHandler()->set('state', $_GET['state']);
    echo "State Got<br>";
}
 // $helper = $fb->getCanvasHelper();
$permissions = ['email', 'publish_actions']; // optional
try {
	if (isset($_SESSION['facebook_access_token'])) {
	$accessToken = $_SESSION['facebook_access_token'];
	} else {
  		$accessToken = $helper->getAccessToken();
	}
} catch(Facebook\Exceptions\FacebookResponseException $e) {
 	// When Graph returns an error
 	echo 'Graph returned an error: ' . $e->getMessage();
  	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
 	// When validation fails or other local issues
	echo 'Facebook SDK returned an error: ' . $e->getMessage();
  	exit;
 }
if (isset($accessToken)) {
	if (isset($_SESSION['facebook_access_token'])) {
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	} else {
		$_SESSION['facebook_access_token'] = (string) $accessToken;
	  	// OAuth 2.0 client handler
		$oAuth2Client = $fb->getOAuth2Client();
		// Exchanges a short-lived access token for a long-lived one
		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);
		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;
		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
	}
	
	// validating the access token
	try {
		$request = $fb->get('/me');
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		if ($e->getCode() == 190) {
			unset($_SESSION['facebook_access_token']);
			$helper = $fb->getRedirectLoginHelper();
			$loginUrl = $helper->getLoginUrl('https://apps.facebook.com/doozietestingsetting/', $permissions);
			echo "<script>window.top.location.href='".$loginUrl."'</script>";
			exit;
		}
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	try {
		// message must come from the user-end
		$data = ['source' => $fb->fileToUpload('https://cloud.netlifyusercontent.com/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg'), 'message' => 'my photo'];
		$request = $fb->post('/me/photos', $data);
		$response = $request->getGraphNode()->asArray();
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
		// When Graph returns an error
		echo 'Graph returned an error: ' . $e->getMessage();
		exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
		// When validation fails or other local issues
		echo 'Facebook SDK returned an error: ' . $e->getMessage();
		exit;
	}

	echo $response['id'];

  	// Now you can redirect to another page and use the
  	// access token from $_SESSION['facebook_access_token']
} else {
	$helper = $fb->getRedirectLoginHelper();
	$loginUrl = $helper->getLoginUrl('http://mpowerchange.ohbhens.com/facebook-app-check/', $permissions);
 	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
 	echo '<input type="button" value="Submit" onclick="OpenWindow('.$loginUrl.')">';
 	echo '<a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("'.$loginUrl.'","Ratting","width=550,height=170,0,status=0,");>Click here to open the child window</a>';
 
 
}
  
  ?>
  <script type="text/javascript">
function OpenWindow(url) {
    window.open(url, 'newwindow', config='height=400,width=700,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no,directories=no,status=no');
}
</script>
  <?php
  
  
//  $helper = $fb->getRedirectLoginHelper();
// if (isset($_GET['state'])) {
//     $helper->getPersistentDataHandler()->set('state', $_GET['state']);
//     echo "State Got<br>";
// }
// $permissions = ['email']; // optional
	
// try {
// 	if (isset($_SESSION['facebook_access_token'])) {
// 		$accessToken = $_SESSION['facebook_access_token'];
// 		    echo "Session Got<br>";
// 	} else {
//   		$accessToken = $helper->getAccessToken();
// 	}
// } catch(Facebook\Exceptions\FacebookResponseException $e) {
//  	// When Graph returns an error
//  	echo 'Graph returned an error: ' . $e->getMessage();

//   	exit;
// } catch(Facebook\Exceptions\FacebookSDKException $e) {
//  	// When validation fails or other local issues
// 	echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   	exit;
//  }

// if (isset($accessToken)) {
// 	if (isset($_SESSION['facebook_access_token'])) {
// 		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
// 		   echo "FB Session Got<br>";
// 	} else {
// 		// getting short-lived access token
// 		$_SESSION['facebook_access_token'] = (string) $accessToken;

// 	  	// OAuth 2.0 client handler
// 		$oAuth2Client = $fb->getOAuth2Client();

// 		// Exchanges a short-lived access token for a long-lived one
// 		$longLivedAccessToken = $oAuth2Client->getLongLivedAccessToken($_SESSION['facebook_access_token']);

// 		$_SESSION['facebook_access_token'] = (string) $longLivedAccessToken;

// 		// setting default access token to be used in script
// 		$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
// 		echo "OAuth Session Got<br>";
// 	}

// 	// redirect the user back to the same page if it has "code" GET variable
// 	if (isset($_GET['code'])) {
// 		header('Location: ./');
// 	}

// 	// getting basic info about user
// 	try {
// 		$profile_request = $fb->get('/me?fields=name,first_name,last_name,email');
// 		$profile = $profile_request->getGraphNode()->asArray();
// 	} catch(Facebook\Exceptions\FacebookResponseException $e) {
// 		// When Graph returns an error
// 		echo 'Graph returned an error: ' . $e->getMessage();
// 		session_destroy();
// 		// redirecting user back to app login page
// 		header("Location: ./");
// 		exit;
// 	} catch(Facebook\Exceptions\FacebookSDKException $e) {
// 		// When validation fails or other local issues
// 		echo 'Facebook SDK returned an error: ' . $e->getMessage();
// 		exit;
// 	}
// 	//echo "Profile<br>";
// 	// printing $profile array on the screen which holds the basic info about user
// 	print_r($profile);
	
//   	// Now you can redirect to another page and use the access token from $_SESSION['facebook_access_token']
// } else {
// 	// replace your website URL same as added in the developers.facebook.com/apps e.g. if you used http instead of https and you used non-www version or www version of your website then you must add the same here
// 	$loginUrl = $helper->getLoginUrl('http://mpowerchange.ohbhens.com/facebook-app-check/', $permissions);
// 	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';
// }