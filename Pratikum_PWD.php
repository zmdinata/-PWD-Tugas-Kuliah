<!-- NIM: 43240450 -->
<!-- Nama: Zacky Muhammad Dinata -->
<!-- Prodi: Sistem Informasi -->

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Input Nilai Mahasiswa</title>
    <style>
        body {
            font-family: sans-serif;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">

    <h1>INPUT NILAI MAHASISWA</h1>
    <hr>

    <?php
    // Cek jika pengguna mengklik link [TIDAK] (?selesai=1)
    if (isset($_GET['selesai'])) {

        echo "Terima kasih telah menggunakan program ini!";

    } 
    // Cek jika form telah diisi dan dikirim (metode POST)
    elseif (!empty($_POST['nama'])) {

        // 1. Ambil & proses data
        $nama = $_POST['nama'];
        $nilai = (int)$_POST['nilai'];
        $predikat = '';

        if ($nilai >= 85) $predikat = 'A';
        elseif ($nilai >= 70) $predikat = 'B';
        elseif ($nilai >= 60) $predikat = 'C';
        else $predikat = 'D';

        // 2. Tampilkan hasil
        echo "<h3>--- Hasil Nilai Mahasiswa ---</h3>";
        echo "<b>Nama:</b> $nama <br>";
        echo "<b>Nilai:</b> $nilai <br>";
        echo "<b>Predikat:</b> $predikat <hr>";
        
        // 3. Tampilkan link untuk lanjut atau berhenti
        echo "Input data lagi? ";
        echo "<a href='{$_SERVER['PHP_SELF']}'>[YA]</a> / ";
        echo "<a href='?selesai=1'>[TIDAK]</a>";

    } 
    // Jika tidak ada kondisi di atas, tampilkan form input
    else {
    ?>
        <form action="" method="post">
            Nama Mahasiswa: <input type="text" name="nama" required>
            <br><br>
            Nilai (0-100): <input type="number" name="nilai" min="0" max="100" required>
            <br><br>
            <input type="submit" value="Proses Nilai">
        </form>
    <?php
    }
    ?>

</div>

</body>
</html>