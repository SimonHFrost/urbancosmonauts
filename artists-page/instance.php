<?php /* Template Name: artists-page/index.php */ ?>

<?php get_template_part( 'header' ); ?>
<div class="content artist-instance">


    <?php if (is_single()) { ?>
      <?php the_post(); ?>
      <div class="section">
        <?php include( locate_template( 'artists-page/highlight-row.php', false, false) ); ?>
      </div>
    <?php } ?>

  <div class="section">
    <h2>ARTISTS</h2>
    <h3 class="artists-sub-header">Interested in booking an artist? Select the artist you want to book, and complete the form</h3>

    <div class="artist-section-infos">
      <?php $param_cat = 'artists'; $param_posts_per_page = 36; ?>
      <?php include( locate_template( 'artists-page/artist-section-infos.php', false, false ) ); ?>
    </div>


  </div>

</div>
<?php get_template_part( 'footer' ); ?>
