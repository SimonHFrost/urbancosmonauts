<?php /* Template Name: contact.php */ ?>

<?php get_template_part( 'header' ); ?>

<div class="contact">
  <div class="content">
    <div class="contact-info">
      <h3>Urban Cosmonaut Radio</h3>
      <h3>Alexandrienstr. 118-121</h3>
      <h3>10969 Berlin</h3>
      <h3>Germany</h3>

      <h3>+49 30 44 05 09 80</h3>
      <h3>info@urbancosmonaut.com</h3>
    </div>
    <div class="contact-form">
      <?php
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
      ?>
    </div>
  </div>
</div>

<?php get_template_part( 'footer' ); ?>
