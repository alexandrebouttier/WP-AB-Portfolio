<?php get_header(); ?>

        <?php  
       if ( 'projet' == get_post_type() ) {
            get_template_part( 'page-templates/loop/loop-projet'); 
       } 
       else{
        get_template_part( 'page-templates/loop/loop-blog'); 
       }  
        ?>

<?php get_footer(); ?>