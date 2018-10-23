<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/masthead.php'); ?>
	
	
	<? /*
	$a = new Area('Work Welcome Text');
	if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
	?>
	<div class="section generic welcome work-welcome">
		<div class="content">
		<?php $a->display($c); ?>
		</div>
	</div>
	<?
	}
	*/ ?>

	
	<?
		$a = new Area('Work Rows');
		if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
			echo '<div class="section work-rows">';
			$a->display($c);
			echo '</div>';
		} 
	?>






<? /*


<div class="ccm-work-row">

	
	<!-- if col1 is enabled //-->
	<? $isSlider = true; ?>
	<div class="ccm-work-col">
		
		<? if (!$isSlider) { ?>
		<div>
		<div class="ccm-work-col-text-container">

			<h2>Header goes here</h2>
			<p>Text goes here</p>
		
		</div>
		</div>
		<? } ?>

		<!-- if image / slider / image //-->
		<div>
		<div class="ccm-work-col-container">
			<div class="ccm-work-col-inner-container">

			<!-- if image / video //-->
			<?php if (!$isSlider) { ?>
			<div class="media-container">
				<img src="http://mgh2016.mghstage.com/application/files/9814/9090/2356/blog-photo-1.png" height="100%">				
				<div class="square-push">&nbsp;</div>
			</div>
			<?php } ?>
			<!-- end if image / video //-->

			<!-- if slider //-->
			<?php if ($isSlider) { ?>
			<div class="slider-container">
				<ul class="slider">
					<li class="slide">
						<div class="slider-text-container">
							<h2>Header goes here</h2>
						</div>
						<div class="media-container">
							<img src="http://mgh2016.mghstage.com/application/files/9814/9090/2356/blog-photo-1.png" height="100%">	
							<div class="square-push">&nbsp;</div>
						</div>
					</li>
				</ul>
				<div class="slider-arrows">
					<i class="left-arrow fa fa-angle-left"></i>
					<i class="right-arrow fa fa-angle-right"></i>
				</div>
			</div>
			<div class="slider-controls">
				<div class="slider-control active"></div>
				<div class="slider-control"></div>
				<div class="slider-control"></div>
			</div>
			<?php } ?>
			<!-- end if slider //-->

			</div>
		</div>
		</div>		
		<!-- end if image / slider / image //-->

	</div>	
	<!-- end if col1 is enabled //-->



	



	<? $isSlider = true; ?>


</div>


*/ ?>






<?php 
	$a = new Area('Footer Callout Content');
	if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
		echo '<div class="section ctabanner">';
			$a->display($c);
		echo '</div>';
	}
?>

<?php $this->inc('elements/footer.php'); ?>