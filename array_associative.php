<?php include 'atas.php'; ?>

<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Array associative</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="index.php">Week 1</a></li>
                <li class="breadcrumb-item active">Array associative</li>
            </ol>
            <div style="height: 10vh"></div>
            <div class="card mb-4">
                <div class="card-body">
                    <?php
                    $hewan = ["a" => "kucing", "b" => "ayam", "c" => "banteng", "d" => "ikan"];
                    echo "Hewan dengan index ke-1: " . $hewan["b"] . "\n";
                    echo "<br>";
                    echo "<br>";
                    echo "Hewan dengan index ke-3: " . $hewan["d"] . "\n";
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- Panggil file bawah -->
    <?php include 'bawah.php'; ?>
</div>
