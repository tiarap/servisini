<php>
<head>
<meta charset="utf-8">
<title>A free template from http://ws-templates.com</title>
<meta name="description" content="A free template from http://ws-templates.com">
<meta name="keywords" content="keyword1,keyword2"/>

<link  href="css/screen.css" media="screen" rel="stylesheet"/>
<link  href="css/stylehome.css" media="screen" rel="stylesheet"/>
<link rel="stylesheet" href="nivo-slider/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="nivo-slider/default/nivo-slider.css" type="text/css" media="screen" />
</head>
<body>
<header class="container">
	<h1 class="left">SERVISINI.COM</h1>
  <p>&nbsp;</p>
</header>
<!--################################################-->
<nav>
	<ul class="container">
		<li><a href="index.html">Beranda</a></li>
		<li class="active">Daftar Bengkel</li>
		<li><a href="#">Rekomendasi Editor</a></li>
		<li><a href="#">Hubungi Kami</a></li>
	</ul>
</nav>
<div class="wrapper col3">
  <div id="container">
    <div id="content">
  <h1>Servis Motor</h1>
<table summary="Summary Here" cellpadding="0" cellspacing="0">
        <tbody>
          <tr class="dark">
            <td><?php
			include('Config.php');

/* Query untuk memilih tabel */
$name = $_GET["nama"];
$todo="SELECT * FROM servismotor WHERE NamaTempatServis='" . $name ."'";
/* Eksekusi*/
$sql = mysqli_query ($conn, $todo);
$hasil = mysqli_fetch_array ($sql);
$nama = $hasil['NamaTempatServis'];
echo "<strong>". $nama ."</strong><br>";
?></td>
		
<td><strong>Detail Informasi</center></td>
          </tr>
          <tr class="light">
            <td><img class="imgl" src="../images/demo/250x250.png" alt="" width="250" height="250" /></td>
            <td><?php
//			include('config.php');
	/* Query untuk memilih isi tabel */
//$todo="SELECT * FROM servismotor WHERE NamaServis=". $_GET[nama];
/* Eksekusi query*/
//$sql = mysqli_query ($conn, $todo);
//while ($hasil = mysqli_fetch_array ($sql)){
$nama = $hasil['NamaTempatServis'];
$lokasi = $hasil['LokasiTempatServis'];
$jambuka = $hasil['JamBuka'];
$jasa= $hasil['JasaServis'];
$biaya = $hasil['BiayaServis'];
$kontak = $hasil['KontakTempatServis'];
echo "Nama Servis: ".$nama."<br>";
echo "Lokasi Servis: ".$lokasi."<br>";
echo "Jam Operasional Servis: ".$jambuka."<br>";
echo "Jenis Servis: ".$jasa."<br>";
echo "Biaya Servis: ".$biaya."<br>";
echo "Kontak Servis: ".$kontak."<br>";
//}
?></td>		
<tr class="dark">
            <td colspan = "2"><center><?php
//			include('config.php');

/* Query untuk memilih isi tabel */
//$nama = $_GET[nama];
//$todo="SELECT * FROM servismotor WHERE NamaServis=" . $nama;
/* Eksekusi query*/
//$sql = mysqli_query ($conn, $todo);
//while ($hasil = mysqli_fetch_array ($sql)){
$review = $hasil['ReviewTempatServis'];
echo "<strong>Review dari kami:</strong><br>";
echo "".$review."<br>";
//}
?></center></td>
          </tr>
        </tbody>
      </table>

			
<div class="wrapper col5">
  <div id="copyright">
  	<p class="fl_left"><< Previous</p>
    <p class="fl_right">Next >></p>
    <br class="clear" />
  </div>
</div>
</body>
</php>