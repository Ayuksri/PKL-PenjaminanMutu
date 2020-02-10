<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      TAMBAH REFERENSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">TAMBAH REFERENSI</li>
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
            <form role="form" method="post" action="<?php echo base_url('c_referensi/save'); ?>">
              <div class="box-body">
              <div class="form-group">
                  <label>Jenis</label>
                  <select class="form-control" name="jenis" required>
                    <option value="">- Pilih jenis referensi -</option>
                    <option value="buku">Buku</option>
                    <option value="jurnal">Jurnal</option>
                    <option value="web">Web</option>
                    

                  </select>
                </div>
                <div class="form-group">
                  <label>Penulis</label>
                  <input type="text" name="penulis" class="form-control" placeholder="Masukkan penulis referensi..." required>
                </div>
                <div class="form-group">
                  <label>Judul</label>
                  <input type="text" name="judul" class="form-control" placeholder="Masukkan judul referensi..." required>
                </div>
                <div class="form-group">
                  <label>Edisi</label>
                  <input type="number" name="edisi" class="form-control" placeholder="Masukkan edisi referensi..." required>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="number" name="tahun" class="form-control" placeholder="Masukkan tahun terbit..." required>
                </div>
                <div class="form-group">
                  <label>Kota</label>
                  <input type="text" name="kota" class="form-control" placeholder="Masukkan kota terbit..." required>
                </div>
                <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" class="form-control" placeholder="Masukkan penerbit..." required>
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