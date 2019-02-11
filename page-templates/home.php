<?php
/**
 * Template Name: Page d'accueil
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
   
get_header();
?>


<!-- Début Banner-->
<div class="jumbotron"
    style="background: linear-gradient(
 rgba(0, 0, 0, 0.45), 
 rgba(0, 0, 0, 0.45)
 ), url('<?php the_field('hero_image');?>');background-size:cover;
 background-repeat:no-repeat;background-position: 0% 50%;">
    <!-- container -->
    <div class="container">
        <h1> <?php the_field('hero_titre');?></h1>
        <p class="lead"><?php the_field('hero_texte');?></p>
        <a class="btn btn-primary btn-lg" href="<?php the_field('hero_lien_bouton'); ?>"
            role="button"><?php the_field('hero_texte_bouton');?></a>
    </div>
    <!-- // container -->
</div>
<!--  // Fin Banner-->

<!-- Début Intro-->
<section class="section section_intro">
    <!-- container -->
    <div class="container">
        <h2 class="text-center">
            <?php the_field('intro_titre');?>
        </h2>
        <p class="text-center"><?php the_field('intro_texte');?></p>
    </div>
    <!-- // container -->
</section>
<!-- // Fin Intro-->


<!-- Début Home Services-->
<section class="section_home_services">
    <!-- container -->
    <div class="container">

        <div class="row justify-content-md-center wow fadeInUp animated">
            <?php
                $query = new WP_Query( array( 'post_type' => 'service' ) );

                    if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>

            <div class="col-md-4 col-lg-2 text-center">
                <img src="<?php the_field('service_image');?>" />
            </div>
            <div class="col-md-6 col-lg-4 bloc_service_texte  ">
                <h5 class="f_medium"><?php the_title(); ?></h5>
                <p><?php the_content(); ?></p>
            </div>
            <?php endwhile; endif; wp_reset_postdata(); ?>


        </div>
    </div>
    <!-- // container -->
</section>

<section class="section-recommandations wow fadeInUp animated">
    <div class="container">

        <h2 class="text-center"><?php the_field('recommandations_titre');?><i class="fas fa-quote-left ml-3 red"></i>
        </h2>
        <div class="row">

            <?php $idRotator = get_field(id_testimonials);
                echo do_shortcode(' [testimonial_rotator id = ' . $idRotator . '] ');?>
        </div>

    </div>

</section>
<section class="section_ads_presta wow fadeInUp animated">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 text-center">

                <img src="<?php the_field('ads_prestations_image');?>" />
            </div>

            <div class="col-lg-6">
                <h3 class="f-bold"><?php the_field('ads_prestations_titre');?> </h3>
                <p><?php the_field('ads_prestations_texte');?></p>
                <a class="btn btn-primary btn-lg shadow" href="/services" role="button">Voir mes prestations</a>
            </div>


        </div>

    </div>

</section>
<section class="section_recent_work wow fadeInUp animated">
    <div class="container">
        <h2 class="text-center">Réalisations récente<i class="fas fa-briefcase ml-3 red"></i></h2>
        <div class="row">
            <?php
            $date_projet = get_field('projet_date');
            $query = new WP_Query( array(
                 'post_type' => 'projet',
                  'meta_key'=> 'projet_date',
                  'posts_per_page'  => '3',
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
</section>
<div class="text-center"><a href="/a-propos"><button class="text-center btn btn-info btn-lg"
            style="margin-bottom: 2em;">En savoir plus sur moi</button></a><br><a href="/realisations"><button
            class="text-center btn btn-primary btn-lg">Voir mon Portfolio</button></a></div>

<!-- // Fin Home Services-->
<?php get_footer();
?>