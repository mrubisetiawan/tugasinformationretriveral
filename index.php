<?php
require_once('Enhanced_CS.php');
?>
<?php
require_once('Enhanced_CS.php');
?>
<html>
<head>
	<title>Mesin Pencari</title>
</head>
<body align="center">
<center>
<h3>TUGAS INFORMATION RETRIEVAL</h3>
<h3>UNIVERSITAS STIKUBANK SEMARANG</h3>
<h4> Menu : </h4>
<a href="upload.php"><input type="button" value="Upload File"/></a><br/><br/>
<a href="hasil_tokenisasi.php"><input type="button" value="Hasil Tokenisasi"/></a><br/><br/>
<a href="query.php"><input type="button" value="Query Boolean"/></a><br/><br/>
<a href="download.php"><input type="button" value="Download File"/></a><br/>
<br/>
<br/>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="submit" value="Cari Kata Dasar"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$stemming = Enhanced_CS($teksAsli);
	echo "Kata dasar : ".$stemming.'<br/>';
}
?><br/>
<h3>Oleh : </h3>
<h3>M. Rubi Setiawan (17.01.65.0007)</h3>
<h3>Modestus Modo (17.01.65.0002)</h3>
<h3></h3>
</body>
</center>
</html>
