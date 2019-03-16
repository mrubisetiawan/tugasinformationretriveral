<?php 
    $katarubi = "Hello World";
	echo "Tugas 1 <br><br>";
    echo $katarubi;
    echo "<br><br>----- akhir tugas1 ----- <br><br>";
	echo "Tugas 2 <br><br>";
$server = "localhost" ;
$username = "id8990051_ifrubi" ;
$password = "ifrubi" ;
$database = "id8990051_akademik";
mysql_connect($server,$username,$password) or die ("Koneksi database gagal");
mysql_select_db($database) or die ("Database tidak tersedia");
	$sql="SELECT mahasiswa.nim, mahasiswa.nama, mahasiswa.prodi, nilai.nim, nilai.kdmk, matakuliah.nmmk FROM mahasiswa, nilai, matakuliah WHERE mahasiswa.nim=nilai.nim and nilai.kdmk=matakuliah.kdmk";
	$result=mysql_query($sql);
								echo "
								<table border='1'>
									<thead>
										<tr>
											<th>No</th>
											<th>NIM</th>
											<th>Nama</th>
											<th>Prodi</th>
											<th>Kode MK</th>
											<th>Nama MK</th>
											<th>Nilai</th>
										</tr>
									</thead>";
	while($data = mysql_fetch_array($result)){
	$i++;
								echo "<tbody>
										<tr>
											<td>".$i."</td>
											<td>".$data[nim]."</td>
											<td>".$data[nama]."</td>
											<td>".$data[prodi]."</td>
											<td>".$data[kdmk]."</td>
											<td>".$data[nmmk]."</td>
											<td>".$data[nilai]."</td>
										</tr>
									</tbody>";}
?>
