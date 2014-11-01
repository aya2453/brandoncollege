<?php
/**
 * The Header template for Brandoncollege
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Brandon College
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ); ?>/images/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-114x114.png">

  <!--[if lt IE 9]> 
  <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
  <![endif]-->
  <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr.js"></script>
  
	<?php wp_head(); ?>
</head>
<body	<?php body_class(); ?>>
  <div id="page">
    <!--topbar-->
    <div class="topbar-row">
      <div class="container">
        <div class="topbar-inner clear">
          <div class="topbar-contact left mobile-full clear">
          <span><i class="icon-phone"></i>(415)-391-5711</span><span><i class="icon-envelope"></i>info@brandoncollege.com</span>
          </div>
          <ul class="topbar-sns right mobile-full">
            <li><a class="icon-twitter" href="" target="_blank"></a></li>
            <li><a class="icon-facebook" href="" target="_blank"></a></li>
            <li><a class="icon-google" href="" target="_blank"></a></li>
            <li><a class="icon-flickr" href="" target="_blank"></a></li>
          </ul>
        </div>
      </div>
    </div>
    <!--topbarEND-->
    <!--header-->
    <header id="header-row">
    <div class="container-nonflow">
      <div class="head-inner-wrap clear">
        <div class="logo col-2 left mobile-full"><h1></h1></div>
        <nav class="nav-wrap right mobile-full">
          <div class="menu-button">MENU</div>
          <ul class="globalnav clear">
            <li><a href="index.html">Home</a></li>
            <li><a href="pages/course.html">Courses</a>
              <ul class="sub-menu">
                <li><a href="">Intensive English</a></li>
                <li><a href="">TOEFL Preparation</a></li>
                <li><a href="">Business English</a></li>
                <li><a href="">General English</a></li>
                <li><a href="">Cambridge Course</a></li>
                <li><a href="">Communication Skills</a></li>
                <li><a href="">Pravate Classes</a></li>
              </ul>
            </li>
            <li><a href="pages/school.html">School</a></li>
            <li><a href="">Housing</a>
              <ul class="sub-menu">
                <li><a href="">Residence Clubs</a>
                  <ul>
                    <li><a href="">Vantaggio Garland</a></li>
                    <li><a href="">Vantaggio Abigail</a></li>
                    <li><a href="">Vantaggio Jefferson</a></li>
                    <li><a href="">The Ansonia</a></li>
                    <li><a href="">The Kenmore</a></li>
                  </ul>
                </li>
                <li><a href="">Homestay</a></li>
                <li><a href="">Apartments</a></li>
                <li><a href="">Hotels</a></li>
                <li><a href="">Housing Rate</a></li>
              </ul>
            </li>
            <li><a href="">Student Life</a></li>
            <li><a href="">Enroll Now</a></li>
            <li><a href="">Support</a>
              <ul class="sub-menu">
                <li><a href="">Visa Info</a></li>
                <li><a href="">Service</a></li>
              </ul>
            </li>
            <li><a href="">Contact</a></li>
          </ul>
        </nav>
      </div>
    </div>
    </header>
    <!--headerEND-->
