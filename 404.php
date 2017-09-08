<?php /* Template Name: Newsletter */ ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="Site Life Labs">
    <meta name="author" content="Life Labs">

    <title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>

    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo( get_template_directory_uri() ); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo( get_template_directory_uri() ); ?>/style.css" rel="stylesheet">
</head>
<body>
    <div class="container newsletter">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img src="<?php echo( get_template_directory_uri() ); ?>/img/404.png" class="img-responsive">
        </a>
    </div>
</body>
</html>