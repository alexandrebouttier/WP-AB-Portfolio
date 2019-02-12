<?php
// Chargement des scripts
function lgmac_scripts()
{
    wp_enqueue_style('lgmac_bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lgmac_animateCSS', get_template_directory_uri() . '/css/animate.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('lgmac_custom', get_template_directory_uri() . '/style.css', array('lgmac_bootstrap'), '1.0.0', 'all');
   // wp_enqueue_script('lgmac_particle', get_template_directory_uri() . '/js/particles.min.js', array(), '1.0.0', true);
    wp_enqueue_script('lgmac_jquery', get_template_directory_uri() . '/js/jquery-3.3.1.slim.min.js', array(), '1.0.0', true);
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

function get_statut(){
    if(get_field('projet_statut')){
        $statut = get_field('projet_statut');
        switch ($statut) {
            case "Terminer":
                $class="success";
                break;
            case "En cours":
                $class ="warning";
                break;
            case "En attente":
                $class="danger";
                break;
        }
        ?>
<span class="badge badge-<?php echo $class;?>" style="padding: 1em; font-size: 0.8em;">Projet
    <?php echo $statut; ?></span>
<?php
    }
}



 
function pagination( $args = array(), $class = 'pagination' ) {
    if ( $GLOBALS['wp_query']->max_num_pages <= 1 ) {
        return;
    }
    $args = wp_parse_args(
        $args,
        array(
            'mid_size'           => 2,
            'prev_next'          => true,
            'prev_text'          => __( '&laquo; Précédent', 'understrap' ),
            'next_text'          => __( 'Suivant &raquo;', 'understrap' ),
            'screen_reader_text' => __( 'Posts navigation', 'understrap' ),
            'type'               => 'array',
            'current'            => max( 1, get_query_var( 'paged' ) ),
        )
    );
    $links = paginate_links( $args );
    ?>

<nav aria-label="<?php echo $args['screen_reader_text']; ?>">

    <ul class="pagination">

        <?php
            foreach ( $links as $key => $link ) {
                ?>
        <li class="page-item <?php echo strpos( $link, 'current' ) ? 'active' : ''; ?>">
            <?php echo str_replace( 'page-numbers', 'page-link', $link ); ?>
        </li>
        <?php
            }
            ?>

    </ul>

</nav>

<?php
}