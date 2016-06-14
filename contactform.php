<?php
$yname 				= $_REQUEST['yourname'];
$yemail 			= $_REQUEST['youremail'];
$companyn			= $_REQUEST['comapnyname'];
$cpname 			= $_REQUEST['comapnypersonname'];
$cpemail 			= $_REQUEST['comapnypersonemail'];
$message  			= $_REQUEST['message'];






$to 	 = "zohebdauva@gmail.com";
$subject = "Green Tech Lab Refer Form";

$message =" 
<html>
<head>
<title></title>
</head>

<body>


<table width='570' height='212' style='text-align:left' >
<tr><td>Sender Name </td><td>$yname</td></tr>
<tr><td>Sender Email</td><td>$yemail</td></tr>
<tr><td>Company Name</td><td>$companyn</td></tr> 
<tr><td>Contact Person's Name</td><td>$cpname</td></tr> 
<tr><td>Contact Person's Email Address</td><td>$cpemail</td></tr>
<tr><td>Message</td><td>$message</td></tr>



 
</table>


</body>
</html>";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers

//$headers .= $yname. "\r\n";//<zohebdauva@gmail.com>
//$headers .= 'From: Green Tech Lab<info@greentechlab.com>'. "\r\n";//<zohebdauva@gmail.com>
//$headers .= 'Bcc: andrewzack8@gmail.com' . "\r\n";

$mail_sent = mail($to,$subject,$message,$headers);
	//mail area end 

if($mail_sent){

	
	echo 1;
	
}

?>