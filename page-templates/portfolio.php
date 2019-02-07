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
            $date_projet = get_field('projet_date');
            $query = new WP_Query( array(
                 'post_type' => 'projet',
                  'meta_key'=> 'projet_date',
                 'orderby'	=> 'meta_value', ) );
                if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
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
       

            <?php endwhile; endif;wp_reset_postdata();  ?>
        </div>




    </div>
    </div>

</section>

<?php get_footer();?>