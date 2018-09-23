<?php $i = 1; $args1 = array( 'post_type' => 'servizi', 'posts_per_page' => -1 ); $loop = new WP_Query( $args1 ); ?>
	<div class="servizi-list container mb-5 pb-5">
        <h2 class="title text-center">I nostri <strong>servizi</strong></h2>
	    <div class="row d-flex">
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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
			<?php $i++; endwhile; ?>
	    </div>
	</div>
<?php wp_reset_query(); ?>