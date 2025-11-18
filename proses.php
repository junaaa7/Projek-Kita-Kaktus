<?php
// proses.php
require './db/koneksi.php'; // sesuaikan jika foldernya beda

if (isset($_POST['kirim'])) {

    // ambil data dari form (pakai nama field yang sama dengan di index.php)
    $id_produk    = $_POST['id_produk'];                      // hidden input dari modal
    $nama_produk  = $_POST['barang'];                         // Nama Barang
    $nomor        = preg_replace('/[^0-9]/', '', $_POST['wa']); // WA penjual, dibersihkan jadi angka saja

    $pembeli      = $_POST['pembeli'];
    $email        = $_POST['email'];
    $alamat       = $_POST['alamat'];
    $catatan      = $_POST['pesan'];

    // di web tidak ada pilihan jumlah → anggap 1
    $jumlah       = 1;

    // harga bisa jadi ada "Rp" atau titik, jadi dibersihkan dulu
    $harga_satuan = (int)preg_replace('/\D/', '', $_POST['harga_satuan']);
    $total_harga  = $jumlah * $harga_satuan;

    $tanggal      = date('Y-m-d');
    $status       = 'baru'; // nanti di admin kamu ubah ke 'selesai' / 'batal'

    // SIMPAN KE TABEL PESANAN
    $sql = "INSERT INTO pesanan
            (id_produk, nama_produk, nama_pemesan, email, alamat, catatan,
             jumlah, harga_satuan, total_harga, tanggal, status)
            VALUES
            ('$id_produk', '$nama_produk', '$pembeli', '$email', '$alamat', '$catatan',
             '$jumlah', '$harga_satuan', '$total_harga', '$tanggal', '$status')";

    mysqli_query($koneksi, $sql);

    // SETELAH TERSIMPAN → LANJUTKAN KE WHATSAPP (struktur pesan mirip kode lama kamu)
    $url = "https://api.whatsapp.com/send?phone=$nomor&text="
         . "saya ingin membeli%0A$nama_produk%0A%0A"
         . "catatan pesanan:%0A"
         . "Nama: $pembeli%0A"
         . "Email: $email%0A"
         . "Alamat: $alamat%0A"
         . "catatan untuk penjual:%0A$catatan";

    echo "<script>window.location.href = '$url';</script>";
    exit;

} else {
    // kalau akses langsung tanpa submit form, balikin ke beranda
    header("Location: index.php");
    exit;
}
