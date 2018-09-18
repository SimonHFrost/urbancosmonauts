<div class="artist-highlight-row">
  <div>
    <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?>" ><?php echo get_the_title() ?></h4>
    <img class="artist-image" style="background-image: url(<?php echo get_field('featured_image')['url'] ?>);" />
  </div>
  <div class="highlight-content">
    <div class="summary" style="background-color: <?php echo get_field('artist_header_color')?>;"><?php echo the_content() ?></div>
    <a href="./contact?artists=<?php echo get_the_title()?>" class="book-button" style="color: <?php echo get_field('artist_header_color')?>; border-color:<?php echo get_field('artist_header_color')?>">Booking request</a>
  </div>
</div>
