<!-- top page -->
<?php if (is_front_page()) { ?>
  <?php get_template_part('pages/top-page') ?>
<?php } ?>

<!-- show post page -->
<?php if (is_single()) { ?>
  <?php get_template_part('pages/show-page') ?>
<?php } ?>
