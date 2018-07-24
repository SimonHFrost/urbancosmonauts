
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css"/>
    <link rel="stylesheet" id="google-font-scada-css" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css" type="text/css" media="all">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/fonts/Urban_Cosmonaut-Regular.ttf" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/header.css" rel="stylesheet">
    <link href="<?php echo get_bloginfo('template_directory'); ?>/section.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <header>
        <a href="<?php echo get_bloginfo( 'wpurl' );?>">
          <img class="nav-image" src="http://radio.urbancosmonaut.com/wp-content/uploads/2015/08/logo_nav.png"/>
        </a>
        <div class="nav-content">
          <h1>URBAN COSMONAUT RADIO</h1>
          <nav>
            <ul>
              <li><a href="./radio">Radio</a></li>
              <li><a href="./releases">Releases</a></li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="content">

        <div class="section">
          <h2>RADIO</h2>
          <div class="section-infos">
            <?php $param_cat = 5; ?>
            <?php include( locate_template( 'section-info.php', false, false ) ); ?>
          </div>
          <div class="see-all-row">
            <a href="./radio" class="see-all">See all</a>
          </div>
        </div>
        <div class="section">
          <h2>RELEASES</h2>
          <div class="section-infos">
            <?php $param_cat = 4; ?>
            <?php include( locate_template( 'section-info.php', false, false ) ); ?>
          </div>
          <div class="see-all-row">
            <a href="./releases" class="see-all">See all</a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
