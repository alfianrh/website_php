
<!DOCTYPE html>
<html>
<head>
    <title> FlatStore | Easy To Order Desaign</title>
    <link rel="icon" type="image/png" href="../img/placeholder-man.png"/>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../fonts/font-awesome/css/font-awesome.css">

    <style type="text/css">
  * { margin: 0; padding: 0;}
  img { max-width: 100%; }
  .cycle-slideshow {
    width: 100%;
    max-width: 100%;
    display: hidden;
    overflow: hidden;
  }
</style>

    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../js/jquery.cycle2.min.js"></script>

</head>
<body><!-- bagian navbar -->
  <nav class="navbar navbar-default" style="border-radius: 0px;">
    <div class="col-sm-12 " style="background-color: #ecf0f1; padding: 5px;">
    <a href="#" style="color: #95a5a6;">Temukan designmu di sini</a>
  </div>
<!--  <div class="col-sm-12 " style=" padding: 5px;height: 35px;">
  </div> -->
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">
          <img alt="Brand" src="../img/icon.png" style="height: 100%;">
        </a>
      </div>
      <ul class="nav navbar-nav" >
          <li><a href="index.php">HOME</a></li>
          <li><a href="#">ABOUT</a></li>
          <li><a href="#">CONTACT</a></li>
      </ul>
      <div class="navbar-header navbar-right">
        <a class="navbar-brand" href="#">
          <img alt="facebook" src="../img/png/facebook.png" style="height: 100%;">
        </a>
        <a class="navbar-brand" href="#">
          <img alt="twitter" src="../img/png/twitter.png" style="height: 100%;">
        </a>
        <a class="navbar-brand" href="#">
          <img alt="instagram" src="../img/png/instagram.png" style="height: 100%;">
        </a>
        <a class="navbar-brand" href="#">
          <img alt="google-plus" src="../img/png/google-plus.png" style="height: 100%;">
        </a>
        <a class="navbar-brand" href="#">
          <img alt="youtube" src="../img/png/youtube.png" style="height: 100%;">
        </a>
    </div>
    </div>
  </nav>
  </div>


  <div class="container col-md-4 col-md-offset-4" style="height: 800px;">


    <form method="post" enctype="multipart/form-data" action="connectOrder.php">
      <div class="form-group">
        <label for="txtNama">Nama lengkap</label>
           <h3 class="form-control"><?php echo $_GET['txtNama']; ?></h3>
      </div>
      <div class="form-group">
        <label for="txtEmail">Email</label>
           <h3 class="form-control"><?php echo $_GET['txtEmail']; ?></h3>
      </div>
      <div class="form-group">
        <label for="txtNo">No HP / Telepon</label>
           <h3 class="form-control"><?php echo $_GET['txtNo']; ?></h3>
      </div>
      <div class="form-group">
        <label for="txtAlamat">Alamat</label>
           <h3 class="form-control"><?php echo $_GET['txtAlamat']; ?></h3>
      </div>
      <div class="form-group">
        <label for="txtUkuran">Ukuran design</label>
           <h3 class="form-control"><?php echo $_GET['txtUkuran']; ?></h3>
      </div>
      <div class="form-group">
        <label for="Jenis">Jenis</label>
           <h3 class="form-control"><?php echo $_GET['Jenis']; ?></h3>
      </div>

        <div class="form-group">
        <label for="Deskripsi">Deskripsi</label>
        <textarea class="form-control" rows="5" id="Deskripsi" name="Deskripsi">
           <?php echo $_GET['Deskripsi']; ?>
        </textarea>
      </div>
      <button onclick="goBack()" class="btn btn-primary">Kembali</button>
        <script>
        function goBack() {
            window.history.back();
        }
        </script>
          <div class="form-group ">
          <a class="btn btn-danger" href="ordere.php" type="submit">ORDER</a>
          </div>
    </form>
  </div>

    <div class="btn-group btn-group-justified" role="group" aria-label="..."">
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-info" style="border-radius:0px;"><i class="icon-twitter icon-4x"></i>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-danger" style="border-radius:0px;">
          <i class="icon-google-plus icon-4x"></i>
        </button>
      </div>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary" style="border-radius:0px;">
          <i class="icon-facebook icon-4x"></i>
        </button>
      </div>
    </div>
  <div class="col-sm-12">
  </div>

  <div class="container-fluid" style="background-color: #95a5a6;padding: 5px;">
        <div class="container-fluid">
          <h4 align="center">Copyright</h4><br><br><br>
        </div>
  </div>
  

</body>
</html>