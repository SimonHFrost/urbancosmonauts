<div class="artist-section-infos">
  <?php $my_query = new WP_Query( "category_name={$param_cat}&posts_per_page={$param_posts_per_page}" );
    while ( $my_query->have_posts() ) : $my_query->the_post();
        global $post;
        $post_slug=$post->post_name;
  ?>

      <div class="section-info-parent">
        <a class="section-info" href="./radio/<?php echo $post_slug ?>" style="background-image: url(<?php echo get_field('featured_image')['url']; ?>)";></a>
        <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?> "> <?php echo get_the_title() ?></h3>
      </div>

  <?php endwhile;
  wp_reset_postdata();
  ?>
</div>
