<?php
$to = 'root@localhost';
$subject = 'Hello from XAMPP!';
$message = 'This is a test';
$headers = "From:root@localhost";
if (mail($to, $subject, $message, $headers)) {
   echo "SUCCESS";
} else {
   echo "ERROR";
}
?>
