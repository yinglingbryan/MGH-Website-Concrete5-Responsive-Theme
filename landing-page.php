<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/lp_masthead.php'); ?>

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

<?php $a1 = new Area('Banner 2 Left Content'); ?>
<?php $a2 = new Area('Banner 2 Right Content'); ?>

<?php if( $a1->getTotalBlocksInArea($c) > 0 || $a2->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){ ?>
<div class="section banner split" style="padding-top:10px;">
	<div class="content">
		<div class="left-content">
			<?php
			$a1->display($c);
			?>
		</div>
		<div class="right-content">
			<?php	    
			$a2->display($c);
			?>
		</div>
	</div>
</div>
<?php } ?>


<div class="section clients">
	<div class="content">

		<?php $a = new Area('Clients Intro Content'); ?>
		<?php if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){ ?>
		<div class="edit-wrap">
		<?php		    
			$a->display($c);
		?>
		</div>
		<?php } ?>
		
		<div class="landing-page client-list clearfix">

			<?php /* */ ?>

			<img src="http://mghus.com/application/files/1514/8130/0592/CaliforniaTortilla.png" alt="California Tortilla">
			<img src="http://mghus.com/application/files/8314/8130/0597/GreatAmericanCookies.png" alt="Great American Cookies">
			<img src="http://mghus.com/application/files/5314/8130/0595/HotDogonaStick.png" alt="Hot Dog on a Stick">
			<img src="http://mghus.com/application/files/9514/8130/0596/MaggieMoos.png" alt="MaggieMoo's Ice Cream and Treatery">
			<img src="http://mghus.com/application/files/2214/8130/0603/MarbleSlab.png" alt="Marble Slab Creamery">
			<img src="http://mghus.com/application/files/5314/8130/0612/Pretzelmaker.png" alt="Pretzelmaker">
			<img src="http://mghus.com/application/files/5915/1371/5808/RoundTablePizza.png" alt="Round Table Pizza">
			<img src="http://mghus.com/application/files/4314/8130/0592/GreeneTurtle.png" alt="Greene Turtle">
			<img src="http://mghus.com/application/files/8615/2578/5680/Marcos_Pizza.png" alt="Marco's Pizza">
			<img src="http://mghus.com/application/files/1115/2578/5680/Papa_Johns.png" alt="Papa John's">

			<?php /* */ ?>

		</div>

	</div>
</div>

<div class="section banner">
	<div class="content">
		<?php
		    $a = new Area('Banner Content 3');
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

<?php 
	$a = new Area('Footer Callout Content');
	if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
		echo '<div class="section ctabanner">';
			$a->display($c);
		echo '</div>';
	}
?>
		
<?php $this->inc('elements/footer.php'); ?>