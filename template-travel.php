<?php /* Template Name: Travel Template */ get_header(); ?>

  <?php
    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
    $img = $img[0];
  ?>

  <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Reizen</h1>
              <h2>Altijd een leuk moment</h2>
              <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
          </div>
      </div>
  </div>

  <div class="blog-page">

    <div id="intro" class="container">
      <div class="row intro">
        <div class="col-md-offset-3 col-md-6">
          <?php
            // The Query
            $the_query = new WP_Query( array( 'page_id' => 1392 ) );

            // The Loop
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <p><?php echo get_the_content(); ?></p>
             <?php }
            } else {
              // no posts found
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          ?>
        </div>
      </div>
      <div class="row intro">
      <?php

        // The Query
        $the_query = new WP_Query( array( 'page_id' => 1772, 'posts_per_page' => 1 ) );

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
                <div class="subtitle ellipsis">Monschau, Aachen - Duitsland</div>
                <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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
          $the_query = new WP_Query( array( 'page_id' => 1719, 'posts_per_page' => 1 ) );

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
                  <div class="subtitle ellipsis">Wenen - Oostenrijk</div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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
          $the_query = new WP_Query( array( 'page_id' => 1626, 'posts_per_page' => 1 ) );

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
                  <div class="subtitle ellipsis">Zwartewoud - Duitsland</div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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
          $the_query = new WP_Query( array( 'page_id' => 1498, 'posts_per_page' => 1 ) );

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
                  <div class="subtitle ellipsis">Budapest - Hongarije</div>
                  <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                  <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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
            $the_query = new WP_Query( array( 'page_id' => 710, 'posts_per_page' => 1 ) );

            // The Loop
            if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post(); ?>
                <div class="col-sm-6 col-md-4">

                  <a class="hovericon" href="<?php echo get_permalink(); ?>">

                     <?php if ( has_post_thumbnail() ) {
                       the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                     } ?>
                  </a>

                  <div class="subsection">
                    <div class="subtitle ellipsis">Jakarta, Yogyakarta, Bali - Indonesie</div>
                    <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                    <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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
              $the_query = new WP_Query( array( 'page_id' => 68, 'posts_per_page' => 1 ) );

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>
                  <div class="col-sm-6 col-md-4">

                    <a class="hovericon" href="<?php echo get_permalink(); ?>">
                       <?php if ( has_post_thumbnail() ) {
                         the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                       } ?>
                    </a>

                    <div class="subsection">
                      <div class="subtitle">Tokyo, Kyoto, Osaka - Japan</div>
                      <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                      <div class="clock"><i class="fa fa-plane"></i> Reizen</div>
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

    </div>

  </div>

<?php get_footer(); ?>
