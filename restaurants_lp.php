<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php');
	
	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	}

	$isFeaturedVideo = $c->getAttribute('is_featured_video');
	$featuredVideo = $c->getAttribute('featured_video');
	if( $featuredVideo ){
		$featuredVideo = $featuredVideo->getURL();
		}

	if ($isFeaturedVideo) {
	?>
	<div class="section hero" style="height:auto; max-height:650px; min-height:0px; overflow:hidden; position:relative;">
		<div class="intro" style="z-index:2;">
			<?php
			    $a = new Area('Hero Content');
			    $a->display($c);
			?>
		</div>
		<video autoplay="true" loop="true" style="width:100%; z-index:1;">
		    <source src="<?php echo $featuredVideo; ?>">
		</video>
	</div>
	<?php
	} else {
	?>
	<div class="section hero" style="background-image:url('<?php echo $featuredImage; ?>');">
		<div class="intro">
			<?php
			    $a = new Area('Hero Content');
			    $a->display($c);
			?>
		</div>
	</div>
	<?php
	}
	?>


	<div class="section about">		
		<div class="content">
			<?php
			    $a = new Area('About Intro Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>

	
	<div class="section banner">
		<div class="content">
			<?php
			    $a = new Area('Banner Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>


	<div class="section work">
		<div class="clearfix">
			<?php
			    $a = new Area('Project 1 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap">';
					$a->display($c);
					echo '</div>';
				} 
			?>
			
			<?php
			    $a = new Area('Project 2 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap">';
					$a->display($c);
					echo '</div>';
				} 
			?>
			
			<?php
			    $a = new Area('Project 3 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap">';
					$a->display($c);
					echo '</div>';
				} 
			?>
			
			<?php
			    $a = new Area('Project 4 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap">';
					$a->display($c);
					echo '</div>';
				} 
			?>
			
			<?php
			    $a = new Area('Project 5 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap last">';
					$a->display($c);
					echo '</div>';
				} 
			?>
			
			<?php
			    $a = new Area('Project 6 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					echo '<div class="project-wrap">';
					$a->display($c);
					echo '</div>';
				} 
			?>
		</div>
				
		<?php
			$a = new Area('Work Closing Content');
			$a->display($c);
		?>
	</div>
	
	<div class="section banner light">
		<div class="content">
			<?php
			    $a = new Area('Banner 2 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>
	
	<div class="section banner">
		<div class="content">
			<?php
			    $a = new Area('Banner 3 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>

		
<?php $this->inc('elements/footer.php'); ?>