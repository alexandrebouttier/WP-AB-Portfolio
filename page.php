<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
get_template_part( 'page-templates/blocs/header_title'); 
?>

<div class="container wow fadeInUp animated">
    <div class="row">
        <div class="col-lg-12">
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>