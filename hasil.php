
<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Array associative</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Array associative</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                <?php
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$np = $_POST['np'];
$rata_rata = ($uts+$uas+$np)/3;
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);

function keterangan ($rata_rata){
if ($rata_rata >= 55 && $rata_rata <=100){
    return'Anda Lulus';
}
else {
    return 'Anda Tidak Lulus';
}
}

function grade($rata_rata){
    if ($rata_rata >= 85 && $rata_rata <=100) {
        return "A (Sangat baik)";
    } elseif ($rata_rata >= 70 && $rata_rata <=84) {
        return "B (baik)";
    } elseif ($rata_rata >= 56 && $rata_rata <=69) {
        return "C (Cukup)";
    }  elseif ($rata_rata >= 36 && $rata_rata <=55) {
        return "D (Kurang)";
    } elseif ($rata_rata >= 0 && $rata_rata <=35) {
        return "E (Sangat Kurang)";
    }else{
        return "I (Tidak Nilai)";
    }
    }

echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $np";
echo "<br>Rata-Rata Nilai : $rata_rata";
echo "<br>Keterangan : $keterangan";
echo "<br>Grade : $grade";
?>
                </div>
            </div>
        </div>
    </main>
    <!-- Panggil file bawah -->
    <?php include 'bawah.php'; ?>
</div>
