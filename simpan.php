<?php

require "connection.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = mysqli_query($conn, "INSERT INTO mhs (id,nama,alamat,nohp,email)values ('$id','$nama','$alamat','$nohp','$email')");
mysqli_close($conn);

header("location:index.php");
?>