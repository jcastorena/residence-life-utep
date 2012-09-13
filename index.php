<?php get_header(); ?>
<?php get_template_part( 'jsincludefile' ); ?>
<?php get_template_part( 'dptag' ); ?>
<?php get_sidebar(); ?>

<!--Hola prueba de Github -->

<div id="dynamic-content-container">
  <div id="dynamic-content-bg-top"></div>
  <div id="dynamic-content-bg-main">

<div id="col-1"> 

<div id="recent-news" style="float: left;">
    <div id="imp-docs-title">
<a href="http://sa.utep.edu/housing/category/events/month" style="text-decoration: none; color:#0A2B5D">Upcoming Events</a></div>

<?php 
// select frontpage posts
query_posts('cat=19&showposts=4');

if (have_posts()) : while (have_posts()) : the_post();
?>

	<div id="news-item" style="min-height: 55px;">
<?php // if there's a thumbnail
	if ( has_post_thumbnail() ) { ?>
		<div style="margin:0; padding:0; padding-right: 10px; float: left;">
			<?php the_post_thumbnail('thumbnail'); ?> 
		</div>
	<?php } // end if statement?>

	<a href="<?php the_permalink(); ?>"><?php the_title();?></a>
</div>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

<?php
// select events
query_posts('cat=5&showposts=4');

if (have_posts()) : while (have_posts()) : the_post();
?>

	<div id="news-item" style="min-height: 55px;">
<?php // if there's a thumbnail
	if ( has_post_thumbnail() ) { ?>
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
	<p style="padding: 0px; margin:5px; padding-left: 20px; font-size:13px">No upcoming events.</p>
<?php endif; ?>
</div> 
<?php wp_reset_query(); ?>



<br />
<div style="text-align: center;">
<?php 
$imageArr = array( 1 => "MHGuys_studying_B", 2 => "MVStudying_group3_B");
?>
<img style="margin-top:10px; border: 1px solid #B8B8B8" src="http://sa.utep.edu/housing/files/2011/05/<?php echo $imageArr[rand(1, 2)] ?>.jpg" />
</div>
</div>

<div id="important-info">
<div id="imp-docs-title">Apply for Fall 2012 Today!
<br>



</div>
<div id="download-app">
<div>FUTURE RESIDENTS: <a href=" http://sa.utep.edu/housing/forms/apply-fall-2011/">Apply Here</a></div>
<br>
<div class="check_in"><a href="http://mvsrvapp00.utep.edu/studentweb/Login.asp?TargetPage=Default.asp?">Check-In and Contract Confirmation</a>
</div>

</div>
</div>


<div id="col-2">
<?php $selected_menu = 'Already Living Here?'; ?>

  <div id="menu-frontPage">
	<div id="menu-frontPage-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => $selected_menu) );  ?>
	</div>	
</div>
<div id="col-3">
<?php $selected_menu = 'Planning on Living Here?'; ?>

  <div id="menu-frontPage">
	<div id="menu-frontPage-title"><?php echo $selected_menu ?></div>
	  <?php wp_nav_menu( array( 'container_class' => 'secondary-menu', 'menu' => $selected_menu) );  ?>
	</div>	
</div>


<img align="center" src="http://sa.utep.edu/housing/files/2011/01/residence_life_prev.jpg" alt="residence life logo" style="margin-left: 200px; margin-top:420px; text-aligin: center" />
</div>

  
  <div id="dynamic-content-bg-bottom"></div>
  </div>


<?php get_footer(); ?>