<?php
ob_start();

function send_email_visitor($Username, $UserId, $Email, $Phone, $Arrival)
{
	$replyto = $Email;
	$replysubject = "Have a nice visit in Innovaccer!";

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Gaurav Gupta <donotreply@innovacer.com>' . "\r\n";

	$replymessage = '';

	$replymessage .= '
    <html>
    <head>
        <title>Welcome!</title>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">

    </head>
    <body style="font-family:"Raleway"">
        <!--<h1>Thanks you for joining with us!</h1>-->';
	$replymessage .= 'Hello there ';
	$replymessage .= $Username;
	$replymessage .= ',<br><br>';
	$replymessage .= 'We are glad to know that you have just registered in visitors portal.<br><br>';
	$replymessage .=  'Here are the details<br>';
	$replymessage .= 'Your UserID is <b>';
	$replymessage .= $UserId;
	$replymessage .= '</b><br><br>';
	$replymessage .=  '<center><table style="border: 2px dashed #FB4314; width: 100%; height: 200px; margin:20px;" cellspacing="10px">
			<tr align="center">
				<th colspan="2">Thanks for Visiting</th>
			</tr>
			<tr align="center">
                <th>CA ID:</th><td><i>';
	$replymessage .= $UserId;
	$replymessage .= '</i></td>
            </tr>
            <tr align="center">
                <th>Name:</th><td>';
	$replymessage .=  $Username;
	$replymessage .= '</td>
            </tr>
            <tr align="center" >
                <th>Email:</th><td>';
	$replymessage .= $Email;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>CONTACT:</th><td>';
	$replymessage .= $Phone;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Check In:</th><td>';
	$replymessage .= $Arrival;
	$replymessage .= '</td>
            </tr>
		
			<tr align="center">
				<th colspan="2">All the Best !</th>
			</tr>
        </table></center>';
	$replymessage .= 'This e-mail is automated, so please DO NOT reply';
	$replymessage .= '
    </body>
    </html>';


	echo "<br<br> Sending Email<br><br>";

	$check = mail($replyto, $replysubject, $replymessage, $headers);

	echo $check;
}

function send_email_host($Username, $UserId, $Email, $Phone, $Arrival, $HostName, $HostEmail)
{
	$replyto = $HostEmail;
	$replysubject = "You have a new visitor";

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Gaurav Gupta <donotreply@innovacer.com>' . "\r\n";

	$replymessage = '';

	$replymessage .= '
    <html>
    <head>
        <title>Hello!</title>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">

    </head>
    <body style="font-family:"Raleway"">
        <!--<h1>Thanks you for joining with us!</h1>-->';
	$replymessage .= 'Hello there ';
	$replymessage .= $HostName;
	$replymessage .= ',<br><br>';
	$replymessage .= 'We are glad to tell that a new visitor has just arrived to meet you.<br><br>';
	$replymessage .=  'Here are the details<br>';
	$replymessage .= 'Visitor UserID is <b>';
	$replymessage .= $UserId;
	$replymessage .= '</b><br><br>';
	$replymessage .=  '<center><table style="border: 2px dashed #FB4314; width: 100%; height: 200px; margin:20px;" cellspacing="10px">
			<tr align="center">
				<th colspan="2">Thanks for Visiting</th>
			</tr>
			<tr align="center">
                <th>CA ID:</th><td><i>';
	$replymessage .= $UserId;
	$replymessage .= '</i></td>
            </tr>
            <tr align="center">
                <th>Name:</th><td>';
	$replymessage .=  $Username;
	$replymessage .= '</td>
            </tr>
            <tr align="center" >
                <th>Email:</th><td>';
	$replymessage .= $Email;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>CONTACT:</th><td>';
	$replymessage .= $Phone;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Check In:</th><td>';
	$replymessage .= $Arrival;
	$replymessage .= '</td>
            </tr>
		
			<tr align="center">
				<th colspan="2">All the Best !</th>
			</tr>
        </table></center>';
	$replymessage .= 'This e-mail is automated, so please DO NOT reply';
	$replymessage .= '
    </body>
    </html>';


	echo "<br<br> Sending Email<br><br>";

	$check = mail($replyto, $replysubject, $replymessage, $headers);

	echo $check;
}




function send_email_depart($Username, $UserId, $Email, $Phone, $Arrival, $Departure, $HostName, $Address)
{
	$replyto = $Email;
	$replysubject = "Thanks for visiting Innovaccer";

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'From: Gaurav Gupta <donotreply@innovacer.com>' . "\r\n";

	$replymessage = '';
	$replymessage .= '
    <html>
    <head>
        <title>Welcome!</title>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">

    </head>
    <body style="font-family:"Raleway"">
        <!--<h1>Thanks you for joining with us!</h1>-->';
	$replymessage .= 'Hello there ';
	$replymessage .= $Username;
	$replymessage .= ',<br><br>';
	$replymessage .= 'We are glad to know that you have visited our office.<br><br>';
	$replymessage .=  'Here are the details<br>';
	$replymessage .= 'Your UserID is <b>';
	$replymessage .= $UserId;
	$replymessage .= '</b><br><br>';
	$replymessage .=  '<center><table style="border: 2px dashed #FB4314; width: 100%; height: 200px; margin:20px;" cellspacing="10px">
			<tr align="center">
				<th colspan="2">Thanks for Visiting</th>
			</tr>
			<tr align="center">
                <th>User ID:</th><td><i>';
	$replymessage .= $UserId;
	$replymessage .= '</i></td>
            </tr>
            <tr align="center">
                <th>Name:</th><td>';
	$replymessage .=  $Username;
	$replymessage .= '</td>
            </tr>
            <tr align="center" >
                <th>Email:</th><td>';
	$replymessage .= $Email;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>CONTACT:</th><td>';
	$replymessage .= $Phone;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Check In:</th><td>';
	$replymessage .= $Arrival;
	$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Check Out:</th><td>';
	$replymessage .= $Departure;
	$replymessage .= '</td>
            </tr>
		
		<tr align="center">
                <th>Host Name:</th><td>';
	$replymessage .= $HostName;
	$replymessage .= '</td>
            </tr>
            
        <tr align="center">
        <th>Address:</th><td>';
	$replymessage .= $Address;
	$replymessage .= '</td>
            </tr>
		
			<tr align="center">
				<th colspan="2">All the Best !</th>
			</tr>
        </table></center>';
	$replymessage .= 'This e-mail is automated, so please DO NOT reply';
	$replymessage .= '
    </body>
    </html>';


	$check = mail($replyto, $replysubject, $replymessage, $headers);

	echo $check;
}
ob_end_flush();
