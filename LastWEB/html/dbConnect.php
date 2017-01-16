<?php

  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASSWORD', '');
  define('DATABASE', '');

  $db = new PDO("mysql:dbname=" . DATABASE . ";host=" . HOST, USER, PASSWORD);


	  // $kueri = "SELECT * FROM tbl_data";
	  // $kueri = $kon->prepare($kueri);
	  // $kueri->execute();

  $kueri = "SELECT * FROM flatstore";
  $kueri = $db->prepare($kueri);
  $kueri->execute();

  $datas = array();
  while ($row = $kueri->fetch()){
    $datas[] = array(
      'nama' => $row['nama'],
      'alamat' => $row['alamat'],
      'email' => $row['email'],
      'no_hp' => $row['ukuran_desain'],
      'jenis' => $row['jenis'],
      'deskripsi' => $row['deskripsi'],
      'gambar' => $row['gambar']);
	}
?>
