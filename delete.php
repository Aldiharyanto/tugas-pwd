<?php
include_once("connection.php");

$id = $_GET['id'];

$hasil = mysqli_query($conn, "DELETE FROM mhs WHERE id='$id'");

header("Location:index.php");