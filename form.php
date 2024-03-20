<?php include 'atas.php'; ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Form Nilai</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 2</a></li>
                <li class="breadcrumb-item active">Form Nilai</li>
            </ol>
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
        </div>
    </main>
<?php include 'bawah.php'; ?>