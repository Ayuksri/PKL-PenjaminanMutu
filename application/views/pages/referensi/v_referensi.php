<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA REFERENSI
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA REFERENSI</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="<?php echo base_url('c_referensi/create'); ?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          </div>
            <div class="box-body table-responsive">
              <table id="referensi" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Jenis</th>
                  <th>Penulis</th>
                  <th>Edisi</th>
                  <th>Tahun</th>
                  <th>Kota</th>
                  <th>Penerbit</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

              <?php if($jumlah_data > 0):?>
                <?php $no=0; foreach ($referensi as $m): $no++ ?>

                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $m->jenis;?></td>
                  <td><?php echo $m->penulis;?></td>
                  <td><?php echo $m->edisi;?></td>
                  <td><?php echo $m->tahun;?></td>
                  <td><?php echo $m->kota;?></td>
                  <td><?php echo $m->penerbit;?></td>
                  <td>
                    <a href="<?php echo base_url('c_referensi/edit/'.$m->id_referensi);?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('c_referensi/delete/'.$m->id_referensi);?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
    $('#referensi').DataTable();
  });
</script>