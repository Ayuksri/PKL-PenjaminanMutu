  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
        TAMBAH RENCANA PEMBELAJARAN
        </h1>
        <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH RENCANA PEMBELAJARAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="post" action="<?php echo base_url('c_rencana_pembelajaran/save'); ?>">
              <div class="box-body">
              <div class="form-group">
                  <label>Mata Kuliah</label>
                  <select class="form-control" name="id_matkul">
                    <option value="">- Pilih Mata Kuliah -</option>
                    <option value="214">Bahasa Inggris</option>
                    <option value="3">Kewarganegaraan </option>
                    <option value="4">Kalkulus I </option>
                    <option value="5">Matematika Diskrit I </option>
                    <option value="6">Algoritma & Pemrograman </option>
                    <option value="7">Logika Informatika</option>
                    <option value="8">Sistem Digital</option>
                    <option value="9">Ilmu Sosial dan Budaya Dasar</option>
                    <option value="10">Kalkulus II</option>
                    <option value="11">Statistika Dasar </option>
                    <option value="12">Struktur Data</option>
                    <option value="13">Matematika Diskrit II</option>
                    <option value="14">Aljabar Linear Elementer</option>
                    <option value="15">Praktikum Sistem Digital</option>
                    <option value="16">Praktikum Algoritma & Pemrograman</option>
                    <option value="17">Sistem Operasi </option>
                    <option value="18">Basis Data</option>
                    <option value="19">Desain dan Analisis Algoritma</option>
                    <option value="20">Program Linear </option>
                    <option value="21">Analisis Numerik</option>
                    <option value="22">Pengantar Kecerdasan Buatan</option>
                    <option value="23">Pengantar Probabilitas </option>
                    <option value="24">Praktikum Struktur Data</option>
                    <option value="25">Etika</option>
                    <option value="26">Rekayasa Perangkat Lunak</option>
                    <option value="27">Pemrograman Berorientasi Obyek </option>
                    <option value="28">Riset Operasi</option>
                    <option value="29">Basis Data Lanjut</option>
                    <option value="30">Organisasi dan Arsitektur Komputer</option>
                    <option value="31">Komunikasi Data dan Jaringan Komp. </option>
                    <option value="32">Praktikum Sistem Operasi</option>
                    <option value="33">Praktikum Basis Data</option>
                    <option value="34">Teori Bahasa dan Otomata</option>
                    <option value="35">Analisis dan Desain Sistem </option>
                    <option value="36">Pemodelan dan Simulasi </option>
                    <option value="37">Grafika Komputer</option>
                    <option value="38">Pemrograman Berbasis Web</option>
                    <option value="39">Metode Penelitian </option>
                    <option value="40">Interaksi Manusia dan Komputer </option>
                    <option value="41">Praktikum Pemrograman Berorientasi Obyek </option>
                    <option value="42">Praktikum Komunikasi Data dan Jaringan Komp. </option>
                    <option value="43">Tata Tulis Karya Ilmiah</option>
                    <option value="44">Kewirausahaan</option>
                    <option value="45">Etika Profesi</option>
                    <option value="46">Praktikum Pemrograman Berbasis Web</option>

                  </select>
                </div>
                <div class="form-group">
                  <label>Semester</label>
                  <select class="form-control" name="id_semester">
                    <option value="">- Pilih Semester -</option>
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Dosen</label>
                  <select id='nidn' class="form-control" name="nidn">
                    <option value="">- Pilih Dosen -</option>
                    <option value="0">Gst. Ayu Vida Mastrika Giri</option>
                    <option value="1">I Gusti Ngurah Anom Cahyadi Putra</option>
                    <option value="5117510">I Made Widhi Wirawan</option>
                    <option value="6128006">I Gede Santi Astawa</option>
                    <option value="7047408">Dr. Anak Agung Istri Ngurah Eka Karyawati</option>
                    <option value="14016403">Dra. Luh Gede Astuti</option>
                    <option value="14046702">Drs. I Wayan Santiyasa</option>
                    <option value="15038503">Ida Bagus Gede Dwidasmara</option>
                    <option value="16068003">Agus Muliantara</option>
                    <option value="18098205">Luh Arida Ayu Rahning Putri</option>
                    <option value="20128202">I Made Widiartha</option>
                    <option value="21037803">Dr. Ngurah Agus Sanjaya ER</option>
                    <option value="21058003">Ida Bagus Made Mahendra</option>
                    <option value="21067808">Cokorda Rai Adi Pramartha</option>
                    <option value="22108303">I Gede Arta Wibawa</option>
                    <option value="24018201">I MADE AGUS SETIAWAN</option>
                    <option value="24098402">I Komang Ari Mogi</option>
                    <option value="27018901">I Dewa Made Bayu Atmaja Darmawan</option>
                    <option value="28128801">I PUTU GEDE HENDRA SUPUTRA</option>
                    <option value="810017201">Dr. I Ketut Gede Suhartana</option>
                    <option value="819098502">Made Agung Raharja</option>
                    <option value="829088401">I Wayan Supriana</option>
                    <option value="830018504">I Gusti Agung Gede Arya Kadyanan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Minggu Ke-</label>
                  <select class="form-control" name="minggu_ke">
                    <option value="">- Pilih minggu ke- -</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Kemampuan Akhir yang Diharapkan</label>
                  <textarea rows="4" cols="50" name="kemampuan_akhir" class="form-control" placeholder="Masukkan kemampuan akhir yang diharapkan..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Bahan Kajian (Materi Ajar)</label>
                  <textarea rows="4" cols="50" name="bahan_kajian" class="form-control" placeholder="Masukkan bahan kajian (materi ajar)..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Metode Pembelajaran</label>
                  <textarea rows="4" cols="50" name="metode" class="form-control" placeholder="Masukkan metode pembelajaran..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Waktu</label>
                  <select class="form-control" name="waktu">
                    <option value="">- Pilih waktu lama pertemuan -</option>
                    <option value="150">50 menit</option>
                    <option value="150">100 menit</option>
                    <option value="150">150 menit</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Pengalaman Belajar Mahasiswa</label>
                  <textarea rows="4" cols="50" name="pengalaman_belajar" class="form-control" placeholder="Masukkan pengalaman belajar mahasiswa..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Kriteria Penilaian dan Indikator</label>
                  <select class="form-control" name="id_kriteria">
                    <option value="">- Pilih kriteria penilaian -</option>
                    <option value="2">Ketepatan</option>
                    <option value="3">Penguasaan</option>
                    <option value="4">Sistematis</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Capaian Mata Kuliah (CP-MK)</label>
                  <select class="form-control" name="id_cp">
                    <option value="">- Pilih kriteria penilaian -</option>
                    <option value="2">Setelah mengikuti mata kuliah ini, mahasiswa dapat menjelaskan peran algoritma dan pemrograman dalam sistem komputer. (P1, P2)</option>
                    <option value="3">Setelah diberikan beberapa contoh algoritma dalam pseudocode dan flowchart, mahasiswa dapat menyelesaikan masalah dengan menggunakan pseudocode dan mengimplementasikan ke dalam bentuk flowchart. (S9, P1,KK1, KU1, KU8)</option>
                    <option value="4">Mahasiswa mampu menggunakan tipe data dasar dan operator dalam bahasa pemrograman C. (S9, P1, KK1, KU1, KU8)</option>
                    <option value="5">Setelah diberikan kasus, mahasiswa mampu mengimplementasikan penggunaan struktur kondisi dalam penyelesaian masalah tersebut. (S9, P1, KK1, KU1, KU8)</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label>CPL Prodi  (CPL)</label>
                  <select class="form-control" name="id_cpl">
                    <option value="">- Pilih CPL -</option>
                    <option value="2">Menunjukkan sikap bertanggungjawab atas pekerjaan di bidang keahliannya secara mandiri.</option>
                    <option value="3">Menguasai konsep teoritis bidang pengetahuan Ilmu Komputer/Informatika secara umum dan konsep teoritis bagian khusus dalam bidang pengetahuan tersebut secara mendalam, serta mampu memformulasikan penyelesaian masalah prosedural.</option>
                    <option value="4">Memiliki pengetahuan yang memadai terkait dengan cara kerja sistem komputer dan mampu merancang dan mengembangkan berbagai algorithma /metode untuk memecahkan masalah.</option>
                    <option value="5">Mampu menerapkan pemikiran logis, kritis, sistematis, dan inovatif dalam konteks pengembangan atau implementasi ilmu pengetahuan dan teknologi yang memperhatikan dan menerapkan nilai humaniora yang sesuai dengan bidang keahliannya</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Bobot Nilai</label>
                  <select class="form-control" name="bobot_nilai">
                    <option value="">- Pilih bobot nilai pertemuan -</option>
                    <option value="0">0</option>
                    <option value="2">2</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="20">20</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label>ID Referensi</label>
                  <input type="number" name="id_referensi" class="form-control" placeholder="Masukkan ID referensi..." required>
                </div>
                


                
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary" title="Simpan Data"> <i class="glyphicon glyphicon-floppy-disk"></i> Simpan</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->