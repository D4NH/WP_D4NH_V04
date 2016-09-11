<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" rel="shortcut icon">

    <meta http-equiv="X-UA-Compatible" content="IE=10,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>. Je vind hier informatie over mij, mijn werk en hobbies zoals fotografie en gadgets.">

    <?php wp_head(); ?>
    <script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
        assets: '<?php echo get_template_directory_uri(); ?>',
        tests: {}
      });
    </script>
  </head>
  <body <?php body_class(); ?>>

    <!-- nav -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="<?php echo home_url(); ?>">
              <i class="fa fa-home"></i>
            </a>
          </div>
          <div id="navbar" class="navbar-right navbar-collapse collapse">
            <?php html5blank_nav(); ?>
          </div><!--/.nav-collapse -->
        </div>
      </div><!--/.container -->
    </nav>
    <!-- /nav -->
