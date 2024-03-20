<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Array Siswa</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Array Siswa</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                <?php


$nim = $_POST["nim"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$prodi = $_POST["prodi"];
$skill = $_POST["skill"];
$domisili = $_POST["domisili"];
$email = $_POST["email"];

$nilai = 0;
foreach ($skill as $data) {
    switch ($data) {
        case 'html':
            $nilai += 10;
            break;
        case 'css': 
            $nilai += 10;
            break;
        case 'js':
            $nilai += 20;
            break;
        case 'rwd':
            $nilai += 20;
            break;
        case 'php':
            $nilai += 30;
            break;
        case 'python':
            $nilai += 30;
            break;
        case 'java':
            $nilai += 50;
            break;
                    
        default:
            break;
    }
}

echo "<style>
    table {
        margin: 0 auto;
        background-color: #e6f3ff;
    }

    h4 {
        text-align: center;
    }
</style>";

echo "<h4>Informasi yang dikirim: </h4>";
echo "<table border='1'>";
echo "<tr><td>NIM</td><td>$nim</td></tr>";
echo "<tr><td>Nama</td><td>$nama</td></tr>";
echo "<tr><td>Jenis Kelamin</td><td>$jk</td></tr>";
echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
echo "<tr><td>Skill</td><td>";
foreach ($skill as $data) {
    echo "$data, ";
}
echo "</td></tr>";
echo "<tr><td>Domisili</td><td>$domisili</td></tr>";
echo "<tr><td>Email</td><td>$email</td></tr>";
echo "<tr><td>Skor Skill</td><td>$nilai</td></tr>";
echo "<tr><td>Keterampilan</td><td>";

if ($nilai >= 0 && $nilai <= 40) {
    echo "Kurang.";
} elseif ($nilai > 40 && $nilai <= 60) {
    echo "Cukup.";
} elseif ($nilai > 60 && $nilai < 100) {
    echo "Baik.";
} elseif ($nilai >= 100 && $nilai <= 150) {
    echo "Sangat Baik.";
} else {
    echo "Skor tidak valid.";
}
echo "</td></tr>";
echo "</table>";

?>
                </div>
            </div>
        </div>
    </main>
<?php include 'bawah.php'; ?>
