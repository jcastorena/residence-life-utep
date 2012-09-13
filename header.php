<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="shortcut icon" href="http://sa.utep.edu/wp-content/themes/Miner%20Village/images/residence_life.ico" /> 

<!-- Load the Theme Stylesheets -->
<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/miner-village-theme.css" />


<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/cssie7.css" />
<![endif]-->



<!-- Load the primordial JavaScript -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/clockAlgorithm.js" /></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" /></script>
<!-- End JavaScript -->

<!-- Load the FancyBox components -->
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/fancybox/jquery.fancybox-1.3.1.pack.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/fancybox/jquery.fancybox-1.3.1.css" type="text/css" media="screen" />
<!-- End High slide loading -->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="icon" type="image/png" href="http://sa.utep.edu/static/utep.ico">
<!-- Include the Nivo Slider CSS and JavaScript file -->
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/js/nivoslider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/js/nivoslider/custom-nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/js/nivoslider/nivo-slider.css" type="text/css" media="screen" />
<script src="<?php bloginfo("template_url"); ?>/js/nivoslider/jquery.nivo.slider.pack.js" type="text/javascript"></script>

<!-- Include jQuery -->
<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>

<!-- Set up the Nivo Slider -->
<script type="text/javascript">
$(window).load(function() {
	$('#nivoslider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		slices:15,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		//controlNav:true, //1,2,3...
		//controlNavThumbs:false, //Use thumbnails for Control Nav
      		//controlNavThumbsFromRel:false, //Use image rel for thumbs
		//controlNavThumbsSearch: '.jpg', //Replace this with...
		//controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
		//keyboardNav:true, //Use left & right arrows
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		//captionOpacity:0.8, //Universal caption opacity
		//beforeChange: function(){},
		//afterChange: function(){},
		//slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
<script type="text/javascript">
		$(document).ready(function() {

			$("#various3").fancybox({
				'width'				: '75%',
				'height'			: '75%',
				'autoScale'			: false,
				'transitionIn'		: 'fade',
				'transitionOut'		: 'fade',
				'type'				: 'iframe'
			});

		});
	</script>
<!-- Finish loading of Nivo Slider -->

<!-- Javascript for download box -->



<script type="text/javascript">
		$(document).ready(function() {

			$("#application-box").fancybox({
				'titlePosition'		: 'inside',
				'transitionIn'		: 'fade',
				'transitionOut'		: 'fade'
			});

		});
	</script>


<!-- //////////////////////////////////////////////////////// -->



</head>
<body onload="UR_Start()">
<!-- This Javascript code is the set timeout function that calls for the  action of hiding the announcement box after 7 seconds of elapsed time since load.-->

<!-- This section is dedicated for Google Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7764510-25']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<!-- Google Analytics end -->


<!--<div id="emergency-tab">
  <div id="alerticon"></div>
  <div id="at1">UTEP EMERGENCY MESSAGE</div>
  <div id="at2">Due to the severe Winter Storm, UTEP has decided that the classes will be cancelled for week of June 42 - June 50th. Stay tuned for updated information on the class schedule changes. Dr. Natalicio wants to protect the safety of all students, please comply with this ruling. University street will be closed for these days as well.</div>
</div>-->
<div id="header">
<div id="dayDiv"></div>
    <div id="ur"></div>
</div>
<div id="m1">
<div id="access">
<div>
<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'menu' => 'Primary Menu' ) ); ?>
</div>
</div>

	<div id="search"><a class="search-btn" id="various3" href="http://sa.utep.edu/search"><span>Search</span></a></div>

</div>
</div>
<!--<div id="publicity">
  <div>
  <a href="http://sa.utep.edu/events"><img src="http://sa.utep.edu/static/flyer.jpg" alt="Announcement from the Office of Student Affairs" width="908" height="358" border="0" /></a>
  </div>
  <div id="pclose"><a href="#" onclick="Effect.toggle('publicity', 'slide', { duration: 0.6 }); return false;"><img src="http://sa.utep.edu/static/images/close-btn.png" width="68" height="29" alt="Click here to close the announcement box." border="0"/></a></div>
</div>-->