<?php get_template_part( 'header' ); ?>
<div class="content">

  <div class="section">
    <h2>RADIO</h2>
    <?php $param_cat = 'radio'; $param_posts_per_page = 6; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
    <div class="see-all-row">
      <a href="./radio" class="see-all">See all</a>
    </div>
  </div>

  <div class="section">
    <h2>RELEASES</h2>
    <?php $param_cat = 'releases'; $param_posts_per_page = 3; ?>
    <?php include( locate_template( 'section-infos/section-infos.php', false, false ) ); ?>
    <div class="see-all-row">
      <a href="./releases" class="see-all">See all releases</a>
    </div>
  </div>

  <div class="section">
    <h2>ARTISTS</h2>
    <h3 class="artists-sub-header">Interested in booking an artist? Select the artist you want to book, and complete the form</h3>
    <?php $param_cat = 'artists'; $param_posts_per_page = 3; ?>
    <?php include( locate_template( 'artists-page/artist-section-infos.php', false, false ) ); ?>
    <div class="see-all-row">
      <a href="./artists" class="see-all">See all artists</a>
    </div>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
