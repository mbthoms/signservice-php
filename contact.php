<?php
    $title = "Contact Us - Sign Service Label Products";
    require_once("head.php");
    require_once("header.php");
?>



<div id="page-content" class="container">
      <div class="page-header">
          <h1>Contact Us</h1>
      </div>
      <div class="row">
          <section class="col-sm-12 col-md-12 col-lg-12">
              <p>We would like to hear from you, you can use the contact form below or use any on the contact information below to contact us.</p>
          </section>
      </div>
      <!-- ================================================================================================
           Contact Information
           ================================================================================================ -->
      <div class="row contact-area">
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
      <div class="row">
          <!-- =======================================================================
              Contact Form
              ======================================================================== -->
          <section class="col-sm-12 col-md-6 col-lg-6">
              <div class="row">
                  <div class="col-sm-12 col-md-6 col-lg-12 text-center margin-top-footer">
                      <span class="fa fa-clock-o fa-3x text-center" aria-hidden="true"></span>
                      <h3>Hours of Operation</h3>
                      <div class="padding-top">
                          <div class="col-sm-12 col-md-12 col-lg-12 hours">
                              <p>Monday: 8:00 AM – 5:00 PM</p>
                              <p>Tuesday: 8:00 AM – 5:00 PM</p>
                              <p>Wednesday: 8:00 AM – 5:00 PM</p>
                              <p>Thrusday: 8:00 AM – 5:00 PM</p>
                              <p>Friday: 8:00 AM – 5:00 PM</p>
                              <p>Saturday: Closed</p>
                              <p>Sunday: Closed</p>
                              <p>Holidays: Closed</p>
                          </div>
                      </div>
                  </div>
              </div>
          </section>

        </section>

       <section class="col-sm-12 col-md-6 col-lg-6">
       <h2>Contact Form</h2>
       <?php
// Checks if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LdnW6UUAAAAAE_OAFAdzU4AuAOrOxK8OQAwyiB7',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the CAPTCHA wasn't checked
        echo '<p>Please go back and make sure you check the security CAPTCHA box.</p><br>';
    } else {
        // If CAPTCHA is successfully completed...

        // Paste mail function or whatever else you want to happen here!
        echo '<br><p>CAPTCHA was completed successfully!</p><br>';
    }
} else { ?>

    <!-- FORM GOES HERE -->
    <form action="recaptcha-v2.php" method="post">
      <fieldset>
          <label for="name">Contact Name: <span id="requried_field_star" >*</span></label>
          <input method="post" type="text" name="name" maxlength="50" size="30" class="form-control" required>
      </fieldset>
      <fieldset>
        <label for="company_name">Contact Company Name: <span id="requried_field_star" >*</span></label>
          <input method="post" type="text" name="company_name" maxlength="50" size="30" class="form-control" required>
      </fieldset>
      <fieldset>
          <label for="email">Contact Email: <span id="requried_field_star" >*</span></label>
          <input method="post" type="text" name="email" maxlength="80" size="30" class="form-control" required>
      </fieldset>
      <fieldset>
          <label for="phone_number">Contact Phone Number: <span id="requried_field_star" >*</span></label>
          <input method="post" type="text" name="phone_number" maxlength="30" size="30" class="form-control" required>
      </fieldset>

      <fieldset>
          <label for="fax">Contact Fax: <span id="requried_field_star" >*</span></label>
          <input method="post" type="text" name="fax" maxlength="30" size="30" class="form-control"></input>
      </fieldset>
      <fieldset>
          <label for="message">Message: <span id="requried_field_star" >*</span></label>
          <textarea method="post" name="message" maxlength="1000" cols="30" rows="10" class="form-control" required></textarea>
      </fieldset>

        <div class="g-recaptcha" data-sitekey="6LdnW6UUAAAAAJ5JU-ecUoKxUAqknKl2lHj6P3hr"></div>
        <br>
        <input type="submit" class="btn btn-primary" id="submit" value="Send">
    </form>

<?php } ?>
</section>
          <section class="col-sm-12 col-md-12 col-lg-1"></section>
          <!-- /Contact Form -->

          <!-- Google Maps/ Google Maps API -->
          <section class="col-sm-12 col-md-12 col-lg-12">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.795086054539!2d-79.9042284!3d43.6524315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b12b3a42c2e8d%3A0x428b2bad148b06ce!2sSign+Service+Label+Product!5e0!3m2!1sen!2sca!4v1441890814702" width="100%" height="300" frameborder="0" style="border: 0" allowfullscreen></iframe>
          </section>
          <!-- /Google Maps/Google Maps API. -->
      </div>
  </div>
  <!-- /.container -->



<!--Adding Footer -->
<?php
    require_once("footer.php");
  ?>
