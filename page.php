<?php get_header(); ?>

  <div class="row">

    <div class="col-md-4">

      <h1><?php the_title(); ?></h1>

    </div>

    <div class="col-md-8">

      <main role="main">
        <!-- section -->
        <section>

        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

          <!-- article -->
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php the_content(); ?>

            <br class="clear">

            <?php edit_post_link(); ?>

          </article>
          <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>

          <!-- article -->
          <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

          </article>
          <!-- /article -->

        <?php endif; ?>

        </section>
        <!-- /section -->
      </main>

    </div>

  </div>

<?php get_footer(); ?>