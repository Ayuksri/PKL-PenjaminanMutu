<?php
switch($jenis){
  case "Beranda"; include("pages/v_beranda.php"); break;
  case "DataMahasiswa"; include("pages/mahasiswa/v_mahasiswa.php"); break;
  case "TambahMahasiswa"; include("pages/mahasiswa/v_tambah_mahasiswa.php"); break;
  case "UbahMahasiswa"; include("pages/mahasiswa/v_ubah_mahasiswa.php"); break;
  case "DataKontrakKuliah"; include("pages/kontrakKuliah/v_kontrak_kuliah.php"); break;
  case "TambahKontrakKuliah"; include("pages/kontrakKuliah/v_tambah_kontrak_kuliah.php"); break;
  case "UbahKontrakKuliah"; include("pages/kontrakKuliah/v_ubah_kontrak_kuliah.php"); break;
  case "DataRencanaPembelajaran"; include("pages/rencanaPembelajaran/v_rencana_pembelajaran.php"); break;
  case "TambahRencanaPembelajaran"; include("pages/rencanaPembelajaran/v_tambah_rencana_pembelajaran.php"); break;
  case "UbahRencanaPembelajaran"; include("pages/rencanaPembelajaran/v_ubah_rencana_pembelajaran.php"); break;
  case "DataReferensi"; include("pages/referensi/v_referensi.php"); break;
  case "TambahReferensi"; include("pages/referensi/v_tambah_referensi.php"); break;
  case "UbahReferensi"; include("pages/referensi/v_ubah_referensi.php"); break;
}
?>
