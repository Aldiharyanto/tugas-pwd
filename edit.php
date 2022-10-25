<?php 

require "connection.php";

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = mysqli_query($conn, "UPDATE mhs SET nim = '$nim', nama = '$nama', alamat = '$alamat', nohp = '$nohp', email = '$email' WHERE id = $id");

header("Location:index.php");

?>