<?php
if(isset($_POST['proses'])){
    $proses = $_POST['proses'];
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $np = $_POST['np'];
    $keterangan = keterangan($rata_rata);
    $grade = grade($rata_rata);


    // Kriteria nilai
    $rata_rata = ($uts + $uas + $np) / 3;
    // Evaluasi nilai
    function keterangan($rata_rata){
        if ($rata_rata >= 55 && $rata_rata <=100) {
            return "Anda Lulus";
        }else{
            return "Anda Tidak Lulus";
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

        echo  "<h2>Data Mahasiswa</h2>";
        echo  "Nama : ". $nama ."<br/>";
        echo  "Mata Kuliah : ". $matkul ."<br/>";
        echo  "UTS : ". $uts  ." <br/>";
        echo  "UAS : ". $uas  ." <br/>";
        echo  "Nilai Presensi : ". $np   ." <br/>";
        echo  "Rata-Rata :". number_format($rata_rata,2)." <br/>";
        echo  "Grade Anda :" .$grade. "<br/>";
        echo  "Keterangan :" .$keterangan."<hr />";
?>