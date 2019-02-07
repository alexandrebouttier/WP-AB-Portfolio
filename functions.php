<?php
// Chargement des scripts
function lgmac_scripts()
{
    wp_enqueue_style('lgmac_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lgmac_animateCSS', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap'), '1.0.0', 'all');
   // wp_enqueue_script('lgmac_particle', get_template_directory_uri() . '/js/particles.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_wow_js', get_template_directory_uri() . '/js/wow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_app_js', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lgmac_scripts');
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'menu' ),
) );
function lgmac_setup()
{
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'lgmac_setup' ,'lgmac_admin_script');



function get_technos(){
 if(get_field('projet_technos')){

    $techno = preg_split("/[\s,]+/", get_field('projet_technos'));
    $nb_technos =  count($techno);
    for ($i = 0; $i < $nb_technos; $i++)
    { 
        ?>
<span class="mr-2 badge badge-primary" style="padding: 1em;"><?php echo $techno[$i];?> </span>
<?php
    }
 }
    
}