
<?php
include("connect.php");
include("function.php");
?>

<?php
// define variables and set to empty values
$Name = $Email = $Phone = $HostName = $HostEmail = $HostPhone = $Address = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Name = test_input($_POST["Name"]);
  $Email = test_input($_POST["Email"]);
  $Phone = test_input($_POST["Phone"]);
  $HostName = test_input($_POST["HostName"]);
  $HostEmail = test_input($_POST["HostEmail"]);
  $HostPhone = test_input($_POST["HostPhone"]);
  $Address = test_input($_POST["Address"]);
}

function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
date_default_timezone_set('Asia/Kolkata');

$Arrive = date('Y/m/d H:i:s');

$Depart = "Inside";


if ($Email != $Phone) {
  $sql1 = "SELECT * FROM visitors";

  $sql1 = mysqli_query($conn, $sql1);

  //echo $sql1->num_rows."<br>";

  $number = 2100 + $sql1->num_rows;

  //echo $number . "<br>";

  $UserId = "Innovacer" . $number;

  $sql3 = "INSERT INTO visitors (Username ,UserId,Email,Phone,HostName,HostEmail,HostPhone,Address, Departure, Arrival) VALUES ('$Name','$UserId', '$Email', '$Phone','$HostName','$HostEmail','$HostPhone', '$Address','$Depart', '$Arrive')";

  //echo $sql3;

  if (mysqli_query($conn, $sql3) == TRUE) {
    $message = "Thank You for registering. Proceed to your visit. Your UserId is " . $UserId . " You will also receive a mail with your UserID. Check your inbox (Spam too) ";

    // echo $message, "Your UserID is ", $UserId;
    send_email_visitor($Name, $UserId, $Email, $Phone, $Arrive);

    send_email_host($Name, $UserId, $Email, $Phone, $Arrive, $HostName, $HostEmail);

    //echo 'Email sent.<br>';
    echo "<script type='text/javascript'>;alert('$message');
    window.location.href='index.html';
    </script>";
  } else {
    //printf("error: %s\n", mysqli_error($conn)); //very important to check error

    $message = "Oops, the server seems to be too busy. Our bad. Please try again.";
    echo "<script type='text/javascript'>;alert('$message');window.location.href='index.html';</script>";
  }
} else {
  $message = "Please Enter Email and Phone No. correctly";
  echo "<script type='text/javascript'>;alert('$message');window.location.href='index.php';</script>";
}


?>