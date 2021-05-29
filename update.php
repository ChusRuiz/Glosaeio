<?php
include 'db.php';
$id = $_POST['id'];
$name=$_POST['NAME'];
$date=$_POST['DATE'];
$tags=$_POST['TAGS'];
$sql="update WORDS set NAME='$name', DATE='$date', TAGS='$tags' where id='$id'";
$result=$conn->query($sql);
$conn->close();
header("location: index.php");
?>