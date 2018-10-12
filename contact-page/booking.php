<?php /* Template Name: contact-page/booking.php */ ?>

<?php get_template_part( 'header-footer/head' ); ?>
<?php get_template_part( 'header-footer/minimal-header' ); ?>


<div class="contact">
  <div class="content">
    <div class="contact-form">
      <h2>Booking</h2>
      <?php
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
      ?>
    </div>
  </div>
</div>

<?php get_template_part( 'header-footer/footer' ); ?>
