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
        <div id="map" class="map"></div>
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
            center: new google.maps.LatLng(46.0684246, 11.2266643), 
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            disableDefaultUI: true
        };
        map = new google.maps.Map(document.getElementById('map'), myOptions);
        marker = new google.maps.Marker({ map: map, position: new google.maps.LatLng(46.0684246, 11.2266643) });
        var mapType = new google.maps.StyledMapType(stylez, { name:"Grayscale" });
        map.mapTypes.set('map', mapType);
        map.setMapTypeId('map');
}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRsPTOEStm3nWRDAkHSxkfTgUmh8-FC0I&callback=initMap"></script>

<?php
    get_footer();    
?>
