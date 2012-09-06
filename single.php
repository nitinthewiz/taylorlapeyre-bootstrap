<?php get_header(); ?>

  <div id="post">
<?php while ( have_posts() ) : the_post(); ?>
    <article class="row">
      <div class="span8">
        <h3><?php the_title(); ?></h3>
        <p class="lead"><?php the_time('F jS, Y') ?></p>
        <?php get_post( $post_id ); ?>
        <br />
        <?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>
      </div>
    </article>

<?php endwhile; else: ?>
  <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
  </div>

<?php get_footer(); ?>