
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
              <li>Radio</li>
              <li>Releases</li>
              <li>Contact</li>
            </ul>
          </nav>
        </div>
      </header>
      <div class="content">

        <div class="section">
          <h2>RADIO</h2>
          <div class="section-infos">
            <?php get_template_part( 'radio' ); ?>
          </div>
          <div class="see-all-row">
            <button class="see-all">See all</button>
          </div>
        </div>
        <div class="section">
          <h2>RELEASES</h2>
          <div class="section-infos">
            <div class="section-info-parent">
              <h3 class="artist-header" style="color: #fdfd96">REVERIES</h3>
              <div class="section-info background4">
                <div class="section-details">
                  <h4 class="number">#121</h4>
                  <h4 class="type">Compilation</h4>
                  <h4 class="date">20 dec 19</h4>
                </div>
              </div>
            </div>
            <div class="section-info-parent">
              <h3 class="artist-header" style="color: #ff6961">ULISES UNA</h3>
              <div class="section-info background5">
                <div class="section-details">
                  <h4 class="number">#120</h4>
                  <h4 class="type">Single</h4>
                  <h4 class="date">2 dec 19</h4>
                </div>
              </div>
            </div>
            <div class="section-info-parent">
              <h3 class="artist-header" style="color: #779ecb">TALES</h3>
              <div class="section-info background6">
                <div class="section-details">
                  <h4 class="number">#119</h4>
                  <h4 class="type">Compilation</h4>
                  <h4 class="date">12 nov 19</h4>
                </div>
              </div>
            </div>
          </div>
          <div class="see-all-row">
            <button class="see-all">See all</button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
