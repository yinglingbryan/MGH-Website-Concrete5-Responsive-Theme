<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php

	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	}	
	$featuredTitle = $c->getAttribute('display_title');

	// Featured Video
	$isFeaturedVideo = $c->getAttribute('is_featured_video');
	$featuredVideo = $c->getAttribute('featured_video');
	if( $featuredVideo ){
		$featuredVideo = $featuredVideo->getURL();
		}
?>

<div class="section landing-page masthead" style="<?php if (!$isFeaturedVideo) { ?>background-image:url('<?php echo $featuredImage; ?>'); <?php } ?>max-height:650px; position:relative; overflow:hidden;">
	
	<?php if ($isFeaturedVideo) { ?>
	<video autoplay="true" loop="true" muted="true" playsinline style="position:absolute; width:100%; height:auto; z-index:1; top:50%; transform:translateY(-50%); left:0px; right:0px;">
	    <source src="<?php echo $featuredVideo; ?>">
	</video>
	<script language="text/javascript">		
		$(window).load(function() { $("video").first()[0].play(); });
	</script>
	<?php } ?>

	<div class="content" style="position:relative; z-index:2;">
		<?php if( strlen($featuredTitle) > 19 ){ ?>
			<h1 class="long"><?php print $featuredTitle; ?></h1>
		<?php } else { ?>
			<h1><?php print $featuredTitle; ?></h1>
		<?php } ?>
	</div>	
	
</div>