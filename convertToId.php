<?php

include 'connect.php';
$name = $_GET["name"];

echo urldecode($name);

$sql = "SELECT * FROM `games` WHERE `name` = '$name'";
    $result = $conn->query($sql);
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $id= $row["id"];
            header("location: info.php?id=".$id);
        }
    } else {
        echo "Not found";
        header("location: index.php");
    }
?>