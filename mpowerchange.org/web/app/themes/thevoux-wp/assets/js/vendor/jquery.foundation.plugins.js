// Alerts

;(function ($, window, undefined) {
  'use strict';
  
  $.fn.foundationAlerts = function (options) {
    var settings = $.extend({
      callback: $.noop
    }, options);
    
    $(document).on("click", ".notification-box a.close", function (e) {
      e.preventDefault();
      $(this).closest(".notification-box").fadeOut(function () {
        $(this).remove();
        // Do something else after the alert closes
        settings.callback();
      });
    });
    
  };

})(jQuery, this);


// Tabs

;(function ($, window, undefined) {
  'use strict';

  $.fn.foundationTabs = function (options) {

    var settings = $.extend({
      callback: $.noop
    }, options);

    var activateTab = function ($tab) {
      var $activeTab = $tab.closest('dl').find('dd.active'),
          target = $tab.find('a').attr("href"),
          hasHash = /^#/.test(target),
          contentLocation = '';
			

      if (hasHash) {
        contentLocation = target + 'Tab';

        // Strip off the current url that IE adds
        contentLocation = contentLocation.replace(/^.+#/, '#');
        
        //Show Tab Content
        $(contentLocation).parents('.tabs-content').find('>li').removeClass('active').hide();
        $(contentLocation).addClass('active').show();
        
      }

      //Make Tab Active
      $activeTab.removeClass('active');
      $tab.addClass('active');
    };

    $(document).on('click.fndtn', 'dl.tabs dd a', function (event){
      activateTab($(this).parents('dd'));
      return false;
    });

		$(document).find('dl.tabs').each(function() {
			activateTab($(this).find('dd:eq(0)'));
			
		});
		
  };

})(jQuery, this);

jQuery(document).ready(function($) {
	$(document).foundationAlerts();
	$(document).foundationTabs();
});

/*
 * Viewport - jQuery selectors for finding elements in viewport
 *
 * Copyright (c) 2008-2009 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *  http://www.appelsiini.net/projects/viewport
 *
 */

(function($){$.belowthefold=function(element,settings){var fold=$(window).height()+$(window).scrollTop();return fold<=$(element).offset().top-settings.threshold;};$.abovethetop=function(element,settings){var top=$(window).scrollTop();return top>=$(element).offset().top+$(element).height()-settings.threshold;};$.rightofscreen=function(element,settings){var fold=$(window).width()+$(window).scrollLeft();return fold<=$(element).offset().left-settings.threshold;};$.leftofscreen=function(element,settings){var left=$(window).scrollLeft();return left>=$(element).offset().left+$(element).width()-settings.threshold;};$.inviewport=function(element,settings){return!$.rightofscreen(element,settings)&&!$.leftofscreen(element,settings)&&!$.belowthefold(element,settings)&&!$.abovethetop(element,settings);};$.extend($.expr[':'],{"below-the-fold":function(a,i,m){return $.belowthefold(a,{threshold:0});},"above-the-top":function(a,i,m){return $.abovethetop(a,{threshold:0});},"left-of-screen":function(a,i,m){return $.leftofscreen(a,{threshold:0});},"right-of-screen":function(a,i,m){return $.rightofscreen(a,{threshold:0});},"in-viewport":function(a,i,m){return $.inviewport(a,{threshold:0});}});})(jQuery);


/*!
  * hoverIntent v1.8.1 // 2014.08.11 // jQuery v1.9.1+
  * http://cherne.net/brian/resources/jquery.hoverIntent.html
  *
  * You may use hoverIntent under the terms of the MIT license. Basically that
  * means you are free to use hoverIntent as long as this header is left intact.
  * Copyright 2007, 2014 Brian Cherne
  */
 
 !function(e){"use strict";"function"==typeof define&&define.amd?define(["jquery"],e):jQuery&&!jQuery.fn.hoverIntent&&e(jQuery)}(function(e){"use strict";var t,n,o={interval:100,sensitivity:6,timeout:0},i=0,r=function(e){t=e.pageX,n=e.pageY},u=function(e,o,i,v){return Math.sqrt((i.pX-t)*(i.pX-t)+(i.pY-n)*(i.pY-n))<v.sensitivity?(o.off("mousemove.hoverIntent"+i.namespace,r),delete i.timeoutId,i.isActive=!0,delete i.pX,delete i.pY,v.over.apply(o[0],[e])):(i.pX=t,i.pY=n,i.timeoutId=setTimeout(function(){u(e,o,i,v)},v.interval),void 0)},v=function(e,t,n,o){return delete t.data("hoverIntent")[n.id],o.apply(t[0],[e])};e.fn.hoverIntent=function(t,n,s){var a=i++,d=e.extend({},o);d=e.isPlainObject(t)?e.extend(d,t):e.isFunction(n)?e.extend(d,{over:t,out:n,selector:s}):e.extend(d,{over:t,out:t,selector:n});var m=function(t){var n=e.extend({},t),o=e(this),i=o.data("hoverIntent");i||o.data("hoverIntent",i={});var s=i[a];s||(i[a]=s={id:a}),s.timeoutId&&(s.timeoutId=clearTimeout(s.timeoutId));var m=s.namespace=".hoverIntent"+a;if("mouseenter"===t.type){if(s.isActive)return;s.pX=n.pageX,s.pY=n.pageY,o.on("mousemove.hoverIntent"+m,r),s.timeoutId=setTimeout(function(){u(n,o,s,d)},d.interval)}else{if(!s.isActive)return;o.off("mousemove.hoverIntent"+m,r),s.timeoutId=setTimeout(function(){v(n,o,s,d.out)},d.timeout)}};return this.on({"mouseenter.hoverIntent":m,"mouseleave.hoverIntent":m},d.selector)}});
 
 /**
  * Provides requestAnimationFrame in a cross browser way.
  * @author paulirish / http://paulirish.com/
  */
 
 if ( !window.requestAnimationFrame ) {
 
 	(function() {
 	    var lastTime = 0;
 	    var vendors = ['webkit', 'moz'];
 	    for(var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
 	        window.requestAnimationFrame = window[vendors[x]+'RequestAnimationFrame'];
 	        window.cancelAnimationFrame =
 	          window[vendors[x]+'CancelAnimationFrame'] || window[vendors[x]+'CancelRequestAnimationFrame'];
 	    }
 	
 	    if (!window.requestAnimationFrame)
 	        window.requestAnimationFrame = function(callback, element) {
 	            var currTime = new Date().getTime();
 	            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
 	            var id = window.setTimeout(function() { callback(currTime + timeToCall); },
 	              timeToCall);
 	            lastTime = currTime + timeToCall;
 	            return id;
 	        };
 	
 	    if (!window.cancelAnimationFrame)
 	        window.cancelAnimationFrame = function(id) {
 	            clearTimeout(id);
 	        };
 	}());
 
 }