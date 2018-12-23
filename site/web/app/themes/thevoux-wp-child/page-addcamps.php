<?php 
get_header();
// print_r("masterthecrypto");
// $ch = curl_init('https://act.mpowerchange.org/rest/v1/list/');

//     curl_setopt($ch, CURLOPT_USERPWD, 'hammad:nHSJwZ8&UT*Hs9e13?cQ');
//     curl_setopt($ch, CURLOPT_HTTPHEADER, ['Accept: application/json']);
//     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//     // curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
//     // curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
//     curl_setopt($ch, CURLOPT_POSTFIELDS, $json);                                                                                                                 

//     $result = curl_exec($ch);
//     $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
//     curl_close($ch);
global $post;
global $wpdb;
$count = 1;
    $user_id = get_current_user_id();
$petition_ids = array();
 foreach ($petition_ids as $value) {

    $url = "https://act.mpowerchange.org/rest/v1/petitionpage/".$value."/";
    $username = 'hammad';
    $password = 'nHSJwZ8&UT*Hs9e13?cQ';
$process = curl_init($url);
curl_setopt($process, CURLOPT_HTTPHEADER, ['Accept: application/json']);
curl_setopt($process, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($process, CURLOPT_RETURNTRANSFER, TRUE);
$json = curl_exec($process);
$data = json_decode($json, TRUE);
curl_close($process);

// var_dump($return);
    // $json = file_get_contents($url);
    // $data = json_decode($json, TRUE);
// print_r($data);
    // print(json.dumps($data));
    // var_dump($data);
// echo "<br><br><br>&<br><br><br>";
// print_r($data['cms_form']);
// print_r($data);
// echo "CHussu";
// echo "<br>";
// print_r($data['fields']['image_url']);
$uri = $data['fields']['image_url'];
// // echo "<br>";
// // echo get_image_mime_type($uri);
// // echo "<br>";
// // echo basename($uri);
// // echo "<br>";
print_r($data['title']);
$postDate = new DateTime($data['created_at']);
// // echo "<br>";
// print_r($data['name']);
// // echo "<br>";
// print_r($data['updated_at']);
// // echo "<br><br><br>&<br><br><br>";

    $urlTwo = "https://act.mpowerchange.org".$data['cms_form'];
    // $username = 'hammad';
    // $password = 'nHSJwZ8&UT*Hs9e13?cQ';
$processTwo = curl_init($urlTwo);
curl_setopt($processTwo, CURLOPT_HTTPHEADER, ['Accept: application/json']);
curl_setopt($processTwo, CURLOPT_USERPWD, $username . ":" . $password);
curl_setopt($processTwo, CURLOPT_RETURNTRANSFER, TRUE);
$jsonTwo = curl_exec($processTwo);
$dataForm = json_decode($jsonTwo, TRUE);
curl_close($processTwo);




// $urlForm = "https://hammad:nHSJwZ8&UT*Hs9e13?cQ@act.mpowerchange.org".$data['cms_form'];
// $jsonForm = file_get_contents($urlForm);
// $dataForm = json_decode($jsonForm, TRUE);
// // print_r($dataForm['statement_leadin']);
// // echo "<br>";
// // print_r($dataForm['statement_text']);

$cat = array(49);
$postarr = array(
        'post_author' => $user_id,
        'post_content' => $dataForm['statement_text'],
        'post_content_filtered' => '',
        'post_title' => $data['title'],
        'post_date' => $postDate->format('Y-m-d H:i:s'),
        'post_excerpt' => '',
        'post_status' => 'publish',
        'post_type' => 'post',
        'comment_status' => 'closed',
        'ping_status' => 'default_ping_status',
        'post_password' => '',
        'to_ping' =>  '',
        'pinged' => '',
        'post_name' => $data['name'],
        'post_parent' => 0,
        'menu_order' => 0,
        'post_category' => $cat,
        'guid' => '',
        'import_id' => 0,
        'context' => '',
    );
$post_id = wp_insert_post($postarr);
$attach_arr = array(
        'guid' => $uri,
        'post_mime_type' => get_image_mime_type($uri),
        'post_title' => basename($uri),
        'post_excerpt' => '',
        'post_content' => 'Please don\'t remove that. It\'s just an empty symbolic file that keeps the field filled ' .
        '(some themes/plugins depend on having an attached file to work). But you are free to use any image you want instead of this file.',
        'post_status' => 'inherit'
    );
Generate_Featured_Image($uri,$post_id);

// // $attachment_id = wp_insert_attachment($attach_arr,$uri,$post_id);
$metaValue = add_post_meta($post_id,'post-style','style1');
$metaValue = add_post_meta($post_id,'_vc_post_settings','a:1:{s:10:"vc_grid_id";a:0:{}}');
$metaValue = add_post_meta($post_id,'redirect','https://act.mpowerchange.org/cms/view_by_page_id/'.$value);
// // $attachment_id = wp_insert_post($attach_arr);wp_insert_attachment
// echo "<br><br><br>&<br><br><br>";
// print_r($post_id);
// echo "<br><br>";
// // print_r($attachment_id);
// // echo "<br><br";
// // print_r($metaValue);
print_r($count);
print_r("-");
print_r($value);
echo "<br><strong>".$count++."</strong> <u>".$value."</u><br>";

// // sleep(5);
}

get_footer();


function Generate_Featured_Image( $image_url, $post_id  ){
    $upload_dir = wp_upload_dir();
    $image_data = file_get_contents($image_url);
    $filename = basename($image_url);
    if(wp_mkdir_p($upload_dir['path']))     $file = $upload_dir['path'] . '/' . $filename;
    else                                    $file = $upload_dir['basedir'] . '/' . $filename;
    file_put_contents($file, $image_data);

    $wp_filetype = wp_check_filetype($filename, null );
    $attachment = array(
        'post_mime_type' => $wp_filetype['type'],
        'post_title' => sanitize_file_name($filename),
        'post_content' => '',
        'post_status' => 'inherit'
    );
    $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
    $res1= wp_update_attachment_metadata( $attach_id, $attach_data );
    $res2= set_post_thumbnail( $post_id, $attach_id );
}
function get_image_mime_type($image_path)
{
    $mimes  = array(
        IMAGETYPE_GIF => "image/gif",
        IMAGETYPE_JPEG => "image/jpg",
        IMAGETYPE_PNG => "image/png",
        IMAGETYPE_SWF => "image/swf",
        IMAGETYPE_PSD => "image/psd",
        IMAGETYPE_BMP => "image/bmp",
        IMAGETYPE_TIFF_II => "image/tiff",
        IMAGETYPE_TIFF_MM => "image/tiff",
        IMAGETYPE_JPC => "image/jpc",
        IMAGETYPE_JP2 => "image/jp2",
        IMAGETYPE_JPX => "image/jpx",
        IMAGETYPE_JB2 => "image/jb2",
        IMAGETYPE_SWC => "image/swc",
        IMAGETYPE_IFF => "image/iff",
        IMAGETYPE_WBMP => "image/wbmp",
        IMAGETYPE_XBM => "image/xbm",
        IMAGETYPE_ICO => "image/ico");

    if (($image_type = exif_imagetype($image_path))
        && (array_key_exists($image_type ,$mimes)))
    {
        return $mimes[$image_type];
    }
    else
    {
        return FALSE;
    }
}
?>
