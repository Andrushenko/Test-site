<?php 
require_once ('config.php');
$prob = $_SESSION['id'];
if($prob === ""){
	 header('Location: http://localhost/new-sima/error404.html');
	}
 ?>
}
<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Activetrase</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script><![endif]-->
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
<!-- End Header Section -->

<!-- start slider Section -->
<section id="slider_sec">
	<div class="container">
		<div class="row">
			<div class="slider">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>Красивые места</h1>
							<p>Здесь каждый может спокойно отдохнуть и наслаждаться природой</p>
						  </div>						
						</div>
					</div>					
					<div class="item">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We are Creative</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>						
						</div>
					</div>					
					<div class="item ">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We Have Greate Team</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>						
						</div>
					</div>			
				  </div>

				  <!-- Controls -->
				  <a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
		</div>			
	</div>	
</section>
		<center><div class="big"><?php echo $prob; ?>Actve Lifestyle</div></center>
<!-- End slider Section -->

                           <?php
                           
        $page=1;
        $id=1;
        if (isset($_GET['page'])){
        $page = $_GET['page'];
      }
      if (isset($_GET['id'])){
        $id = $_GET['id'];
      }

     
        //счетчик для страниц(с какой строки в бд выводить данные)
        $limit = ($page - 1) * 6;
        $arr = array();
        //формируем массив из 6 сообщений
        if ($result = $mysqli->query('SELECT * FROM `space` ORDER BY `id_space` ASC LIMIT '.$limit.', 6')) {
           // while( $row = $result->fetch_assoc() ){ 
                //заполнение массива сообщений
             while($row = mysqli_fetch_assoc($result)){

  ?>
<br>
 <div class="product-wrap">
  <div class="product-item">
    <?php echo '<img src = img/'.$row['photo'].'>';?>
    <div class="product-buttons">
    	<form method="post">
      <a href="" name="space" class="button" type="submit">Просмотр места</a>
      </form>
    </div>
  </div>
  <div class="product-title">
    <a href=""><?php echo $row['namespace'];?></a>
    <span class="product-price"><?php if($result2 = $mysqli->query("SELECT * FROM `space` WHERE `climbing`= 1 AND `namespace`= '".$row['namespace']."'")){
    	while($row2 = mysqli_fetch_assoc($result2)){
    		echo "Скалолазание";
    	}
    	

    }
    if($result3 = $mysqli->query("SELECT * FROM `space` WHERE `kiting`= 1 AND `namespace`= '".$row['namespace']."'")){
    	while($row3 = mysqli_fetch_assoc($result3)){
    		echo "Кайтинг";
    	}
     }

     if($result3 = $mysqli->query("SELECT * FROM `space` WHERE `diving`= 1 AND `namespace`= '".$row['namespace']."'")){
    	while($row3 = mysqli_fetch_assoc($result3)){
    		echo "Дайвинг";
    	}
     }
    	?></span>
  </div>
</div>
<!--   <script>
              var priceList = {
  "001" : {"id" : "001", "subid" : {}, "name" : "IPhone 5", "price" : "20500"},
  "002" : {"id" : "002", "subid" : {}, "name" : "IPad MINI", "price" : "10500"}
  </script>
              -->                    
                                     <?php 
  } 
            $result->close(); 
        }
        
                //получаем количество записей в таблице и определяем количество страниц
        if ($result = $mysqli->query('SELECT * FROM `space`')) {
            $total = $result->num_rows; 
            $total = intval($total/6)+1;
            }
       $mysqli->close(); 
        ?>
      

<!-- start about Section -->
<section id="abt_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>ABOUT</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p>Mauris luctus aliquet nunc quis consectetur. Curabitur elit massa, consequat vel velit sit amet, scelerisque hendrerit mi. Cras pellentesque sem turpis, quis interdum mi sagittis a. Donec mattis porttitor eleifend</p>
				</div>
			</div>			
		</div>
	</div>
</section>

<!-- start our team Section -->
<section id="tm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>О нас</h1>
					<div id="shrift">Компания Active Lifestyle</div>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="all_team">
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>													
				</div>			
			</div>
		</div>
	</div>
</section>
<!-- End our team Section -->

<!-- start our teastimonial Section -->
<section id="tstm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">
					
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>what people say?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>						
				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Clien Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- shura deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Awesome Support SIMA</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- kumara deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Theme Feature great</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- dhera deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Non conflict</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>	
					
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- End our teastimonial Section -->


<!-- start Latest post Section -->
<section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Latest Blog</h1>
					<h2>WE’RE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img2.jpg?10828543012475550494" alt=""/>
					<h2>How to fix your bug</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="single.html">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img3.jpg?16122351990094232768" alt=""/>
					<h2>Pellentesque nibh libero</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823" alt=""/>
					<h2>pharetra eu tempor vel</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>
			<div class="post_btn">
				<div class="hover_effect_btn" id="hover_effect_btn">
					<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
				</div>
			</div>			

		</div>
	</div>
</section>
<!-- End Latest post Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="pagination">
			 <!--======= PAGINATION =========-->
                       <ul class="pagination animate fadeInUp" data-wow-delay="0.4s">
                       <?php
                       $nazad = $_GET['page']-1;
                       $vpered = $_GET['page']+1;
                       $g = '<';
                       $j = '>';     
                ?>
             
              <?php
              if($nazad>0){ 
                       echo '<li><a href="glav.php?page='.$nazad.'">'.$g.'</a></li>';
                   }
               for ($i=1;$i<$total+1;$i++) 
        {

echo '<li><a href="glav.php?page='.$i.'">'.$i.'</a></li>';

        
     }
      
                   if($vpered!=$i){ 
       echo ' <li><a href="glav.php?page='.$vpered.'">'.$j.'</a></li>';
        } 
    ?>
    	</div>
			
            </ul>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Contact Info</h1>
					<div id="shrift">Если возникли вопросы или предложения напишите нам</div>
				</div>			
			</div>		
			<div class="col-sm-6"> 
				<div id="cnt_form">
					<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
						<div class="form-group">
						<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
						</div> 
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
						</div> 
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
					</form> 
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<li><i class="fa fa-facebook"></i><p>121 King Street, Melbourne Victoria 3000 Australia</p></li>
						<li><i class="fa fa-envelope"></i><p>contact@info.com</p></li>
						<li><i class="fa fa-phone"></i><p>+0987654321 (+012345678)</p></li>
					</ul>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End contact us  Section -->

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
