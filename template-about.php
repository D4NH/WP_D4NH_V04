<?php /* Template Name: About Template */ get_header(); ?>

  <?php
      $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
      $img = $img[0];
    ?>

  <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1>Over mij</h1>
              <h2>Wie ben ik?</h2>
              <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
          </div>
      </div>
  </div>

  <div class="about-page">

    <div id="intro" class="container">
      <div class="row intro">

        <div class="col-md-offset-3 col-md-6">
          <?php

            // The Query
            $the_query = new WP_Query( array( 'pagename' => 'over-mij' ) );

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
          <h2 class="sectiontitle">That's me!</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-offset-2 col-md-4">
          <img class="afbeelding shadow img-responsive" src="https://www.danhnguyen.nl/wp-content/uploads/DSC07798-1024x575.jpg" alt="Danh Nguyen">
        </div>
        <div class="col-md-4">
          <img class="afbeelding shadow img-responsive" src="https://www.danhnguyen.nl/wp-content/uploads/DSC06918-1024x575.jpg" alt="Danh Nguyen">
        </div>
      </div>
      <div class="row other">
        <div class="col-md-12">
          <h2 class="sectiontitle">Expertise</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-offset-2 col-md-8">
          <?php echo types_render_field("expertise", array("output"=>"html")); ?>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-12">
          <h2 class="sectiontitle">Technieken</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-offset-2 col-md-8">
          <?php echo types_render_field("technieken", array("output"=>"html")); ?>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-offset-2 col-md-4">
          <h2 class="sectiontitle">Werkervaring</h2>
          <?php echo types_render_field("werkervaring", array("output"=>"html")); ?>
        </div>
        <div class="col-md-4">
          <h2 class="sectiontitle">Opleidingen</h2>
          <?php echo types_render_field("opleidingen", array("output"=>"html")); ?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <h2 class="sectiontitle">Contact</h2>
        </div>
      </div>
      <div class="row other">
        <div class="col-md-offset-2 col-md-8">
          <?php echo types_render_field("contact", array("output"=>"html")); ?>
        </div>
      </div>
    </div>

  </div>

<?php get_footer(); ?>