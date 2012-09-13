<?php
/*
Template Name: Static Content
 */

get_header(); ?>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<?php get_template_part( 'jsincludefile' ); ?>

<div id="sub-site-container">

  <div id="weiter-body">
  <div id="weiter-top"></div>
  <div id="content">


<!-- Left Menu START -->
 
<?php 

$selected_menu = 'RESIDENCE LIFE'
?>

  <div id="menu-left">
	<div id="menu-left-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => $selected_menu) );  ?>
	</div>	
	<script type="text/javascript">
		jQuery('ul.sub-menu').hide();

		$("li.current_page_ancestor ul.sub-menu").show();
		$("li.current-menu-item ul.sub-menu").show();
	    // navi toggle
       	    jQuery('ul.menu li').click(function(){
        	if (jQuery(this).find('ul.sub-menu').is(':hidden') == true) {
	            jQuery(this).find('ul.sub-menu').slideDown('normal');
                }
	    });
	</script>


<!-- Left Menu END-->

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">

<div id="page-title">
<?php wp_title(); ?>
</div>

<div id="social-networks-facebook">
<?php if (function_exists('fbshare_button')) echo fbshare_button(); ?>
</div>

<div id="social-networks-twitter">
<?php if (function_exists('tweetbutton')) echo tweetbutton(); ?>
</div>

<?php if (has_post_thumbnail()) {  ?>
<div id="thumbnail-static-content-page" style="position:absolute; 
	margin:0;
	left: 494px; 
	padding:0px; 
	top: 21px; 
	width: 180px; 
	border: 1px solid #fff;"><?php the_post_thumbnail('medium'); ?></div>
<?php } else { 
$imageArr = array(0 => "Miner-Village01", 1 => "MHGroup_Inside1", 2 => "MVStudying_group3", 3 => "MHGuys_studying_lamp", 4 => "Miner-Village_volleyball");
?>
<div id="thumbnail-static-content-page"><img src="http://sa.utep.edu/housing/files/2011/03/<?php echo $imageArr[rand(0, 4)] ?>.jpg" /></div>
<?php }?>
<div class="single-entry">
	<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			
<?php // START IF PAGE == FREQUENTLY ASKED QUESTIONS, show this
	echo '<div id="FAQ-right-menu">';
	if ( stristr( wp_title('', false), "FREQUENTLY ASKED QUESTIONS", TRUE))
	{ 			
	 wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => 'FAQ Menu') );
	echo '</div>';

		} 
	// EOF IF PAGE == FREQUENTLY ASKED QUESTIONS

	// START IF PAGE == Student Housing Work Order Form, show this
	else if ( stristr( wp_title('', false), "Student Housing Work Order Form", TRUE)) {

	echo ' <div id="work-order-form" style="display:inline; float: left; margin: 0pt; padding: 0pt; width: 460px;"><script type="text/javascript" src="http://form.jotform.us/jsform/22124722308141"></script><div id="FAQ-right-menu" style="font-size: small;"><span style="color: #333399;"><strong>The following situations are considered emergencies:</strong></span></span>&nbsp;
<ul style="line-height: 17px; font-size:0.8em; list-style-type: circle;">
	<li><span style="color: #ff6600;">No heat or air-conditioning when outside temperatures are less than 50 degrees or higher than 80 degrees Fahrenheit</span></li>
	<li><span style="color: #ff6600;">Electrical failure</span></li>
	<li><span style="color: #ff6600;">Overflowing toilet</span></li>
	<li><span style="color: #ff6600;">Stopped up toilet <em><span style="text-decoration: underline;">if only one is available in the apartment</span></em></span></li>
	<li><span style="color: #ff6600;">Water problems such as leaks, server back-up’s, or broken pipes</span></li>
	<li><span style="color: #ff6600;">Malfunction of an essential appliance (non-working refrigerator)</span></li>
	<li><span style="color: #ff6600;">No water</span></li>
	<li><span style="color: #ff6600;">No hot water when affecting more than one unit</span></li>
	<li><span style="color: #ff6600;">Any unsecured entry</span></li>
	<li><span style="color: #ff6600;">Malfunctioning controlled access gates</span></li>
	<li><span style="color: #ff6600;">Lock Change</span></li>
</ul>
</div>
<p style="color: red;">For afterhours emergencies, please call the RLA phone at:</p>

<ul>
	<li><span style="color: red;">(915) 525-1452 for Miner Village</span></li>
	<li><span style="color: red;">(915) 996-0922 for Miner Heights</span></li>
</ul>
</div>
<div style="clear:both">&nbsp;</div> -->';

	// EOF IF PAGE == Student Housing Work Order Form

}
?>		

		</div>
	</div>
	<?php endwhile; endif; ?>	
</div>

	</div>

  </div>

<div id="weiter-bottom"></div>
</div>
<div id="bottom-nav"></div>

<?php get_footer(); ?>