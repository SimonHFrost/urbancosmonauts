<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" type="text/css" media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/index.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/header-footer/header-footer.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/section-infos/section-infos.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/radio-page/radio-page.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/releases-page/releases-page.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/artists-page/artists-page.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/artists-page/artist-section-infos.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/artists-page/artist-highlight-row.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/generic-page/generic-page.css" rel="stylesheet">
  </head>

  <body class="<?php if ($with_gradient) { echo 'with-gradient'; } ?>">
  <body>
    <?php wp_head(); ?>
    <div class="container">