<?php
include 'db.php';
$sql="delete from WORDS";
$conn->query($sql);
$conn->close();
header("location: index.php");
?>