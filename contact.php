<?php /* Template Name: contact.php */ ?>

<?php get_template_part( 'header' ); ?>

<div class="content">
  <?php
    $content = apply_filters('the_content', $post->post_content);
    echo $content;
  ?>
</div>

<?php get_template_part( 'footer' ); ?>
