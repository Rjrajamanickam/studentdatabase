<?php

$id = $_POST['id'];
$name = $_POST['name'];
$roll=$_POST['rollnumber'];
$number=$_POST['number'];

$con = mysqli_connect("localhost", "root", "", "sample");

$sql = "INSERT INTO st (id,name,rollnumber,number) VALUES ('$id', '$name','$roll','$number')";

$r = mysqli_query($con, $sql);
if ($r) {
    echo "Success!";
   
} else {
    echo "Failed!";
   
}

?>