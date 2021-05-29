<?php
    include 'db.php';
    $NAME=$_POST["NAME"];
    $DATE=$_POST["DATE"];
    $TAGS=$_POST["TAGS"];
    $sql="insert into WORDS (NAME,DATE,TAGS) values ('$NAME','$DATE','$TAGS')";
    $result = $conn->query($sql);
    $conn->close();
    header("location: index.php");
?>