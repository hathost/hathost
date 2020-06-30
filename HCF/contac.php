<?php
$name = $_POST['name'];
$mailfrom=$_POST['customer_mail']; 
$subject=$_POST['subject'];
$detail=$_POST['detail']; 
$header="from: $name <$mailfrom>";
// Enter your email address
$to ='hsmini24@gmail.com';
$send_contact=mail($to,$subject,$detail,$header);
// Check, if message sent to your email
// display message "We've recived your information"
if($send_contact)
 {
   ?>
     <table border=0 cellspacing=1 cellpadding=1 align=center align=center  style="border:1px solid; background-color: lightblue;  border-color: lightblue;  width:60%;height:60%">
<tr><td>Dear <?php echo $name ?> ,</td></tr>

<tr><td>We welcome your feedback</td></tr>

<tr><td>Your feedback mail has been sent successfuly.</td></tr>
<tr><td>Our team will get back to you.</td></tr>

<tr><td>Regards,</td></tr>
<tr><td>Support Team.</td></tr>
<div align=center STYLE="font-size: 12px; color: #dadada;">
<a href="http://www.hathostbd.com" style="text-decoration:none; color: #dadada;">provided by &nbsp;&nbsp;<b>&copy; HathostBD.com</b></a>
</div>
</table>
 <?php
   }
        else
         {
           ?>  <table border=0 align=center align=center  style="border:1px solid;color:red; background-color: lightblue;  border-color: lightblue;  width:80%;height:80%">
<tr><td>Dear <?php echo $name ?> ,</td></tr>
<tr><td>Sorry Unable to send</td></tr>
<tr><td>Regards,</td></tr>
<tr><td>Support Team.</td></tr>

</table>
         <?php
          }
?>



