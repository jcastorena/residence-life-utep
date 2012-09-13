<?php
/*
Template Name: Miner Village Blog System
 */

get_header(); ?>
<?php get_template_part( 'jsincludefile' ); ?>


<div id="sub-site-container">
  <div id="weiter-body">
<div id="weiter-top"></div>

  <div id="content">	
<?php
$selected_menu = 'RESIDENCE LIFE'
?>


  <div id="menu-left">
	<div id="menu-left-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => $selected_menu) );  ?>
  </div>	
	<script type="text/javascript">
		jQuery('ul.sub-menu').hide();
		jQuery('ul.sub-menu ul.sub-menu').hide();
	        $("li.current-menu-item ul.sub-menu").show();
		$("li.current_page_parent ul.sub-menu").show();
		$("li.current-menu-ancestor ul.sub-menu").show();

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
<div id="thumbnail" style="position:absolute; margin:0; padding:0px; left:494px; top: 21px; width: 180px; border: 1px solid #fff;"><?php the_post_thumbnail('medium'); ?></div>
<?php } ?>
		<div class="single-entry" style="margin-bottom:5px;">
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				

		</div>
	</div>
		<?php endwhile; endif; ?>	

  <div id="blog-holder">


  <!-- <div id="blog-registration-div">Register | Login</div> -->

<?php 
if (!isset($_GET["cat"])) {
	$_GET["cat"] = 999999; // do not select any category
} else { ?>

<div id="blog-title-div">	
	<div id="blog-title-first"><?php echo get_cat_name($_GET["cat"]); ?></div>
</div>
<?php
}
$category = 'cat='.$_GET["cat"]; 
?>

<?php if (have_posts()) { query_posts($category);
		while (have_posts()) { the_post(); 

if ($_GET["type"] == 'event') {

?>


<div id="post-<?php the_ID() ?>" class="tec-event post clearfix<?php echo $alt ?>">
							    <div style="clear:both;"></div>
							        <?php if ( is_new_event_day() ) : ?>
					<h4 class="event-day"><?php echo the_event_start_date( null, false ); ?></h4>
							        <?php endif; ?>
						<?php the_title('<h2 class="entry-title"><a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a></h2>'); ?>

					<div class="tec-event-list-meta">
		              <table>
		                  <tr>
		                    <td class="tec-event-meta-desc"><?php _e('Start:', $spEvents->pluginDomain) ?></td>
		                    <td class="tec-event-meta-value"><?php echo the_event_start_date(); ?></td>
		                  </tr>
		                  <tr>
		                    <td class="tec-event-meta-desc"><?php _e('End:', $spEvents->pluginDomain) ?></td>
		                    <td class="tec-event-meta-value"><?php echo the_event_end_date(); ?></td>
		                  </tr>
		                  <?php
		                    $venue = the_event_venue();
		                    if ( !empty( $venue ) ) :
		                  ?>
		                  <tr>
		                    <td class="tec-event-meta-desc"><?php _e('Venue:', $spEvents->pluginDomain) ?></td>
		                    <td class="tec-event-meta-value"><?php echo $venue; ?></td>
		                  </tr>
		                  <?php endif; ?>
		                  <?php
		                    $phone = the_event_phone();
		                    if ( !empty( $phone ) ) :
		                  ?>
		                  <tr>
		                    <td class="tec-event-meta-desc"><?php _e('Phone:', $spEvents->pluginDomain) ?></td>
		                    <td class="tec-event-meta-value"><?php echo $phone; ?></td>
		                  </tr>
		                  <?php endif; ?>
		                  <?php if (tec_address_exists( $post->ID ) ) : ?>
		                  <tr>
							<td class="tec-event-meta-desc"><?php _e('Address:', $spEvents->pluginDomain); ?><br />
							<?php if( get_post_meta( $post->ID, '_EventShowMapLink', true ) == 'true' ) : ?>
								<?php $mapArgs = array("f"=>"q","source"=>"s_q","geocode"=>""); ?>
								<a class="gmap" href="<?php event_google_map_link( null, $mapArgs ); ?>" title="Click to view a Google Map" target="_blank"><?php _e('Google Map', $spEvents->pluginDomain ); ?></a>
							<?php endif; ?></td>
							<td class="tec-event-meta-value"><?php tec_event_address( $post->ID ); ?></td>
		                  </tr>
		                  <?php endif; ?>
		                  <?php
		                    $cost = the_event_cost();
		                    if ( !empty( $cost ) ) :
		                  ?>
	 		              <tr>
							<td class="tec-event-meta-desc"><?php _e('Cost:', $spEvents->pluginDomain) ?></td>
							<td class="tec-event-meta-value"><?php echo $cost; ?></td>
						 </tr>
		                  <?php endif; ?>
		              </table>
					</div>

					<div style="clear:both;"></div>

					<div class="entry-content tec-event-entry">
						<?php  the_content();?>
					</div> <!-- End tec-event-entry -->

				</div> <!-- End post -->

<?php
}
else { ?>
  <div class="blog-block" id="post-<?php the_ID(); ?>">
    <div class="blog-post-title"><?php the_title(); ?></div>
    <div class="blog-post-date">Posted on: <?php the_time('M') ?> <?php the_time('j') ?></div>
    <div class="blog-post-body"><?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?></div>
  <!--   <div id="bantha-fooder">
      	<div id="read-more-btn"><a href="<?php the_permalink(); ?>" class="readmore-btn">Read More</a></div>
      	<div id="comment-count"><?php comments_number('No comments yet!','One Comment','% comments'); ?></div> 
    </div>  -->
</div>
	<?php }
	}
	} 
if (!have_posts() && $_GET["type"] == 'event') echo 'No upcoming events.';
if (!have_posts() && $_GET["type"] == 'job') echo 'No jobs available.';
?>
</div>

</div>
</div>
<div id="weiter-bottom"></div>



<?php get_footer(); ?>
