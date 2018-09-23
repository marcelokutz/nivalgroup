<?php
/**
 * Template Name: Gli appalti Nival
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
    <div class="content-le-aziende-dettaglio pb-5">
        <div class="bg-white">
            <div class="container">
                <div class="d-flex row ml-0 mr-0 pt-5 pb-5">
                    <div class="aziende-dettaglio-testo col-12 col-lg-5">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-lg-7">
                        <?php $i = 1; if( get_field('numeri') ) { if( get_field('numeri') ) { ?>
                        <div class="numeri d-flex row">        
                            <?php while( has_sub_field('numeri') ){ ?>
                                <div class="item-numeri text-center col-12 col-md-6">
                                    <?php if( get_sub_field('icona') ) {
                                        echo '<img src="';
                                        echo get_sub_field('icona');
                                        echo '" alt="" />';
                                    } ?>
                                    <?php if( get_sub_field('numero') ) {
                                        echo '<h3>' . get_sub_field('numero') . '</h3>';
                                    } ?>
                                    <?php if( get_sub_field('titolo') ) {
                                        echo '<h4>' . get_sub_field('titolo') . '</h4>';
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
    <?php if( get_field('immagine_e_testo_testo') ) { ?>
        <div class="immagine_testo-dettaglio-single bg-color row">
            <div class="col-12">
                <div class="container">
                    <div class="d-flex row align-items-center justify-content-center">
                        <div class="col-12 col-lg-7 position-relative z2">
                            <?php
                                if( get_field('immagine_e_testo_immagine') ) {
                                    echo '<figure class="img"><img src="';
                                    echo get_field('immagine_e_testo_immagine');
                                    echo '" alt="" />';
                                    echo '</figure>';
                                }
                            ?>
                        </div>  
                        <div class="testo-dettaglio col-12 col-lg-5 pt-5 pb-5 position-relative z1">
                                <?php echo get_field('immagine_e_testo_testo'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
<?php endwhile; ?>

<?php
    get_footer();    
?>
