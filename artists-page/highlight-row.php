<h3 style="color: <?php echo get_field('artist_header_color')?>" ><?php echo get_the_title() ?></h4>
<img style="background-size: contain; width: 200px; height: 200px; background-image: url(<?php echo get_field('featured_image')['url'] ?>);" />
<p><?php echo the_content() ?></p>
