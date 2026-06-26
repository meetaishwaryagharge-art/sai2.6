<?php

$rating = $_POST['rating'];
$feedback = $_POST['feedback'];

$to = "connect@hexastra.in";
$subject = "New Customer Feedback";

$message = "
Rating: $rating

Feedback:
$feedback
";

$headers = "From: noreply@yourdomain.com";

mail($to, $subject, $message, $headers);

echo "success";

?>