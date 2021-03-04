<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Nilai Siswa</title>
    <style>
        footer{
            background : black;
            color : white;
        }
    </style>
  </head>
  <body>
      <h3>Form Nilai Siswa</h3>
      <hr/>
  <div class="container">    
    <form class="form-horizontal p-3 black" style="background-color:orange;" method="GET" action="nilai_murid.php">
      <!------------>
        <div class="form-group row">
          <label for="namasiswa" class="col-sm-3 col-form-label"><b>Nama Lengkap</b></label>
          <div class="col-sm-7">
            <input type="text" placeholder="Nama Lengkap" class="form-control" name="nama__lengkap" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nim" class="col-sm-3 col-form-label"><b>NIM</b></label>
          <div class="col-sm-5">
            <input type="number" placeholder="NIM" class="form-control" name="nim__" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="matkul" class="col-sm-3 col-form-label"><b>Mata Kuliah</b></label>
          <div class="col-sm-7">
            <select name="mata__kuliah" class="form-control">
              <option value="DDP">Dasar-Dasar Pemrograman</option>
              <option value="PWL">Pemrograman Web Lanjutan</option>
              <option value="BD">Basis Data</option>
            </select>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="nilaiuts" class="col-sm-3 col-form-label"><b>Nilai UTS</b></label>
          <div class="col-sm-5">
            <input type="number" placeholder="Nilai UTS" class="form-control" name="nilai__uts" required>
          </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
            <label for="nilaiuas" class="col-sm-3 col-form-label"><b>Nilai UAS</b></label>
            <div class="col-sm-5">
              <input type="number" placeholder="Nilai_UAS" class="form-control " name="nilai__uas" required>
            </div>
        </div>
        <br>

      <!------------>
        <div class="form-group row">
          <label for="tugas_praktikum" class="col-sm-3 col-form-label"><b>Nilai Tugas/Praktikum</b></label>
          <div class="col-sm-5">
            <input type="number" placeholder="Nilai Tugas/Praktikum" class="form-control" name="nilai__tugas" required>
          </div>
        </div>
        <br>

      <!------------>
          <input class="btn btn-danger" type="submit" value="Simpan" name="proses__"/>
        </div>
    </form>
  </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <footer>Develop By @Hannn @2021</footer>
  </body>
</html>