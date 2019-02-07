<?php
/**
 * Template Name: Loop Projet
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * 
 */
get_template_part( 'page-templates/blocs/header_title' ); 

?>
<div class="container">

    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-6 wow fadeInUp animated">
            <img class="img-fluid" src="<?php the_field('projet_image_thumb');?>" />

        </div>

        <div class="col-lg-6 wow fadeInUp animated">
            <span class="badge badge-warning" style="padding: 1em; font-size: 0.8em;">Projet En cours</span>
            <h2>Description du projet:</h2>
            <?php the_content(); ?>
            <h2>Technologies utilisés:</h2>
            <?php the_field('projet_technos'); ?> <br>
            <?php if (get_field('projet_lien')) {
                ?>
            <a rel="noopener noreferrer" target="_blank" href="<?php the_field('projet_lien'); ?>">
                <button class="mt-4 btn btn-primary">Voir le projet</button></a><?php
            }?>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>