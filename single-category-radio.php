<?php get_template_part( 'header' ); ?>
<div class="content radio-page">

  <div class="section">
    <h2>RADIO</h2>

    <?php $track_number = 457337355; ?>
    <?php include( locate_template( 'radio-page/highlight-row.php', false, false) ); ?>

    <?php $param_cat = 5; $param_posts_per_page = 36; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
