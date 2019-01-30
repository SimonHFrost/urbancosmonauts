<?php /* Template Name: releases-page/index.php */ ?>

<?php get_template_part( 'header-footer/head' ); ?>
<?php get_template_part( 'header-footer/minimal-header' ); ?>


<div class="content releases-page">

  <div class="section">
    <h2 class="releases-color">RELEASES</h2>

    <?php
    if (is_page()) {
      // Load first post if loading the index page
      $latest_post = get_posts("category_name=Release&numberposts=1");
      $ID = $latest_post[0]->ID;

      global $post;
      $post = get_post( $ID, OBJECT );
      setup_postdata( $post );
    } else {
      the_post();
    }
    ?>

    <?php include( locate_template( 'releases-page/highlight-row.php', false, false) ); ?>

    <?php if ($post->post_content) { ?>
    <div class="page-content">
      <details>
        <summary>SEE MORE ABOUT THIS RELEASE</summary>
        <?php echo the_content(); ?>
      </details>
    </div>
    <?php } ?>

    <?php $param_cat = 'releases'; $param_posts_per_page = 100; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
  </div>

</div>
<?php get_template_part( 'header-footer/footer' ); ?>
