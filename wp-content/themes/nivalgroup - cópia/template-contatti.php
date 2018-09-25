<?php
/**
 * Template Name: Contatti
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2801.7168812933687!2d11.024819215837663!3d45.39488167910027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x477f5e43c392a18b%3A0xc9d322571530b165!2sNival+Group!5e0!3m2!1spt-BR!2sit!4v1537820535502" width="100%" height="600" frameborder="0" style="border:0"></iframe>
        </div>
    </div>
    
    <?php $i = 1; if( get_field('elenco_delle_societa') ) { if( get_field('elenco_delle_societa') ) { ?>
    <div class="elenco_delle_sede d-flex row ml-0 mr-0 pt-5 pb-5">
        <div class="col-12 text-center pt-5 pb-5 mb-5">
            <h2>Contatti <strong>sedi</strong></h2>
        </div>
        <?php while( has_sub_field('elenco_delle_societa') ){ ?>
            <div class="item-sede col-12 col-md-4 col-lg-3">
                <?php if( get_sub_field('dettagli_della_zienda') ) {
                    echo get_sub_field('dettagli_della_zienda');
                } ?>
            </div>
        <?php $i++; } ?>
    </div>
    <?php } } ?>
<?php endwhile; ?>

<?php
    get_footer();    
?>
