<?php
/**
 * Template Name: Le aziende dettaglio
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
    <div class="content-le-aziende-dettaglio pb-5">
        <div class="bg-light pt-lg-5">
            <div class="container pt-lg-5 pb-5">
                <div class="d-flex row pt-5 pb-5">
                    <div class="aziende-dettaglio-testo col-12 col-lg-5">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-lg-7">
                        <?php $i = 1; if( get_field('gallery') ) { if( get_field('gallery') ) { ?>
                        <div class="gallery">        
                            <?php while( has_sub_field('gallery') ){ ?>
                                <div class="item-gallery">
                                    <?php if( get_sub_field('immagine') ) {
                                        echo '<figure class="image">';
                                        echo '<a href="';
                                        echo get_sub_field('immagine');
                                        echo '"><img src="';
                                        echo get_sub_field('immagine');
                                        echo '" alt="" /></a>';
                                        echo '</figure>';
                                    } ?>
                                </div>
                            <?php $i++; } ?>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="immagine_testo-dettaglio pt-5 pb-5 row">
    <div class="col-12">
        <div class="container pb-5">
            <div class="d-flex row pt-lg-5 pb-lg-5">
                <div class="col-12 col-lg-6 position-relative z2">
                    <?php
                        if( get_field('immagine_e_testo_immagine') ) {
                            echo '<figure class="img"><img src="';
                            echo get_field('immagine_e_testo_immagine');
                            echo '" alt="" />';
                            echo '</figure>';
                        }
                    ?>
                </div>  
                <div class="testo-dettaglio col-12 col-lg-6 pt-5 position-relative z1">
                    <?php if( get_field('immagine_e_testo_testo') ) { ?>
                        <?php echo get_field('immagine_e_testo_testo'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="post-pagination-wrap clr">
        <ul class="post-pagination container clr">
            <li class="post-prev"><?php echo dbdb_prev_page_link(); ?></li>
            <li class="post-next"><?php echo dbdb_next_page_link(); ?></li>
        </ul>
    </div>

    <?php query_posts('page_id=153'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content-contatti pb-5 bg-contatti">
        <div class="container">
            <div class="d-flex row ml-0 mr-0 pt-5 pb-5">
                <div class="contatti-testo col-12 col-lg-5">
                    <?php the_content(); ?>
                    <?php echo do_shortcode( '[contact-form-7 id="6" title="Contact form 1"]' ); ?>
                </div>
            </div>
        </div>
        <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.7168812933687!2d11.024819215837663!3d45.39488167910027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5e43c392a18b%3A0xc9d322571530b165!2sNival+Group!5e0!3m2!1spt-BR!2sit!4v1537820535502" width="100%" height="900" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
<?php endwhile; endif; wp_reset_query(); ?>


<?php endwhile; ?>


<?php
    get_footer();    
?>
