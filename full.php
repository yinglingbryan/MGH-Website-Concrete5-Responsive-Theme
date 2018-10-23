<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/masthead.php'); ?>

<div class="section generic">
	<div class="content">
		<?php
		    $a = new Area('Generic Content');
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
