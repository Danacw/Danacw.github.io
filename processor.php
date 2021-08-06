<?php
include_once('config.php');
//sanitize all post vars
$name=postgresDB_string($con, $POST['nm1']);
$name_clean = filter_var($name, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$email=postgresDB_string($con, $POST['em1']);
$email_clean = filter_var($email, FILTER_SANITIZE_EMAIL, FILTER_FLAG_STRIP_HIGH);

$subject=postgresDB_string($con, $POST['sub1']);
$subject_clean = filter_var($subject, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

$message=postgresDB_string($con, $POST['ms1']);
$message_clean = filter_var($message, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

//insert into database
postgres_query($con, "INSERT INTO contact_me(`name`, `email`, `subject`, `message`) 
VALUES('$name_clean', '$email_clean', '$subject_clean', '$message_clean')");

//email form to yourself
$to='danacwalker@outlook.com';
$headers = "MIME-Version: 1.0"."\r\n";

//.= contcatenates headers below to MIME-Version 1.0
$headers .= "Content-type: text/html;charset=UTF-8". "\r\n";
$headers .= 'From: <danacw48@gmail.com>'."\r\n";
$message .= '<table width="100%" border ="1" cellspacing="1" cellpadding="2">
<tr><td colspan="2">Someone contacted you on your website</td></tr>
<tr><td>Name</td><td>'.$name_clean.'</td></tr>
<tr><td>Email</td><td>'.$email_clean.'</td></tr>
<tr><td>Subject</td><td>'.$subject_clean.'</td></tr>
<tr><td>Message</td><td>'.$message_clean.'</td></tr>
</table>';
mail($to,$message,$headers);

//send message back to AJAX
echo '<div class="alert alert-success"> Thank you for contacting me. I will get back to you shortly.</div>';

$con->close()
?>

//https://www.youtube.com/watch?v=y4M_u--t5YA 