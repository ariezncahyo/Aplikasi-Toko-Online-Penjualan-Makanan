<?php
include "../config/koneksi.php";
include "../config/library.php";
include "../config/fungsi_indotgl.php";
include "../config/fungsi_combobox.php";
include "../config/class_paging.php";
include "../config/fungsi_rupiah.php";

// Bagian Home
if ($_GET[module]=='home'){

  echo "<h2>Selamat Datang</h2>
          <p>Hai <b>$_SESSION[namalengkap]</b>, selamat datang di halaman Administrator.<br> Silahkan klik menu pilihan yang berada 
          di sebelah kiri untuk mengelola konten website anda. </p>
          <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>
          <p align=right>Login : $hari_ini, ";
  echo tgl_indo(date("Y m d")); 
  echo " | "; 
  echo date("H:i:s");
  echo " WIB</p>";

}

// Bagian Kategori
elseif ($_GET[module]=='kategori'){

    include "modul/mod_kategori/kategori.php";

}

// Bagian Produk
elseif ($_GET[module]=='produk'){

    include "modul/mod_produk/produk.php";

}
// Bagian Best Seller
elseif ($_GET[module]=='bestseller'){

    include "modul/mod_bestseller/bestseller.php";

}


// Bagian Order
elseif ($_GET[module]=='order'){

    include "modul/mod_order/order.php";

}

// Bagian Profil
elseif ($_GET[module]=='profil'){

    include "modul/mod_profil/profil.php";

}

// Bagian Order
elseif ($_GET[module]=='hubungi'){

    include "modul/mod_hubungi/hubungi.php";

}

// Bagian Cara Pempesanan
elseif ($_GET[module]=='carapesan'){

    include "modul/mod_carapesan/carapesan.php";

}

// Bagian Password
elseif ($_GET[module]=='password'){

    include "modul/mod_password/password.php";

}

// Bagian Laporan
elseif ($_GET[module]=='laporan'){

    include "modul/mod_laporan/laporan.php";

}

// Bagian Selamat Datang
elseif ($_GET[module]=='welcome'){

    include "modul/mod_welcome/welcome.php";

}



// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
