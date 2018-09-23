<?php
/**
 * Template Name: Home page
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php echo do_shortcode( '[rev_slider alias="slider1"]' ); ?>

    <?php get_template_part( 'partials/numeri' ); ?>
    <?php get_template_part( 'partials/immagine_testo' ); ?>
    <?php get_template_part( 'partials/servizi-list' ); ?>
    <?php get_template_part( 'partials/lavoriamo-list' ); ?>

<?php endwhile; ?>

<?php
    get_footer();    
?>
