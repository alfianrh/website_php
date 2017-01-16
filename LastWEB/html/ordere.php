
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
<body>
	
	<!-- bagian navbar -->
	<nav class="navbar navbar-default" style="border-radius: 0px;">
    <div class="col-sm-12 " style="background-color: #ecf0f1; padding: 5px;">
		<a href="#" style="color: #95a5a6;">Temukan designmu di sini</a>
	</div>
<!-- 	<div class="col-sm-12 " style=" padding: 5px;height: 35px;">
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
	<!-- akhir bagian navbar -->

	

<!-- form order -->
	<div class="container col-md-4 col-md-offset-4" style="height: 750px;">

		<!-- ini untuk konten  -->
		<script type="text/javascript">
			function nama() {nama = eval(order.txtNama.value)}
			function email() {email = eval(order.txtNama.value)}
			function noH() {noHp = eval(order.txtNo.value)}
			function alamat() {alamat = eval(order.txtAlamat.value)}
			function ukuran() {ukuran = eval(order.txtUkuran.value)}
			function jenis() {jenis = eval(order.Jenis.value)}
			function img() {img = eval(order.imgContoh.value)}
		</script>

		<form method="get" enctype="multipart/form-data" action="agreement.php" name="order">

          <td><input type="text" name="lebar" onkeypress="return validation(event)"></td>
          <td><input type="text" name="hasil" readonly="readonly"></td>

		  <div class="form-group">
		    <label for="txtNama">Nama lengkap</label>
		    <input type="text" class="form-control" id="txtNama" name="txtNama" placeholder="Nama lengkap" required="true">
		  </div>
		  <div class="form-group">
		    <label for="txtEmail">Email</label>
		    <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Email" required="true">
		  </div>
		  <div class="form-group">
		    <label for="txtNo">No HP / Telepon</label>
		    <input type="text" class="form-control" id="txtNo" name="txtNo" placeholder="No HP/Telepon" required="true">
		  </div>
		  <div class="form-group">
		    <label for="txtAlamat">Alamat</label>
		    <input type="text" class="form-control" id="txtAlamat" name="txtAlamat" placeholder="Jalan, Alamat, Kelurahan, Kecamatan" required="true">
		  </div>
		  <div class="form-group">
		    <label for="txtUkuran">Ukuran design</label>
		    <input type="text" class="form-control" id="txtUkuran" name="txtUkuran" placeholder="Ukuran design" required="true">
		  </div>
		  <div class="form-group">
	    	<label for="Jenis">Jenis</label>
			<select id="Jenis" name="Jenis" class="form-control" required="true">
		  	    <option class="btn-primary" value="none">Pilih Jenis design..</option>
		  	    <option value="Spanduk/ Banner">Spanduk/ Banner</option>
		  	    <option value="Brochure">Brochure</option>
		  	    <option value="Logo">Logo</option>
		  	</select>
		  </div>
	  	  <div class="form-group">
		    <label for="Deskripsi">Deskripsi</label>
		    <textarea class="form-control" rows="5" id="Deskripsi" name="Deskripsi"></textarea>
		  </div>
		  <div class="form-group">
		    <label for="imgContoh"><p class="help-block">Uploud gambar contoh design (jika ada)</p></label>
		    
		    <input type="file"  id="imgContoh" name="imgContoh" type="image/*">
		    <p class="help-block">extensi .jpg/.png</p>
		  </div>
		  <button type="submit" class="btn btn-warning">Next</button>
		</form>
	</div>
<!-- akhir form order -->


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
	<!-- bagian footer -->
	<div class="container-fluid" style="background-color: #95a5a6;padding: 5px;">
		    <div class="container-fluid">
		   		<h4 align="center">Copyright</h4><br><br><br>
		    </div>
	</div>
	<!-- akhir bagian footer -->

</body>
</html>