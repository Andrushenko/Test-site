<?php 
require_once ('config.php');
    if(isset($_POST['enter'])){
       $password = md5($_POST['password']);
       $login = $_POST['login'];
       $sql_login = "SELECT `id_user` FROM `users` WHERE `login`='$login' AND `password` ='$password'"; 
  $result_login = $mysqli->query($sql_login);
while($po = mysqli_fetch_assoc($result_login)){
    $po1 = $po['id_user'];
  }
  $row_login = $result_login->num_rows;
  if($row_login != 0)
  {
  	$_SESSION['id'] = $po1;
    $prob = $_SESSION['id']; 
    header('Location: http://new-sima/glav.php');
    ?>
     <center><?php echo 'Вы успешно авторизировались. Желаю удачи в покупке товаров'; ?></center><?php
    
  }
                              }
 ?>

<!DOCTYPE html>
<html>
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
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main2.css">
</head>
<body>

<header class="main_menu_sec navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="lft_hd">
                    <a href="index.html"><img src="img/logo.jpg" alt=""/></a>
                </div>
            </div>              
        </div>  
    </div>  
</header>
<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="img/img1.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" method="post">
                    <span class="login100-form-title">
                        Авторизация
                    </span>
                     <h3 class="italic"><?php if(isset($_POST['enter'])){ if($row_login == 0){echo "Неверный логин или пароль";}} ?></h3>
                    </br>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="login" placeholder="Login">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="enter">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-136">
                        <a class="txt2" href="registration.php">
                            Зарегистрироваться
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
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