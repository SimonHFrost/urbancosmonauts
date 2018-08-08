<?php
/* Template Name: releases-page/index.php */

$latest_post = get_posts("cat=1&numberposts=1");
$ID = $latest_post[0]->ID;

global $post;
$post = get_post( $ID, OBJECT );
setup_postdata( $post );

include( locate_template( 'releases-page/instance.php', false, false ) );

?>
