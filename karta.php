<?php 
$dbh = new PDO('mysql:dbname=u0695697_367bs;host=localhost', 'root', 'usbw');

// Запись с `id` = 1
$sth = $dbh->prepare("SELECT * FROM `objects` WHERE `id` = 1");
$sth->execute();
$object = $sth->fetch(PDO::FETCH_ASSOC);
$area = 1 / 111;
$cord = explode(',', $object['point']);

$sth = $dbh->prepare("SELECT * FROM `objects` WHERE `id` <> {$object['id']} AND SUBSTRING_INDEX(`point`, ',', 1) BETWEEN {$cord[0]} - {$area} AND {$cord[0]} + {$area} AND SUBSTRING_INDEX(`point`, ',', -1) BETWEEN {$cord[1]} - {$area} AND {$cord[1]} + {$area} ORDER BY `name`");
$sth->execute();
$list = $sth->fetchAll(PDO::FETCH_ASSOC);
 ?>
<!--  <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af44f5a38f31989a09ab8b907caaebe37869503b674f1223fa2be7f890607f8b1&amp;width=895&amp;height=690&amp;lang=ru_RU&amp;scroll=true"></script> -->
<!DOCTYPE html>
<html class="no-js" lang="">
  <head>
  	<meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Activetrase</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 		
        <!-- Place favicon.ico in the root directory -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/style.css">
    <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU" type="text/javascript"></script>
  </head>
 
  <body>
  	  <div id="loader-wrapper">
            <div class="logo"></div>
            <div id="loader">
            </div>
        </div>
        <!-- end preloader -->
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
<!-- Start Header Section -->
<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="row1">
			<div class="col-lg-3 col-md-3 col-sm-12">
				<div class="lft_hd">
					<a href="glav.php"><img src="img/logo.jpg" alt=""/></a>
				</div>
			</div>			
			<div class="col-lg-9 col-md-9 col-sm-12">
				<div class="rgt_hd">					
					<div class="main_menu">
						<nav id="nav_menu">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							</button>	
						<div id="navbar">
							<ul>
								<li><a class="page-scroll" href="glav.php">Главная</a></li> 
							<li><a href="#">Топ 10 мест<i class="page-scroll"></i></a></li>
							
								<li><a href="#tm_sec">Карта активного отдыха<i class="fa fa-angle-down"></i></a>
									<ul>
										<li><a class="page-scroll" href="karta.php">Скалолазание</a></li>
										<li><a class="page-scroll" href="karta2.php">Дайвинг</a></li>
										<li><a class="page-scroll" href="karta3.php">Кайтинг</a></li>
									</ul>
								</li>
								<li><a class="page-scroll" href="#tstm_sec">О нас</a></li>
								<li><a class="page-scroll" href="#lts_sec">Экскурсии</a></li>
								<li><a class="page-scroll" href="#pricing_sec">Добавление места</a></i></li>
								<li><a href="index.php">Выход</a></li>
							</ul>
							 						
							
						</div>		
						</nav>			
					</div>					
						
				</div>
			</div>	
			<!-- <div class="profilename">
				fdsf
			</div> -->
		</div>	
	</div>	
</header>


      <div id="map" style=" margin: 0 auto; margin-top: 10%; width: 95%; height:700px">
      	<center><div class="big" style="margin-bottom: 30px; width: 100%">Active Lifestyle</div></center>
     <script type="text/javascript">
ymaps.ready(init);
function init() {
    var myMap = new ymaps.Map("map", {
        center: [<?php echo $object['point']; ?>],
        zoom: 16
    }, {
        searchControlProvider: 'yandex#search'
    });

    var myCollection = new ymaps.GeoObjectCollection(); 

    // Добавим метку красного цвета.
    var myPlacemark = new ymaps.Placemark([
        <?php echo $object['point']; ?>
    ], {
        balloonContent: '<?php echo $object['name']; ?>'
    }, {
        preset: 'islands#icon',
        iconColor: '#ff0000'
    });
    myCollection.add(myPlacemark);

     // Добавим найденные метки.
    <?php foreach ($list as $row): ?>
    var myPlacemark = new ymaps.Placemark([
        <?php echo $row['point']; ?>
    ], {
        balloonContent: '<?php echo $row['name']; ?>'
    }, {
        preset: 'islands#icon',
        iconColor: '#0000ff'
    });
    myCollection.add(myPlacemark);
    <?php endforeach; ?>

    myMap.geoObjects.add(myCollection);
    
    // Сделаем у карты авто масштаб чтобы были видны все метки.
    myMap.setBounds(myCollection.getBounds(),{checkZoomRange:true, zoomMargin:9});
}
</script> 

</div>
<!-- start footer Section -->
<footer id="ft_sec" style="margin-top: 30px;">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="ft">						
					<ul>
						<li><a href=""><i class="fa fa-facebook"></i></a></li>
						<li><a href=""><i class="fa fa-twitter"></i></a></li>
						<!-- <li><a href=""><i class="fa fa-dribbble"></i></a></li>
						<li><a href=""><i class="fa fa-rss"></i></a></li>
						<li><a href=""><i class="fa fa-flickr"></i></a></li>
						<li><a href=""><i class="fa fa-pinterest"></i></a></li> -->
						<!-- <li><a href=""><i class="fa fa-linkedin"></i></a></li> -->
						<li><a href=""><i class="fa fa-skype"></i></a></li>
						<li><a href=""><i class="fa fa-google"></i></a></li>
					</ul>					
				</div>
				<ul class="copy_right">
					<li>&copy;Active Lifestyle 2019</li>
				</ul>					
			</div>	
		</div>
	</div>
</footer>
<!-- End footer Section -->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="js/vendor/jquery-1.11.2.min.js"></script>

<script src="js/isotope.pkgd.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/appear.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/showHide.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/plugins.js"></script>
<!-- Google Map js -->
        <script src="https://maps.googleapis.com/maps/api/js"></script>
		
<script src="js/main.js"></script>

<script src="js/showHide.js" type="text/javascript"></script>

<script type="text/javascript">

$(document).ready(function(){


   $('.show_hide').showHide({			 
		speed: 1000,  // speed you want the toggle to happen	
		easing: '',  // the animation effect you want. Remove this line if you dont want an effect and if you haven't included jQuery UI
		changeText: 1, // if you dont want the button text to change, set this to 0
		showText: 'View',// the button text to show when a div is closed
		hideText: 'Close' // the button text to show when a div is open
					 
	}); 


});

</script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>

<script>

  //Hide Overflow of Body on DOM Ready //
$(document).ready(function(){
    $("body").css("overflow", "hidden");
});

// Show Overflow of Body when Everything has Loaded 
$(window).load(function(){
    $("body").css("overflow", "visible");        
    var nice=$('html').niceScroll({
	cursorborder:"10",
	cursorcolor:"#00AFF0",
	cursorwidth:"10px",
	boxzoom:true, 
	autohidemode:true
	});

});
</script>

  </body>
</html>