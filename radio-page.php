<?php /* Template Name: radio-page.php */ ?>

<?php get_template_part( 'header' ); ?>
<div class="content">

  <div class="section">
    <h2>RADIO</h2>

    <div class="section-infos">
      <?php $param_cat = 5; $param_posts_per_page = 6; ?>
      <?php include( locate_template( 'section-info.php', false, false ) ); ?>
    </div>

  </div>

</div>
<?php get_template_part( 'footer' ); ?>
