<?php /* Template Name: radio-page/index.php */ ?>

<?php get_template_part( 'header' ); ?>

<div class="content radio-page">

  <div class="section">
    <h2>RADIO</h2>

    <?php
    if (is_page()) {
      // Get the first post if loading the index page
      $latest_post = get_posts("cat=5&numberposts=1");
      $ID = $latest_post[0]->ID;

      global $post;
      $post = get_post( $ID, OBJECT );
      setup_postdata( $post );
    } else {
      the_post();
    }
    ?>

    <?php include( locate_template( 'radio-page/highlight-row.php', false, false) ); ?>

    <?php echo the_content(); ?>

    <?php $param_cat = 5; $param_posts_per_page = 36; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
