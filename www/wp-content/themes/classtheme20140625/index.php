<?php
/*
 Template Name: Page Template
*/
GitWordPressLayout::$Viewbag['sTitle'] = "My Blog";
GitWordPressLayout::layout("_layout.php");
Drum::GetAll();
?>
<div id="main">
	<div id="content">
		<h1>Page Area</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<h1><?php the_title(); ?></h1>
		<p><?php the_content(__('(more...)')); ?></p>
		<hr> <?php endwhile;endif?>
		</div>	
		<?php echo bloginfo('url').'/wp-content/plugings/Drum.php';?>			
</div>