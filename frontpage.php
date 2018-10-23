<?php  
	defined('C5_EXECUTE') or die("Access Denied.");
	$this->inc('elements/header.php');
	
	// Featured Image
	$featuredImage = $c->getAttribute('featured_image');
	if( $featuredImage ){
		$featuredImage = $featuredImage->getURL();
	} 
?>

	<div class="section hero" style="background-image:url('<?php echo $featuredImage; ?>');">
		<div class="intro">
			<?php
			    $a = new Area('Hero Content');
			    $a->display($c);
			?>
			
			<?php /*
			<h1>Great ideas come together</h1>
			<a href="#">FIND OUT HOW</a>
			*/ ?>
		</div>
	</div>
	
	<div class="section about">
		<div class="content">
			<?php
			    $a = new Area('About Intro Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		
			<ul class="clearfix">
				<li>
					<div class="icon">
					<?php
					    $a = new Area('Service Content 1 Icon');
						$a->display($c);
					?>
					</div>
					
					<?php
					    $a = new Area('Service Content 1');
						$a->display($c);
					?>
					
					<?php /*
					<h3>Full Service</h3>
					<p>
						We do everything in-house.Lorem ipsum dolor magna 
						erat a seduna erat ipsum dolor magna
					</p>
					*/ ?>
				</li>
				<li>
					<div class="icon">
					<?php
					    $a = new Area('Service Content 2 Icon');
						$a->display($c);
					?>
					</div>
					
					<?php
					    $a = new Area('Service Content 2');
						$a->display($c);
					?>
					
					<?php /*
					<h3>Since 1995</h3>
					<p>
						We do everything in-house.Lorem ipsum dolor magna 
						erat a seduna erat ipsum dolor magna
					</p>
					*/ ?>
				</li>
				<li>
					<div class="icon">
					<?php
					    $a = new Area('Service Content 3 Icon');
						$a->display($c);
					?>
					</div>

					<?php
					    $a = new Area('Service Content 3');
						$a->display($c);
					?>
					
					<?php /*
					<h3>Based in Bmore</h3>
					<p>
						We do everything in-house.Lorem ipsum dolor magna 
						erat a seduna erat ipsum dolor magna
					</p>
					*/ ?>
				</li>
				<li class="last">
					<div class="icon">
					<?php
					    $a = new Area('Service Content 4 Icon');
						$a->display($c);
					?>
					</div>

					<?php
					    $a = new Area('Service Content 4');
						$a->display($c);
					?>
					
					<?php /*
					<h3>Happy Employees <br />Happy Clients</h3>
					<p>
						We do everything in-house.Lorem ipsum dolor magna 
						erat a seduna erat ipsum dolor magna
					</p>
					*/ ?>
				</li>
			</ul>
		</div>
	</div>
	
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
			
			<?php /*
			<h2>Featured Work</h2>
			<a href="#">VIEW ALL</a>
			*/ ?>
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
					echo '<div class="project-wrap last">';
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
		</div>
				
		<?php
			$a = new Area('Work Closing Content');
			$a->display($c);
		?>
	</div>
	
	<div class="section banner light">
		<div class="content">
			<?php
			    $a = new Area('Banner 2 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>
	
	<div class="section blog">
		<div class="content">
			<?php
			    $a = new Area('Blog Content');
				$a->display($c);
			?>
			
			<a class="cta" href="/blog">View All Posts</a>
		</div>
	</div>
	
	<div class="section banner">
		<div class="content">
			<?php
			    $a = new Area('Banner 3 Content');
				if( $a->getTotalBlocksInArea($c) > 0 || $c->isEditMode() ){
					$a->display($c);
				} else {
					// Help
					echo '<h2>No Content - H2 Recommended</h2>';
				}
			?>
		</div>
	</div>
	
	<div class="section instagram">
		<?php
			// Instagram Feed
			function fetchInstagramData($url){
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt($ch, CURLOPT_TIMEOUT, 50);
				$result = curl_exec($ch);
				curl_close($ch);
				return $result;
			}
			
			// MGH Credentials
			$debug=$_GET["debug"];
			$result = fetchInstagramData("https://api.instagram.com/v1/users/1995005871/media/recent/?access_token=1995005871.1677ed0.2e87e3d561ff48b7a85ffd4b94c121d4");
			$result_assoc = json_decode($result,true);
			//if ($debug) var_dump($result_assoc);

					$i=0;
					while ($i<4) {

					$postType = $result_assoc['data'][$i]['type']; // either 'video' or 'image'
					$postCaption = $result_assoc['data'][$i]['caption']['text'];
					$postURL = $result_assoc['data'][$i]['link'];
					$imageURL = $result_assoc['data'][$i]['images']['standard_resolution']['url'];
					$imageWidth = $result_assoc['data'][$i]['images']['standard_resolution']['width'];
					$imageHeight = $result_assoc['data'][$i]['images']['standard_resolution']['height'];
					$videoURL = $result_assoc['data'][$i]['videos']['standard_resolution']['url'];
					$videoWidth = $result_assoc['data'][$i]['videos']['standard_resolution']['width'];
					$videoHeight = $result_assoc['data'][$i]['videos']['standard_resolution']['height'];
					$postUser = $result_assoc['data'][$i]['user']['username'];
					$postDate = date("D F j, Y, g:i a", $result_assoc['data'][$i]['created_time']);
					
					
					if ($debug) {
						echo $postType; echo "<br>";
						echo $postCaption; echo "<br>";
						echo $postURL; echo "<br>";
						echo $imageURL; echo "<br>";
						echo $imageWidth; echo "<br>";
						echo $imageHeight; echo "<br>";
						echo $videoURL; echo "<br>";
						echo $videoWidth; echo "<br>";
						echo $videoHeight; echo "<br>";
						echo $postUser; echo "<br>";
						echo $postDate; echo "<br>";
						echo "<br>"; echo "<br>";
						}				


					// automatically add an image or video to the container allong with icon,
					// prestyle image or video with a height or width = 100% attribute depending
					// on it's aspect ratio determined by the variables pulled from feed
					// container will mask the overflow and auto crop to appropriate size

					// videos will play in a chain starting when scrolled into view,
					// if another video is clicked, chain will jump to that video and continue playing,
					// if another video is hovered, currently playing video will pause, and the hovered
					// video will play from beginning.  on mouse out, the hovered video will snap back to its
					// position prior to hover, and video chain will resume

					// while videos are playing, the icon will dissapear for the playing video..
					// will not reapear while another video is hover-played

					// the @MGHMARKETING is always a link to the url of the post,
					// for image files, the entire item is a link to the url of the post


					echo '<span class="ig-post-container '.$postType.'" data-post-url="'.$postURL.'">';
						/*if ($postType == "image") */echo '<img src="'.$imageURL.'" data-true-width="'.$imageWidth.'" data-true-height="'.$imageHeight.'" />';
						if ($postType == "video") echo '<video muted="true" playsinline data-true-width="'.$videoWidth.'" data-true-height="'.$videoHeight.'"><source src="'.$videoURL.'"></video>';
						echo '<div class="post-icon '.$postType.'">&nbsp;</div>';
						echo '<div class="meta">@'.$postUser.'<span>'.$postDate.'</span></div>';
					echo '</span>';

					$i++;
					}
		?>		
		<div class="clear"></div>
	</div>
	
	<script type="text/javascript">
		// ENTER A SCRIPT TO RESIZE ALL OF THE INSTAGRAM ITEMS TO FIT THIER CONTAINERS //
		$(window).resize(function() {
				$(".ig-post-container img, .ig-post-container video").each(function() {
						parentContainer = $(this).parent();
						asset = $(this);
						if ((parentContainer.height() - asset.data("true-height")) > (parentContainer.width() - asset.data("true-width"))) {
							asset.attr("style","height:100%; width:auto;");
							} else {
							asset.attr("style","height:auto; width:100%;");
							}
					});
			});
		$(window).load(function() { 
				
				// when instagram image is clicked open url
				$(".ig-post-container.image").each(function() {
					$(this).click(function() {
						window.open($(this).data("post-url"), '_blank');
						});
					});
				// when video is clicked, play video, and add playing classes to video AND to .section.instagram
				$(".ig-post-container.video").each(function() {
					
					// when videos play all the way through, remove playing classes and reset to start frame
					$(this).find("video").first()[0].onended = function() {							
							$(this).parent().removeClass("playing");
							$(this).parent().parent().removeClass("playing");
							this.load(); // resets to start frame
							};

					$(this).click(function() {

						console.log("play video");
						console.log("if video is playing, stop video");

						// check if video is playing
						var isPlaying = $(this).hasClass("playing");


						// stop currently playing videos
						$(this).parent().find(".video.playing").each(function() {
							videoNode = $(this).find("video").first()[0];
							videoNode.pause();
							videoNode.load(); // resets to start
							$(this).removeClass("playing");
							});


						if (!isPlaying) {
							// play video (if was not currently playing)
							$(this).parent().addClass("playing");
							$(this).addClass("playing");							
							videoNode = $(this).find("video").first()[0];
							videoNode.play();
							} else {
							$(this).parent().removeClass("playing");
							}

						//console.log($(this).find("video").first()[0]);

						});
					});

			$(window).resize();
			});
	</script>

	
	<div class="section contact">
		<div class="content">
			<?php
			    $a = new Area('Contact Content');
			    $a->display($c);
			?>
			
			<?php /*
			<form id="sem-form-1" class="sem-form get-in-touch" action="#" method="post">
				
				<div class="group action">
					<h4>Let's chat about</h4>
					<select class="custom-sel">
						<option value="branding">branding</option>
						<option value="careers">careers</option>
						<option value="media">media</option>
						<option value="newbiz" selected="selected">new biz</option>
						<option value="question">questions</option>
						<option value="stategy">strategy</option>
					</select>
					
					<div class="clear"></div>
				</div>
				
				<div class="group one-third">
					<input class="text" type="text" name="name" placeholder="Your Name">
				</div>
				
				<div class="group one-third">
					<input class="text" type="text" name="email" placeholder="Your Email">
				</div>
				
				<div class="group one-third last">
					<input class="text" type="text" name="name" placeholder="Your Subject">
				</div>
				
				<div class="clear"></div>
				
				<div class="group">
					<textarea name="message" placeholder="Your Message"></textarea>
				</div>
				
				<input type="submit" value="GET IN TOUCH" class="submit">
			</form>
			*/ ?>
		</div>
	</div>
		
<?php $this->inc('elements/footer.php'); ?>
