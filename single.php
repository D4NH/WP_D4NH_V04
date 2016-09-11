<?php get_header(); ?>


  <?php if (have_posts()): while (have_posts()) : the_post(); ?>

  <?php
    $img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "full");
    $img = $img[0];
  ?>

  <div class="fullscreen background" style="background-image:url('<?php echo $img ?>');">
      <div class="content-a">
          <div class="content-b">
              <h1><?php the_title(); ?></h1>
              <h2>
                <span class="date">Posted on <?php the_time('l, j F, Y'); ?> at <?php the_time('H:i'); ?></span>
                <span class="author"><?php _e( 'by', 'html5blank' ); ?> <?php the_author(); ?></span>
              </h2>
              <a href="#intro" title="Lees meer" class="jump"><i class="fa fa-angle-down"></i></a>
          </div>
      </div>
  </div>

  <div id="intro" class="container">

  <div class="row">

    <div class="col-md-12">

      <section>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <!-- <div class="postdetails centeralign">
            <small>
              <span class="date">Posted on <?php the_time('l, j F, Y'); ?> at <?php the_time('H:i'); ?></span>
              <span class="author"><?php _e( 'by', 'html5blank' ); ?> <?php the_author(); ?></span>
            </small>
          </div> -->

          <br/>

          <div class="centeralign">
            <?php the_content(); // Dynamic Content ?>
          </div>

          <br/><br/>

          <div class="navigationarrow">
            <?php if ( is_category('gadgets') || is_category('japan2014') ){ ?>
            <div class="pull-left"><?php previous_post_link('&laquo; %link','%title',FALSE,'') ?></div>
            <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title',FALSE,'') ?></div>
            <?php } else { ?>
            <div class="pull-left"><?php previous_post_link('&laquo; %link','%title','TRUE','') ?></div>
            <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title','TRUE','') ?></div>
            <?php } ?>
          </div>

          <br/><br/><br/>

          <?php comments_template(); ?>

          <br/><br/>

          <div class="navigationarrow">
            <?php if ( is_category('gadgets') || is_category('japan2014') ){ ?>
            <div class="pull-left"><?php previous_post_link('&laquo; %link','%title',FALSE,'') ?></div>
            <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title',FALSE,'') ?></div>
            <?php } else { ?>
            <div class="pull-left"><?php previous_post_link('&laquo; %link','%title','TRUE','') ?></div>
            <div class="pull-right next-post"><?php next_post_link('%link &raquo;','%title','TRUE','') ?></div>
            <?php } ?>
          </div>

        </article>
        <!-- /article -->

      <?php endwhile; ?>

      <?php else: ?>

        <!-- article -->
        <article>

          <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

        </article>
        <!-- /article -->

      <?php endif; ?>

      </section>

    </div>

  </div>

  <script src='https://www.google.com/recaptcha/api.js'></script>

<?php get_footer(); ?>
