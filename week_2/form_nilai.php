<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
    <h3 style="text-align: center;">Form Nilai Mahasiswa</h3>
    <hr>
    <form method="POST" action="nilai_siswa.php">
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Masukan Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="DDP">Dasar-Dasar Pemograman</option>
        <option value="WEB">Pemograman Web</option>
        <option value="BASDAT">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas" class="col-4 col-form-label">Tugas</label> 
    <div class="col-8">
      <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <input type="submit" value="Simpan" name="proses" class="btn btn-primary">
    </div>
  </div>
</form>
<?php
// ambil data yang di input oleh user
// $name = $_GET['name'];
// $mata_kuliah = $_GET['matkul'];
// $uts = $_GET['nilai_uts'];
// $uas = $_GET['nilai_uas'];
// $nilai_tugas = $_GET['nilai_tugas'];


//mencetak nilai 
// echo "Nama Mahasiswa : $name";
// echo "<br/>Mata kuliah : $mata_kuliah";
// echo "<br/>Nilai UTS : $uts";
// echo "<br/>Nilai UAS : $uas";
// echo "<br/>Nilai Tugas Praktikum : $nilai_tugas";

?>
    </div>
</body>
</html>