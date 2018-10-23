<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/masthead.php'); ?>
	
<div class="section generic">
	<div class="content">
		<?php
		    $a = new Area('Service Content 1');
			$a->display($c);
		?>
	</div>
</div>	

<div class="section work single">
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
	
	<div class="closing">
		<?php
			$a = new Area('Closing Content');
			$a->display($c);
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
