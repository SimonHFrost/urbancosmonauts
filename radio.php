<?php $my_query = new WP_Query( 'cat=5&posts_per_page=3' );
  while ( $my_query->have_posts() ) : $my_query->the_post();
      preg_match("/by (.+)/", get_the_title(), $artist_match_array);
      $my_artist = $artist_match_array[1];

      // preg_match("/UCR (#.+) by/", get_the_title(), $number_match_array);
      // $my_number = $number_match_array[1];

      $my_date = get_the_date();
      $featured_image = get_field('featured_image');
?>

    <div class="section-info" style="background-image: url(<?php echo $featured_image['url']; ?>)";>
      <h3><?php echo $my_artist ?></h3>
      <div class="section-details">
        <!-- <h4 class="number"><?php echo $my_number ?></h4> -->
        <h4 class="type">Podcast</h4>
        <h4 class="date"><?php echo $my_date ?></h4>
      </div>
    </div>

<?php endwhile;
wp_reset_postdata();
?>
