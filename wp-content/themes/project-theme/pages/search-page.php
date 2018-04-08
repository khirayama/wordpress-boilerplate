<?php
	global $wp_query;
	$total_results = $wp_query->found_posts;
	$search_query = get_search_query();
?>

<section class="page search-page">
  <?php get_template_part('components/header') ?>

  <section class="search-page--content">
    <?php echo $search_query; ?>: <span><?php echo $total_results; ?> results</span>

    <div class="search-page--content--main">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php $post_id = get_the_ID(); ?>
          <a href="<?php the_permalink() ?>">
            <?php the_title(); ?>
            <?php the_excerpt(); ?>
          </a>
        <?php endwhile; ?>
        <?php if ($total_result <= 0): ?>
          Your search - <?php echo $search_query; ?> - did not match any documents.
        <?php endif; ?>
    </div>
  </section>

  <?php get_template_part('components/footer') ?>
</section>
