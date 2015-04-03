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
      <h1>Daftar Servis Motor</h1>
<table summary="Summary Here" cellpadding="0" cellspacing="0">
        <tbody>
		
<?php

include('config.php');
$query = "SELECT NamaTempatServis FROM servismotor";
$sql = mysqli_query ($conn, $query);
while ($hasil = mysqli_fetch_array ($sql)){
$nama = $hasil['NamaTempatServis'];
 echo '</tr>';
 echo '<td><img class="imgl" src="./images/250x250.png" alt="" width="250" height="250" /></td>';

 echo '<td><a href="lihatbengkel.php?nama='.$nama.'">'.$nama.'</a></td><br><tr>';
}
?>
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