<header class="page-header row d-flex align-items-end">
    <div class="col-12">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '
                <p class="breadcrumb">','</p>
                ' );
                }
            ?>
        </div>
    </div>
</header>