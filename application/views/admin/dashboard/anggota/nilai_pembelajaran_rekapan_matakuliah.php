<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layout/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php $this->load->view('admin/layout/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layout/sidebar') ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nilai Pembelajaran
        <small>Data Mahasiswa</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Pendidikan</li>
            <li class="active">Data Matakuliah</li>
            <li class="active">Data Materi</li>
      </ol>
    </section>

  <br>
  <section>
    <div class="box-body">
        <button type="submit" class="btn btn-success editPersentase" id="button-reg" name="simpan">
        Atur Rumus Persentase Nilai
    </div>
  </section>

  <section class="content-header">
    <div class="box-body"><!-- tahun ajaran -->
      <div class="form-group" style="width: 240px; display: inline-block;">
        <div style="width: 250px;display: inline-block;vertical-align: middle;">
          <label>Filter:</label>
          <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-list"></i>
          </div>
          <select class="input_select form-control selectHierarchy" name="tahun_ajaran" id="jenis_tampilan" onchange="pilihTampilan()">
            <option  value='0' selected>Semua</option>
            <option  value='1' >Nilai Keaktifan</option>
            <option  value='2' >Rata-rata Kelompok</option>
            <option  value='3' >Rata-rata Mandiri</option>
            <option  value='4' >Rata-rata Quiz</option>
            <option  value='5' >Nilai UTS</option>
            <option  value='6' >Nilai UAS</option>
            <option  value='7' >Nilai Akhir</option>
          </select>
          </div><!-- /.input group -->
        </div>
      </div>
    </div>
  </section>



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="card-body">
              <?php if($this->session->flashdata('msg_alert_error')) { ?>
                <div class="alert alert-danger">
                  <?=$this->session->flashdata('msg_alert_error');?>
                </div>
              <?php } ?>
              <?php if($this->session->flashdata('msg_alert')) { ?>
              <div class="alert alert-success">
                <?=$this->session->flashdata('msg_alert');?>
              </div>
              <?php } ?>
              
                <?php
                  $rekap_keaktifan=0;
                  $rekap_mandiri=0;
                  $rekap_quiz=0;
                  $rekap_kelompok=0;
                  $rekap_uts=0;
                  $rekap_uas=0; 
                    foreach ($rekap_nilai as $item) {
                      $rekap_keaktifan = $item->nilai_keaktifan;
                      $rekap_mandiri = $item->nilai_mandiri;
                      $rekap_quiz = $item->nilai_quiz;
                      $rekap_kelompok = $item->nilai_kelompok;
                      $rekap_uts = $item->nilai_uts;
                      $rekap_uas = $item->nilai_uas;
                    }
                ?>
              <table>
                <tr>
                  <td>Keaktifan </td>
                  <td> : </td>
                  <td><?php echo $rekap_keaktifan; ?>%</td>
                </tr>
                <tr>
                  <td>Mandiri </td>
                  <td> : </td>
                  <td><?php echo $rekap_mandiri; ?>%</td>
                </tr>
                <tr>
                  <td>Quiz </td>
                  <td> : </td>
                  <td><?php echo $rekap_quiz; ?>%</td>
                </tr>
                <tr>
                  <td>Kelompok </td>
                  <td> : </td>
                  <td><?php echo $rekap_kelompok; ?>%</td>
                </tr>
                <tr>
                  <td>UTS </td>
                  <td> : </td>
                  <td><?php echo $rekap_uts; ?>%</td>
                </tr>
                <tr>
                  <td>UAS </td>
                  <td> : </td>
                  <td><?php echo $rekap_uas; ?>%</td>
                </tr>
              </table>
              <!-- semua -->
              <div class="box-body" id="konten">
                <div id="semua">
                <table border="1" style="font-size: 10pt;" id="tabelSemua" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Nilai Keaktifan</th>
                      <th>Rata-rata Kelompok</th>
                      <th>Rata-rata Mandiri</th>
                      <th>Rata-rata Quiz</th>
                      <th>Nilai UTS</th>
                      <th>Nilai UAS</th>
                      <th>Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $keaktifan = 0;
                          foreach ($nilai_keaktifan as $itemKeaktifan){
                            if(strcmp($item->id_mahasiswa, $itemKeaktifan->id_mahasiswa)==0){ 
                              if($keaktifan<$itemKeaktifan->nilai_keaktifan){
                                $keaktifan=$itemKeaktifan->nilai_keaktifan;
                              } 
                            } 
                          } 
                      ?>
                      <td><?php echo $keaktifan; ?></td>
                      <?php 
                          $kelompok = 0;
                          $indeksKelompok=0;
                          foreach ($nilai_kelompok as $itemKelompok){
                            if(strcmp($item->id_mahasiswa, $itemKelompok->id_mahasiswa)==0){  
                              $kelompok+=$itemKelompok->nilai_kelompok;
                              $indeksKelompok++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksKelompok!=0){ $kelompok=$kelompok/$indeksKelompok; ?>
                        <td><?php echo $kelompok; ?></td>
                      <?php }?>
                      <?php if($indeksKelompok==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php 
                          $mandiri = 0;
                          $indeksMandiri=0;
                          foreach ($nilai_mandiri as $itemMandiri){
                            if(strcmp($item->id_mahasiswa, $itemMandiri->id_mahasiswa)==0){   
                              $mandiri+=$itemMandiri->nilai_mandiri;
                              $indeksMandiri++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksMandiri!=0){ $mandiri=$mandiri/$indeksMandiri; ?>
                        <td><?php echo $mandiri; ?></td>
                      <?php }?>
                      <?php if($indeksMandiri==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php 
                          $quiz = 0;
                          $indeksQuiz=0;
                          foreach ($nilai_quiz as $itemQuiz){
                            if(strcmp($item->id_mahasiswa, $itemQuiz->id_mahasiswa)==0){   
                              $quiz+=$itemQuiz->nilai_quiz;
                              $indeksQuiz++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksQuiz!=0){ $quiz=$quiz/$indeksQuiz ?>
                        <td><?php echo $quiz; ?></td>
                      <?php }?>
                      <?php if($indeksQuiz==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php 
                          $uts = 0;
                          $uas = 0;
                          foreach($nilai_ujian as $itemUjian){ 
                            if(strcmp($item->id_mahasiswa, $itemUjian->id_mahasiswa)==0){  
                              $uts=$itemUjian->nilai_uts;
                              $uas=$itemUjian->nilai_uas;
                            } 
                          } 
                      ?>
                      <td><?php echo $uts; ?></td>
                      <td><?php echo $uas; ?></td>
                      <?php
                        $total_rekap = 0; 
                        $total_rekap = ($keaktifan*$rekap_keaktifan)+($mandiri*$rekap_mandiri)+($kelompok*$rekap_kelompok)+($quiz*$rekap_quiz)+($uts*$rekap_uts)+($uas*$rekap_uas);
                      ?>
                      <td><?php echo $total_rekap/100; ?></td>    
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelSemua', 'members-data')">Cetak
                </div>
                </div>
                <!-- Keaktifan -->
                <div id="keaktifan">
                <table border="1" style="font-size: 10pt;" id="tabelKeaktifan" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Kumpulan Nilai Keaktifan</th>
                      <th>Nilai Keaktifan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $keaktifan = 0;
                          $KumpulanKeaktifan = "";
                          $sisiKeaktifan = 0;
                          foreach ($nilai_keaktifan as $itemKeaktifan){
                            if(strcmp($item->id_mahasiswa, $itemKeaktifan->id_mahasiswa)==0){
                            $sisiKeaktifan +=1; 
                              if($keaktifan<$itemKeaktifan->nilai_keaktifan){
                                $keaktifan=$itemKeaktifan->nilai_keaktifan;
                              }
                              if($sisiKeaktifan==1){
                                $KumpulanKeaktifan = $KumpulanKeaktifan.(string)$itemKeaktifan->nilai_keaktifan;
                              }
                              else{
                                $KumpulanKeaktifan = $KumpulanKeaktifan.", ".(string)$itemKeaktifan->nilai_keaktifan;
                              }
                            } 
                          } 
                      ?>
                      <td><?php echo $KumpulanKeaktifan; ?></td>
                      <td><?php echo $keaktifan; ?></td>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelKeaktifan', 'members-data')">Cetak
                </div>
                </div>
                <!-- Kelompok -->
                <div id="kelompok">
                <table border="1" style="font-size: 10pt;" id="tabelKelompok" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Kumpulan Nilai Kelompok</th>
                      <th>Rata-rata Kelompok</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $kelompok = 0;
                          $indeksKelompok=0;
                          $KumpulanKelompok = "";
                          $sisiKelompok = 0;
                          foreach ($nilai_kelompok as $itemKelompok){
                            if(strcmp($item->id_mahasiswa, $itemKelompok->id_mahasiswa)==0){
                            $sisiKelompok +=1;  
                              $kelompok+=$itemKelompok->nilai_kelompok;
                              $indeksKelompok++;
                              if($sisiKelompok==1){
                                $KumpulanKelompok = $KumpulanKelompok.(string)$itemKelompok->nilai_kelompok;
                              }
                              else{
                                $KumpulanKelompok = $KumpulanKelompok.", ".(string)$itemKelompok->nilai_kelompok;
                              }  
                            }
                          } 
                      ?>
                      <td><?php echo $KumpulanKelompok; ?></td>
                      <?php if($indeksKelompok!=0){ ?>
                        <td><?php echo $kelompok/$indeksKelompok; ?></td>
                      <?php }?>
                      <?php if($indeksKelompok==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelKelompok', 'members-data')">Cetak
                </div>
                </div>

                <!-- Mandiri -->
                <div id="mandiri">
                <table border="1" style="font-size: 10pt;" id="tabelMandiri" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Kumpulan Nilai Mandiri</th>
                      <th>Rata-rata Mandiri</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $mandiri = 0;
                          $indeksMandiri=0;
                          $KumpulanMandiri = "";
                          $sisiMandiri = 0;
                          foreach ($nilai_mandiri as $itemMandiri){
                            if(strcmp($item->id_mahasiswa, $itemMandiri->id_mahasiswa)==0){
                            $sisiMandiri +=1;  
                              $mandiri+=$itemMandiri->nilai_mandiri;
                              $indeksMandiri++;
                              if($sisiMandiri==1){
                                $KumpulanMandiri = $KumpulanMandiri.(string)$itemMandiri->nilai_mandiri;
                              }
                              else{
                                $KumpulanMandiri = $KumpulanMandiri.", ".(string)$itemMandiri->nilai_mandiri;
                              }  
                            }
                          } 
                      ?>
                      <td><?php echo $KumpulanMandiri; ?></td>
                      <?php if($indeksMandiri!=0){ ?>
                        <td><?php echo $mandiri/$indeksMandiri; ?></td>
                      <?php }?>
                      <?php if($indeksMandiri==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelMandiri', 'members-data')">Cetak
                </div>
                </div>

                <!-- Quiz -->
                <div id="quiz">
                <table border="1" style="font-size: 10pt;" id="tabelQuiz" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Kumpulan Nilai Quiz</th>
                      <th>Rata-rata Quiz</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $quiz = 0;
                          $indeksQuiz=0;
                          $KumpulanQuiz = "";
                          $sisiQuiz = 0;
                          foreach ($nilai_quiz as $itemQuiz){
                            if(strcmp($item->id_mahasiswa, $itemQuiz->id_mahasiswa)==0){
                            $sisiQuiz +=1;  
                              $quiz+=$itemQuiz->nilai_quiz;
                              $indeksQuiz++;
                              if($sisiQuiz==1){
                                $KumpulanQuiz = $KumpulanQuiz.(string)$itemQuiz->nilai_quiz;
                              }
                              else{
                                $KumpulanQuiz = $KumpulanQuiz.", ".(string)$itemQuiz->nilai_quiz;
                              }  
                            }
                          } 
                      ?>
                      <td><?php echo $KumpulanQuiz; ?></td>
                      <?php if($indeksQuiz!=0){ ?>
                        <td><?php echo $quiz/$indeksQuiz; ?></td>
                      <?php }?>
                      <?php if($indeksQuiz==0){ ?>
                        <td>0</td>
                      <?php }?>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelQuiz', 'members-data')">Cetak
                </div>
                </div>

                <!-- UTS -->
                <div id="uts">
                <table border="1" style="font-size: 10pt;" id="tabelUts" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Nilai UTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $uts = 0;
                          $uas = 0;
                          foreach($nilai_ujian as $itemUjian){ 
                            if(strcmp($item->id_mahasiswa, $itemUjian->id_mahasiswa)==0){  
                              $uts=$itemUjian->nilai_uts;
                            } 
                          } 
                      ?>
                      <td><?php echo $uts; ?></td>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelUts', 'members-data')">Cetak
                </div>
                </div>

                <!-- UAS -->
                <div id="uas">
                <table border="1" id="tabelUas" style="font-size: 10pt;" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Nilai UTS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $uts = 0;
                          $uas = 0;
                          foreach($nilai_ujian as $itemUjian){ 
                            if(strcmp($item->id_mahasiswa, $itemUjian->id_mahasiswa)==0){  
                              $uas=$itemUjian->nilai_uas;
                            } 
                          } 
                      ?>
                      <td><?php echo $uas; ?></td>
                      <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelUas', 'members-data')">Cetak
                </div>
                </div>

                <!-- Akhir -->
                <div id="akhir">
                <table border="1" id="tabelAkhir" style="font-size: 10pt;"  class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>No</th>
                      <!-- <th>ID Mahasiswa</th> -->
                      <th>NIM Mahasiswa</th>
                      <th>Nama Mahasiswa</th>
                      <th>Nilai Akhir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $i = 1;
                    $rekap_matkul=0;
                    foreach ($mahasiswa as $item){
                      $rekap_matkul=$item->id_matkul;
                      ?>

                    <tr>
                      <td><?=$i++;?></td>
                      <!-- <td><?=$item->id_mahasiswa;?></td> -->
                      <td><?=$item->nim;?></td>
                      <td><?=$item->nama_mhs;?></td>
                      <?php 
                          $keaktifan = 0;
                          foreach ($nilai_keaktifan as $itemKeaktifan){
                            if(strcmp($item->id_mahasiswa, $itemKeaktifan->id_mahasiswa)==0){ 
                              if($keaktifan<$itemKeaktifan->nilai_keaktifan){
                                $keaktifan=$itemKeaktifan->nilai_keaktifan;
                              } 
                            } 
                          } 
                      ?>
                      <?php 
                          $kelompok = 0;
                          $indeksKelompok=0;
                          foreach ($nilai_kelompok as $itemKelompok){
                            if(strcmp($item->id_mahasiswa, $itemKelompok->id_mahasiswa)==0){  
                              $kelompok+=$itemKelompok->nilai_kelompok;
                              $indeksKelompok++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksKelompok!=0){ 
                        $kelompok=$kelompok/$indeksKelompok; 
                      }?>
                      <?php 
                          $mandiri = 0;
                          $indeksMandiri=0;
                          foreach ($nilai_mandiri as $itemMandiri){
                            if(strcmp($item->id_mahasiswa, $itemMandiri->id_mahasiswa)==0){   
                              $mandiri+=$itemMandiri->nilai_mandiri;
                              $indeksMandiri++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksMandiri!=0){ $mandiri=$mandiri/$indeksMandiri; }?>
                      <?php 
                          $quiz = 0;
                          $indeksQuiz=0;
                          foreach ($nilai_quiz as $itemQuiz){
                            if(strcmp($item->id_mahasiswa, $itemQuiz->id_mahasiswa)==0){   
                              $quiz+=$itemQuiz->nilai_quiz;
                              $indeksQuiz++; 
                            } 
                          } 
                      ?>
                      <?php if($indeksQuiz!=0){ $quiz=$quiz/$indeksQuiz; }?>
                      <?php 
                          $uts = 0;
                          $uas = 0;
                          foreach($nilai_ujian as $itemUjian){ 
                            if(strcmp($item->id_mahasiswa, $itemUjian->id_mahasiswa)==0){  
                              $uts=$itemUjian->nilai_uts;
                              $uas=$itemUjian->nilai_uas;
                            } 
                          } 
                      ?>
                      <?php
                        $total_rekap = 0; 
                        $total_rekap = ($keaktifan*$rekap_keaktifan)+($mandiri*$rekap_mandiri)+($kelompok*$rekap_kelompok)+($quiz*$rekap_quiz)+($uts*$rekap_uts)+($uas*$rekap_uas);
                      ?>
                      <td><?php echo $total_rekap/100; ?></td>    
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
                <div class="box-body">
                  <button id="export" type="submit" class="btn btn-success" id="button-reg" name="simpan" onclick="exportTableToExcel('tabelAkhir', 'members-data')">Cetak
                </div>
                </div>

              </div><!-- /.box-body -->
            </div><!-- /.card-body -->
          </div><!-- /.box -->
        </div><!-- /.col -->
      </div><!-- /.row -->
<!-- ----------------------------------------------------------------------------------------------- -->
  <!-- Modal Ujian -->
    <div class="modal fade" id="myModalPersentase" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <h4 class="modal-title" id="myModalLabel" ><b>Input Nilai</b></h4>
            </div>
            <div class="modal-body">
              <form onsubmit="return validateMyForm();" class="form-horizontal" method="POST"  action="<?php echo base_url('Perpustakaan/update/rekap');?>" enctype="multipart/form-data">
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase Keaktifan</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_keaktifan" id="persentase_keaktifan" value= <?php echo $rekap_keaktifan; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase Kelompok</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_kelompok" id="persentase_kelompok" value= <?php echo $rekap_kelompok; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase Mandiri</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_mandiri" id="persentase_mandiri" value= <?php echo $rekap_mandiri; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase Quiz</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_quiz" id="persentase_quiz" value= <?php echo $rekap_quiz; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase UTS</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_uts" id="persentase_uts" value= <?php echo $rekap_uts; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">Persentase UAS</label>
                    <div class="col-md-6 has-error">
                      <input type="number" class="form-control" name="persentase_uas" id="persentase_uas" value= <?php echo $rekap_uas; ?> >
                      <small class="help-block"></small>
                    </div>
                </div>
                <input type="text" class="form-control" name="id_matkul" style="display: none;" id="id_matkul" value="1" >
                <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-success rekap_simpan" id="button-reg" name="simpan">
                      Simpan
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>

  </section>
</div>
  <?php $this->load->view('admin/layout/footer') ?> 
  <!-- /.content-wrapper -->
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/layout/scrip') ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
<script src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>


<script type="text/javascript">
  $(function () {          
    $('.editPersentase').click(function(){
      $('input+small').text('');
      $('input').parent().removeClass('has-error');
      $('select').parent().removeClass('has-error');
      $('#myModalPersentase').modal('show');

      var form = "#myModalPersentase";

      return false;
    });
  });

  function validateMyForm(){
    var keaktifan = parseInt(document.getElementById("persentase_keaktifan").value);
    var kelompok = parseInt(document.getElementById("persentase_kelompok").value);
    var mandiri = parseInt(document.getElementById("persentase_mandiri").value);
    var quiz = parseInt(document.getElementById("persentase_quiz").value);
    var uts = parseInt(document.getElementById("persentase_uts").value);
    var uas = parseInt(document.getElementById("persentase_uas").value);
    var total_rekap = keaktifan+kelompok+mandiri+quiz+uts+uas;
    
    if(total_rekap!=100){
      alert('Total persentase tidak sama dengan 100%')
      return false;
    }
    else{
      return true;
    }
  }


  $( document ).ready(function() {
    var keaktifan = document.getElementById('keaktifan');
    var kelompok = document.getElementById('kelompok');
    var mandiri = document.getElementById('mandiri');
    var quiz = document.getElementById('quiz');
    var uts = document.getElementById('uts');
    var uas = document.getElementById('uas');
    var akhir = document.getElementById('akhir');
    
    keaktifan.style.display = 'none';

    kelompok.style.display = 'none';

    mandiri.style.display = 'none';
      
    quiz.style.display = 'none';

    uts.style.display = 'none';

    uas.style.display = 'none';

    akhir.style.display = 'none';
  });
  function pilihTampilan(){
    var pilihan = document.getElementById("jenis_tampilan").value;
    var keaktifan = document.getElementById('keaktifan');
    var kelompok = document.getElementById('kelompok');
    var mandiri = document.getElementById('mandiri');
    var quiz = document.getElementById('quiz');
    var uts = document.getElementById('uts');
    var uas = document.getElementById('uas');
    var akhir = document.getElementById('akhir');
    var semua = document.getElementById('semua');
    semua.style.display = 'none';
    
    keaktifan.style.display = 'none';

    kelompok.style.display = 'none';

    mandiri.style.display = 'none';
      
    quiz.style.display = 'none';

    uts.style.display = 'none';

    uas.style.display = 'none';

    akhir.style.display = 'none';

    switch(pilihan){
      case "1":
        keaktifan.style.display = 'block';
      break;
      case "2":
        kelompok.style.display = 'block';
      break;
      case "3":
        mandiri.style.display = 'block';
      break;
      case "4":
        quiz.style.display = 'block';
      break;
      case "5":
        uts.style.display = 'block';
      break;
      case "6":
        uas.style.display = 'block';
      break;
      case "7":
        akhir.style.display = 'block';
      break;
      default:
        semua.style.display = 'block';
      break;
    }
  }
</script>

<script type="text/javascript">
  function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
</script>