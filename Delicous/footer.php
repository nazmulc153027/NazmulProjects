<?php global $nazmul;?>
 <footer id="footer">
    <div class="container">
      <h3><?php echo $nazmul['footer-title']?></h3>
      <p><?php echo $nazmul['footer-content']?></p>
      <div class="social-links d-flex justify-content-center">
        <?php dynamic_sidebar('footerid')?>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo $nazmul['developer-name']?>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Developed by MD.NAZMUL HUDA<a href="<?php echo $nazmul['developer-url']?>"> WordpressTheme.</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
<!--
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/jquery/jquery.min.js"></script>
  
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php //echo get_template_directory_uri();?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
-->
  <!-- Template Main JS File -->
 <script src="<?php echo get_template_directory_uri();?>/assets/js/main.js"></script>

<?php wp_footer();?>
</body>

</html>