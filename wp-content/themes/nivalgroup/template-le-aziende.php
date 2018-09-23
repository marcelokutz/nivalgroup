<?php
/**
 * Template Name: Le aziende
 *
 */
?>

<?php
    get_header();    
?>

<?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'partials/page-header' ); ?>
    <div class="content-le-aziende pb-5">
        <div class="container">
            <div class="le-aziende_list d-flex row pt-5 pb-5">
                <?php $i = 1; if( get_field('le_aziende_del_gruppo') ) { if( get_field('le_aziende_del_gruppo') ) { ?>
                    <?php while( has_sub_field('le_aziende_del_gruppo') ){ ?>
                        <?php if(get_sub_field('url')) { ?>
                            <a href="<?php echo get_sub_field('url'); ?>">
                        <?php } ?>
                        <div class="col-12 col-lg-4 col-xl-3">
                            <div class="item">
                            <?php 
                                if( get_sub_field('testo') ) {
                                    echo '<div class="description d-flex align-items-center text-center">';
                                    echo '<div class="col-12">';
                                    echo '<h3>' . get_sub_field('titolo') . '</h3>';
                                    echo get_sub_field('testo');
                                    if(get_sub_field('url')) {
                                        echo '<span class="lk-go">APPROFONDISCI 
                                        <svg width="11px" height="18px" viewBox="0 0 11 18" version="1.1">
                                            <defs>
                                                <polygon id="path-1" points="0 2.33766234e-05 10.2501818 2.33766234e-05 10.2501818 17.9528026 0 17.9528026"></polygon>
                                            </defs>
                                            <g id="Il-gruppo---Le-aziende-del-gruppo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-311.000000, -1015.000000)" id="Group-6">
                                                    <g transform="translate(158.000000, 1010.000000)">
                                                        <g id="Page-1" transform="translate(153.000000, 5.000000)">
                                                            <mask id="mask-2" fill="white">
                                                                <use xlink:href="#path-1"></use>
                                                            </mask>
                                                            <g id="Clip-2"></g>
                                                            <path d="M7.49704675,8.90754545 C7.21021558,8.59242857 6.93974805,8.26048052 6.63444935,7.965 C4.54972208,5.94712987 2.45564416,3.93907792 0.369046753,1.92307792 C-0.224719481,1.34918182 -0.0800181818,0.425805195 0.645124675,0.0938571429 C1.0090987,-0.0728181818 1.54956623,-0.0288701299 1.89670909,0.317103896 C2.29855325,0.717779221 2.71325455,1.10536364 3.12187792,1.49902597 C5.3672026,3.6622987 7.61252727,5.82533766 9.85738442,7.98884416 C10.3592805,8.47297403 10.383826,9.11138961 9.91021558,9.62450649 C9.64068312,9.91671429 9.35642338,10.1955974 9.07637143,10.477987 C6.73192987,12.8408961 4.38561818,15.2021688 2.04351429,17.5671818 C1.71343636,17.9005325 1.33146234,18.0333117 0.879825974,17.904039 C0.114475325,17.6852338 -0.164641558,16.7417532 0.351046753,16.1353636 C0.438007792,16.032974 0.535955844,15.9401688 0.630631169,15.8445584 C2.88857922,13.5686104 5.14652727,11.2931299 7.40541039,9.01858442 C7.45426753,8.96925974 7.51364416,8.93045455 7.56834545,8.88650649 C7.5445013,8.89351948 7.52089091,8.90076623 7.49704675,8.90754545" id="Fill-1" fill="#73B810" mask="url(#mask-2)"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg></span>';
                                    }
                                    echo '</div>';
                                    echo '</div>';
                                } 
                            ?>
                            <?php
                                if( get_sub_field('logo') ) {
                                    echo '<div class="d-flex align-items-center img-base"><figure class="img text-center col-12"><img src="';
                                    echo get_sub_field('logo');
                                    echo '" alt="" />';
                                    echo '<h3>' . get_sub_field('titolo') . '</h3>';
                                    echo '</figure></div>   ';
                                }
                            ?>
                            </div>
                            <?php if(get_sub_field('url')) { ?>
                                </a>
                            <?php } ?>
                        </div>
                        <?php $i++; } ?>
                    </div>
                <?php } } ?>
            </div>
        </div>
    </div>
    <?php get_template_part( 'partials/call-to-contact' ); ?>
<?php endwhile; ?>

<?php
    get_footer();    
?>
