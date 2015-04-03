
<head>
  <meta charset="UTF-8">
  <title>servisini - Login</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/stylelogin.css">
</head>

<body>
<div class="form">
<p><strong style="font-size: 24px; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif;">SERVISINI.COM</strong></p>
<p>&nbsp;</p>

<form method="post" action="actionlogin.php">
<td style="font-size: 14px">Username</td>
<p>
    <span style="font-size: 14px">
    <input type="text" class="login-inp" placeholder="username" name="uname">
    </span></p>
<td style="font-size: 14px">Password</td>
  <p>
		  <span style="font-size: 14px">
		  <input type="password" class="login-inp"
           placeholder="password" name="pass"></span></p>
  <p>
        <?php		
				//kode php ini kita gunakan untuk menampilkan pesan eror
				if (!empty($_GET['error'])) {
					if ($_GET['error'] == 1) {
						echo '<h3>Username dan Password belum diisi</h3>';
					} else if ($_GET['error'] == 2) {
						echo '<h3>Username belum diisi</h3>';
					} else if ($_GET['error'] == 3) {
						echo '<h3>Password belum diisi</h3>';
					} else if ($_GET['error'] == 4) {
						echo '<h3>Username dan Password tidak terdaftar</h3>';
					}
				}
			?>
    </p>
        <div class="right"></div>
		<span style="font-size: 14px">
		<button name="login" type="submit" class="button">LOGIN</button>
        
  	</span>
</form>

</div>
  <script src="js/index.js"></script>
</body>
</html>