<div class="artist-highlight-row">
  <div class="highlight-info">
    <h3 class="artist-header" style="color: <?php echo get_field('artist_header_color')?>" ><?php echo get_the_title() ?></h3>
    <div class="artist-image" style="background-image: url(<?php echo get_field('featured_image')['url'] ?>);"></div>
    <?php if (get_field('soundcloud_link')) { ?>
      <a href="<?php echo get_field('soundcloud_link') ?>"><img class="social-link" src="<?php echo get_bloginfo('template_directory'); ?>/images/soundcloud.png" /></a>
    <?php } ?>
    <?php if (get_field('facebook_link')) { ?>
      <a href="<?php echo get_field('facebook_link') ?>"><img class="social-link" src="<?php echo get_bloginfo('template_directory'); ?>/images/facebook.png" /></a>
    <?php } ?>
    <?php if (get_field('resident_advisor_link')) { ?>
      <a href="<?php echo get_field('resident_advisor_link') ?>"><img class="social-link" src="<?php echo get_bloginfo('template_directory'); ?>/images/residentadvisor.png" /></a>
    <?php } ?>
    <?php if (get_field('instagram_link')) { ?>
      <a href="<?php echo get_field('instagram_link') ?>"><img class="social-link" src="<?php echo get_bloginfo('template_directory'); ?>/images/instagram.png" /></a>
    <?php } ?>
  </div>
  <div class="highlight-content">
    <div class="summary" style="background-color: <?php echo get_field('artist_header_color')?>;"><?php echo the_content() ?></div>
    <a href="./booking?artists=<?php echo get_the_title()?>" class="book-button" style="color: <?php echo get_field('artist_header_color')?>; border-color:<?php echo get_field('artist_header_color')?>">Booking request</a>
  </div>
</div>
