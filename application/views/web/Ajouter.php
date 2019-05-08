<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cariera.co/templates/movify/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 05:18:38 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">

<meta name="description" content="Movify - Movies, Series & Cinema HTML Template">
<meta name="keywords" content="movies, series, online streaming, html template, cinema html template">
<meta name="author" content="GnoDesign">

<?php include 'header.php';?>


<section class="page-header overlay-gradient" style="background: url(assets/images/posters/movie-collection.jpg);">
<div class="container">
<div class="inner">
<h2 class="title">Contact Us</h2>
<ol class="breadcrumb">
<li><a href="index-2.html">Home</a></li>
<li>Contact Us</li>
</ol>
</div>
</div>
</section>


<main class="contact-page ptb100">
<div class="container">
<div class="row">

<div class="col-md-4 col-sm-12">
<h3 class="title">Info</h3>
<div class="details-wrapper">

</div>
</div>


<div class="col-md-8 col-sm-12">
<h3 class="title">Ajouter Video</h3>

<form action="<?php echo base_url();?>Inserer" data-ajax="false" enctype="multipart/form-data" accept-charset="utf-8"  method="POST">

<div id="contact-result"></div>


<div class="form-group">
<input class="form-control input-box"   type="text" name="name" placeholder="Your Name" autocomplete="off">


<div class="sort-by-select">
<select name ="langue" style="width:250px;" class="chosen-select-no-single">
  <option value="">Toute langue</option>
<option value="VOSTFR">VOSTFR</option>
<option value="VF">VF</option>
</select>
</div>
<div class="sort-by-select">
<select name="categorie" style="width:250px;" class="chosen-select-no-single">
    <option value="">Toute Categorie</option>
  <?php foreach ($categorie as $value) {

  ?>
    <option value="<?php echo $value['categorie'] ?>"><?php echo $value['categorie'] ?></option>
<?php } ?>
</select>
</div>
<in>
<div>
  <input style="width:250px;"   type="text" name="dateajout" placeholder="dateajout" id="datepicker">
  <input style="width:250px;"   type="text" name="datesortie" placeholder="datesortie"  id="datepicker1">
</div>
<h6>Description </h6>
<div>
  <input style="width:250px;height:100px;"   type="text" name="description" placeholder="description" id="">

</div>
<h6>Notes </h6>
<div>
  <input style="width:250px;"   type="text" name="note" placeholder="Note" id="">

</div>
<h6>Lien Trailer </h6>
<div>
  <input style="width:250px;"   type="text" name="lien" placeholder="trailer" id="">

</div>
<h6>Lien Streaming </h6>
<div>
  <input style="width:250px;"   type="text" name="streaming" placeholder="streaming" id="">

</div>
<h6>Poster </h6>

<input type="file" name="upload" />

<h6>Background </h6>

<input type="file"  name="background" value="background" />

</div>

<div class="form-group text-center">
<button class="btn btn-main btn-effect" type="submit">Ajouter</button>
</div>
</form>

</div>

</div>
</div>
</main>


<footer class="footer1 bg-dark">

<div class="footer-widget-area ptb100">
<div class="container">
<div class="row">

<div class="col-lg-3 col-md-6 col-sm-12">
<div class="widget widget-about">

<img src="<?php echo base_url();?>assets/images/logo.svg" alt="logo" class="logo">

<img src="<?php echo base_url();?>assets/images/logo-white.svg" alt="white logo" class="logo-white">
<p class="nomargin">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque. Praesentium suscipit provident explicabo dignissimos nostrum numquam deserunt earum accusantium et fugit.</p>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-12">
<div class="widget widget-links">
<h4 class="widget-title">Useful links</h4>
<ul class="general-listing">
<li><a href="#">about movify</a></li>
<li><a href="#">blog</a></li>
<li><a href="#">forum</a></li>
<li><a href="#">my account</a></li>
<li><a href="#">watch list</a></li>
</ul>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-12">
<div class="widget widget-blog">
<h4 class="widget-title">latest news</h4>
<ul class="blog-posts">
<li><a href="#">blog post 1</a><small>januar 13, 2018</small></li>
<li><a href="#">blog post 2</a><small>januar 13, 2018</small></li>
<li><a href="#">blog post 3</a><small>januar 13, 2018</small></li>
</ul>
</div>
</div>


<div class="col-lg-3 col-md-6 col-sm-12">
<div class="widget widget-social">
<h4 class="widget-title">follow us</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, ducimus, atque.</p>

<ul class="social-btns">

<li>
<a href="#" class="social-btn-roll facebook">
<div class="social-btn-roll-icons">
<i class="social-btn-roll-icon fa fa-facebook"></i>
<i class="social-btn-roll-icon fa fa-facebook"></i>
</div>
</a>
</li>

<li>
<a href="#" class="social-btn-roll twitter">
<div class="social-btn-roll-icons">
<i class="social-btn-roll-icon fa fa-twitter"></i>
<i class="social-btn-roll-icon fa fa-twitter"></i>
</div>
</a>
</li>

