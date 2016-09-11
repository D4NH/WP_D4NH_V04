<?php get_header(); ?>

      <div class="fullscreen background" style="background-image:url('https://www.danhnguyen.nl/wp-content/uploads/2H0QPGDVGZ.jpg');">
          <div class="content-a">
              <div class="content-b">
                  <h1>Blog</h1>
                  <h2>Eten, reizen en nog veel meer!</h2>
                  <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
              </div>
          </div>
      </div>

      <div class="blog-page">

        <div id="intro" class="container">
          <div class="row intro">
            <div class="col-md-offset-3 col-md-6">
              <p>Op deze pagina vind je verschillende onderwerpen over mijn trips en meer. Veel lees plezier!</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="sectiontitle"><a href="/blog/travel/">Reizen</a></h2>
            </div>
          </div>
          <div class="row other">
            <div class="col-sm-12 col-md-4">

              <?php
              // The Query
              $the_query = new WP_Query( array( 'page_id' => 1498, 'posts_per_page' => 1 ) );
              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); ?>

                   <a class="hovericon" href="<?php echo get_permalink(); ?>">

                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                      } ?>
                   </a>

                  <div class="subsection">
                    <div class="subtitle ellipsis">Budapest - Hongarije</div>
                    <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                    <div class="clock"><i class="fa fa-plane"></i> <a href="/blog/travel/">Reizen</a></div>
                    <div class="clearfix"></div>
                  </div>

                <?php }
              } else {
                // no posts found
                echo '<p>Nog geen berichten geplaatst</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
              ?>
            </div>
            <div class="col-sm-6 col-md-4">

              <?php
              // The Query
              $the_query = new WP_Query( array( 'page_id' => 710, 'posts_per_page' => 1 ) );
              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); ?>

                   <a class="hovericon" href="<?php echo get_permalink(); ?>">

                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                      } ?>
                   </a>

                  <div class="subsection">
                    <div class="subtitle ellipsis">Jakarta, Yogyakarta, Bali - Indonesie</div>
                    <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                    <div class="clock"><i class="fa fa-plane"></i> <a href="/blog/travel/">Reizen</a></div>
                    <div class="clearfix"></div>
                  </div>

                <?php }
              } else {
                // no posts found
                echo '<p>Nog geen berichten geplaatst</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
              ?>
            </div>
            <div class="col-sm-6 col-md-4">
              <?php
              // The Query
              $the_query = new WP_Query( array( 'page_id' => 68, 'posts_per_page' => 1 ) );
              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); ?>

                   <a class="hovericon" href="<?php echo get_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                      } ?>
                   </a>

                   <div class="subsection">
                     <div class="subtitle ellipsis">Tokyo, Kyoto, Osaka - Japan</div>
                     <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                     <div class="clock"><i class="fa fa-plane"></i> <a href="/blog/travel/">Reizen</a></div>
                     <div class="clearfix"></div>
                   </div>

                <?php }
              } else {
                // no posts found
                echo '<p>Nog geen berichten geplaatst</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
              ?>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h2 class="sectiontitle"><a href="/blog/recepten/">Recepten</a></h2>
            </div>
          </div>
          <div class="row other">

              <?php
              // The Query
              $the_query = new WP_Query( array( 'category_name' => 'recepten', 'posts_per_page' => 3 ) );
              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); ?>

                    <?php if ($the_query->current_post == 0) { ?>
                      <div class="col-sm-12 col-md-4">
                    <?php } else { ?>
                      <div class="col-sm-6 col-md-4">
                    <?php } ?>
                     <a class="hovericon" href="<?php echo get_permalink(); ?>">
                        <?php if ( has_post_thumbnail() ) {
                          the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                        } ?>
                     </a>
                     <div class="subsection">
                       <div class="subtitle ellipsis"><?php echo get_the_title(); ?></span></div>
                       <div class="category"><i class="fa fa-clock-o"></i> <?php echo date("F Y", strtotime(get_post($_GET['p_id'])->post_date)); ?></div>
                       <div class="clock"><i class="fa fa-cutlery"></i> <a href="/blog/recepten/">Recepten</a></div>
                       <div class="clearfix"></div>
                     </div>
                   </div>
                <?php }
              } else {
                // no posts found
                echo '<p>Nog geen berichten geplaatst</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
              ?>

          </div>

<!--
          <div class="row">
            <div class="col-md-12">
              <h2 class="sectiontitle"><a href="/blog/my-stuff/">Gadgets</a></h2>
            </div>
          </div>
          <div class="row other">
            <div class="col-md-6">
              <?php
              // The Query
              $the_query = new WP_Query( array( 'category_name' => 'gadgets', 'posts_per_page' => 3 ) );
              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); ?>

                   <a href="<?php echo get_permalink(); ?>">
                      <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'custom-size', array( 'class' => 'img-responsive afbeelding' ) );
                      } ?>
                   </a>
                   <div class="subsection">
                     <div class="subtitle ellipsis"><?php echo get_the_title(); ?></div>
                     <div class="category"><i class="fa fa-clock-o"></i> Smartwatches</div>
                     <div class="clock"><i class="fa fa-folder"></i> <a href="/blog/my-stuff/">Gadgets</a></div>
                     <div class="clearfix"></div>
                   </div>

                <?php }
              } else {
                // no posts found
                echo '<p>Nog geen berichten geplaatst</p>';
              }
              /* Restore original Post Data */
              wp_reset_postdata();
              ?>
            </div>
          </div>
-->

        </div>

      </div>

<?php get_footer(); ?>