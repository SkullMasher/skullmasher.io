<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package skullmasher.io
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-list__item'); ?> style="background-image: url('<?php the_post_thumbnail_url() ?>');">
    <?php the_title( '<h2 class="post-list__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    <div class="post-list__meta flex-container">
      <span class="post-list__publish-date"><?php skullmasher_io_post_publish_date(); ?></span>
      <a class="post-list__comments" href="<?php comments_link(); ?>"><?php comments_number( '', '1 commentaire', '% commentaires' ); ?></a>
    </div>
</article>
