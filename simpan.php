<?php

require "connection.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];

$query = mysqli_query($conn, "");
mysqli_close($conn);
?>