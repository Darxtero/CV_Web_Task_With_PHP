<?php
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="CSS.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <meta charset="UTF-8">



</head>
<body>

<div>
    <p><b>Name :</b><?php echo $_GET["Name"]; ?></p>
    <p><b>Phone number :</b><?php echo $_GET["Phone"]; ?></p>
    <p><b>Email :</b><?php echo $_GET["Email"]; ?></p>
    <p><b>Message :</b><?php echo $_GET["limitedtextarea"]; ?></p>
</div>


<?php
include 'footer.php';
?>
</body>
</html>