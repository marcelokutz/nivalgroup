<?php $i = 1; if( get_field('lavoriamo_elenco') ) { if( get_field('lavoriamo_elenco') ) { ?>
    <div class="block-slider bg-light pt-5 pb-5 row">
        <h2 class="title text-center col-12 mb-5 pt-5 pb-5">Lavoriamo con alcuni dei <strong>più illustri nomi nel mercato</strong></h2>
        <div class="list-slider-brands col-12 p-0">
            <?php while( has_sub_field('lavoriamo_elenco') ){ ?>
                <div class="item p-3">
                        <?php
                            if( get_sub_field('url') ) {
                                echo '<a href="'.get_sub_field('url').'" title="'.get_sub_field('nome').'">';
                            }
                            $image = get_sub_field('immagine');
                            echo '<img src="';
                            echo get_sub_field('immagine');
                            echo '" alt="'.get_sub_field('nome').'" />';
                            if( get_sub_field('url') ) {
                                echo '</a>';
                            }
                        ?>
                </div>
            <?php $i++; } ?>
        </div>
    </div>
<?php } } ?>