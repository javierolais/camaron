<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <title>Animated Portfolio Gallery with jQuery</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="Portfolio Gallery with jQuery" />
        <meta name="keywords" content="jquery, portfolio, gallery, image gallery, photos, sliding, thumbnails, navigation"/>
		<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Quicksand_Book_400.font.js" type="text/javascript"></script>
		<script type="text/javascript">
			Cufon.replace('h1,h2');
		</script>
        <style type="text/css">
			h1.title{
				position:absolute;
				right:20px;
				top:0px;
				font-weight:normal;
				text-transform:uppercase;
				font-size:56px;
				color:#fff;
				background:transparent url(bg.png) repeat top left;
				padding:0px 15px 10px 15px;
			}
			h1.title span{
				font-size:14px;
				display:block;
}
			span.reference{
				font-family:Arial;
				position:fixed;
				right:10px;
				bottom:10px;
				font-size:10px;
			}
			span.reference a{
				color:#333;
				text-transform:uppercase;
				text-decoration:none;
				margin-left:20px;
			}
		</style>
    </head>

    <body>
		<h1 class="title"><?php echo "php"; ?> <span>Codrops Tutorial</span></h1>

		
		<div class="pg_content">
			<div id="pg_title" class="pg_title">
				<?php
					include ("text/title.txt");
				?>
			</div>
			<div id="pg_preview">
			<img class="pg_thumb" style="display:block;z-index:9999;" src="images/medium/1.jpg" alt="images/large/1.jpg"/>
			<?php
				$directory="images/medium";
				$dirint = dir($directory);
				while (($archivo = $dirint->read()) !== false)
				{
					if ($archivo !== "1.jpg" && $archivo != ".." && $archivo != "."){
						echo '<img class="pg_thumb" src="'.$directory."/".$archivo.'" alt="images/large/'.$archivo.'"/>'."\n";
					}
				}
				$dirint->close();
			?>
			</div>
			
			<div id="pg_desc1" class="pg_description">
			<?php
				include ("text/desc.txt")
			?>
			</div>
			<div id="pg_desc2" class="pg_description">
			<?php
				include ("text/desc2.txt")
			?>	
				
			</div>
		</div>


		<div id="thumbContainter">
			<div id="thumbScroller">
				<div class="container">
					<?php
						$directory="images/thumbs";
						$dirint = dir($directory);
						while (($archivo = $dirint->read()) !== false)
						{
							if ($archivo != ".." && $archivo != "."){
								echo 	'<div class="content">
										<div><a href="#"><img src="'.$directory."/".$archivo.'" alt="" class="thumb" /></a></div>
										</div>';
							}
						}
						$dirint->close();
					?>
				</div>
			</div>
		</div>
		<div id="overlay"></div>
        <div>
            <span class="reference">
				<a href="http://dzineblog.com/2010/03/30-high-quality-free-website-templates-to-download.html" target="_blank">Template Collection by DzineBlog</a>
				<a href="http://tympanus.net/codrops/2010/11/14/animated-portfolio-gallery/">back to the Codrops tutorial</a>
			</span>
		</div>

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<script type="text/javascript">
			$(function() {
				//index of current item
				var current				= 0;
				//speeds / ease type for animations
				var fadeSpeed			= 400;
				var animSpeed			= 600;
				var easeType			= 'easeOutCirc';
				//caching
				var $thumbScroller		= $('#thumbScroller');
				var $scrollerContainer	= $thumbScroller.find('.container');
				var $scrollerContent	= $thumbScroller.find('.content');
				var $pg_title 			= $('#pg_title');
				var $pg_preview 		= $('#pg_preview');
				var $pg_desc1 			= $('#pg_desc1');
				var $pg_desc2 			= $('#pg_desc2');
				var $overlay			= $('#overlay');
				//number of items
				var scrollerContentCnt  = $scrollerContent.length;
				var sliderHeight		= $(window).height();
				//we will store the total height
				//of the scroller container in this variable
				var totalContent		= 0;
				//one items height
				var itemHeight			= 0;
				
				//First let's create the scrollable container,
				//after all its images are loaded
				var cnt		= 0;
				$thumbScroller.find('img').each(function(){
					var $img 	= $(this);
					$('<img/>').load(function(){
						++cnt;
						if(cnt == scrollerContentCnt){
							//one items height
							itemHeight = $thumbScroller.find('.content:first').height();
							buildScrollableItems();
							//show the scrollable container
							$thumbScroller.stop().animate({'left':'0px'},animSpeed);
						}
					}).attr('src',$img.attr('src'));
				});
				
				//when we click an item from the scrollable container
				//we want to display the items content
				//we use the index of the item in the scrollable container
				//to know which title / image / descriptions we will show
				$scrollerContent.bind('click',function(e){
					var $this 				= $(this);
					
					var idx 				= $this.index();
					//if we click on the one shown then return
					if(current==idx) return;
					
					//if the current image is enlarged,
					//then we will remove it but before
					//we animate it just like we would do with the thumb
					var $pg_large			= $('#pg_large');
					if($pg_large.length > 0){
						$pg_large.animate({'left':'350px','opacity':'0'},animSpeed,function(){
							$pg_large.remove();
						});
					}
					
					//get the current and clicked items elements
					var $currentTitle 		= $pg_title.find('h1:nth-child('+(current+1)+')');
					var $nextTitle 			= $pg_title.find('h1:nth-child('+(idx+1)+')');
					var $currentThumb		= $pg_preview.find('img.pg_thumb:eq('+current+')');
					var $nextThumb			= $pg_preview.find('img.pg_thumb:eq('+idx+')');
					var $currentDesc1 		= $pg_desc1.find('div:nth-child('+(current+1)+')');
					var $nextDesc1 			= $pg_desc1.find('div:nth-child('+(idx+1)+')');
					var $currentDesc2 		= $pg_desc2.find('div:nth-child('+(current+1)+')');
					var $nextDesc2 			= $pg_desc2.find('div:nth-child('+(idx+1)+')');
					
					//the new current is now the index of the clicked scrollable item
					current		 			= idx;
					
					//animate the current title up,
					//hide it, and animate the next one down
					$currentTitle.stop().animate({'top':'-50px'},animSpeed,function(){
						$(this).hide();
						$nextTitle.show().stop().animate({'top':'25px'},animSpeed);
					});
					
					//show the next image,
					//animate the current to the left and fade it out
					//so that the next gets visible
					$nextThumb.show();
					$currentThumb.stop().animate({'left': '350px','opacity':'0'},animSpeed,function(){
						$(this).hide().css({
							'left'		: '250px',
							'opacity'	: 1,
							'z-index'	: 1
						});
						$nextThumb.css({'z-index':9999});
					});
					
					//animate both current descriptions left / right and fade them out
					//fade in and animate the next ones right / left
					$currentDesc1.stop().animate({'left':'205px','opacity':'0'},animSpeed,function(){
						$(this).hide();
						$nextDesc1.show().stop().animate({'left':'250px','opacity':'1'},animSpeed);
					});
					$currentDesc2.stop().animate({'left':'295px','opacity':'0'},animSpeed,function(){
						$(this).hide();
						$nextDesc2.show().stop().animate({'left':'250px','opacity':'1'},animSpeed);
					});
					e.preventDefault();
				});
				
				//when we click a thumb, the thumb gets enlarged,
				//to the sizes of the large image (fixed values).
				//then we load the large image, and insert it after
				//the thumb. After that we hide the thumb so that
				//the large one gets displayed
				$pg_preview.find('.pg_thumb').bind('click',showLargeImage);
				
				//enlarges the thumb
				function showLargeImage(){
					//if theres a large one remove
					$('#pg_large').remove();
					var $thumb 		= $(this);
					$thumb.unbind('click');
					var large_src 	= $thumb.attr('alt');

					$overlay.fadeIn(200);
					//animate width to 600px,height to 500px
					$thumb.stop().animate({
						'width'	: '600px',
						'height': '500px'
					},500,function(){
						$('<img id="pg_large"/>').load(function(){
							var $largeImg = $(this);
							$largeImg.insertAfter($thumb).show();
							$thumb.hide().css({
								'left'		: '250px',
								'opacity'	: 1,
								'z-index'	: 1,
								'width'		: '360px',
								'height'	: '300px'
							});
							//when we click the large image
							//we revert the animation
							$largeImg.bind('click',function(){
								$thumb.show();
								$overlay.fadeOut(200);
								$(this).stop().animate({
									'width'	: '360px',
									'height': '300px'
								},500,function(){
									$(this).remove();
									$thumb.css({'z-index'	: 9999});
									//bind again the click event
									$thumb.bind('click',showLargeImage);
								});
								
							});
						}).attr('src',large_src);
					});
				}
				
				//resize window event:
				//the scroller container needs to update
				//its height based on the new windows height
				$(window).resize(function() {
					var w_h			= $(window).height();
					$thumbScroller.css('height',w_h);
					sliderHeight	= w_h;
				});
				
				//create the scrollable container
				//taken from Manos :
				//http://manos.malihu.gr/jquery-thumbnail-scroller
				function buildScrollableItems(){
					totalContent = (scrollerContentCnt-1)*itemHeight;
					$thumbScroller.css('height',sliderHeight)
					.mousemove(function(e){
						if($scrollerContainer.height()>sliderHeight){
							var mouseCoords		= (e.pageY - this.offsetTop);
							var mousePercentY	= mouseCoords/sliderHeight;
							var destY			= -(((totalContent-(sliderHeight-itemHeight))-sliderHeight)*(mousePercentY));
							var thePosA			= mouseCoords-destY;
							var thePosB			= destY-mouseCoords;
							if(mouseCoords==destY)
								$scrollerContainer.stop();
							else if(mouseCoords>destY)
								$scrollerContainer.stop()
							.animate({
								top: -thePosA
							},
							animSpeed,
							easeType);
							else if(mouseCoords<destY)
								$scrollerContainer.stop()
							.animate({
								top: thePosB
							},
							animSpeed,
							easeType);
						}
					}).find('.thumb')
					.fadeTo(fadeSpeed, 0.6)
					.hover(
					function(){ //mouse over
						$(this).fadeTo(fadeSpeed, 1);
					},
					function(){ //mouse out
						$(this).fadeTo(fadeSpeed, 0.6);
					}
				);
				}
			});
		</script>
    </body>
</html>