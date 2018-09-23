<?php
/**
 * Template Name: Perché Nival
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
    <div class="content-perche-nival">
        <div class="bg-white mb-5 pb-5">
            <div class="container">
                <div class="d-flex row pt-5 pb-5">
                    <div class="testo-dettaglio col-12 col-lg-5">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-12 col-lg-7">
                        <?php $i = 1; if( get_field('perche-nival_logo') ) { if( get_field('perche-nival_logo') ) { ?>
                        <div class="row d-flex list-logos">        
                            <?php while( has_sub_field('perche-nival_logo') ){ ?>
                                <div class="col-12 col-md-6 p-2">
                                    <?php if( get_sub_field('immagine') ) {
                                        if( get_sub_field('url') ) {
                                            echo '<a href="';
                                            echo get_sub_field('url');
                                            echo '">';
                                        }
                                        echo '<img src="';
                                        echo get_sub_field('immagine');
                                        echo '" alt="';
                                        echo get_sub_field('title');
                                        echo '" />';
                                        if( get_sub_field('url') ) {
                                            echo '</a>';
                                        }
                                    } ?>
                                </div>
                            <?php $i++; } ?>
                        </div>
                        <?php } } ?>
                    </div>
                </div>
            </div>
        </div>

        <?php $i = 1; if( get_field('caratteristiche') ) { if( get_field('caratteristiche') ) { ?>
            <div class="caratteristiche bg-light">
                <div class="container">
                    <div class="row d-flex pt-5 pb-5">
                        <?php if( get_field('titolo_caratteristiche') ) { ?>
                            <div class="col-12 text-center pt-5 pb-5 mb-5">
                                <h2><?php echo get_field('titolo_caratteristiche'); ?></h2>
                            </div>
                        <?php } ?>
                        <div class="row d-flex list-caratteristiche">        
                            <?php while( has_sub_field('caratteristiche') ){ ?>
                                <div class="col-12 col-md-4">
                                    <?php if( get_sub_field('titolo') ) { ?>
                                        <h3><span class="number">0<?php echo $i; ?>.</span> <span class="title-carac"><?php echo get_sub_field('titolo'); ?></span></h3>
                                    <?php } ?>
                                    <?php if( get_sub_field('testo') ) { ?>
                                        <?php echo get_sub_field('testo'); ?>
                                    <?php } ?>
                                </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php } } ?>

        <?php $i = 1; if( get_field('vantaggi') ) { if( get_field('vantaggi') ) { ?>
            <div class="block-vantaggi bg-white">
                <div class="container">
                    <div class="row d-flex pt-5 pb-5">
                        <?php if( get_field('vantaggi_titolo') ) { ?>
                            <div class="col-12 text-left pt-5 pb-5 mb-5">
                                <h2><?php echo get_field('vantaggi_titolo'); ?></h2>
                            </div>
                        <?php } ?>
                        <div class="list-vantaggi">        
                            <?php while( has_sub_field('vantaggi') ){ ?>
                                <div class="list-vantaggi-item">
                                    <span class="num">
                                        <?php if($i < 10){ echo '0'; } ?><?php echo $i; ?>.
                                    </span>
                                    <?php if( get_sub_field('titolo') ) { ?>
                                        <h3><span class="number">0<?php echo $i; ?>.</span> <span class="title-carac"><?php echo get_sub_field('titolo'); ?></span></h3>
                                    <?php } ?>
                                    <?php if( get_sub_field('testo') ) { ?>
                                        <?php echo get_sub_field('testo'); ?>
                                    <?php } ?>
                                </div>
                            <?php $i++; } ?>
                        </div>
                    </div>
                </div>
                <div class="bg-icon">
                    <svg width="785px" height="842px" viewBox="0 0 785 842" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <defs>
                            <polygon id="path-1" points="0 0.122984677 939.395037 0.122984677 939.395037 842.002367 0 842.002367"></polygon>
                        </defs>
                        <g id="Perché-Nival" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g transform="translate(-1135.000000, -1917.000000)" id="Page-1">
                                <g transform="translate(1135.000000, 1917.000000)">
                                    <path d="M285.188665,693 C182.679717,640.4654 119,536.364276 119,421.328299 C119,304.015144 180.397586,203.24728 283.247478,151.757761 L302.532864,184.006778 L583.784949,609.107453 C638.204161,563.074361 670.428958,494.935043 670.428958,421.328299 C670.428958,323.514165 612.787265,234.924252 523.591668,195.634686 L547.199356,142 C657.643522,190.662298 729,300.296853 729,421.328299 C729,535.440204 666.381611,638.952782 565.566391,691.448879 L538.301793,646.548875 L264.698973,232.988101 C209.388904,277.970611 177.576541,345.306866 177.576541,421.328299 C177.576541,514.274552 229.053729,598.392617 311.903351,640.85043 L285.188665,693 Z" id="Fill-1" fill="#8EBB44"></path>
                                    <g id="Group-5">
                                        <mask id="mask-2" fill="white">
                                            <use xlink:href="#path-1"></use>
                                        </mask>
                                        <g id="Clip-4"></g>
                                        <path d="M425.145917,842.004571 C190.721443,842.004571 -0.00330183066,653.172379 -0.00330183066,421.06488 C-0.00330183066,188.951871 190.721443,0.119678695 425.145917,0.119678695 C488.777697,0.119678695 550.010147,13.7182854 607.137321,40.5353109 L582.241517,93.6844844 C532.967198,70.5426091 480.110392,58.8063724 425.145917,58.8063724 C223.040863,58.8063724 58.6262047,221.322946 58.6262047,421.06488 C58.6262047,620.801303 223.040863,783.312367 425.145917,783.312367 C620.751869,783.312367 781.07776,631.154537 791.236392,440.338756 L792.100371,390.721473 L939.395037,390.721473 L939.395037,449.413677 L849.420152,449.413677 C834.649962,668.357857 649.995083,842.004571 425.145917,842.004571" id="Fill-3" fill="#8EBB44" mask="url(#mask-2)"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        <?php } } ?>
    </div>

<?php endwhile; ?>

<?php
    get_footer();    
?>
