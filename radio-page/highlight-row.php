<div class="highlight-row">
  <div class="selected-track-image" style="background-image: url(<?php echo get_field('featured_image')['url'] ?>); filter: grayscale(0%) !important;"></div>
  <div class="selected-track-info">
    <h4 class="number"><?php echo get_field('title') ?></h4>
    <h4 class="type">Podcast</h4>
    <h4 class="date"><?php echo get_the_date(); ?></h4>
    <h4 class="artist-header" style="color: <?php echo get_field('artist_header_color') ?>"><?php echo get_field('artist_name') ?></h4>
    <iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?php echo get_field('soundcloud_track_id') ?>&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
  </div>
</div>