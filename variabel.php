<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Variabel</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Variabel</li>
            </ol>
            <div style="height: 5vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                <?php
$nama ="Muhammad Syawal Arif Billah";
$jurusan ="Sistem Informasi";
$semester = 8;

echo "Nama Saaya: " .$nama;
echo "</br> Jurusan: " .$jurusan;
echo "</br> Semester: " .$semester;
?>
                </div>
            </div>
        </div>
    </main>
    <!-- Panggil file bawah -->
    <?php include 'bawah.php'; ?>
</div>

</html>