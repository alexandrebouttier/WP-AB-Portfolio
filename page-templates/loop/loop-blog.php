<?php
/**
 * Template Name: Loop blog
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * 
 */
?>
<div class="col-lg-9">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<!-- article-->
<article class="article_single">
    <header>
        <h1 class="post-title"><?php the_title(); ?></h1>
        <p class="post-info">
            Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>
    </header>

    <div class="post-content">
        <?php the_content(); ?>
    </div>
    <div class="post-comments">
        <?php comments_template(); ?>
    </div>

    <?php endwhile; ?>
    <?php endif; ?>
</article>
<!-- // article-->
</div>
<!-- // col-lg-9-->

<!-- col-lg-3-->
<div class="col-lg-3">
<?php get_sidebar(); ?>
</div>
<!-- // col-lg-3-->