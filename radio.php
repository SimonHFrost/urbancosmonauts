<?php $my_query = new WP_Query( "cat={$param_cat}&posts_per_page=3" );
  while ( $my_query->have_posts() ) : $my_query->the_post();
      preg_match("/by (.+)/", get_the_title(), $artist_match_array);
      $my_artist = $artist_match_array[1];

      preg_match("/(Radio |UCR )(#.+) by/", get_the_title(), $number_match_array);
      $my_number = $number_match_array[1];

      $my_date = get_the_date();
      $featured_image = get_field('featured_image');
?>

    <div class="section-info-parent">
      <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?> "> <?php echo $my_artist ?></h3>

      <a class="section-info" href="./radio" style="background-image: url(<?php echo $featured_image['url']; ?>)";>
        <div class="section-details">
          <h4 class="number"><?php echo $my_number ?></h4>
          <h4 class="type">Podcast</h4>
          <h4 class="date"><?php echo $my_date ?></h4>
        </div>
      </a>

    </div>


<?php endwhile;
wp_reset_postdata();
?>
