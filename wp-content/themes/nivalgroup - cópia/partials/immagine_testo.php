<div class="immagine_testo row ml-0 mr-0">
    <div class="col-12">
        <div class="container">
        <div class="d-flex row align-items-center justify-content-center pt-5 pb-5">
            <div class="col-12 col-lg-5 pt-5 position-relative z1">
                <?php if( get_field('testo_block') ) { ?>
                    <?php echo get_field('testo_block'); ?>
                <?php } ?>
                <?php if( get_field('url_block') ) { ?>
                    <a href="<?php echo get_field('url_block'); ?>" class="btn btn-secondary"><span class="txt">
                        <?php echo get_field('testo_pulsante_block'); ?></span> <i class="fas fa-chevron-right"></i><span class="effect"></span></a>
                <?php } ?>
                
            </div>
            <div class="col-12 col-lg-7 position-relative z2">
            
                <?php
                    if( get_field('immagine_block') ) {
                        echo '<figure class="img"><img src="';
                        echo get_field('immagine_block');
                        echo '" alt="" />';
                        echo '</figure>';
                    }
                ?>
            </div>        
        </div>
        </div>
</div>
</div>