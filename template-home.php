<?php /* Template Name: Home Template */ get_header(); ?>

  <?php
    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
    $img = $img[0];
  ?>

  <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Danh Nguyen</h1>
              <h2>Front-End Developer</h2>
              <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
          </div>
      </div>
  </div>

  <div class="page-template-template-home">

    <div id="intro" class="container">
      <div class="row intro">
        <div class="col-md-offset-3 col-md-6">
          <?php

            // The Query
            $the_query = new WP_Query( array( 'pagename' => 'home' ) );

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
          <h2 class="sectiontitle">Laatste updates</h2>
        </div>
      </div>
      <div class="row other">

        <?php

          // The Query
          $the_query = new WP_Query( array( 'category_name' => 'recepten', 'posts_per_page' => 1 ) );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>

              <div class="col-sm-12 col-md-4">
                <a class="hovericon" href="<?php echo get_permalink(); ?>">

                  <?php if ( has_post_thumbnail() ) {
                     the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                   } ?>
                </a>

                <div class="subsection">
                  <div class="subtitle ellipsis"><?php echo get_the_title(); ?></div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-cutlery"></i> <a href="/blog/recepten/">Recepten</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>

           <?php }
          } else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        ?>

        <?php

          // The Query
          $the_query = new WP_Query( array( 'category_name' => 'zwartewoud-2016', 'posts_per_page' => 1 ) );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>

              <div class="col-sm-6 col-md-4">
                <a class="hovericon" href="<?php echo get_permalink(); ?>">

                  <?php if ( has_post_thumbnail() ) {
                     the_post_thumbnail( 'large', array( 'class' => 'img-responsive afbeelding' ) );
                   } ?>
                </a>
                <div class="subsection">
                  <div class="subtitle ellipsis"><?php echo get_the_title(); ?></div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-plane"></i> <a href="/blog/zwarte-woud-duitsland/">Reizen</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>

           <?php }
          } else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        ?>

        <?php

          // The Query
          $the_query = new WP_Query( array( 'category_name' => 'hungary-2016', 'posts_per_page' => 1 ) );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
              $the_query->the_post(); ?>

              <div class="col-sm-6 col-md-4">
                <a class="hovericon" href="<?php echo get_permalink(); ?>">

                  <?php if ( has_post_thumbnail() ) {
                     the_post_thumbnail( 'large', array( 'class' => 'img-responsive afbeelding' ) );
                   } ?>
                </a>
                <div class="subsection">
                  <div class="subtitle ellipsis"><?php echo get_the_title(); ?></div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-plane"></i> <a href="/blog/hungary-2016/">Reizen</a></div>
                  <div class="clearfix"></div>
                </div>
              </div>

           <?php }
          } else {
            // no posts found
          }
          /* Restore original Post Data */
          wp_reset_postdata();

        ?>

      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Recente projecten</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-sm-12 col-md-4">
          <a class="hovericon" href="//www.monuta.nl/verzekeringsmodule/">
          <!--  -->
          <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V03/assets/img/webdesign/monuta.jpg" alt="Monuta Verzekeringsmodule"></a>
          <div class="subsection">
            <div class="subtitle ellipsis">Monuta Verzekeringsmodule</div>
            <div class="category"><i class="fa fa-cogs"></i> AngularJS</div>
            <div class="clock"><i class="fa fa-archive"></i> <a href="/webdesign/">Web Development</a></div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="hovericon" href="//www.vandijk.nl/webshop/">
          <!--  -->
          <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V03/assets/img/webdesign/vandijk.jpg" alt="Van Dijk Webshop"></a>
          <div class="subsection">
            <div class="subtitle ellipsis">Van Dijk Webshop</div>
            <div class="category"><i class="fa fa-cogs"></i> AngularJS</div>
            <div class="clock"><i class="fa fa-archive"></i> <a href="/webdesign/">Web Development</a></div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <a class="hovericon" href="//amsterdam.luminis.eu/">
          <!--  -->
          <img class="afbeelding img-responsive" src="https://www.danhnguyen.nl/wp-content/themes/D4NH_V03/assets/img/webdesign/luminisamsterdam.jpg" alt="Luminis Amsterdam"></a>
          <div class="subsection">
            <div class="subtitle ellipsis">Luminis Amsterdam</div>
            <div class="category"><i class="fa fa-cogs"></i> Wordpress</div>
            <div class="clock"><i class="fa fa-archive"></i> <a href="/webdesign/">Web Development</a></div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>