  <?php 
require_once ('config.php');
 ?>
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
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

    </head>
<body >
     <!-- start preloader -->
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
    <div class="row">
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
                <li><a class="page-scroll" href="#pricing_sec">Добавление места</a></li>
              </ul>
                          
              
            </div>    
            </nav>      
          </div>          
            
        </div>
      </div>  
    </div>  
  </div>  
</header>
  <div class="content"> 
    
    <section class="sub-banner animate fadeInUp" data-wow-delay="0.4s">
            <div class="container">  
                    <h4>Информация о продукте</h4>
                  </div>
                </section>
    <!--======= PAGES INNER =========-->
    <section class="section-p-30px pages-in item-detail-page">
      <div class="container">
        <div class="row"> 
          <?php
       
          $sql2 = "SELECT * FROM `products` WHERE `id` ='{$_GET['id']}' ";
        $results = $mysqli->query($sql2);
        while($rows = mysqli_fetch_assoc($results)){ ?>
          <!--======= IMAGES SLIDER =========-->
        <?php echo '<div class="col-sm-6 large-detail animate fadeInLeft" data-wow-delay="0.4s"> 
          	<img class="zoom_05 img-responsive" src="images/'.$rows['img'].'" data-zoom-image="images/item-detail-img-zoom-1.jpg">
          </div>'; ?>
          
          <!--======= ITEM DETAILS =========-->
       
          <div class="col-sm-6 animate fadeInRight" data-wow-delay="0.4s">
            <div class="row">
             <?php echo '<div class="col-sm-12">
                <div class="h5">'.$rows['name'].'</div>
                <span class="price">'.$rows['price'].' руб</span> </div>';
                ?>
		                  <div class="col-sm-12">
		                  <div class="some-info no-border"> <br>
		                  <div class="in-stoke"> <i class="fa fa-check-circle"></i> На складе</div>
		                 <!--  <div class="stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>
		                  </div> -->
		              </div>
                  <h5>Описание:</h5>
		          <hr>
		    </div>
      </div>


           <?php echo '<p>'.$rows['description'].'</p>'; ?>
            <hr>
           <?php   }

?>
</div>

<!-- start footer Section -->
<footer id="ft_sec">
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
