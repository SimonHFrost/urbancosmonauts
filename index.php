<?php get_template_part( 'header' ); ?>
<div class="content">

  <div class="section">
    <h2>RADIO</h2>
    <div class="section-infos">
      <?php $param_cat = 5; ?>
      <?php include( locate_template( 'section-info.php', false, false ) ); ?>
    </div>
    <div class="see-all-row">
      <a href="./radio" class="see-all">See all</a>
    </div>
  </div>
  <div class="section">
    <h2>RELEASES</h2>
    <div class="section-infos">
      <?php $param_cat = 4; ?>
      <?php include( locate_template( 'section-info.php', false, false ) ); ?>
    </div>
    <div class="see-all-row">
      <a href="./releases" class="see-all">See all</a>
    </div>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
