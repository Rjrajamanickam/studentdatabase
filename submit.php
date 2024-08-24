<?php

$name = $_POST['name'];
$password = $_POST['password'];

$con = mysqli_connect("localhost", "root", "", "sample");

$sql = "INSERT INTO demp (name, password) VALUES ('$name', '$password')";

$r = mysqli_query($con, $sql);
if ($r) {
    echo "Success!";
    echo '<br><a href="home.html">Go to Home</a>';
} else {
    echo "Failed!";
    echo '<br><a href="home.html">Try Again</a>';
}

?>

