<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article o-wrapper'); ?>>
  <header class="article__heading">
		<div class="article__date">
			<?php skullmasher_io_posted_on_single(); ?>
		</div>
    <?php the_title( '<h1 class="article__title">', '</h1>' ); ?>

<?php
if ( has_post_thumbnail() ) : ?>
  <div class="article__featured-image">
    <?php the_post_thumbnail(); ?>
  </div>
<?php endif; ?>

	</header>

	<div class="article__content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'skullmasher-io' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'skullmasher-io' ),
				'after'  => '</div>',
			) );
		?>
	</div>

	<footer class="article__footer">
    <?php
      /**
       * List the tags & category of the blog post
       */
      $tags = get_the_tags();
      $cats = get_the_category();
      if (!empty($tags) && !empty($cats)) {
        // There is tag and categories defined for this post
        foreach ($tags as $tag) : ?>
          <a class="tag-nav__link <?php echo 'tag-' . $tag->slug ?>" href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
        <?php endforeach;
        foreach ($cats as $cat) : ?>
          <a class="btn category-nav__link <?php echo 'category-' . $cat->slug ?>" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
        <?php endforeach;

      } elseif (empty($tags) && !empty($cats)) {
        // print_r($cats);
      }
      // No tag or category define for this post
      // var_dump($tags);
      // var_dump($cats);
      ?>
	</footer>
</article>
