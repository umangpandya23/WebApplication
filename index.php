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
	.tops{top:60px; }
</style>
<style type="text/css">
@media screen and (max-width: 980px) {
    .a2a_floating_style.a2a_vertical_style { display: none; }
	.tops{top:45px; }
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
            
					<iframe id="frame" src="hello.php" frameborder="0" class="tops" style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;left:0px;right:0px;bottom:0px" height="100%" width="100%" ></iframe>
					
					
					<script>
						var cat1 = [
							"http://canvasrider.com/tracks/704709",
							"http://www.drawastickman.com/index.htm",
							"http://hakim.se/",
							"http://lab.hakim.se/trail/02/",
							"http://www.sinuousgame.com/",
							"http://anericreation.com/",
							"http://saladific.com/",
							"http://www.alagrand.com/",
							"http://www.jabong.com/clearance-sale/",
							"http://www.shopclues.com/fashion.html",
							"http://www.whattodowhenbored.ca/2014/03/unethical-life-hacks-get-you-ahead-wrong-way.html",
							"http://indiatoday.intoday.in/breakingnews.html",
							"http://design-milk.com/manhattan-micro-loft-by-specht-harpman-architects/",
							"http://custom.crn.com/crn360/printers/",
							"http://www.firstpost.com/",
							"http://www.break.com/",
							"http://www.viewster.com/",
							"http://digg.com/video",
							"http://www.bing.com/videos/search?q=vidoes&FORM=HDRSC3",
							"http://www.inbflat.net/12/",
							"http://beta.playback.fm/pop/2015/1/mark-ronson-featuring-bruno-mars/uptown-funk",
							"http://www.teachertube.com/",
							"http://neverendingplaylist.com/hardwell#&song=feat-jonathan-mendelsohn-echo-official-music-video&pos=1",
							"http://www.metacafe.com/",
							"http://soundrown.com/",
							"http://www.22tracks.com/",
							"http://instamp3s.com/top-india/",
							"http://everyonesmixtape.com/#/mix/F3r9qYR1fMmG/4",
							"http://instamp3s.com/top-world/",
							"http://musiclisten.online/player.php?fid=papuvlVeZg8&file_name=Clean%20Bandit%20Rockabye%20Ft%20Sean%20Paul%20And%20Anne%20Marie%20Official%20Video",
							"http://musicmegaboxen.net/song/170142-the_lazy_song/",
							"http://www.zumoplayer.com/",
							"http://www.folomojo.com/indias-other-daughters/",
							"http://theawesomedaily.com/20-unethical-life-hacks-you-desperately-want-to-try/",
							"http://www.playr.org/games/page",
							"http://balldroppings.com/js/",							
							"http://www.hindustantimes.com/india-news/",
							"http://electronics360.globalspec.com/article/8585/video-watch-elon-musk-s-crazy-car-transportation-concept",
							"http://infographics.fastcompany.com/magazine/161/creative-life.html",
							"http://www.topnews.in/",
							"http://indiatoday.intoday.in/section/120/1/top-stories.html",
							"http://indianexpress.com/",
							"http://shopping.rediff.com/",
							"http://www.limeroad.com/",
							"http://www.fashionandyou.com/",
							"http://www.yepme.com/",
							"http://www.styletag.com/",
							"http://yebhi.com/",
							"http://findingho.me/",
							"http://lab.hakim.se/trail/01/",
							"http://browserquest.mozilla.org/",
							"http://littlealchemy.com/",
							"http://www.yvoschaap.com/chainrxn/",
							"http://gabrielecirulli.github.io/2048/",
							"http://retro-arcade.com/games/mariobros/",
							"http://musictonic.com/",
							"http://beta.playback.fm/pop/2015/1/mark-ronson-featuring-bruno-mars/uptown-funk",
							"http://www.eitb.eus/eu/gaztea/musika-online/4584748/ed-sheeran-shape-of-you/",
							"http://emp3z.site/mp4download/It-Ain-T-Me-Kygo-Selena-Gomez.html",
							"http://slither.io/",
							"http://montoyaindustries.com/nomorekings/",
							"http://www.playr.org/games/page/36",
							"http://www.mathsisfun.com/games/reaction-time.html",
							"http://kolor.moro.es/",
							"http://www.ifun4free.com/Marbles/marbles.html",
							"http://worldofsolitaire.com/",
							"http://hubincred.com"
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