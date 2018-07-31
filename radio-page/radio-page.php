<?php /* Template Name: radio-page.php */ ?>

<?php get_template_part( 'header' ); ?>
<div class="content">

  <div class="section">
    <h2>RADIO</h2>

    <div class="highlight-row">
      <div class="section-info" style="background-image: url(http://localhost:8888/urbancosmonauts/wp-content/uploads/2018/06/1.jpg); filter: grayscale(0%) !important;"></div>
      <div>
        <h4 class="number">#45</h4>
        <h4 class="type">Podcast</h4>
        <h4 class="date">June 13, 2018</h4>
        <h3 class="artist-header">ISLANDMAN</h3>
        <iframe class="soundcloud-player" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/457337355&color=%23cfc4cb&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
      </div>
    </div>

    <?php $param_cat = 5; $param_posts_per_page = 36; ?>
    <?php include( locate_template( 'section-infos.php', false, false ) ); ?>

  </div>

</div>
<?php get_template_part( 'footer' ); ?>
