<?php get_header(); ?>
<?php get_template_part( 'jsincludefile' ); ?>

	
<div id="sub-site-container">


  <div id="weiter-body">
  <div id="weiter-top"></div>

  <div id="content">


<!-- Left Menu START -->
 
  <div id="menu-left">
	<div id="menu-left-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => 'RESIDENCE LIFE') );  ?>
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

	<div id="social-networks-facebook">
	<?php if (function_exists('fbshare_button')) echo fbshare_button(); ?>
	</div>

	<div id="social-networks-twitter">
	<?php if (function_exists('tweetbutton')) echo tweetbutton(); ?>
	</div>

	<?php if (has_post_thumbnail()) {  ?>
	<div id="thumbnail-static-content-page"><?php the_post_thumbnail('medium'); ?></div>
	<?php } else { ?>
	<div id="thumbnail-static-content-page">
	<img src="http://sa.utep.edu/housing/files/2011/02/residence_life-small.jpg" /></div>
	<?php }?>


		<div id="blog-title-first" style="top:35px; position:relative"><?php the_title(); ?></div>
			<div class="read-more-entry" style="top:25px;position:relative">
				<?php the_content('Read the rest of this entry &raquo;'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>
			
			<?php comments_template(); ?>
			
		</div>

		<?php endwhile; ?>


	<?php else : ?>

		<h2>Not Found</h2>
		<p>Sorry, but you are looking for something that isn't here.</p>

	<?php endif; ?>

	<!--/content -->

			</div>
		</div>
	
	</div>
  <div id="weiter-bottom"></div>
</div>



<?php get_footer(); ?>