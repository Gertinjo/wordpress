<?php get_header(); ?>

<main class="single-post">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <article <?php post_class('post-card'); ?>>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="post-thumb">
          <?php the_post_thumbnail('large'); ?>
        </div>
      <?php endif; ?>

      <div class="post-content">
        <h1 class="post-title"><?php the_title(); ?></h1>

        <div class="post-body">
          <?php the_content(); ?>
        </div>
      <div class="comments-area">
        <?php if(comments_open() || get_comments_number()):
          comments_template();
        endif; ?>
      </div>
      </div>
    </article>

  <?php  add_theme_support('post-thumbnails') ?>

  <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>
