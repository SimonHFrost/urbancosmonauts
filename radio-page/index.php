<?php
/* Template Name: radio-page/index.php */

// Set up the latest post as the current post then load the instance template

$latest_post = get_posts("cat=5&numberposts=1");
$ID = $latest_post[0]->ID;

global $post;
$post = get_post( $ID, OBJECT );
setup_postdata( $post );

include( locate_template( 'radio-page/instance.php', false, false ) );

?>
