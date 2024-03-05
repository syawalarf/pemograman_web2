<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
<form method="POST" action="hasil.php">
  <div class="form-group">
    <label for="nama">Nama</label> 
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card"></i>
        </div>
      </div> 
      <input id="nama" name="nama" placeholder="Masukkan Nama Yach" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="matkul">Mata Kuliah</label> 
    <div>
      <select id="matkul" name="matkul" required="required" class="custom-select">
        <option value="ddp">Dasar Dasar Pemograman</option>
        <option value="pw">Pemograman Web</option>
        <option value="bd">Basis Data</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="uts">UTS</label> 
    <input id="uts" name="uts" placeholder="Nilai UTS Kamu!!!" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="uas">UAS</label> 
    <input id="uas" name="uas" placeholder="Nilai UAS Kamu!!!" type="text" required="required" class="form-control">
  </div>
  <div class="form-group">
    <label for="np">Nilai Praktikum</label> 
    <input id="np" name="np" placeholder="Nilai Praktikum Kamu!!!" type="text" required="required" class="form-control">
  </div> 
  <div class="form-group">
    <button name="proses" type="submit" value="Data Berhasil Di Simpan Ya Ges Ya" class="btn btn-primary">Selesai</button>
  </div>
</form>
    </div>
</body>
</html>
<hr>
<h3>Hasil Inputan : </h3>
