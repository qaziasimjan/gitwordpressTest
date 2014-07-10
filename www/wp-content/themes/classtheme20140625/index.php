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
		<?php 
echo 'Server date and time is: ';
echo date('l, F j, Y \a\t G:i:s');
?>
<table class="tbl_row"><?php $oDrum = new Drum();$c = $oDrum->GetAll($result);
if(!empty($c)) {
	foreach($c as $r){		
		echo '<tr>';
		
		echo '<td>'. $r['iddrum'].'</td>';
		
		echo '<td>'. $r['name'].'</td>';
		
		echo '<td>'. $r['description'].'</td>';
	
		echo '</tr>';		
		}
}
echo json_encode($oDrum->GetAll($result)); ?> </table>
			
</div>