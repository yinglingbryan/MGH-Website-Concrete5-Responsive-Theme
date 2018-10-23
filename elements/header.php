<?php 
//namespace Application\Theme\Mgh;
use Concrete\Core\Page\Theme\Theme;
class PT extends Theme {
   protected $pThemeGridFrameworkHandle = 'bootstrap3';
   public function registerAssets() {
      $this->requireAsset('css', 'font-awesome');
      $this->requireAsset('javascript', 'jquery');
      $this->requireAsset('javascript-conditional', 'html5-shiv');
   }
}
defined('C5_EXECUTE') or die("Access Denied.");
?>
<?php
	if( $c->getCollectionID() == 1 ){	
		$classes = "home";
	} else {
		$classes = "interior";
	}
	
	// 301 Redirects
	$page_redirect = $c->getAttribute('301_Redirect');
	if( $page_redirect != '' ){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: ".$page_redirect);
		exit();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<?php 
		if( $blogMetaTitle ){
			// Custom Blog Meta
			Loader::element('header_required', array('pageTitle' => $blogMetaTitle, 'pageDescription' => $blogMetaDesc )); 
		} else {
			// Standard Meta
			Loader::element('header_required');
		}
	?>
	 
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

	<link href="<?= $view->getThemePath() ?>/js/jquery.selectBoxIt/src/stylesheets/jquery.selectBoxIt.css" rel="stylesheet" />
	<link href="<?= $view->getThemePath() ?>/js/fancybox2/source/jquery.fancybox.css?v=2.1.5" rel="stylesheet" />
	<link href="<?= $view->getThemePath() ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $view->getThemePath() ?>/css/style.css" rel="stylesheet">
	<link href="<?= $view->getThemePath() ?>/css/BY/css/BY.min.css" rel="stylesheet">
	
	<!-- C5 Add-On Dependencies -->
	<script src="<?= $view->getThemePath() ?>/js/jquery-min.js"></script>
</head>

<body id="page-<?php echo $c->getCollectionID(); ?>" class="<?php if($c->isEditMode()) { echo 'editmode'; } ?>">
	
	<?php /*
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-56W4JRG"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	*/ ?>
	
	<div class="<?= $c->getPageWrapperClass(); ?> <?php echo $classes; ?>">
		<div class="header">
			<div class="content">
				<h1 class="logo">
					<a href="/"></a>
				</h1>
				
				<div class="menu-btn">MENU</div>
				
				<div class="clear"></div>
			</div>
		</div>
		
		<div class="menu-unit">
            <?php 
				$bt_nav = BlockType::getByHandle('autonav');
				$bt_nav->controller->displayPages = 'top';
				$bt_nav->controller->orderBy = 'display_asc';                    
				$bt_nav->controller->displaySubPages = 'all';
				$bt_nav->controller->displaySubPageLevels = 'custom';
				$bt_nav->controller->displaySubPageLevelsNum = 1; 
				$bt_nav->render('templates/site_nav/view');
			?>
			
			<div class="social-nav">
			<?php
				$a = new GlobalArea('Header Social Content');
				$a->display();
			?>
			</div>
			
			<?php /*
			<ul>
				<li><a target="_blank" class="icon-facebook" href="http://facebook.com">Facebook</a></li>
				<li><a target="_blank" class="icon-instagram" href="http://instagram.com">Instagram</a></li>
				<li><a target="_blank" class="icon-twitter" href="http://twitter.com">Twitter</a></li>
				<li><a target="_blank" class="icon-youtube" href="http://youtube.com">Youtube</a></li>
				<li><a target="_blank" class="icon-linkedin" href="http://linkedin.com">Linkedin</a></li>
			</ul>
			*/ ?>
		</div>
		