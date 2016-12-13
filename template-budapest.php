<?php /* Template Name: Budapest Template */ get_header(); ?>

  <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

    <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
        <div class="content-a">
            <div class="content-b">
                <h1>Hungary 2016</h1>
                <h2>Budapest</h2>
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
              $the_query = new WP_Query( array( 'page_id' => 1498 ) );

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
              $the_query = new WP_Query( array( 'category_name' => 'hungary-2016', 'posts_per_page' => -1 ) );

              // The Loop
              if ( $the_query->have_posts() ) {
                while ( $the_query->have_posts() ) {
                  $the_query->the_post(); ?>
                  <div class="col-md-4">

                    <a class="hovericon" href="<?php echo get_permalink(); ?>">

                       <?php if ( has_post_thumbnail() ) {
                         the_post_thumbnail( 'large', array( 'class' => 'img-responsive afbeelding' ) );
                       } ?>
                    </a>

                    <div class="subsection">
                      <div class="subtitle ellipsis"><?php echo get_the_title(); ?></div>
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
