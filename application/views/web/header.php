<title>Movify - Movies, Series & Cinema HTML Template</title>

<?php
header('AddType video/ogg .ogv');
header('AddType video/ogg .ogg');
header('AddType video/mp4 .mp4');
header('AddType video/webm .webm');
?>

<link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.png" type="image/x-icon">
<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/images/apple-touch-icon-iphone.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?>assets/images/apple-touch-icon-ipad.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url();?>assets/images/apple-touch-icon-iphone-retina.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url();?>assets/images/apple-touch-icon-ipad-retina.png">
<link rel="apple-touch-icon" sizes="167x167" href="<?php echo base_url();?>assets/images/apple-touch-icon-ipad-pro.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url();?>assets/images/apple-touch-icon-iphone-6-plus.png">
<link rel="icon" sizes="192x192" href="<?php echo base_url();?>assets/images/icon-hd.png">
<link rel="icon" sizes="128x128" href="<?php echo base_url();?>assets/images/icon.png">

<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/settings.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/layers.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/revolution/css/navigation.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.mmenu.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/responsive.css">


<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>

<div class="loading">
<div class="loading-inner">
<div class="loading-effect">
<div class="object"></div>
</div>
</div>
</div>


<nav id="main-mobile-nav"></nav>


<div class="wrapper">


<header class="header header-fixed header-transparent text-white">
<div class="container-fluid">

<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="index-2.html">

<img src="<?php echo base_url();?>assets/images/logo.svg" alt="logo" width="150" class="logo">

<img src="<?php echo base_url();?>assets/images/logo-white.svg" alt="white logo" width="150" class="logo-white">
</a>
<button id="mobile-nav-toggler" class="hamburger hamburger--collapse" type="button">
<span class="hamburger-box">
<span class="hamburger-inner"></span>
</span>
</button>

<div class="navbar-collapse" id="main-nav">

<ul class="navbar-nav mx-auto" id="main-menu">

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>


<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="<?php echo base_url();?>Video" >Tout les videos</a>


</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">categorie</a>

<ul class="dropdown-menu">
<?php foreach ($categoria as $value) {
  // code...
?>
<li>
<a class="dropdown-item" href="<?php echo base_url();?>Categorie-<?php echo $value['Nom']?>"><?php echo $value['Nom']?></a>
</li>
<?php } ?>
</ul>
</li>


<li class="nav-item">
<a class="nav-link" href="<?php echo base_url();?>Rechercher">Rechercher</a>
</li>
</ul>


<ul class="navbar-nav extra-nav">

<li class="nav-item">
<a class="nav-link toggle-search" href="#">
<i class="fa fa-search"></i>
</a>
</li>

<li class="nav-item notification-wrapper">
<a class="nav-link notification" href="#">
<i class="fa fa-globe"></i>
<span class="notification-count">2</span>
</a>
</li>


</ul>

</div>

</nav>

</div>
</header>
