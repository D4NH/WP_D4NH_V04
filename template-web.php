<?php /* Template Name: Web Template */ get_header(); ?>

  <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

  <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Projecten</h1>
              <h2>Web Development</h2>
              <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
          </div>
      </div>
  </div>

  <div class="projecten-page">

    <div id="intro" class="container">
      <div class="row intro">

        <div class="col-md-offset-3 col-md-6">
          <?php

            // The Query
            $the_query = new WP_Query( array( 'pagename' => 'webdesign' ) );

            // The Loop
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <?php echo get_the_content(); ?>
             <?php }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();

            ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Developers.nl</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-4">
          <a class="hovericon" href="https://mijn.overheid.nl/" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/mijnoverheid.jpg" alt="MijnOverheid"></a>
          <div class="subsection">
            <div class="subtitle">MijnOverheid</div>
            <div class="category"><i class="fa fa-cogs"></i> VueJS</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Luminis</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-4">
          <a class="hovericon" href="https://www.monuta.nl/verzekeringsmodule/" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/monuta.jpg" alt="Monuta Verzekeringsmodule"></a>
          <div class="subsection">
            <div class="subtitle">Monuta Verzekeringsmodule</div>
            <div class="category"><i class="fa fa-cogs"></i> AngularJS</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="https://vandijk.nl/webshop" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/vandijk.jpg" alt="Van Dijk Webshop"></a>
          <div class="subsection">
            <div class="subtitle">Van Dijk Webshop</div>
            <div class="category"><i class="fa fa-cogs"></i> AngularJS</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="https://amsterdam.luminis.eu" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/luminisamsterdam.jpg" alt="Luminis Amsterdam"></a>
          <div class="subsection">
            <div class="subtitle">Luminis Amsterdam</div>
            <div class="category"><i class="fa fa-cogs"></i> Wordpress</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-md-4">
          <a class="hovericon" href="https://devcon.luminis.eu" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/devcon.jpg" alt="DevCon Luminis"></a>
          <div class="subsection">
            <div class="subtitle">DevCon Luminis</div>
            <div class="category"><i class="fa fa-cogs"></i> Wordpress</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="http://www.proudteachers.nl" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/proudteachers.jpg" alt="Proud Teachers"></a>
          <div class="subsection">
            <div class="subtitle">Proud Teachers</div>
            <div class="category"><i class="fa fa-cogs"></i> Wordpress</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="https://academy.luminis.eu/" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/training.jpg" alt="Luminis Academy"></a>
          <div class="subsection">
            <div class="subtitle">Luminis Academy</div>
            <div class="category"><i class="fa fa-cogs"></i> Wordpress</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Essent</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-4">
          <a class="hovericon" href="https://acties.essent.nl/bespaarcoach/mediamarkt/index.html" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/bespaarcoach.jpg" alt="Bespaarcoach"></a>
          <div class="subsection">
            <div class="subtitle">Bespaarcoach</div>
            <div class="category"><i class="fa fa-cogs"></i> JQuery</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="http://bradfrostweb.com/demo/ish/?url=http%3A%2F%2Fmobiel.essent.nl#s" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/essentmobiel.jpg" alt="Mobiele versie Essent.nl"></a>
          <div class="subsection">
            <div class="subtitle">Mobiele versie Essent.nl</div>
            <div class="category"><i class="fa fa-cogs"></i> Mobile First</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>

        <div class="col-md-4">
          <a class="hovericon" href="https://acties.essent.nl/bespaartips/" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/bespaartips.jpg" alt="Bespaartips van Essent"></a>
          <div class="subsection">
            <div class="subtitle">Bespaartips van Essent</div>
            <div class="category"><i class="fa fa-cogs"></i> JQuery</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Philips</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-4">
          <a class="hovericon" href="https://www.philips.nl/e/kitchen/home.html" target="_blank"><img class="afbeelding img-responsive" src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/webdesign/philipskitchen.jpg" alt="MyKitchen Philips"></a>
          <div class="subsection">
          <div class="subtitle">MyKitchen Philips</div>
            <div class="category"><i class="fa fa-cogs"></i> ATG Content Management System</div>
            <div class="clock"><i class="fa fa-archive"></i> Web Development</div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>
