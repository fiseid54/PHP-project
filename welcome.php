<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <h1>Welcome To PHP</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="calculation.php">Calculation</a></li>
            <li><a href="registration.php">Registration</a></li>
        </ul>
    </nav>

<?php

 if($_SERVER["REQUEST_METHOD"] == "POST"){

    $fullname= $_POST['fullname'];
    $age= $_POST['age'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];

    echo "<p> Full Name: $fullname</p>";
    echo "<p> Age:$age</p>";
    echo "<p> Email: $email</p>";
    echo "<p> Phone: $phone</p>";

    if ( $age< 15) {

        echo"<p>Message: You are young";
    }elseif( $age>=15 &&  $age<25){

        echo"<p>Message: You are at a great age";
    }else {

        echo"<p>Message: Experiance count";
    }

 }
?>
   
</body>
</html>