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

<h1>PAGE PHP </h1>
<div class="container">
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

<?php
 /* Run the loop to output the posts.
 * If you want to overload this in a child theme then include a file
 * called loop-index.php and that will be used instead.
 */
    get_template_part( 'loop', 'category' );
?>
<?php get_footer(); ?>