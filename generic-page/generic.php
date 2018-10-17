<?php /* Template Name: contact-page/generic.php */ ?>

<?php get_template_part( 'header-footer/head' ); ?>
<?php get_template_part( 'header-footer/minimal-header' ); ?>


<div class="content generic-page">
  <?php
    $content = apply_filters('the_content', $post->post_content);
    echo $content;
  ?>
</div>

<?php get_template_part( 'header-footer/footer' ); ?>
