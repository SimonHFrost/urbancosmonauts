<?php get_template_part( 'header' ); ?>
<div class="content">

  <div class="section">
    <h2>RADIO</h2>
    <?php $param_cat = 5; $param_posts_per_page = 6; ?>
    <?php include( locate_template( 'section-info.php', false, false ) ); ?>
    <div class="see-all-row">
      <a href="./radio" class="see-all">See all</a>
    </div>
  <div class="section">
    <h2>RELEASES</h2>
    <?php $param_cat = 4; $param_posts_per_page = 3; ?>
    <?php include( locate_template( 'section-info.php', false, false ) ); ?>
    <div class="see-all-row">
      <a href="./releases" class="see-all">See all</a>
    </div>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
