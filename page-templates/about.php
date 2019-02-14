<?php
/**
 * Template Name: Page Apropos
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 */

get_header();
?>

<?php get_template_part( 'page-templates/blocs/header_title' ); ?>



<section class="section-about">
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-lg-6 wow fadeInUp animated">
                <div class="text-center">
                    <img class="photo" src="<?php the_field('apropos_photo');?>" />
                </div>
                <h2>Mes compétences</h2>
                <?php 


                $args = array(  'post_type' => 'competence','meta_key'=> 'valeur_competence','orderby'=> 'meta_value');
                query_posts($args); ?>
                <!-- the loop -->
                <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

                <div class="text-center"><?php the_title();?> <?php the_field('valeur_competence');?>%</div>
                <div class="progress">
                    <div class="progress-bar bg-primary" role="progressbar"
                        aria-valuenow="<?php the_field('valeur_competence');?>" aria-valuemin="0" aria-valuemax="100"
                        style="width: <?php the_field('valeur_competence');?>%;"></div>
                </div>
                <?php endwhile; wp_reset_query(); endif; ?>

                <div class="bloc-btn-cv"><a rel="noopener noreferrer" target="_blank"
                        href="<?php the_field('lien_cv');?>"><button class="btn btn-info"><i
                                class="fas fa-file-alt mr-2"></i>Mon CV</button></a></div>
            </div>




            <div class="col-lg-6 wow fadeInUp animated">
                <div class="presentation">
                    <?php the_content();?>
                </div>
            </div>
        </div>
        <?php endwhile;   ?>
    </div>

</section>



<!-- // Fin Home Services-->
<?php get_footer();
?>