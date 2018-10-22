<?php /* Template Name: contact-page/contact.php */ ?>

<?php get_template_part( 'header-footer/head' ); ?>
<?php get_template_part( 'header-footer/minimal-header' ); ?>


<div class="contact">
  <div class="content">
    <div class="contact-description">


      <?php
        $content = apply_filters('the_content', $post->post_content);
        echo $content;
      ?>
    </div>
  </div>
</div>

<?php get_template_part( 'header-footer/footer' ); ?>
