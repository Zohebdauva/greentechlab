<?php
$name 			= $_REQUEST['fullname'];
$company 		= $_REQUEST['companyname'];
$email			= $_REQUEST['youremail'];
$phone 			= $_REQUEST['yourcontact'];
$message 		= $_REQUEST['message'];






$to 	 = "zohebdauva@gmail.com";
$subject = "Green Tech Lab Request a Quote";

$message =" 
<html>
<head>
<title></title>
</head>

<body>


<table width='570' height='212' style='text-align:left' >
<tr><td>Full Name</td><td>$name</td></tr>
<tr><td>Company Name</td><td>$company</td></tr>
<tr><td>Email</td><td>$email</td></tr> 
<tr><td>Phone No</td><td>$phone</td></tr> 
<tr><td>Subject</td><td>$message</td></tr>



 
</table>


</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers

$headers .= 'From: Green Tech Lab<info@greentechlab.com>'. "\r\n";//<zohebdauva@gmail.com>
$headers .= 'Bcc: andrewzack8@gmail.com' . "\r\n";

$mail_sent = mail($to,$subject,$message,$headers);
	//mail area end 

if($mail_sent){

	
	echo 1;
	
}

?>