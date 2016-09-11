<?php get_header(); ?>

  <?php

  $home = array( 'pagename' => 'home' );
  $about = array( 'pagename' => 'over-mij' );
  $blog = array( 'pagename' => 'blog' );
  $webdesign = array( 'pagename' => 'webdesign' );

  ?>

  <div class="row">

    <div class="col-md-4">

      <?php

      // The Query
      $the_query = new WP_Query( $home );

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
      $the_query = new WP_Query( $home );

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

  <br/><br/>

  <div class="row">

    <div class="col-md-4">

      <?php

      // The Query
      $the_query = new WP_Query( $about );

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
      $the_query = new WP_Query( $about );

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

  <br/><br/>

  <div class="row">

    <div class="col-md-4">

      <?php

      // The Query
      $the_query = new WP_Query( $blog );

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
      $the_query = new WP_Query( $blog );

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

  <br/><br/>

  <div class="row">

    <div class="col-md-4">

      <?php

      // The Query
      $the_query = new WP_Query( $webdesign );

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
      $the_query = new WP_Query( $webdesign );

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

<?php get_footer(); ?>