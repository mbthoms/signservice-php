<?php
$title ="Sending Message... | Sign Service Label Products";
// Bringing in the head.
require_once('head.php');
$title = "Sent Quote";
// Bringing in the header.
require_once('header.php');

// Quote Form Varibles
$name = $_POST['name'];
$company_name = $_POST['company_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$fax = $_POST['fax'];
$message = $_POST['message'];
//Variable indicating if form is complete or not.
$complete = true;

if (empty($name)) {
      echo '<br/>Name is required.<br/>';
      $complete = false;
    }

if (empty($company_name)) {
      echo '<br/>Company Name is required.<br/>';
      $complete = false;
    }

if (empty($email)) {
      echo '<br/>Email is required.<br/>';
      $complete = false;
    }

if (empty($phone_number)) {
      echo '<br/>Phone Number is required.<br/>';
      $complete = false;
    }

if (empty($message)) {
      echo '<br/>Message is required.<br/>';
      $complete = false;
    }
// if the form is filled out correctly and send the email with the form content.
if ($complete == true) {
  // Emailing Varibles.
  $email_to = "mbthoms@outlook.com";
  $subject_line = "Contact Form Message From: $first_name $last_name";
  $email_message = "You have received a new message from signservice.com \n\n ".
        "Here are the details:\n\n ".
        "First Name: $first_name $last_name \n\n ".
		"Company Name: $company_name \n\n ".
        "Email: $email \n\n ".
        "Phone Number: $phone_number \n\n ".
        "Address: \n\n $address  \n\n ".
        "Message: \n\n $message";

  $headers = "From: Service Service Label Products";
  mail($email_to,$subject_line,$email_message,$headers);
  echo "<body>
    <p>We have receive your message, we will get back to you as quick as we can.<br />
    Thank-you.</p>
  </body>";
}

require_once('footer.php');
?>
