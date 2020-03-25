<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/><!--¨Pour la dimention de page -->
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/><!-- Codage de caractère -->
<meta name="description" content="Success Road - Étudication en ligne" />
<meta name="keywords" content="éducation, école, université, éducatif, apprendre, apprendre, enseigner, atelier" />
<meta name="author" content="Ferdous Smadhi" />

<!-- Page Title -->
<title><?php echo $title;?></title>

<!-- Favicon and Touch Icons -->
<link href="images/<?php echo $icon;?>" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set4.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <img alt="" src="images/preloaders/4.gif">
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Désactiver</div>
  </div>
  
 <header id="header" class="header">
    <div class="header-top bg-theme-colored2 sm-text-center">
      <div class="container">
        <div class="row">
          <div class="widget col-md-12">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-5">
              <li class="m-0 pl-10"> <a href="ajax-load/Connexion.php" class="text-white ajaxload-popup"><i class="fa fa-user-o mr-5 text-white"></i> Connexion /</a> </li>
              <li class="m-0 pl-0 pr-10"> 
                <a href="ajax-load/Inscription.php" class="text-white ajaxload-popup"><i class="fa fa-edit mr-5"></i>Inscription</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-white" style="z-index: 999;">
        <div class="container">
          <nav id="menuzord-right" class="menuzord default menuzord-responsive"><a href="javascript:void(0)" class="showhide" style="display: block;"><em></em><em></em><em></em></a><a class="menuzord-brand pull-left flip mt-sm-10 mb-sm-20" href="index.php"><img src="images/SuccessRoad.png" alt="logo.php"></a>
            <ul class="menuzord-menu menuzord-right menuzord-indented scrollable" style="max-height: 400px; display: none;">
              <?php if(!$authentification) { 
                if(isset($_GET['route'])) $route = strtolower($_GET['route']);
                else $route = "";
                ?>
                <li class="<?php if($route == 'centreformation') echo 'active';?>">
                  <a href="?route=centreformation#team">Centre de Formation</a>
                </li>
                <li class="<?php if($route == 'formation') echo 'active';?>">
                  <a href="#home">Formation</a>
                </li>
                <li class="<?php if($route == 'offreemploi') echo 'active';?>">
                  <a href="#home">Offre d'emploi</a>
                </li>
                <li class="<?php if($route == 'forum') echo 'active';?>">
                  <a href="#home">Forum</a>
                </li>
              <?php } else { ?>
                <li class="active"><a href="#home">Cours</a></li>
              <?php } ?>
			      </ul>
          </nav>
        </div>
      </div><div></div>
    </div>
  </header>
  <?php echo $output;?>
  
 <!-- Footer -->
  <footer id="footer" class="footer" data-bg-color="#212331">
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2017 ThemeMascot. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
				<ul class="list-inline sm-text-center mt-5 font-12">
					<li class="m-0 pl-10 pr-10"> <a href="#" class="text-white"><i class="fa fa-phone text-white"></i> 123-456-789</a> </li>
					<li>|</li>
					<li class="m-0 pl-10 pr-10"> 
					  <a href="#" class="text-white"><i class="fa fa-envelope-o text-white mr-5"></i> contact@yourdomain.com</a> 
					</li>
				</ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>