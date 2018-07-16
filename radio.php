<?php $my_query = new WP_Query( 'cat=2&posts_per_page=3' );
  while ( $my_query->have_posts() ) : $my_query->the_post();
      preg_match("/by (.+)/", get_the_title(), $artist_match_array);
      $my_artist = $artist_match_array[1];

      preg_match("/UCR (#.+) by/", get_the_title(), $number_match_array);
      $my_number = $number_match_array[1];

      $my_date = get_the_date();
?>

    <div class="section-info background3">
      <h3><?php echo $my_artist ?></h3>
      <div class="section-details">
        <h4 class="number"><?php echo $my_number ?></h4>
        <h4 class="type">Podcast</h4>
        <h4 class="date"><?php echo $my_date ?></h4>

        <?php
          $image = get_field('featured_image');
          $size = 'full'; // (thumbnail, medium, large, full or custom size)

          if( $image ) {
            echo "wow";
          	echo wp_get_attachment_image( $image, $size );
          }
        ?>
      </div>
    </div>

<?php endwhile; ?>
