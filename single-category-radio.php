<?php get_template_part( 'header' ); ?>
<div class="content radio-page">

  <!-- TODO Should share code between this and radio.page.php -->
  <div class="section">
    <h2>RADIO</h2>

    <div class="highlight-row">
      <div class="selected-track-image" style="background-image: url(http://localhost:8888/urbancosmonauts/wp-content/uploads/2018/06/1.jpg); filter: grayscale(0%) !important;"></div>
      <div class="selected-track-info">
        <h4 class="number">#45</h4>
        <h4 class="type">Podcast</h4>
        <h4 class="date">June 13, 2018</h4>
        <h4 class="artist-header">ISLANDMAN</h4>
        <?php echo get_field('soundcloud_url'); ?>
      </div>
    </div>

    <?php $param_cat = 5; $param_posts_per_page = 36; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
