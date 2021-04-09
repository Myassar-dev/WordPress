<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package getgroup
 */

?>
 
 

 <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Stated</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">News & Events</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>

            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
            </div>

            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.3.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery-ui.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/popper.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/owl.carousel.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.stellar.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.countdown.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.easing.1.3.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.fancybox.min.js"></script>
  <script src="<?php bloginfo('template_directory') ?>/js/jquery.sticky.js"></script>


  <script src="<?php bloginfo('template_directory') ?>/js/main.js"></script>


<?php wp_footer(); ?>

</body>
</html>
