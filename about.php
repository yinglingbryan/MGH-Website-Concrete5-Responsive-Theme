<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php'); 
?>
	
<?php $this->inc('elements/masthead.php'); ?>

<?php /*
<div class="section video">
	<?php
		$videoPoster = $c->getAttribute('video_poster');
		$videoAsset = $c->getAttribute('video_asset');
	 ?>
		
	<?php if( $videoPoster != "" && $videoAsset != "" ){ ?>	
		<video poster="<?php echo $videoPoster->getRelativePath(); ?>" id="video-1" preload="none">
		    <source src="<?php echo $videoAsset->getRelativePath(); ?>" type="video/mp4">
		</video>
	
		<a class="video-btn"></a>
		
	<?php } else { ?>
		<img style="width:100%;" src="<?= $view->getThemePath() ?>/css/images/ui-add-video.jpg" />
	<?php } ?>
</div>
*/ ?>

<div class="section generic">
	<div class="content">
		<div class="col-group clearfix">
			<?php
			    $a = new Area('Generic Content Column 2');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Fallback/Guide
					echo '<h2>H2 Content</h2>';
					echo '<p>Nunc auctor bibendum eros. Maecenas porta accumsan mauris.</p>';
				}
			?>
		</div>
	</div>
</div>

<div class="section services">
	<div class="content">
		<div class="edit-wrap">
		<?php
		    $a = new Area('Services Intro Content');
			if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
				$a->display($c);
			} else {
				// Help
				echo '<h2>No Content - H2 Recommended</h2>';
			}
		?>
		</div>
		
		<div class="clearfix">
			<div class="group">
				<?php
				    $a = new Area('Service Content 1');
					$a->display($c);
				?>
				
				<?php 
				/*
				<h5>Strategy</h5>
				<p>
					Strategic Planning<br />
					Account Management<br />
					Qualitative Research<br />
					Quantitative Research<br />
					Brand Positioning<br />
					Web Strategy<br />
					Content Strategy
				</p>
				*/
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 2');
					$a->display($c);
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 3');
					$a->display($c);
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 4');
					$a->display($c);
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 5');
					$a->display($c);
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 6');
					$a->display($c);
				?>
			</div>
		
			<div class="group">
				<?php
				    $a = new Area('Service Content 7');
					$a->display($c);
				?>
			</div>
			
			<?php
			    $a = new Area('Additional Content');
				$a->display($c);
			?>
		</div>
		
	</div>
</div>

<div class="section clients">
	<div class="content">
		<div class="edit-wrap">
		<?php
		    $a = new Area('Clients Intro Content');
			$a->display($c);
		?>
		</div>
		
		<div class="client-list clearfix">
			<?php
			    $a = new Area('Client List Content');
				$a->display($c);
			?>
			
			<?php /*
			<img src="<?= $view->getThemePath() ?>/css/images/logo-black-decker.jpg">
			<img src="<?= $view->getThemePath() ?>/css/images/logo-black-decker.jpg">
			<img src="<?= $view->getThemePath() ?>/css/images/logo-black-decker.jpg">
			<img src="<?= $view->getThemePath() ?>/css/images/logo-black-decker.jpg">
			<img src="<?= $view->getThemePath() ?>/css/images/logo-black-decker.jpg">
			*/ ?>
		</div>
	</div>
</div>

<div class="section banner">
	<div class="content">
		<div class="edit-wrap">
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
</div>

<div class="section team">
	<?php
	    $a = new Area('Team Content');
		$a->display($c);
	?>
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
