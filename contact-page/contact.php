<?php /* Template Name: contact-page/contact.php */ ?>

<?php get_template_part( 'header-footer/head' ); ?>
<?php get_template_part( 'header-footer/minimal-header' ); ?>


<div class="contact">
  <div class="content">
    <div class="contact-info">
      <h2 class="contact-color">Contact</h2>

      <div class="contact-group">
        <h3>Urban Cosmonaut Radio</h3>
        <h3>Alexandrienstr. 118-121</h3>
        <h3>10969 Berlin</h3>
        <h3>Germany</h3>
      </div>

      <div class="contact-group">
        <h3>+49 30 44 05 09 80</h3>
        <h3>booking@urbancosmonaut.com</h3>
      </div>

      <div class="contact-group">
        <h3>IG: @urbancosmonautradio</h3>
        <h3>FB: /urbancosmonaut</h3>
      </div>
    </div>
    <div class="contact-description">
      <h2 class="contact-color">About Us</h2>

      <?php
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
      ?>
    </div>
  </div>
</div>

<?php get_template_part( 'header-footer/footer' ); ?>
