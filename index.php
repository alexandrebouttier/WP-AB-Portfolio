<?php

get_header();

    get_template_part( 'page-templates/blocs/header_title'); 
    ?>
<div class="container">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-4">
            <div class="card">

                <?php the_post_thumbnail('thumbnail', array('class' => 'card-img-top img-fluid')); ?>
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php
 get_footer();
 
 ?>