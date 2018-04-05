<section class="page show-page">
  <?php get_template_part('components/header') ?>

  <div class="breadcrumb">
    <div class="breadcrumb--content">
      <ul class="breadcrumb--content--list">
        <li><a href="/">HOME</a></li>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      </ul>
    </div>
  </div>

  <section class="show-page--content">
    <?php while ( have_posts() ) : the_post(); ?>
      <span><?php the_post_thumbnail(); ?></span>
      <span><?php the_time('Y/m/d'); ?></span>
      <h2><?php the_title(); ?></h2>
      <section><?php the_content(); ?></section>
      <ul>
        <?php $posttags = get_the_tags(); if ($posttags) { foreach ( $posttags as $tag ) { ?>
          <li><?php echo $tag->name ?></li>
        <?php }} ?>
      <ul>
    <?php endwhile; ?>
  </section>

  <?php get_template_part('components/footer') ?>
</section>
