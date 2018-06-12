<!DOCTYPE html>
<html lang="en">
  <head>
  <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="../css/login.css">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.css">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../css/responsive.css">
	<link rel="stylesheet" href="../css/bootstrap.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  </head>
  <body>
    <?php include('header-area.php');?>
    <?php include('branding-area.php');?>
    <?php include('mainmenu-area.php');?>
	
  <div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">Login</a>
      <a href="#" id="signup-box-link">Sign Up</a>
    </div>
    <div class="social-login">
      <a href="#">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
      <a href="#">
        <i class="fa fa-google-plus fa-lg"></i>
        log in with Google
      </a>
    </div>
    <form class="email-login">
      <div class="u-form-group-login">
        <input type="text" placeholder="Username"/>
      </div>
      <div class="u-form-group-login">
        <input type="password" placeholder="Password"/>
      </div>
      <div class="u-form-group-login">
        <button>Log in</button>
      </div>
      <div class="u-form-group-login">
        <a href="#" class="forgot-password">Forgot password?</a>
      </div>
    </form>
    <form class="email-signup">
      <div class="u-form-group-login">
        <input type="text" placeholder="Username"/>
      </div>
      <div class="u-form-group-login">
        <input type="password" placeholder="Password"/>
      </div>
      <div class="u-form-group-login">
        <input type="password" placeholder="Confirm Password"/>
      </div>
      <div class="u-form-group-login">
        <button>Sign Up</button>
      </div>
    </form>
  </div>
</body>
<script>
$(document).ready(function () {
$(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});
});
</script>
</html>