<!--
      =================================================================================================================================
      Footer Section
      =================================================================================================================================
       -->
  <footer class="margin-top-footer">
      <!-- Contact Information ================================================================================================ -->

      <div class="row">
          <section class="container">
              <div class="col-sm-12 col-md-6 col-lg-3 text-center margin-top-footer">
                  <span class="fa fa-map-marker fa-3x text-center"></span>
                  <h3>Address</h3>
                  <div class="padding-top">
                      <a href="https://www.google.ca/maps/place/Sign+Service+Label+Product/@43.6524315,-79.9042284,17z/data=!3m1!4b1!4m2!3m1!1s0x882b12b3a42c2e8d:0x428b2bad148b06ce">14 Todd Road, Georgetown,
                          <br />
                          Ontario, Canada L7G 4R7
                      </a>
                  </div>
              </div>
              <div class="col-sm-12 col-md-6 col-lg-3 text-center margin-top-footer">
                  <span class="fa fa-phone fa-3x text-center" aria-hidden="true"></span>
                  <h3>Phone</h3>
                  <div class="padding-top">
                      <a href="tel:9058732300">(905) 873-2300</a>
                  </div>
                  <div class="padding-top">
                      Toll-Free:<a href="tel:18007872382"> 1(800) 787-2382</a>
                  </div>
              </div>


              <div class="col-sm-12 col-md-6 col-lg-3 text-center margin-top-footer">
                  <span class="fa fa-fax fa-3x text-center" aria-hidden="true"></span>
                  <h3>Fax</h3>
                  <div class="padding-top">
                      <a href="fax:9058737208">(905) 873-7208</a>
                  </div>
                  <div class="padding-top">
                      Toll-Free:<a href="fax:18005831120"> 1(800) 583-1120</a>
                  </div>
              </div>


              <div class="col-sm-12 col-md-6 col-lg-3 text-center margin-top-footer">
                  <span class="fa fa-envelope-o fa-3x text-center" aria-hidden="true"></span>
                  <h3>Email</h3>
                  <div class="padding-top">
                      <a href="mailto:sales@signservice.com">sales@signservice.com</a>
                  </div>
              </div>
          </section>
      </div>

      <div class="text-center copyright-info container">
          <p>Copyright &copy; 1995 - <?php echo date("Y"); ?> <a href="http://signservice.com/">Sign Service Label Products</a> a division of 604731 Ontario Inc.</p>
      </div>
  </footer>
  <!-- Back to Top button -->
  <a href="#" class="back-to-top">Back to Top</a>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <!-- Back to top Button -->
  <script>
      var amountScrolled = 300;

      $(window).scroll(function () {
          if ($(window).scrollTop() > amountScrolled) {
              $('a.back-to-top').fadeIn('slow');
          } else {
              $('a.back-to-top').fadeOut('slow');
          }
      });

      $('a.back-to-top').click(function () {
          $('body, html').animate({
              scrollTop: 0
          }, 700);
          return false;
      });
  </script>
</body>
</html>
