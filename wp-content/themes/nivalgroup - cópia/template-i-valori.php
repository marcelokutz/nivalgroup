<?php
/**
 * Template Name: I valori
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
    <div class="content-valori">
        <div class="container">
            <div class="d-flex row pt-5 pb-5">
                <?php if( get_field('subtitle') ) { ?>
                    <div class="col-12 col-lg-3">
                        <h2><?php echo get_field('subtitle'); ?></h2>
                    </div>
                <?php } ?>
                <div class="col-12 col-lg-9">
                <?php $i = 1; if( get_field('testo_e_immagine') ) { if( get_field('testo_e_immagine') ) { ?>
                    <?php while( has_sub_field('testo_e_immagine') ){ ?>
                        <div class="text-image d-flex row align-items-center ml-0 mr-0">
                            <?php if( get_sub_field('testo') ) { ?>
                                <?php 
                                    if($i == 2) {
                                        echo '<div class="col-12 col-lg-5 p-0 text-image-item order-1">';
                                        echo get_sub_field('testo');
                                        echo '</div>';
                                    } else {
                                        echo '<div class="col-12 col-lg-5 p-0 text-image-item order-0">';
                                        echo get_sub_field('testo');
                                        echo '</div>';
                                    }
                                ?>
                            <?php } ?>
                            <?php
                                if( get_sub_field('immagine_src') ) {
                                    if($i == 2) {
                                        echo '<figure class="img col-12 col-lg-7 p-0 order-0"><img src="';
                                    } else {
                                        echo '<figure class="img col-12 col-lg-7 p-0 order-1"><img src="';
                                    }
                                    echo get_sub_field('immagine_src');
                                    echo '" alt="" />';
                                    echo '</figure>';
                                }
                            ?>
                        </div>
                        <?php $i++; } ?>
                    </div>
                <?php } } ?>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>

<?php
    get_footer();    
?>
