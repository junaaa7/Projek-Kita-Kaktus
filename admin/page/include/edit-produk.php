<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../../login.php");
    exit;
}

require '../../../db/koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ambil data produk
$q = mysqli_query($koneksi, "SELECT * FROM produk WHERE id = $id");
$produk = mysqli_fetch_assoc($q);

if (!$produk) {
    header("Location: ../produk.php?gagal=1");
    exit;
}

// Jika form disubmit
if (isset($_POST['update'])) {
    $nama  = $_POST['nama'];
    $harga = (int)preg_replace('/\D/', '', $_POST['harga']);
    $wa    = $_POST['wa'];

    // Default pakai gambar lama
    $gambar = $produk['gambar'];

    // Jika upload file baru
    if (!empty($_FILES['gambar']['name'])) {
        $tmp      = $_FILES['gambar']['tmp_name'];
        $filename = time() . "_" . basename($_FILES['gambar']['name']);
        $target   = "../../../assets/produk/" . $filename;

        if (move_uploaded_file($tmp, $target)) {
            // Hapus gambar lama jika ada
            if ($produk['gambar'] && file_exists("../../../assets/produk/".$produk['gambar'])) {
                unlink("../../../assets/produk/".$produk['gambar']);
            }
            $gambar = $filename;
        }
    }

    // Update database
    mysqli_query($koneksi, "
        UPDATE produk SET 
            nama='$nama',
            harga='$harga',
            wa='$wa',
            gambar='$gambar'
        WHERE id=$id
    ");

    header("Location: ../produk.php?sukses=1");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Produk</title>

    <link rel="stylesheet" href="../../vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../../css/sb-admin-2.min.css">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4>Edit Produk</h4>
        </div>
        <div class="card-body">

            <form method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" name="nama" class="form-control" 
                           value="<?= htmlspecialchars($produk['nama']); ?>" required>
                </div>

                <div class="form-group">
                    <label>Harga Produk</label>
                    <input type="text" name="harga" class="form-control" 
                           value="<?= htmlspecialchars($produk['harga']); ?>" required>
                </div>

                <div class="form-group">
                    <label>WhatsApp Penjual</label>
                    <input type="text" name="wa" class="form-control" 
                           value="<?= htmlspecialchars($produk['wa']); ?>" required>
                </div>

                <div class="form-group">
                    <label>Foto Produk</label><br>
                    <?php if ($produk['gambar']) : ?>
                        <img src="../../../assets/produk/<?= $produk['gambar']; ?>" 
                             width="120" class="img-thumbnail mb-2">
                    <?php endif; ?>
                    <input type="file" name="gambar" class="form-control-file">
                </div>

                <button type="submit" name="update" class="btn btn-primary">Simpan Perubahan</button>
                <a href="../produk.php" class="btn btn-secondary">Kembali</a>

            </form>

        </div>
    </div>
</div>

</body>
</html>