<li>
<a href="#" class="social-btn-roll google-plus">
<div class="social-btn-roll-icons">
<i class="social-btn-roll-icon fa fa-google-plus"></i>
<i class="social-btn-roll-icon fa fa-google-plus"></i>
</div>
</a>
</li>

<li>
<a href="#" class="social-btn-roll instagram">
<div class="social-btn-roll-icons">
<i class="social-btn-roll-icon fa fa-instagram"></i>
<i class="social-btn-roll-icon fa fa-instagram"></i>
</div>
</a>
</li>
</ul>

</div>
</div>

</div>
</div>
</div>


<div class="footer-copyright-area ptb30">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="d-flex">
<div class="links">
<ul class="list-inline">
<li class="list-inline-item"><a href="#">Privacy & Cookies</a></li>
<li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
<li class="list-inline-item"><a href="#">Legal Disclaimer</a></li>
<li class="list-inline-item"><a href="#">Community</a></li>
</ul>
</div>
<div class="copyright ml-auto">All Rights Reserved by <a href="#">Movify</a>.</div>
</div>
</div>
</div>
</div>
</div>

</footer>

</div>


<div class="general-search-wrapper">
<form class="general-search" role="search" method="get" action="#">
<input type="text" placeholder="Type and hit enter...">
<span id="general-search-close" class="ti-close toggle-search"></span>
</form>
</div>


<div id="login-register-popup" class="small-dialog zoom-anim-dialog mfp-hide">

<div class="signin-wrapper">
<div class="small-dialog-headline">
<h4 class="text-center">Sign in</h4>
</div>
<div class="small-dialog-content">

<form id="cariera_login" method="post">
<p class="status"></p>
<div class="form-group">
<label for="username">Username or Email *</label>
<input type="text" class="form-control" id="username" name="username" placeholder="Your Username or Email *" />
</div>
<div class="form-group">
<label for="password">Password *</label>
<input type="password" class="form-control" id="password" name="password" placeholder="Your Password *" />
</div>
<div class="form-group">
<div class="checkbox pad-bottom-10">
<input id="check1" type="checkbox" name="remember" value="yes">
<label for="check1">Keep me signed in</label>
</div>
</div>
<div class="form-group">
<input type="submit" value="Sign in" class="btn btn-main btn-effect nomargin" />
</div>
</form>

<div class="bottom-links">
<span>
Not a member?
<a class="signUpClick">Sign up</a>
</span>
<a class="forgetPasswordClick pull-right">Forgot Password</a>
</div>
</div>
</div>


<div class="signup-wrapper">
<div class="small-dialog-headline">
<h4 class="text-center">Sign Up</h4>
</div>
<div class="small-dialog-content">

<form id="cariera_registration" action="#" method="POST">
<p class="status"></p>
<div class="form-group">
<label for="movify_user_login">Username</label>
<input name="movify_user_login" id="movify_user_login" class="form-control" type="text" />
</div>
<div class="form-group">
<label for="movify_user_email">Email</label>
<input name="movify_user_email" id="movify_user_email" class="form-control" type="email" />
</div>
<div class="form-group">
<label for="password">Password</label>
<input name="movify_user_pass" id="movify_password" class="form-control" type="password" />
</div>
<div class="form-group">
<input type="submit" class="btn btn-main btn-effect nomargin" value="Register" />
</div>
</form>

<div class="bottom-links">
<span>
Already have an account?
<a class="signInClick">Sign in</a>
</span>
<a class="forgetPasswordClick pull-right">Forgot Password</a>
</div>
</div>
</div>


<div class="forgetpassword-wrapper">
<div class="small-dialog-headline">
<h4 class="text-center">Forgotten Password</h4>
</div>
<div class="small-dialog-content">

<form id="forget_pass_form" action="#" method="post">
<p class="status"></p>
<div class="form-group">
<label for="password">Email Address *</label>
<input type="email" name="user_login" class="form-control" id="email3" placeholder="Email Address *" />
</div>
<div class="form-group">
<input type="submit" name="submit" value="Get New Password" class="btn btn-main btn-effect nomargin" />
</div>
</form>

<div class="bottom-links">
<a class="cancelClick">Cancel</a>
</div>
</div>
</div>

</div>


<div id="backtotop">
<a href="#"></a>
</div>

<script src="<?php echo base_url();?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.ajaxchimp.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.mmenu.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.inview.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.countTo.min.js"></script>
<script src="<?php echo base_url();?>assets/js/jquery.countdown.min.js"></script>
<script src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?php echo base_url();?>assets/js/headroom.js"></script>
<script src="<?php echo base_url();?>assets/js/custom.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script>
var $j = jQuery.noConflict();

$j(function(){$("#datepicker").datepicker();});
</script>
<script>
var $j = jQuery.noConflict();

$j(function(){$("#datepicker1").datepicker();});
</script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script>if (window.module) module = window.module;</script>

</body>

<!-- Mirrored from cariera.co/templates/movify/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 05:18:39 GMT -->
</html>
