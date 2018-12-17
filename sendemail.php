   <?php 
  
if($_POST)
{
    $ToEmail = 'info@vidiyalliberatedtrust.com'; 
    $EmailSubject = 'Enquiry Mail'; 
    $mailheader = "From: ".$_POST["name"]."\r\n"; 
    $mailheader .= "Reply-To: ".$_POST["email"]."\r\n"; 
    $mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
    $MESSAGE_BODY .= "Name: ".$_POST["name"]."<br>";
    $MESSAGE_BODY .= "Email: ".$_POST["email"]."<br>";
    $MESSAGE_BODY .= "Mobile: ".$_POST["phone"]."<br>";
    $MESSAGE_BODY .= "Message: ".nl2br($_POST["message"])."<br>";
$retval =    mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 


   
   
   if( $retval == true )  
   {
      //echo "Message sent successfully...";
	  
	  echo("  <script>   alert('Message sent successfully...');      </script> ");
 echo ("<script>     window.location = 'contact.html';     </script>");
	  
	  
	  
	  //header("Location: http://www.nvronlifescience.com/thankyou.html");
   }
   else
   {
     // echo "Message could not be sent...";
	  
	  
	  echo("  <script>   alert('Message couldnot be sent...');      </script> ");
 echo ("<script>     window.location = 'contact.html';     </script>");
   
   }
   }

?> 

 

   
   
   
    <?php
	/*
	if ($_POST)
	{
	
   $to = "info@nvronlifescience.com";
   $subject = "Nvron Contact Us";
   $message1 = "The following user can contact with nvron comtact page .";
   $header = "From:info@nvronlifescience.com \r\n";
   $fn1=$_POST['fn'];
   
  
    $ln1=$_POST['ln'];
	 $email1=$_POST['email'];
	  $message12=$_POST['message'];
   $retval = mail ($to,$subject,$message1,$header,$fn1,$ln1,$email1,$message12);
   
   
   if( $retval == true )  
   {
      //echo "Message sent successfully...";
	  
	  echo("  <script>   alert('Message sent successfully...');      </script> ");
 echo ("<script>     window.location = 'contact-us.html';     </script>");
	  
	  
	  
	  //header("Location: http://www.nvronlifescience.com/thankyou.html");
   }
   else
   {
     // echo "Message could not be sent...";
	  
	  
	  echo("  <script>   alert('Message couldnot be sent...');      </script> ");
 echo ("<script>     window.location = 'contact-us.html';     </script>");
   
   }
   }*/
  
?>
