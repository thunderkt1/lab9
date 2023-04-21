<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php
if ($_POST) {
    $size = $_POST["size"];
    echo ("<table>");
    echo ("<tr>");
    echo("<th> </th>");
    for ($i = 1; $i <= $size; $i++) {
        echo ("<th>".$i."</th>");
    }

    echo ("</tr>");
    for ($i = 1; $i <= $size; $i++){
        echo ("<tr>");
        echo ("<th>".$i."</th>");
        for ($j = 1; $j <= $size; $j++) {
            echo ("<th>".$i*$j."</th>");
        }
        echo ("</tr>");
    }
    echo ("</table>");
}
?>