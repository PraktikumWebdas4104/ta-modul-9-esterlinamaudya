<?php 
include 'database.php';
$db = new database (); //isi dengan deklarasi method

$aksi = $_GET['aksi'];
 if($aksi == "tambah"){
 	$db->input($_POST['Nama'],$_POST['Alamat'],$_POST['Usia'],$_POST['Genre'],$_POST['Wisata']); //panggil method input dari class database
 	header("location:tampil.php");
 }elseif($aksi == "hapus"){ 	
 	$db->hapus($_GET['id']); //panggil method hapus dari class database
	header("location:tampil.php");
 }elseif($aksi == "update"){
 	$db->update($_POST['Id'],$_POST['Nama'],$_POST['Alamat'],$_POST['Usia'],$_POST['Genre'],$_POST['Wisata']); //panggil method update dari class database
 	header("location:tampil.php");
 }
?>