<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA KONTRAK KULIAH
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA KONTRAK KULIAH</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="<?php echo base_url('c_kontrak_kuliah/create'); ?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          <a href="<?php echo base_url('unduhKontrakKuliah'); ?>" class="btn btn-secondary" role="button" title="Unduh Kontrak Kuliah"><i class="glyphicon glyphicon-print"></i> Unduh Kontrak Kuliah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="kontrak_kuliah" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>SKS</th>
                  <th>Deskripsi Mata Kuliah</th>
                  <th>Strategi Perkuliahan</th>
                  <th>Referensi</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

              <?php if($jumlah_data > 0):?>
                <?php $no=0; foreach ($mahasiswa as $m): $no++ ?>

                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $m->sks;?></td>
                  <td><?php echo $m->deskripsi_mata_kuliah;?></td>
                  <td><?php echo $m->strategi_perkuliahan;?></td>
                  <td><?php echo $m->referensi;?></td>
                  <td>
                    <a href="<?php echo base_url('c_kontrak_kuliah/edit/'.$m->id_kontrak_kuliah);?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('c_kontrak_kuliah/delete/'.$m->id_kontrak_kuliah);?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a>
                  </td>
                </tr>

                <?php endforeach;?>
              <?php endif;?>

                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
<!-- /.content-wrapper -->
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>
<!-- Javascript Datatable -->
<script type="text/javascript">
  $(document).ready(function(){
    $('#kontrak_kuliah').DataTable();
  });
</script>