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
  <?php get_template_part('main') ?>
</body>
</html>
