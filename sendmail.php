<?php
$to      = 'yaswanth@aptuz.com';
$subject = 'Feedback from ICT ERA';
$message = "Name : ".$_POST['I_Name']." <br> Suggestion : ".$_POST['I_Sug']."<br> Satisfied :".$_POST['I_Sat'];
$headers = 'From: admin@outlook.com' . "\r\n" .
     'Reply-To: vamsi.ravva@gmail.com' . "\r\n" .
     'Content-type: text/html; charset=iso-8859-1'. "\r\n" .
     'X-Mailer: PHP/' . phpversion();
     

mail($to, $subject, $message, $headers);
?>