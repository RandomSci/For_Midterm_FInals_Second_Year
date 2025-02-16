<!DOCTYPE html>
<html lang="en">
    <style>
        * {
            background-color: black;
            color: gray;
            text-align: center;
            
        }
        h2 {
            color: white;
            font-size: xx-large;
        }
        span {
            font-size: xx-large;
            background-color: orange;
            margin-inline: 3px;
            color: black;
        }
    </style>
<?php
$conn = new mysqli("localhost", "root", "", "For_Midterm_FInals_2nd_Year");

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
}
echo "Connected successfully!<br>";

$fn = $_POST["fn"];
$ls = $_POST["ls"];
$email = $_POST["email"];
$pass1 = $_POST["pass1"];
$pass2 = $_POST["pass2"];

$insert = mysqli_query($conn, "INSERT INTO Register (FIRST_NAME, LAST_NAME, PASSWORD, PASSWORD2, EMAIL)
                               VALUES ('$fn', '$ls', '$pass1', '$pass2', '$email')");


if ($insert) {
    echo "<div><h2>pron<span>hub</span></h2></div>";
    echo "<center><h1>More information:</h1> <br></center>";
    echo "<center>firstname: <h1 style='color: red';>$fn</h1></center> <br>
          <center>lastname: <h1 style='color: green';>$ls</h1> </center><br>
          <center>email: <h1 style='color: blue';>$email</h1></center> <br>"; 

} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
?>
</html>