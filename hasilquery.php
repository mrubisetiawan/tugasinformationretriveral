<html>
<title>Query Boolean</title>
<body>
<center><br>
<br>
<h2>Hasil Query Boolean</h2>

<!-- ///////////////////////////// Script untuk membuat tabel///////////////////////////////// -->

<table  border='1' Width='800'>  
<tr>
    <th> Nama File </th>
    <th> Tokenisasi </th>
    <th> Stemming Porter </th>
    <th> Stemming</th>
    
</tr>
<?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbstbi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
$conn=mysqli_connect('localhost','root','','dbstbi');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
$sql = "SELECT distinct nama_file,token,tokenstem,tokenstem2 FROM `dokumen` where token like '%$hasil%'";
//$sql = "SELECT distinct nama_file,token,tokenstem FROM dokumen WHERE match (token,tokenstem) against ('$hasil' IN BOOLEAN MODE);";


 // echo $sql;die();
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "    
        <tr>
        <td>".$row['nama_file']."</td>
        <td>".$row['token']."</td>
        <td>".$row['tokenstem']."</td>
        <td>".$row['tokenstem2']."</td>
        
        </tr> 
        ";
		//echo "Nama file: " . $row["nama_file"]. " - Token: " . $row["token"]. "- Stemming Porter " . $row["tokenstem"]. "- Stemming Nazief Adriani " . $row["tokenstem2"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();

///

?>
</center>


<center><a href="index.php"><input type="button" value="Kembali"/></a>
<br>
<br>
</body></center>
</html>
