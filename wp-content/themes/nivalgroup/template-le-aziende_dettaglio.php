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
        <div id="map" class="map"></div>
    </div>
<script>
function initMap() {
    var stylez = [
            {
            featureType: "all",
            elementType: "all",
            stylers: [
                { saturation: -100 } // <-- THIS
            ]
            }
        ];
        var myOptions = {
            zoom: 17,
            center: new google.maps.LatLng(45.3948854, 11.0248192), 
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(45.3948854, 11.0269192) });
        var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
        map.mapTypes.set('map', mapType);
        map.setMapTypeId('map');
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRsPTOEStm3nWRDAkHSxkfTgUmh8-FC0I&callback=initMap"></script>

<?php endwhile; endif; wp_reset_query(); ?>


<?php endwhile; ?>


<?php
    get_footer();    
?>
