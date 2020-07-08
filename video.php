<?php include("auth.php");?>
<?php
if( ! $_SESSION)
{
    session_start();
} 
include_once 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Surfit Discover New Websites ">
    <meta name="keywords" content="Surfit, Discover, Music, Games, Videos, Fun">
    <meta name="author" content="Dhruv Pandya, Jay A Patel, Jay K Patel">

    <link rel='shortcut icon' type='image/x-icon' href='images/icon.png' />

    <title>Surfit</title>

    <link href="css/metro.css" rel="stylesheet">
    <link href="css/metro-icons.css" rel="stylesheet">
    <link href="css/metro-responsive.css" rel="stylesheet">

    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <script src="js/metro.js"></script>
	    <style type="text/css">
@media screen and (min-width: 980px) {
    .a2a_floating_style.a2a_default_style { display: none; }
</style>
<style type="text/css">
@media screen and (max-width: 980px) {
    .a2a_floating_style.a2a_vertical_style { display: none; }
</style>
	
    <style>
        html, body {
            height: 100%;
        }
        body {
		 overflow-y:hidden;
        }
        .page-content {
            padding-top: 3.125rem;
            min-height: 100%;
            height: 100%;
        }
        .table .input-control.checkbox {
            line-height: 1;
            min-height: 0;
            height: auto;
        }

        @media screen and (max-width: 800px){
            #cell-sidebar {
                flex-basis: 52px;
            }
            #cell-content {
                flex-basis: calc(100% - 52px);
            }
        }
    </style>

    <script>
        function pushMessage(t){
            var mes = 'Info|Implement independently';
            $.Notify({
                caption: mes.split("|")[0],
                content: mes.split("|")[1],
                type: t
            });
        }

        $(function(){
            $('.sidebar').on('click', 'li', function(){
                if (!$(this).hasClass('active')) {
                    $('.sidebar li').removeClass('active');
                    $(this).addClass('active');
                }
            })
        })
		
	  </script>
</head>
<body class="bg-steel">
	
	<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_vertical_style" style="left:0px; top:220px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
<script async src="https://static.addtoany.com/menu/page.js"></script>
<div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; left:50%; margin-left:-100px;">
			<a class="a2a_button_facebook"></a>
			<a class="a2a_button_whatsapp"></a>
			<a class="a2a_button_twitter"></a>
			<a class="a2a_button_linkedin"></a>
    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
</div>
	
    <div class="app-bar fixed-top darcula" data-role="appbar">
        <a class="app-bar-element branding" id="btn">Surfit</a>
        <span class="app-bar-divider"></span>
        <ul class="app-bar-menu">
            <li>
                <a href="" class="dropdown-toggle">Category</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="game.php">Games</a></li>
                    <li><a href="music.php">Music</a></li>
                    <li><a href="news.php">News</a></li>
				    <li><a href="shop.php">Shop</a></li>
                    <li><a href="video.php">Video</a></li>
					<li class="divider"></li>
                    <li><a href="index.php">Random</a></li>
                    </li>
                </ul>
            </li>
            <li>
                <a href="about.php">About</a>

            </li>
        </ul>
        <div class="app-bar-element place-right">
            <span class="dropdown-toggle"><span class="mif-cog"></span> <?php echo $_SESSION['usr_name']; ?></span>
            <div class="app-bar-drop-container padding10 place-right no-margin-top block-shadow fg-dark" data-role="dropdown" data-no-close="true" style="width: 220px">
                <ul class="unstyled-list fg-dark">
                    <li><a href="logout.php" class="fg-white3 fg-hover-yellow">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="page-content">
        <div class="flex-grid no-responsive-future" style="height: 100%;">
            <div class="row" style="height: 100%">
				
                <div class="cell auto-size padding20 bg-white" id="cell-content">
            
					<iframe id="frame" src="video-dp.php" frameborder="0" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:60px;left:0px;right:0px;bottom:0px" height="100%" width="100%" ></iframe>
					
					
					<script>
						var cat1 = [
							"http://www.break.com/",
							"http://www.viewster.com/",
							"http://digg.com/video",
							"http://www.bing.com/videos/search?q=vidoes&FORM=HDRSC3",
							"http://www.inbflat.net/12/",
							"http://beta.playback.fm/pop/2015/1/mark-ronson-featuring-bruno-mars/uptown-funk",
							"http://www.teachertube.com/",
							"http://neverendingplaylist.com/hardwell#&song=feat-jonathan-mendelsohn-echo-official-music-video&pos=1",
							"http://www.metacafe.com/"
						];

						var myFrame = document.getElementById("frame");
					
						function getRandomUrl(myFrame) {
							var index = Math.floor(Math.random()*cat1.length);
							var url = cat1[index];
							myFrame.src = url;
							}

						btn.addEventListener("click", function() {
						getRandomUrl(myFrame); 
    
						});
					</script>
					
					
                </div>
            </div>
        </div>
    </div>
</body>
</html>	