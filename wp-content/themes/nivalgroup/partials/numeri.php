<?php $i = 1; if( get_field('numeri') ) { if( get_field('numeri') ) { ?>
    <div class="list-numeri d-flex row align-items-stretch ml-0 mr-0">
        <div class="col-12 text-center mb-5 pb-5">
            <?php if( get_field('numeri_titolo') ) { ?>
                <h2 class="title"><?php echo get_field('numeri_titolo'); ?></h2>
            <?php } ?>
        </div>
    
        <?php while( has_sub_field('numeri') ){ ?>
            <div class="col-12 col-md-4 p-0 numeri-item text-center mb-5">
                <?php
                    if( get_sub_field('icona') ) {
                        echo '<figure class="img"><img src="';
                        echo get_sub_field('icona');
                        echo '" alt="" />';
                        echo '</figure>';
                    }
                ?>
                <?php if( get_sub_field('testo') ) { ?>
                    <div class="description"><?php echo get_sub_field('testo'); ?></div>
                <?php } ?>
            </div>
        <?php $i++; } ?>
    </div>
<?php } } ?>