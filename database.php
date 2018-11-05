<?php 

class database{

	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "dbta9"; //isi sesuai nama database anda

	function __construct(){
		$this->conn = mysqli_connect($this->host, $this->uname,$this->pass,$this->db);
		//mysqli_select_db($this->db);
		 //buatlah koneksi secara OOP
		
	}

	function tampil_data(){
		$data = mysqli_query($this->conn,"SELECT  * from tbta9");


		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;

	}

	function input($Nama,$Alamat,$Usia,$Genre,$Wisata){
		$Genre = implode(", ", $Genre);
		$Wisata = implode(", ", $Wisata);
		mysqli_query($this->conn,"INSERT  into tbta9 values ('','$Nama','$Alamat','$Usia','$Genre','$Wisata')");
		
		//buatlah method input
		//query inset into user
	}

	function hapus($Id){
		mysqli_query($this->conn,"DELETE from tbta9 where Id ='$Id'") ;
		

		//buatlah method hapus
		//query delete from id where id ='$id'
	}

	function edit($Id){
		$data = mysqli_query($this->conn,"SELECT * from tbta9 where Id='$Id'");
		//lengkapilah method edit
		//query select from user where id ='$id'
		while($d = mysqli_fetch_array($data)){
			$hasil[] = $d;
		}
		return $hasil;
	}

	function update($Id,$Nama,$Alamat,$Usia,$Genre,$Wisata){
		$Genre = implode(", ", $Genre);
		$Wisata = implode(", ", $Wisata);
		mysqli_query($this->conn,"UPDATE tbta9 set Nama='$Nama',Alamat='$Alamat',Usia='$Usia' Genre='$Genre' Wisata='$Wisata' WHERE Id='$Id'");
		//buatlah method update
		//query update user set blablabla where id='$id'
	}

} 

?>