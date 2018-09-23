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
