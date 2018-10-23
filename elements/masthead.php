<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php
	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	}	
	$featuredTitle = $c->getAttribute('display_title');
?>

<div class="section masthead" style="background-image:url('<?php echo $featuredImage; ?>');">
	<div class="content">
		<?php if( strlen($featuredTitle) > 19 ){ ?>
			<h1 class="long"><?php print $featuredTitle; ?></h1>
		<?php } else { ?>
			<h1><?php print $featuredTitle; ?></h1>
		<?php } ?>
	</div>
</div>