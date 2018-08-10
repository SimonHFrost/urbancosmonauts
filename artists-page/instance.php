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
    <h3>Interested in booking an artist? Select the artist you want to book, and complete the form</h3>

    <div class="artist-section-infos">
      <?php $param_cat = 'artists'; $param_posts_per_page = 36; ?>
      <?php $my_query = new WP_Query( "category_name={$param_cat}&posts_per_page={$param_posts_per_page}" );
        while ( $my_query->have_posts() ) : $my_query->the_post();
            global $post;
            $post_slug=$post->post_name;
      ?>

          <div class="section-info-parent">
            <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?> "> <?php echo get_the_title() ?></h3>
            <a class="section-info" href="./radio/<?php echo $post_slug ?>" style="background-image: url(<?php echo get_field('featured_image')['url']; ?>)";></a>
          </div>

      <?php endwhile;
      wp_reset_postdata();
      ?>
    </div>


  </div>

</div>
<?php get_template_part( 'footer' ); ?>
