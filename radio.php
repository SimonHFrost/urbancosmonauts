<?php
$args = array(
  "posts_per_page"   => 3,
  "paged"            => 1,
  "category"         => 2
);

$posts_array = get_posts($args);

foreach($posts_array as $post)
{
  preg_match("/by (.+)/", $post->post_title, $artist_match_array);
  $my_artist = $artist_match_array[1];

  preg_match("/UCR (#.+) by/", $post->post_title, $number_match_array);
  $my_number = $number_match_array[1];

  preg_match("/(.+) /", $post->post_date, $date_match_array);
  $my_date = $date_match_array[1];
?>

  <div class="section-info background3">
    <h3><?php echo $my_artist ?></h3>
    <div class="section-details">
      <h4 class="number"><?php echo $my_number ?></h4>
      <h4 class="type">Podcast</h4>
      <h4 class="date"><?php echo $my_date ?></h4>
    </div>
  </div>

<?php
}
?>
