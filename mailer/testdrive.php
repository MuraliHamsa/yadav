<head>  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></head>
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);

$mail1 = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
     $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.volkswagenvelloresusee.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'contactus@volkswagenvelloresusee.com';                 // SMTP username
    $mail->Password = 'vellore@123';                           // SMTP password

    $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = '587';                                    // TCP port to connect to
$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
 $mail1->isSMTP();                                      // Set mailer to use SMTP
    $mail1->Host = 'mail.volkswagenvelloresusee.com';  // Specify main and backup SMTP servers
    $mail1->SMTPAuth = true;                               // Enable SMTP authentication
    $mail1->Username = 'contactus@volkswagenvelloresusee.com';                 // SMTP username
    $mail1->Password = 'vellore@123';                           // SMTP password

    $mail1->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
    $mail1->Port = '587';                                    // TCP port to connect to
$mail1->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);
  
    //Recipients
$fname=$_GET['fname'];
$lname=$_GET['lname'];
$postalcode=$_GET['postalcode'];
$city=$_GET['city'];
$telephone=$_GET['telephone'];
$email=$_GET['email'];
$EnterLocation=$_GET['EnterLocation'];
$category=$_GET['category'];
$choices=$_GET['choices'];
$date=$_GET['date'];
$time=$_GET['time'];
$comment=$_GET['comment'];

    $mail->setFrom('youngbvk@gmail.com', 'Volkswagen Vellore');
    $mail->addAddress($email);     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    $body = '<p><strong>Hi '.$fname.'</strong> </p><p>Thank you for contacting us</p>';

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Volkswagen Vellore';
    $mail->Body    = $body;
    $mail->AltBody =  strip_tags($body);
    $mail->send();

    $mail1->setFrom($email, 'Volkswagen Vellore');
    $mail1->addAddress('youngbvk@gmail.com');     // Add a recipient
    // $mail1->addAddress('ellen@example.com');               // Name is optional
    // $mail1->addReplyTo('info@example.com', 'Information');
    // $mail1->addCC('cc@example.com');
    // $mail1->addBCC('bcc@example.com');

    $body = '<table border="1" class="table">
<tr>
<th>First Name</th>
<td>'.$fname.'</td>
</tr>
<tr>
<th>Last Name</th>
<td>'.$lname.'</td>
</tr>
<tr>
<th>Postal Code</th>
<td>'.$postalcode.'</td>
</tr>
<tr>
<th>City</th>
<td>'.$city.'</td>
</tr>
<tr>
<th>Location</th>
<td>'.$EnterLocation.'</td>
</tr>
<tr>
<th>Telephone Number</th>
<td>'.$telephone.'</td>
</tr>
<tr>
<th>Email</th>
<td>'.$email.'</td>
</tr>
<tr>
<th>Model</th>
<td>'.$category.'</td>
</tr>
<tr>
<th>Variant</th>
<td>'.$choices.'</td>
</tr>
<tr>
<th>Date</th>
<td>'.$date.'</td>
</tr>
<tr>
<th>Time</th>
<td>'.$time.'</td>
</tr>
<tr>
<th>Comment</th>
<td>'.$comment.'</td>
</tr>

</table>
';

    //Attachments
    // $mail1->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail1->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail1->isHTML(true);                                  // Set email format to HTML
    $mail1->Subject = 'Volkswagen Vellore Contact US';
    $mail1->Body    = $body;
    $mail1->AltBody =  strip_tags($body);
    $mail1->send();
        // $message="Thank your contacting us we will get back to you soon";
  $message="";
    header("location: ../testdrive.php?message=$message");
}
 catch (Exception $e) {
   $message="Thank your contacting us";
    header("location: ../testdrive.php?message=$message");
}