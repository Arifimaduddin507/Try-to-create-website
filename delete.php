<?php
include 'koneksi.php';
if(isset($_GET['Nama'])){
    $delete = mysqli_query($conn,"DELETE FROM ac WHERE Nama='".$_GET['Nama']."' ");
    header('location:index.php');

}
?>