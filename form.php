<?php
$firstname = $_POST['firstname']
$lastname = $_POST['lastname']
$subject = $_POST['formclass']   
    $to = "14768@my.westlakegirls.school.nz";
$subject = "New Message"
    mail ($to, $subject, $message, "From: ". $firstname . $lastname);
echo "Your Message has been sent"
>