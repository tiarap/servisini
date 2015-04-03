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
			    <li><a href="#" class="active"><span>Informasi</span></a></li>
			    <li><a href="index_review.php"><span>Review</span></a></li>
			    <li><a href="index_rekomendasi.php"><span>Rekomendasi </span></a></li>
	  	  </ul>
	  </div>
	  <p>
	  <!-- End Main Nav --></p>
  </div>
</div>
<p>
  <!-- End Header -->
  
  <!-- Container --></p>
<div id="content">
  <!-- Box -->
  <div class="box">
    <!-- Box Head -->
    <div class="box-head"> <span style="font-size: 18px">Tambah Bengkel</span></div>

     <form action="" method="post" name="input" id="input">
      <p>Nama Servis Motor <label for="namaservis">:            </label>
        <input name="namaservis" type="text" required="required" id="namaservis" /></p>
      <p>Lokasi Servis Motor <label for="lokasiservis">:</label>
          <input name="lokasiservis" type="text" required="required" id="lokasiservis" /></p>
      <p>Jam Buka <label for="jambuka"> :</label>
          <input name="jambuka" type="text" required="required" id="jambuka" /></p>
      <p>Jasa yang Ditawarkan <label for="jasaservis"> :</label>
          <input name="jasaservis" type="text" required="required" id="jasaservis" /></p>
      <p>Biaya <label for="biayaservis"> :</label>
          <input name="biayaservis" type="text" required="required" id="biayaservis" /></p>
      <p>Jenis Kepemilikan <label for="jeniskepemilikan"> :</label>
          <input name="jeniskepemilikan" type="text" required="required" id="jeniskepemilikan" /></p>
      <p>Kontak <label for="kontakservis"> :</label>
          <input name="kontakservis" type="text" required="required" id="kontakservis" /></p>
       <p>Url Foto <label for="urlfoto"> :</label>
          <input name="urlfoto" type="text" required="required" id="urlfoto" /></p>   
      <p>&nbsp;</p></td>
      
      <td width="68%" bgcolor="#A2FF9F" class="body" style="font-style: normal; color: #000000;">
      
        <p>
          <input type="submit" name="TAMBAH" id="TAMBAH" value="TAMBAH" />
        </p>
      </form>
    </div>
  </div>

	
<?php
if (isset($_POST['TAMBAH'])) {
	include('config.php');
$nama = addslashes (strip_tags ($_POST['namaservis']));
$lokasi = addslashes (strip_tags ($_POST['lokasiservis']));
$jambuka = addslashes (strip_tags ($_POST['jambuka']));
$jasa = addslashes (strip_tags ($_POST['jasaservis']));
$biaya = addslashes (strip_tags ($_POST['biayaservis']));
$jenis = addslashes (strip_tags ($_POST['jeniskepemilikan']));
$kontak = addslashes (strip_tags ($_POST['kontakservis']));
$foto = addslashes (strip_tags ($_POST['urlfoto']));

//insert tabel
$query="INSERT INTO `servismotor`
		(`NamaTempatServis`, 
		`LokasiTempatServis`, 
		`JamBuka`, 
		`JasaServis`, 
		`BiayaServis`,
		`JenisKepemilikan`, 
		`KontakTempatServis`, 
		`urlfoto`) 
		
		VALUES 
		('".$nama."', 
		'".$lokasi."', 
		'".$jambuka."', 
		'".$jasa."', 
		'".$biaya."',
		'".$jenis."',  
		'".$kontak."',
		'".$foto."')"; 
		
 $sql = mysqli_query ($conn, $query); 
 if ($sql) { 
 echo "<h2><font color=green>Data Berhasil Disimpan</font></h2>"; 
 } else { 
 echo "<h2><font color=red>Data Gagal Disimpan</font></h2>"; 
 } }
?>     
  
</body>
</php>