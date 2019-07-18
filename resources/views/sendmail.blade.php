<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_phone = $_POST['phonenumber'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Your Name and email are mandatory fields!";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Wrong email, kindly check on it!";
    exit;
}

$email_from = "$visitor_email";//<== update the email address
$email_subject = "New Comment or Complaint";
$email_body = "You have received a new message from the user $name.\n" & "phone number is $visitor_phone".
    "Here is the message:\n $message".
    
$to = "beautybymawia@gmail.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: thank-you.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 