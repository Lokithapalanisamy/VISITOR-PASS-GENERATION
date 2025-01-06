<html lang="en">

<head>
    <title>Visitor Details</title>
    <link rel="shortcut icon" href="/images/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Calistoga&display=swap');

        #p03 {
            font-family: 'Calistoga', cursive;
            font-size: 4vw;
            color: black;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>

    <p id="p03"> VISITORS DETAILS</p>

    <div class="table-responsive">

        <table class="table table-striped table-hover">


            <?php
            include("connect.php");

            $sql = "SELECT * FROM visitors";
            $result = mysqli_query($conn, $sql);

            echo "<b> <tr> <th> UserId </th> <th> Name </th> <th> Email </th><th> Phone</th> <th> Host Name </th> <th> Host Email </th><th> Host Phone</th> <th>Arrival</th> <th> Departure </th> </tr></b>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr> <td> " . $row["UserId"] . "</td><td> " . $row["Username"] . " </td><td>" . $row["Email"] . " </td><td>" . $row["Phone"] . "</td> <td> " . $row["HostName"] . " </td><td>" . $row["HostEmail"] . " </td><td>" . $row["HostPhone"] . "</td> <td>" . $row["Arrival"] . " </td><td>" . $row["Departure"] . "</td> </tr>";
            }


            echo "</table>";
            ?>
    </div>
</body>

</html>