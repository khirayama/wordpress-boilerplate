<section class="page top-page">
  <?php get_template_part('components/header') ?>

  <section class="top-page--content">
    <h2>MAIN CONTENT</h2>

    <ul>
      <?php $posts = get_posts(array('category_name' => 'news', 'numberposts' => 7)); ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <li>
          <span><?php the_time('Y/m/d'); ?></span>
          <span><?php the_content(); ?></span>
        </li>
      <?php endforeach; endif; ?>
    </ul>

    <ul>
      <?php $posts = get_posts(array('category_name' => 'posts', 'numberposts' => 4)); ?>
      <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>
        <li>
          <a href="<?php the_permalink() ?>">
            <span><?php the_post_thumbnail(); ?></span>
            <span><?php the_time('Y/m/d'); ?></span>
            <ul>
              <?php $posttags = get_the_tags(); if ($posttags) { foreach ( $posttags as $tag ) { ?>
                <li><?php echo $tag->name ?></li>
              <?php }} ?>
            <ul>
            <h2><?php the_title(); ?></h2>
          </a>
        </li>
      <?php endforeach; endif; ?>
    </ul>
  </section>

  <?php get_template_part('components/footer') ?>
</section>
