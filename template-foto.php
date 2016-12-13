<?php /* Template Name: Foto Template */ get_header(); ?>

  <?php

  $photo = array( 'pagename' => 'fotografie' );

  ?>

  <div class="row">

    <div class="col-md-4">

      <?php

      // The Query
      $the_query = new WP_Query( $photo );

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
      $the_query = new WP_Query( $photo );

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
      <h1>Highlights</h1>
    </div>

    <div class="col-md-8">

        <div class="card shadow">
          <div class="card-image">
            <a href="//500px.com/photo/56536480" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/fotografie/DSC00556.jpg" class="img-responsive" alt="Sony NEX 6"></a>
          </div>
          <div class="card-content">
            <p>21mm | F13 | 10s | ISO100</p>
          </div>
        </div>

        <br/><br/>

        <div class="card shadow">
          <div class="card-image">
            <a href="//500px.com/photo/59881490" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/fotografie/_DSC1021.jpg" class="img-responsive" alt="Sony NEX 6"></a>
          </div>
          <div class="card-content">
            <p>35mm | F20 | 30s | ISO100</p>
          </div>
        </div>

        <br/><br/>

        <div class="card shadow">
          <div class="card-image">
            <a href="//500px.com/photo/60798738" target="_blank"><img src="<?php echo get_bloginfo('template_directory'); ?>/assets/img/fotografie/_DSC1050.jpg" class="img-responsive" alt="Sony NEX 6"></a>
          </div>
          <div class="card-content">
            <p>35mm | F1.8 | 1/320 | ISO100</p>
          </div>
        </div>

        <br/>

        <p>Op <a href="http://500px.com/D4NH" target="_blank">500px.com</a> vind je alle foto's die ik heb gemaakt.</p>

    </div>

  </div>

  <br/><br/>

  <div class="row">

    <div class="col-md-4">
      <h1>Reizen</h1>
    </div>

    <div class="col-md-8">

        <p>
          Ik reis graag en dat hoop ik in de toekomst dan ook veel te kunnen doen. Tijdens deze trips maak ik veel foto's met mijn camera, soms ook iets te veel. Je kunt deze hieronder vinden.
        </p>
        <p>
          <h2>Tokyo/Kyoto/Osaka, Japan</h2>
            Het was altijd al een droom geweest om naar Japan te gaan. Een klasgenoot die ik heb ontmoet in mijn eerste jaar van de HBO opleiding hebben elkaar beloofd als we waren afgestudeerd, samen naar Japan te gaan. In september 2014 zijn we naar 'the land of the rising sun' gereisd! Geinteresseerd wat we allemaal hebben meegemaakt? Lees <a href="//danhnguyen.nl/blog/japan-2014/">ons verhaal</a> terug op de blog.
        </p>

    </div>

  </div>

<?php get_footer(); ?>