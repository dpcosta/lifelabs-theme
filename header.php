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
                    <img id="logo" src="<?php echo( get_template_directory_uri() ); ?>/img/logo-menu.png">
                </a>
            </div>

            <?php
                $menu_args = array( 
                    'menu' => 'primary-menu', 
                    'menu_id' => 'primary-menu',
                    'menu_class' => 'nav navbar-nav',
                    'container_class' => 'collapse navbar-collapse navbar-right navbar-main-collapse'
                );
                wp_nav_menu( $menu_args ); 
            ?>
        </div>
        <!-- /.container -->
    </nav>

	<main>
