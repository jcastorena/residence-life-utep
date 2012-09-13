<?php
/*
Template Name: Static Content With Left Menu v1
 */

get_header(); ?>

<?php get_template_part( 'jsincludefile' ); ?>
<?php get_template_part( 'dptag' ); ?>
<?php get_sidebar(); ?>

<div id="dynamic-content-container">

	
  <div id="dynamic-content-bg-top"></div>
  <div id="dynamic-content-bg-main">

<object width="635" height="181">
<param name="movie" value="http://sa.utep.edu/housing/files/2011/04/frontpage_slider_big.swf">
<embed src="http://sa.utep.edu/housing/files/2011/04/frontpage_slider_big3.swf" width="635" height="181">
</embed>
</object>



  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div  class="post" id="post-<?php the_ID(); ?>">
      <div class="post-title"><?php the_title(); ?></div>
      <div class="entry">
        <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
      </div>




<!-- ------------------------------------------------ -->


<div id="recent-news" style="float: left;">
    <div id="imp-docs-title">Happening Now</div>
<?php 

// select events
query_posts('showposts=10&category_name=Events');

if (have_posts()) : while (have_posts()) : the_post();
?>

	<div id="news-item">
<?php // if there's a thumbnail
	if ( 0 ) { ?>
		<div style="margin:0; padding:0; padding-right: 10px; float: left;">
			<?php the_post_thumbnail('thumbnail'); ?> 
		</div>
	<?php } // end if statement?>

	<a href="<?php the_permalink(); ?>"><?php the_title();?></a>

	<div class="news-item-date">
		<?php if (the_event_start_date() != '') echo the_event_start_date(); ?>  
		<?php //if (the_event_end_date() != '') echo '<br>End: '. the_event_end_date(); ?>  
	</div>
</div>

<?php endwhile; else: ?>
	<p style="padding: 0px; margin:5px; padding-left: 20px; font-size:13px">No upcoming events.</p>';
<?php endif; ?>
</div> 
<?php wp_reset_query(); 

?>
<!-- ------------------------------------------------ -->
<?php $selected_menu = 'Already Living Here'; ?>

  <div id="menu-frontPage">
	<div id="menu-frontPage-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => $selected_menu) );  ?>
	</div>	
	<script type="text/javascript">
		jQuery('ul.sub-menu').hide();

		$("li.current_page_ancestor ul.sub-menu").show();
		$("li.current-menu-item ul.sub-menu").show();
	    // navi toggle
       	    jQuery('ul.menu li').mouseover(function(){
        	if (jQuery(this).find('ul.sub-menu').is(':hidden') == true) {
	            jQuery(this).find('ul.sub-menu').slideDown('slow');
                }
	    });
	</script>
<?php  // } ?>
<div id="download-app">
<div style="background-color:#2683AE; border: 1px solid #98C286">
<div style="color:#fff">Returners:Apply Here</div>
</div>
<div style="background-color: #FFCF01; border: 1px solid #FFCB68">
<div style="color:#005696">NEW TO RESIDENCE LIFE?</div>
</div>
</div>
</div>
	

        
  </div>
  <div id="dynamic-content-bg-bottom"></div>
  <?php endwhile; ?>
<?php endif; ?>

</div>

<?php get_footer(); ?>