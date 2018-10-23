<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/masthead.php'); ?>

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
				echo '<div class="project-wrap">';
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
		
		<?php
		    $a = new Area('Project 7 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Project 8 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Project 9 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Project 10 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Project 11 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Project 12 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
	</div>
</div>

<div class="section banner">
	<div class="content">
		<h2>More Work</h2>
	</div>
</div>	

<div class="section work more">
	<div class="clearfix">
		<?php
		    $a = new Area('Secondary Project 1 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 2 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 3 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 4 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 5 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 6 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 7 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
		
		<?php
		    $a = new Area('Secondary Project 8 Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				echo '<div class="project-wrap">';
				$a->display($c);
				echo '</div>';
			} 
		?>
	</div>
</div>

<?php 
	$a = new Area('Footer Callout Content');
	if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
		echo '<div class="section ctabanner">';
			$a->display($c);
		echo '</div>';
	}
?>
		
<?php $this->inc('elements/footer.php'); ?>
