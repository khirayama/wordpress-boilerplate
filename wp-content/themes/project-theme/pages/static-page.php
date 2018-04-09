<?php
/*
Template Name: Static Page
*/
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php get_template_part('meta') ?>
</head>
<body>
  <?php if ( is_user_logged_in() ) { ?>
    <div class="admin-header">
      <a href="/wp-admin/">管理画面</a>
    </div>
  <?php } ?>
  <section class="page static-page">
    <?php get_template_part('header') ?>

    <div class="breadcrumb">
      <div class="breadcrumb--content">
        <ul class="breadcrumb--content--list">
          <li><a href="/">HOME</a></li>
          <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        </ul>
      </div>
    </div>

    <section class="page static-page">
      <div class="static-page--content">
        <?php while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </section>

    <?php get_template_part('footer') ?>
  </section>
</body>
</html>
