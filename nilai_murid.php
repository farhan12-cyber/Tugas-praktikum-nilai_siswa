<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Array Siswa</title>
    <style>
        footer{
            background : black;
            color : white;
        }
    </style>
  </head>
  <body>
<?php
$proses = $_GET['proses__'];
$nama_siswa = $_GET['nama__lengkap']; 
$mata_kuliah = $_GET['mata__kuliah'];
$nilai_uts = $_GET['nilai__uts'];
$nilai_uas = $_GET['nilai__uas'];
$nilai_tugas = $_GET['nilai__tugas'];
$nim = $_GET['nim__'];

$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
$ns5 = ['id'=>5,'nim'=> $nim,'uts'=>$nilai_uts,'uas'=>$nilai_uas,'tugas'=>$nilai_tugas];
$ar_nilai = [$ns1, $ns2 , $ns3, $ns4, $ns5];
?>
<div class="container bg-black p-5 mt-5">
<h3 style = "text-align : center; color : orange;" >Daftar Nilai Siswa</h3>
<table border="1" width="100%">
<thead>
<tr style = "text-align : center;">
<th>No</th><th>NIM</th><th>UTS</th>
<th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
</tr>
</thead>
<tbody>
</div>
<?php
$nomor = 1;
foreach($ar_nilai as $ns){
echo '<tr style = "text-align : center;"><td>'.$nomor.'</td>';
echo '<td>'.$ns['nim'].'</td>';
echo '<td>'.$ns['uts'].'</td>';
echo '<td>'.$ns['uas'].'</td>';
echo '<td>'.$ns['tugas'].'</td>';
$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
echo '<tr/>';
$nomor++;
}
?>
</tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
  <footer>Develop By @Hannn @2021</footer>
  <button name="kembali" class="btn btn-danger"><a href="form_nilai.php" style = "text-decoration : none; color : white;">Kembali</a></button>
</html>