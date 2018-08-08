<div class="section-infos">
  <?php $my_query = new WP_Query( "cat={$param_cat}&posts_per_page={$param_posts_per_page}" );
    while ( $my_query->have_posts() ) : $my_query->the_post();
        global $post;
        $post_slug=$post->post_name;
  ?>

      <div class="section-info-parent">
        <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?> "> <?php echo get_field('artist_name') ?></h3>

        <a class="section-info" href="./radio/<?php echo $post_slug ?>" style="background-image: url(<?php echo get_field('featured_image')['url']; ?>)";>
          <div class="section-details">
            <h4 class="title"><?php echo get_field('title') ?></h4>
            <?php if (!get_field('title')) { echo get_the_title(); } ?>
            <h4 class="date"><?php echo get_the_date(); ?></h4>
          </div>
        </a>

      </div>


  <?php endwhile;
  wp_reset_postdata();
  ?>
</div>
