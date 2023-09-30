<?php
require_once ('config.php');
if(isset($_POST['enter'])){
       $password = md5($_POST['password']);
       $login = $_POST['login'];
       $email = $_POST['email'];
       if($login!= "" AND $password!= "" AND $email!= "" AND filter_var($email, FILTER_VALIDATE_EMAIL) !== false){
       	$sql_login = "SELECT * FROM `users` WHERE `login`='$login' AND `password` ='$password'"; 
  $result_login = $mysqli->query($sql_login);
  $row_login = $result_login->num_rows;
		  if($row_login == 0)
		  {
		       	$sql= "INSERT INTO `users`(`id_user`, `login`, `password`, `email`) VALUES (NULL, '$login', '$password', '$email')";
		       $result = $mysqli->query($sql);
		       
		  }
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

				<form class="login100-form validate-form" method="post" action="">
					<span class="login100-form-title">
						Регистрация
					</span>

					<div class="wrap-input100 validate-input">
						<span id="check_login"></span>
						<input class="input100" type="text" name="login" placeholder="Login" onblur="checkLogin(this.value)" />
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

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<span id="message"></span>
						<input id="email" class="input100" type="text" name="email" placeholder="Email" onblur="ValidMail(this.value)">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="enter">
							Зарегистрироваться
						</button>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php">
							Авторизоваться
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
				<script type="text/javascript">
  /* Функция, создающая экземпляр XMLHTTP */
  function getXmlHttp() {
    var xmlhttp;
    try {
      xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
      try {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      } catch (E) {
        xmlhttp = false;
      }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
      xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
  }
  function checkLogin(login) {
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', 'check_login.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем тип содержимого
    xmlhttp.send("login=" + encodeURIComponent(login)); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
      if (xmlhttp.readyState == 4) { // Ответ пришёл
        if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
          if (xmlhttp.responseText) document.getElementById("check_login").innerHTML = "Логин занят!";
          else document.getElementById("check_login").innerHTML = "Логин свободен!";
        }
      }
    };
  } 

  function ValidMail(email) {
    var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    var myMail = document.getElementById('email').value;
    var valid = re.test(myMail);
    if (valid) output = 'Адрес эл. почты введен правильно!';
    else output = 'Адрес электронной почты введен неправильно!';
    document.getElementById('message').innerHTML = output;
    return valid;
}
</script>
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