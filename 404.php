<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package skullmasher.io
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found wrapper">
				<header>
					<h1 class="error-404__title"><span class="the-dreaded-word">404</span>Page non trouvé</h1>
				</header>
				<div class="404-content grid-3">
          <?php the_widget( 'WP_Widget_Recent_Posts' );

            // Only show the widget if site has multiple categories.
            if ( skullmasher_io_categorized_blog() ) :
          ?>
        <div>
          <h2>Rechercher sur le site</h2>
					<?php get_search_form(); ?>
        </div>
					<div>
						<h2 class="widget-title">Catégories d'articles</h2>
						<ul class="category-list">
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 5,
							) );
						?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
			</section>
		</main>
	</div>

<?php
get_footer();
