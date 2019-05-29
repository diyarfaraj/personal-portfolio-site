<?php
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject'])) {
 $name = $_POST['fname'];
 $email = $_POST['email'];
 $subject = $_POST['subject'];
 $to = 'diyar.faraj@gmail.com';
 $subject = "New Message on diyarfaraj.com";
 $body = '<html>
    <body>
     <h2>Title</h2>
     <br>
     <p>Name:<br>'.$name.'</p>
     <p>Email:<br>'.$email.'</p>
     <p>Email:<br>'.$subject.'</p>

    </body>
   </html>';

//headers
$headers  = "From: ".$name." <".$email.">\r\n";
$headers .= "Reply-To: ".$email."\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset-utf-8";

//send
$send = mail($to, $subject, $body, $headers);
if ($send) {
 echo '<br>';
 echo "Success. Thanks for Your Message.";
} else {
 echo 'Error.';
}
}
?>

