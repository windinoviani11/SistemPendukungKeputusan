<?php
include('koneksi.php');

$id = $_POST["id"];
$title = mysqli_real_escape_string($kon, $_POST["title"]);
$desc = mysqli_real_escape_string($kon, $_POST["desc"]);
$query = "UPDATE about_us SET `title` = '$title', `desc` = '$desc' WHERE id = $id";

if (mysqli_query($kon, $query)) {
    header("location: about-us.php");
} else {
    echo $query;
    //echo $id, $title, $desc;
};
