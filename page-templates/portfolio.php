<?php
/**
 * Template Name: Page Portfolio
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();?>

<?php get_template_part( 'page-templates/blocs/header_title' ); ?>

<section class="section_portfolio">
    <div class="container wow fadeInUp animated">
        <div class="row">
            <?php 
// the query to set the posts per page to 3
$date_projet = get_field('projet_date');
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array('posts_per_page' => 6, 'paged' => $paged ,   'post_type' => 'projet','meta_key'=> 'projet_date', 'orderby'	=> 'meta_value');
query_posts($args); ?>
            <!-- the loop -->
            <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
            <?php $imageThumb = get_field('projet_image_thumb');?>
            <div class="col-md-4">
                <div class="card-project">
                    <a href="<?php the_permalink(); ?>">
                        <div class="card">
                            <div class="card-projet-img" style="background: url('<?php echo $imageThumb;?>')">
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <?php endwhile; ?>


            <?php else : ?>
            <!-- No posts found -->
            <?php endif; ?>

        </div>

        <div class="row">

            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <!-- pagination --><?php 
the_posts_pagination( array(
'mid_size'  => 2,
'prev_text' => __( 'Précédent', 'textdomain' ),
'next_text' => __( 'Suivant', 'textdomain' ),
) );?>
        </div>
    </div>

    </div>

</section>

<?php get_footer();?>