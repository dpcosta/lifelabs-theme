<?php
/**
 * lifelabs functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lifelabs
 */

if ( ! function_exists( 'lifelabs_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lifelabs_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on lifelabs, use a find and replace
	 * to change 'lifelabs' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'lifelabs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'lifelabs' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'lifelabs_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );


	//Adicionar novo tipo de conteúdo Depoimentos
	$nomeSingular = 'Depoimento';
    $nomePlural = 'Depoimentos';
    $description = 'Depoimentos de Life Labs';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar novo ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'editor',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-thumbs-up',
        'supports' => $supports
    );

    register_post_type( 'depoimento', $args);  


	//Adicionar novo tipo de conteúdo Dia de Coach
	$nomeSingular = 'Tirinha - Dia de Coach';
    $nomePlural = 'Tirinhas';
    $description = 'Coleção com as tirinhas do Dia de Coach';

    $labels = array(
        'name' => $nomePlural,
        'name_singular' => $nomeSingular,
        'add_new_item' => 'Adicionar nova ' . $nomeSingular,
        'edit_item' => 'Editar ' . $nomeSingular
    );

    $supports = array(
        'title',
        'thumbnail'
    );

    $args = array(
        'labels' => $labels,
        'description' => $descricao,
        'public' => true,
        'menu_icon' => 'dashicons-id-alt',
        'supports' => $supports
    );

    register_post_type( 'tirinha', $args);  

}
endif;
add_action( 'after_setup_theme', 'lifelabs_setup' );

//Adicionando suporte para campo Quem Somos nas configurações gerais do blog
add_action( 'admin_init', 'quem_somos_init' );
function quem_somos_init() {

    /* Create settings section */
    add_settings_section(
        'quem-somos-id',                   // Section ID
        'Quem Somos - Seção',  // Section title
        'quem_somos_section_description', // Section callback function
        'general'                          // Settings page slug
    );
 
    /* Create settings field */
    add_settings_field(
        'quem-somos-field-id',       // Field ID
        'Quem Somos',       // Field title 
        'quem_somos_field_callback', // Field callback function
        'general',                    // Settings page slug
        'quem-somos-id'               // Section ID
    );

    /* Register Settings */
    register_setting(
        'general',             // Options group
        'quem-somos-name'      // Option name/database
    );
}

/* Sanitize Callback Function */
function quem_somos_sanitize( $input ){
    return $input;
}
 
/* Setting Section Description */
function quem_somos_section_description(){
    echo wpautop( "Texto institucional sobre a Life Labs." );
}
 
/* Settings Field Callback */
function quem_somos_field_callback(){
	/*$content = get_option( 'quem-somos-name' );
	$settings = array(
		"textarea_name" => "quem-somos-name"
	);
    wp_editor( $content, 'quem-somos-input', $settings );*/
    ?>
    <label for="quem-somos-input">
        <textarea id="quem-somos-input" name="quem-somos-name" cols="120" rows="6"><?php echo(get_option( 'quem-somos-name' )); ?></textarea> 
    </label>
    <?php
} 


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lifelabs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lifelabs_content_width', 640 );
}
add_action( 'after_setup_theme', 'lifelabs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lifelabs_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lifelabs' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'lifelabs' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lifelabs_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lifelabs_scripts() {
	wp_enqueue_style( 'lifelabs-style', get_stylesheet_uri() );

	wp_enqueue_script( 'lifelabs-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'lifelabs-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'lifelabs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
