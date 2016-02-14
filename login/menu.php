<?php
include "../config/koneksi.php";


$sql=mysql_query("select * from modul where aktif='Y' order by urutan");


if ($m=mysql_fetch_array($sql)){  
echo "<li><a href='?module=carapesan'><b>Edit Cara Pemesanan</b></a></li>"; 
echo "<li><a href='?module=kategori'><b>Tambah Kategori Produk</b></a></li>"; 
echo "<li><a href='?module=produk'><b>Tambah Produk</b></a></li>"; 
echo "<li><a href='?module=order'><b>Lihat Pesanan</b></a></li>"; 
echo "<li><a href='?module=hubungi'><b>Lihat Pesan Masuk</b></a></li>";
echo "<li><a href='?module=laporan'><b>Lihat Laporan Transaksi</b></a></li>";   
}
?>
