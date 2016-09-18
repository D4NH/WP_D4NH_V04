      <br/><br/>

      <div class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-12">

              <!-- footer -->
              <footer>

                <!-- copyright -->
                <small class="copyright">
                  &copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>
                </small>
                <!-- /copyright -->

                <a class="pull-right" href="//www.linkedin.com/in/nguyendtd" target="_blank"><i class="fa fa-linkedin-square"></i></a>
                <a class="pull-right" href="//www.facebook.com/nguyendtd" target="_blank"><i class="fa fa-facebook-square"></i></a>

              </footer>
              <!-- /footer -->

            </div>

          </div>
        </div>
      </div>

    <div class="footernav">
      <div class="container">
        <ul class="justify">
          <li data-toggle="tooltip" data-placement="top" title="Home"><a href="<?php bloginfo('url'); ?>"><i class="fa fa-home"></i></a></li>
          <li data-toggle="tooltip" data-placement="top" title="Over mij"><a href="<?php bloginfo('url'); ?>/over-mij/"><i class="fa fa-user"></i></a></li>
          <li data-toggle="tooltip" data-placement="top" title="Blog"><a href="<?php bloginfo('url'); ?>/blog/"><i class="fa fa-book"></i></a></li>
          <!-- <li data-toggle="tooltip" data-placement="top" title="Fotografie"><a href="<?php bloginfo('url'); ?>/fotografie/"><i class="fa fa-camera"></i></a></li> -->
          <li data-toggle="tooltip" data-placement="top" title="Webdesign"><a href="<?php bloginfo('url'); ?>/webdesign/"><i class="fa fa-globe"></i></a></li>
        </ul>
      </div>
    </div>

    <?php wp_footer(); ?>

    <script>
      (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
      (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
      l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-50175354-1');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');
    </script>

  </body>
</html>
