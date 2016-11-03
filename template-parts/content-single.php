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
    <?php the_content( sprintf(
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
?>
    <div class="o-box o-box--medium o-box--beta-background">
<?php // the_post_navigation(); ?>
<?php if (!empty($tags) && !empty($cats)) : ?>
      <p>Consulter les articles
<?php foreach ($tags as $tag) : ?>
        <a class="tag-nav__link <?php echo 'tag-' . $tag->slug ?>" href="<?php echo get_tag_link($tag->term_id) ?>"><?php echo $tag->name ?></a>
<?php endforeach;
if (count($cats) > 1): ?>
          dans les catégories
<?php else: ?>
          dans la catégorie
<?php endif;
foreach ($cats as $cat) : ?>
          <a class="btn btn--inline category-nav__link <?php echo 'category-' . $cat->slug ?>" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
<?php endforeach; ?>
      </p>
<?php elseif (empty($tags) && !empty($cats)) : ?>
<?php if (count($cats) > 1): ?>
      <p>Consulter les articles dans les catégories
<?php foreach ($cats as $cat) : ?>
      <a class="btn btn--inline category-nav__link <?php echo 'category-' . $cat->slug ?>" href="<?php echo get_category_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
<?php endforeach;
else: ?>
      <p>Consulter les articles dans la catégorie <a class="btn btn--inline category-nav__link <?php echo 'category-' . $cats[0]->slug ?>" href="<?php echo get_category_link($cats[0]->term_id) ?>"><?php echo $cats[0]->name ?></a>
<?php endif; // categories only count ?>
      </p>
<?php endif; // No tags but there is categories ?>
      <p class="article__share">Partager
        <?php
          $encoded_permalink = urlencode(get_permalink());
          $encoded_article_title = urldecode(get_the_title());
          $twitterhandle = 'skullm4sher';
        ?>
        <a href="https://twitter.com/intent/tweet?text=<?php echo $encoded_article_title ?>&url=<?php echo $encoded_permalink ?>&via=<?php echo $twitterhandle ?>" target="blank" title="Partager sur twitter"><?php echo file_get_contents(get_template_directory(). '/img/twitter-blue.svg') ?></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $encoded_permalink ?>" target="blank"><?php echo file_get_contents(get_template_directory() .'/img/facebook.svg') ?></a>
        <a href="mailto:contact@example.com?&subject=<?php echo $encoded_article_title ?>&body=<?php echo $encoded_permalink ?>"><?php echo file_get_contents(get_template_directory() .'/img/mail.svg') ?></a>
      </p>
    </div>
    <div class="hire-me">
      <a href="<?php echo get_permalink(get_page_by_title('contact')->ID ) ?>" class="hire-me__link btn btn--rounded">Vous avez aimé cet article ? Engagez moi !</a>
    </div>
  </footer>
</article>
