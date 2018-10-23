<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>

<?php $this->inc('elements/masthead.php'); ?>
	
<div class="section generic">
	<div class="content">
		<h3><?php print $c->getCollectionName(); ?></h3>
		<?php echo $c->getAttribute('full_description'); ?>
		<a class="btn-generic" href="/careers/apply">APPLY</a>
	</div>
</div>
	
<?php $this->inc('elements/footer.php'); ?>
