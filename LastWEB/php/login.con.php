<?php

  session_start();
  include_once 'dbConnect.php';

  $email = $_POST['txtEmail'];
  $password = $_POST['txtPassword'];

  $kueri = "SELECT * FROM tbl_user WHERE email = (?)";
  $kueri = $db->prepare($kueri);
  $kueri->execute(array($email));
  $data = $kueri->fetch();

  if ($email == $data['email']) {
    if ($password == $data['password']) {
      $_SESSION['email'] = $email;
      header("Location:../dashboard.php");
    } else {
      //password salah
    }
  } else {
    //akun belum terdaftar
  }

?>
