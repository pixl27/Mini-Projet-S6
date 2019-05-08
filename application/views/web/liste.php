<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from cariera.co/templates/movify/movie-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 05:18:39 GMT -->
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
<h2 class="title">Tout vos films preferer</h2>
<ol class="breadcrumb">
<li><a href="index-2.html">Home</a></li>
<li>Tout vos films preferer</li>
</ol>
</div>
</div>
</section>


<main class="ptb100">
<div class="container">

 <div class="row mb50">
<div class="col-md-6">

<div class="layout-switcher">
<a href="movie-list.html" class="list"><i class="fa fa-align-justify"></i></a>
<a href="movie-grid.html" class="grid active"><i class="fa fa-th"></i></a>
</div>
</div>
<div class="col-md-6">

<div class="sort-by">
<div class="sort-by-select">
<select class="chosen-select-no-single">
<option>Default Order</option>
<option>Featured</option>
<option>Top Viewed</option>
<option>Top Rated</option>
<option>Newest</option>
<option>Oldest</option>
</select>
</div>
</div>

</div>
</div>


<div class="row">
<?php foreach ($listefacture as $video) { ?>
<div class="col-lg-4 col-md-6 col-sm-12">
<div class="movie-box-2 mb30">
<div class="listing-container">

<div class="listing-image">

<div class="play-btn">
<a href="<?php echo $video['Lien'];?>" class="play-video">
<i class="fa fa-play"></i>
</a>
</div>

<div class="buttons">
<a href="#" data-original-title="Rate" data-toggle="tooltip" data-placement="bottom" class="like">
<i class="icon-heart"></i>
</a>
<a href="#" data-original-title="Share" data-toggle="tooltip" data-placement="bottom" class="share">
<i class="icon-share"></i>
</a>
</div>

<div class="stars">
<div class="rating">
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star"></i>
<i class="fa fa-star-o"></i>
</div>
</div>

<img src="<?php echo base_url();?>assets/images/<?php echo $video['Image'];?>" alt="">
</div>

<div class="listing-content">
<div class="inner">
<h3 class="title"><?php echo $video['Nom'];?></h3>
<p><?php echo $video['Description'];?></p>
<form action="" method="get">
  <input type="hidden" value="<?php echo $video['Id'];?>" name="idvideo"/>
<a href="<?php echo base_url();?>DetailVideo-<?php echo $video['Id'];?>" class="btn btn-main btn-effect">details<a/>
</form>
</div>
</div>
</div>
</div>
</div>
<?php } ?>
</div>
<div class="row">
<div class="col-md-12 col-sm-12">
<nav class="pagination">
<ul>

  <form action="<?php echo base_url();?>RechercheAvance" method="post">
  <input type="hidden" value="<?php echo $offset+3?>" name="offset">
  <input type="hidden" value="<?php echo $datedebut?>" name="datedebut">
  <input type="hidden" value="<?php echo $datefin?>" name="datefin">
  <input type="hidden" value="<?php echo $prixmin?>" name="notemin">
  <input type="hidden" value="<?php echo $prixmax?>" name="notemax">
  <input type="hidden" value="<?php echo $langue?>" name="langue">
  <input type="hidden" value="<?php echo $categorie?>" name="categorie">

  <input style="display:inline-block;"   class="btn btn-primary"  type="submit" value="next">
  </form>
  <form action="<?php echo base_url();?>RechercheAvance" method="post">
  <input type="hidden" value="<?php echo $offset-3?>" name="offset">
  <input type="hidden" value="<?php echo $datedebut?>" name="datedebut">
  <input type="hidden" value="<?php echo $datefin?>" name="datefin">
  <input type="hidden" value="<?php echo $prixmin?>" name="notemin">
  <input type="hidden" value="<?php echo $prixmax?>" name="notemax">
  <input type="hidden" value="<?php echo $langue?>" name="langue">
  <input type="hidden" value="<?php echo $categorie?>" name="categorie">

  <?php if($offset != 0){ ?>
  <input style="display:inline-block;vertical-align:top;"  class="btn btn-primary" type="submit" value="prev">
  <?php } ?>
  </form>







</ul>
</nav>
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
</body>

<!-- Mirrored from cariera.co/templates/movify/movie-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 05:18:39 GMT -->
</html>
