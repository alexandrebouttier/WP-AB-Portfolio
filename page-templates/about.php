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
            <div class="col-lg-6 wow fadeInUp animated">
                <div class="text-center">
                    <img class="photo" src="<?php the_field('apropos_photo');?>" />
                </div>
                <h2>Mes compétences</h2>
            </div>

            <div class="col-lg-6 wow fadeInUp animated">
                <div class="presentation">
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>

</section>



<!-- // Fin Home Services-->
<?php get_footer();
?>