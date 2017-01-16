<?php  
	include 'dbConnect.php';

	$nama =isset($_POST['txtNama']) ? $_POST['txtNama'] : "null";
	//isset untuk menanyakan apakah ada datanya atau tidak. 
	$alamat =isset($_POST['txtAlamat']) ? $_POST['txtAlamat'] : "null";
	$ukuran =isset($_POST['txtUkuran']) ? $_POST['txtUkuran'] : "null";
	$jenis = isset($_POST['Jenis']) ? $_POST['Jenis'] : "null";
	$email = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : "null";
	$noHp = isset($_POST['txtNo']) ? $_POST['txtNo'] : "null";
	$deskripsi = isset($_POST['Deskripsi']) ? $_POST['Deskripsi'] : "null";
	$img = isset($_FILES['imgContoh']['name']) ? $_FILES['imgContoh']['name'] : "placeholder-man.png";

 
	move_uploaded_file($_FILES['imgContoh']['tmp_name'], 'img/' . basename($img));
 	
	$kueri = "INSERT INTO tbl_order(nama, alamat, email, no_hp ,ukuran_desain, jenis, deskripsi , gambar) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

	$masuk = $db->prepare($kueri);
	$masuk->execute(array($nama, $alamat,$email, $noHp, $ukuran, $jenis, $deskripsi, basename($img)));

	header("Location:agreement.php");
?>