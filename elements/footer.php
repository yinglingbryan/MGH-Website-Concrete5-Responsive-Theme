	  	<div class="footer trans">
	  		<div class="top">
				<div class="content">
					<div class="col1">
						<div class="inner-col-container">
						<?php
						  $a = new GlobalArea('Footer Column 1 Content');
						  $a->display();
						?>
						</div>
					</div>
					
					<div class="col2">
						<div class="subcol1">
						<div class="inner-col-container">
						<?php
						  $a = new GlobalArea('Footer Column 2 Content');
						  $a->display();
						?>
						</div>
						</div>
						<div class="subcol2">
						<div class="inner-col-container">
						<?php
						  $a = new GlobalArea('Footer Column 2b Content');
						  $a->display();
						?>
						</div>
						</div>
					</div>
					
					<div class="col3">
						<div class="inner-col-container">
						<?php
						  $a = new GlobalArea('Footer Column 3 Content');
						  $a->display();
						?>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		
			<div class="bottom">
				<div class="content">
					<?php
						$a = new GlobalArea('Footer Content');
						$a->display();
					?>
				</div>
			</div>
		</div>
	</div>
	
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300,200' rel='stylesheet' type='text/css'>
	
	<script src="<?= $view->getThemePath() ?>/js/jquery.selectBoxIt/src/javascripts/jquery.selectBoxIt.min.js"></script>
	<script src="<?= $view->getThemePath() ?>/js/fancybox2/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
		var jobSelected = "<?php echo $_GET['pos']; ?>";
	</script>
	<script src="<?= $view->getThemePath() ?>/js/scripts.js"></script>
	
	<?php Loader::element('footer_required') ?>
</body>
</html>