<?php
/**
 * The template for displaying the footer.
 *
 * @package Total WordPress Theme
 * @subpackage Templates
 * @version 4.3
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

			<?php wpex_hook_main_bottom(); ?>
			<?php get_template_part( 'partials/call-to-contact' ); ?>

		</main><!-- #main-content -->

		<?php wpex_hook_main_after(); ?>

		<?php wpex_hook_wrap_bottom(); ?>


	<?php wpex_hook_wrap_after(); ?>
</div><!-- #outer-wrap -->
</div><!-- wp class -->
</div><!-- #wrap -->

<?php wpex_outer_wrap_after(); ?>

<?php wp_footer(); ?>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/jquery.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/jqueryui.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/slick.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/selectric.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/checkator.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/smoothState.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/appear.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/countTo.min.js"></script>
<script type="text/javascript" src="/wp-content/themes/nivalgroup/assets/dist/js/main.min.js"></script>
</body>
</html>