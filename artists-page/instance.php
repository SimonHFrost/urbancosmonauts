<?php /* Template Name: artists-page/index.php */ ?>

<?php get_template_part( 'header' ); ?>
<div class="content artist-instance">

  <div class="section">
    <h2 class="artists-color">ARTISTS</h2>

    <?php if (is_single()) { ?>
      <?php the_post(); ?>
      <div class="section">
        <?php include( locate_template( 'artists-page/highlight-row.php', false, false) ); ?>
      </div>
    <?php } else { ?>
      <h3 class="artists-sub-header">Interested in booking an artist? Select the artist you want to book, and complete the form</h3>
    <?php } ?>

    <?php $param_cat = 'artists'; $param_posts_per_page = 100; ?>
    <?php include( locate_template( 'artists-page/artist-section-infos.php', false, false ) ); ?>
  </div>

</div>
<?php get_template_part( 'footer' ); ?>
