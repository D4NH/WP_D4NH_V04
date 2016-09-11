<?php /* Template Name: Japan Template */ get_header(); ?>

  <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
        <div class="content-a">
            <div class="content-b">
                <h1>Japan 2014</h1>
                <h2>Tokyo, Kyoto, Osaka</h2>
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
              $the_query = new WP_Query( array( 'page_id' => 68 ) );

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
              $the_query = new WP_Query( array( 'category_name' => 'japan-2014', 'posts_per_page' => -1 ) );

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>
                  <div class="col-md-4">

                    <a class="gradient" href="<?php echo get_permalink(); ?>">
                       <?php if ( has_post_thumbnail() ) {
                         the_post_thumbnail( 'large', array( 'class' => 'img-responsive afbeelding shadow' ) );
                       } ?>
                    </a>
                    <div class="subtitle ellipsis">
                      <span><?php echo get_the_title(); ?></span>
                    </div>

                    <div class="subsection">
                      <div class="category"><i class="fa fa-clock-o"></i> September 2014</div>
                      <div class="clock"><i class="fa fa-plane"></i> Japan</div>
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
