<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lifelabs
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="description" content="Site Life Labs">
<meta name="author" content="Life Labs">

<title>Life Labs - Sua Melhor Versão</title>

<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Bootstrap Core CSS -->
<link href="<?php echo( get_template_directory_uri() ); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?php echo( get_template_directory_uri() ); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700" rel="stylesheet">

<!-- Theme CSS -->
<link href="<?php echo( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">


<?php 
/**
	wp_head(); 
*/
?>
</head>

<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <!--<i class="fa fa-play-circle"></i> <span class="light">Start</span> Bootstrap-->
                    <img id="logo" src="<?php echo( get_template_directory_uri() ); ?>/img/logo-menu.png">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#quem-somos">Quem Somos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#depoimentos">Depoimentos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#dia-de-coach">Dia de Coach</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<main>
