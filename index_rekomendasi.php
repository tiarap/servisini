<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<php xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Free CSS template by ChocoTemplates.com</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<!-- Header -->
<div id="header">
	<div class="shell">
		<!-- Logo + Top Nav -->
		<div id="top">
			<h1><a href="#">ServisIni.com</a></h1>
			<div id="top-navigation">
				Welcome <a href="#"><strong>Administrator</strong></a> <span>|</span>
				<a href="#">Log out</a>
			</div>
	  </div>
		<!-- End Logo + Top Nav -->
		
		<!-- Main Nav -->
		<div id="navigation">
			<ul>
			    <li><a href="index_informasi.php"><span>Informasi </span></a></li>
			    <li><a href="index_review.php"><span>Review</span></a></li>
			    <li><a href="#"class="active"><span>Rekomendasi </span></a></li>
	  	  </ul>
		</div>
		<p><!-- End Main Nav --></p>
	</div>
</div>
<p>
  <!-- End Header -->
  
  <!-- Container --></p>
  <form action="" method="post" name='input' id='input'>
    <!-- Form -->
    <div class="form">
      <div class="box-head"><span style="font-size: 18px">Rekomendasi</span></div>
      <p>
        <label> <br />
          Nama Servis Motor <span>(Required Field)</span></label>
      </p>
      <p>
        <input name="namaservis"type="text" class="field size1" autocomplete="off" id="namaservis" />
      </p>
      <p class="inline-field">
        <label>Rekomendasi <span>(Required Field)</span></label>
      </p>
      <p class="inline-field">
        <textarea id="rekomendasi" name="rekomendasi" cols="30" rows="10" required="required" class="field size1"></textarea>
      </p>
    </div>
    <!-- End Form -->
     <p>
          <input type="submit" name="SIMPAN" id="SIMPAN" value="SIMPAN" />
        </p>
		
		<?php
if (isset($_POST['SIMPAN'])) {
	include('config.php');
 $nama = addslashes (strip_tags ($_POST['namaservis'])); 
 $rekom = addslashes (strip_tags ($_POST['rekomendasi']));
 
 //insert ke tabel 
 $query ="INSERT INTO  `servismotor`
		(`NamaTempatServis`, `RekomendasiTempatServis`) VALUES ('".$nama."', '".$rekom."')"; 
 $sql = mysqli_query ($conn, $query); 
 if ($sql) { 
 echo "<h2><font color=green>Data Berhasil ditambahkan</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Data Gagal ditambahkan</font></h2>"; 
 } }
?>
  </form>
  

</div>
<!-- End Container -->

<!-- Footer --><!-- End Footer -->
	
</body>
</php>