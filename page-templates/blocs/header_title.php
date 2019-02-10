<?php
/**
 * Template Name: Bloc header titre
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<?php 
            if (get_field('page_header_texte')) {
                $padding= "3em"; 
            }else{
                $padding = "4.5em";
            };
            if (current_user_can('manage_options')) {
                $marginTop = "0em";
            }else{
            $marginTop = "4.4em";
            };  
    ?>
<section class="page-header" style="padding:<?php echo $padding;?>;margin-top:<?php echo $marginTop;?>;">


    <div class="container">
        <h1 class="wow bounceInRight animated">
            <?php 
if ( 'projet' == get_post_type() ) {
           echo '<i class="fas fa-tag red mr-3"></i>';
       }  ?><?php echo get_the_title(); ?>
        </h1>
        <?php if (get_field('page_header_texte')): ?>
        <p class="wow bounceInRight animated">
            <?php the_field('page_header_texte');?>
        </p>
        <?php endif;?>
    </div>
</section>

