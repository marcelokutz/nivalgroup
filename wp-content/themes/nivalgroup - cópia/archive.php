<?php
/**
 * Template Name: Filters
 *
 */
?>

<?php
    get_header();    
?>
<?php if ( is_post_type_archive('servizi') ) { ?>
    <?php get_template_part( 'partials/archive-header' ); ?>
    <?php query_posts('page_id=124'); if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="content-servizi">
            <div class="bg-white mb-5 pb-5">
                <div class="container">
                    <div class="d-flex row pt-5 pb-5">
                        <div class="testo-dettaglio col-12 col-lg-5 pr-lg-5">
                            <?php the_content(); ?>
                        </div>
                        <div class="col-12 col-lg-7">
                            <div class="list-titolo_e_testo row d-flex">        
                                <?php $i=1; while( has_sub_field('titolo_e_testo') ){ ?>
                                    <div class="list-titolo_e_testo-item col-12 col-md-6">
                                        <div class="cont-wrap">
                                            <span class="num">
                                                <?php if($i < 10){ echo '0'; } ?><?php echo $i; ?>.
                                            </span>
                                            <?php if( get_sub_field('titolo') ) { ?>
                                                <h3><span class="number"><span class="title-carac"><?php echo get_sub_field('titolo'); ?></span></h3>
                                            <?php } ?>
                                            <?php if( get_sub_field('testo') ) { ?>
                                                <?php echo get_sub_field('testo'); ?>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-light mb-5 pb-5">
                <div class="container">
                    <div class="d-flex row pt-5 pb-5 align-items-center">
                        <div class="testo-dettaglio col-12 col-lg-4">
                            <?php if( get_field('vantaggi_strategici_titolo') ) { ?>
                                <h2><?php echo get_field('vantaggi_strategici_titolo'); ?></h2>
                            <?php } ?>
                            <?php if( get_field('vantaggi_strategici_testo') ) { ?>
                                <?php echo get_field('vantaggi_strategici_testo'); ?>
                            <?php } ?>
                        </div>
                        <div class="col-12 col-lg-8">
                            <div class="list-vantaggi_strategici_elenco row d-flex">        
                                <?php $i=1; while( has_sub_field('vantaggi_strategici_elenco') ){ ?>
                                    <div class="list-vantaggi_strategici_elenco-item col-12 col-lg-4">
                                        <svg width="65px" height="65px" viewBox="0 0 65 65" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <defs>
                                                <polygon id="path-1" points="0 6.5e-06 64.9352597 6.5e-06 64.9352597 65 0 65"></polygon>
                                            </defs>
                                            <g id="Servizi" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-655.000000, -1420.000000)" id="Page-1">
                                                    <g transform="translate(655.000000, 1420.000000)">
                                                        <path d="M47.541906,18.9201878 C46.830716,18.9201878 46.1508781,19.2213175 45.6768819,19.7459995 L27.6316507,39.6789371 L19.2274725,31.3797041 C18.7547147,30.9124941 18.1265001,30.655131 17.4589163,30.655131 C16.7873564,30.655131 16.1564042,30.9149507 15.6824731,31.3869447 C14.7071045,32.3577615 14.7102984,33.9352984 15.6897734,34.9041758 L25.9647116,45.0500747 C26.4374695,45.5172848 27.0656188,45.7746479 27.7335286,45.7746479 C27.7643592,45.7746479 27.7968845,45.7736782 27.8025553,45.7727085 C28.4860433,45.7537666 29.1404606,45.4536066 29.5980313,44.9485776 L49.407973,23.0675416 C50.3301539,22.0466873 50.2437891,20.4720595 49.216015,19.557357 C48.7555111,19.1464553 48.1608648,18.9201878 47.541906,18.9201878" id="Fill-1" fill="#73B810"></path>
                                                        <g id="Group-5">
                                                            <mask id="mask-2" fill="white">
                                                                <use xlink:href="#path-1"></use>
                                                            </mask>
                                                            <g id="Clip-4"></g>
                                                            <path d="M32.4675325,60.0000115 C17.3190909,60.0000115 4.995,47.6635315 4.995,32.5000065 C4.995,17.3364165 17.3190909,5.0000015 32.4675325,5.0000015 C47.6159091,5.0000015 59.94,17.3364165 59.94,32.5000065 C59.94,47.6635315 47.6159091,60.0000115 32.4675325,60.0000115 M32.4675325,6.5e-06 C14.5647403,6.5e-06 0,14.5793765 0,32.5000065 C0,50.4204415 14.5647403,65.0000065 32.4675325,65.0000065 C50.3702597,65.0000065 64.9352597,50.4204415 64.9352597,32.5000065 C64.9352597,14.5793765 50.3702597,6.5e-06 32.4675325,6.5e-06" id="Fill-3" fill="#73B810" mask="url(#mask-2)"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <?php if( get_sub_field('testo') ) { ?>
                                            <span class="align-middle">
                                            <?php echo get_sub_field('testo'); ?>
                                        </span>
                                        <?php } ?>
                                    </div>
                                <?php $i++; } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

	<?php endwhile; endif; wp_reset_query(); ?>

    <div class="servizi-list container mb-5 pb-5">
        <h2 class="title text-center mb-5">I nostri <strong>servizi</strong></h2>

        <?php if ( have_posts() ) : ?>
            <div class="d-flex row ml-0 mr-0">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="col-12 col-md-2 col-lg-4 mb-3">
                <div class="card">
	                <?php
                        echo '<a href="';
                        echo the_permalink();
                        echo '" title="';
                        echo the_title().'">';
                        if ( has_post_thumbnail() ) {
                            echo '<figure class="thumb">';
                            the_post_thumbnail();
                            echo '</figure>';
                        } 
                        echo '<div class="description d-flex row align-items-center"><h3 class="col-12">';
                        echo the_title();
                        echo '</h3>';
                        echo '</div>';
                        echo '</a>';
	                ?>
	            </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="news-nav">
                <?php posts_nav_link('','Pagina precedente','Pagina successiva'); ?>
            </div>
        <?php endif; ?>
	</div>
<?php } ?>

<?php
    get_footer();    
?>
