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
</p>
<p>
</p>
<div id="content">
  <!-- Box -->
  <div class="box">
    <!-- Box Head -->
    <div class="box-head"> <span style="font-size: 18px">Informasi Bengkel</span><span class="right">
      <a href="index_tambahinfo.php"><input type="submit" class="button" value="TAMBAH" /> </a> </span>
      
      <div class="right"></div>
    </div>
    <!-- End Box Head -->
	
	<!-- SQL -->
		<?php
		include('config.php');
		$query = "SELECT `NamaTempatServis` FROM `servismotor`";
		$sql = mysqli_query ($conn, $query);
		?>
	<!-- End SQL -->

    <!-- Table -->
    <div class="table"> <span class="center">
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
		
			<th>Nama Bengkel</th>
			<th>Perbarui</th>
			<th>Hapus</th>
        </tr>
        <?php
			while ($data=mysqli_fetch_array($sql)) {
				echo
				"<tr>
				<td>" . $data['NamaTempatServis'] . "</td>
				<td>
				Perbarui
				</td>
				<td>"
		?>
				<a href="actiondelete.php?nama=<?php echo $data['NamaTempatServis']; ?>">
				Hapus
				</a>
		<?php
				"</td>
				</tr>";
			}
		?>
		
      </table>
      </span>
      <!-- Pagging -->
      <div class="pagging">
        <div class="left">Showing 1-12 of 44</div>
        <div class="right"> <a href="#">Previous</a> <a href="#">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">245</a> <span>...</span> <a href="#">Next</a> <a href="#">View all</a> </div>
      </div>
      <!-- End Pagging -->
    </div>
    <!-- Table -->
  </div>
  <!-- End Box -->
  <!-- Box -->
  <!-- End Box -->
</div>
<!-- End Header -->

<!-- Container --><!-- End Container -->

<!-- Footer --><!-- End Footer -->
	
</body>
</php>