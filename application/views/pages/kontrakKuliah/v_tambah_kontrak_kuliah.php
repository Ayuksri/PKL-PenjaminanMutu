<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH KONTRAK KULIAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH KONTRAK KULIAH</li>
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
            <form role="form" method="post" action="<?php echo base_url('c_kontrak_kuliah/save'); ?>">
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
                <input type="hidden" name="nidn" value="<?php echo($this->session->userdata('nidn')) ?>">
                <div class="form-group">
                  <label>Bobot</label>
                  <input type="number" name="sks" class="form-control" placeholder="Masukkan bobot..." required>
                </div>
                <div class="form-group">
                  <label>Deskripsi Mata Kuliah</label>
                  <textarea rows="4" cols="50" name="deskripsi_mata_kuliah" class="form-control" placeholder="Masukkan Deskripsi Mata Kuliah..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Strategi Perkuliahan</label>
                  <textarea rows="4" cols="50" name="strategi_perkuliahan" class="form-control" placeholder="Masukkan Strategi Perkuliahan..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Referensi</label>
                  <textarea rows="4" cols="50" name="referensi" class="form-control" placeholder="Masukkan referensi..." required></textarea>
                </div>
                <div class="form-group">
                  <label>Persentase Kehadiran</label>
                  <input type="number" name="persentase_kehadiran" class="form-control" placeholder="Masukkan persentase kehadiran..." required>
                </div>
                <div class="form-group">
                  <label>Persentase Keaktifan</label>
                  <input type="number" name="persentase_keaktifan" class="form-control" placeholder="Masukkan persentase keaktifan..." required>
                </div>
                <div class="form-group">
                  <label>Persentase Kuis</label>
                  <input type="number" name="persentase_kuis" class="form-control" placeholder="Masukkan persentase kuis..." required>
                </div>
                <div class="form-group">
                  <label>Persentase UTS</label>
                  <input type="number" name="persentase_uts" class="form-control" placeholder="Masukkan persentase UTS..." required>
                </div>
                <div class="form-group">
                  <label>Persentase UAS</label>
                  <input type="number" name="persentase_uas" class="form-control" placeholder="Masukkan persentase UAS..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-1</label>
                  <input type="text" name="topik_1" class="form-control" placeholder="Masukkan topik pertemuan ke-1..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-2</label>
                  <input type="text" name="topik_2" class="form-control" placeholder="Masukkan topik pertemuan ke-2..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-3</label>
                  <input type="text" name="topik_3" class="form-control" placeholder="Masukkan topik pertemuan ke-3..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-4</label>
                  <input type="text" name="topik_4" class="form-control" placeholder="Masukkan topik pertemuan ke-4..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-5</label>
                  <input type="text" name="topik_5" class="form-control" placeholder="Masukkan topik pertemuan ke-5..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-6</label>
                  <input type="text" name="topik_6" class="form-control" placeholder="Masukkan topik pertemuan ke-6..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-7</label>
                  <input type="text" name="topik_7" class="form-control" placeholder="Masukkan topik pertemuan ke-7..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-8</label>
                  <input type="text" name="topik_8" class="form-control" placeholder="Masukkan topik pertemuan ke-8..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-9</label>
                  <input type="text" name="topik_9" class="form-control" placeholder="Masukkan topik pertemuan ke-9..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-10</label>
                  <input type="text" name="topik_10" class="form-control" placeholder="Masukkan topik pertemuan ke-10..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-11</label>
                  <input type="text" name="topik_11" class="form-control" placeholder="Masukkan topik pertemuan ke-11..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-12</label>
                  <input type="text" name="topik_12" class="form-control" placeholder="Masukkan topik pertemuan ke-12..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-13</label>
                  <input type="text" name="topik_13" class="form-control" placeholder="Masukkan topik pertemuan ke-13..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-14</label>
                  <input type="text" name="topik_14" class="form-control" placeholder="Masukkan topik pertemuan ke-14..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-15</label>
                  <input type="text" name="topik_15" class="form-control" placeholder="Masukkan topik pertemuan ke-15..." required>
                </div>
                <div class="form-group">
                  <label>Topik Pertemuan Ke-16</label>
                  <input type="text" name="topik_16" class="form-control" placeholder="Masukkan topik pertemuan ke-16..." required>
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