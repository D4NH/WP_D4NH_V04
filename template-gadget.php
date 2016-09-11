<?php /* Template Name: Gadget Template */ get_header(); ?>

  <div class="row blogpage">
    <div class="col-md-4">

      <?php
      $gadgets = array( 'page_id' => 170 );

      // The Query
      $the_query = new WP_Query( $gadgets );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post(); ?>
          <h1><?php echo get_the_title(); ?></h1>
       <?php }
      } else {
        // no posts found
      }
      /* Restore original Post Data */
      wp_reset_postdata();

      ?>

    </div>
    <div class="col-md-8">

      <?php
      // The Query
      $the_query = new WP_Query( $gadgets );

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

  <br/>
  <br/>

  <div class="row">
    <div class="col-md-offset-4 col-md-8">
      <?php

      // The Query
      $the_query = new WP_Query( array( 'category_name' => 'gadgets', 'posts_per_page' => -1 ) );

      // The Loop
      if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
          $the_query->the_post();
          echo '<div class="row">';
            echo '<div class="col-xs-12">';
              echo '<a href="' . get_permalink() . '">';
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('thumbnail', array('class' => 'pull-left img-space-right img-responsive shadow'));
                }
              echo '</a>';
              echo '<a class="articlelink" href="' . get_permalink() . '"><strong>' . get_the_title() . '</strong></a><br/>';
              echo html5wp_excerpt('html5wp_index');
            echo '</div>';
          echo '</div>';
        }
      } else {
        // no posts found
        echo '<p>Nog geen berichten geplaatst</p>';
      }
      /* Restore original Post Data */
      wp_reset_postdata();

      ?>
    </div>
  </div>

<?php get_footer(); ?>
