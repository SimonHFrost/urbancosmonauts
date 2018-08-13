<div class="artist-highlight-row">
  <div>
    <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?>" ><?php echo get_the_title() ?></h4>
    <img style="background-size: contain; width: 200px; height: 200px; background-image: url(<?php echo get_field('featured_image')['url'] ?>);" />
  </div>
  <div class="highlight-content">
    <div class="summary"><?php echo the_content() ?></div>
    <button>Booking request</button>
  </div>
</div>