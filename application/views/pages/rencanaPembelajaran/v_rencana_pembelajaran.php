<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      DATA RENCANA PEMBELAJARAN
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> HOME</a></li>
        <li class="active">DATA RENCANA PEMBELAJARAN</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
      <div class="box box-primary">
        <div class="box-header">
          <a href="<?php echo base_url('c_rencana_pembelajaran/create'); ?>" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
          <a href="<?php echo base_url('unduhRPS'); ?>" class="btn btn-secondary" role="button" title="Unduh RPS"><i class="glyphicon glyphicon-print"></i> Unduh RPS</a>
          </div>
            <div class="box-body table-responsive">
              <table id="rencana_pembelajaran" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Minggu Ke</th>
                  <th>Kemampuan Akhir</th>
                  <th>Bahan Kajian</th>
                  <th>Metode</th>
                  <th>Waktu</th>
                  <th>Pengalaman Belajar</th>
                  
                  <th>Bobot Nilai</th>
                  <th>Referensi</th>
                  <th>AKSI</th>
                </tr>
                </thead>
                <tbody>

              <?php if($jumlah_data > 0):?>
                <?php $no=0; foreach ($rencana_pembelajaran as $m): $no++ ?>

                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $m->minggu_ke;?></td>
                  <td><?php echo $m->kemampuan_akhir;?></td>
                  <td><?php echo $m->bahan_kajian;?></td>
                  <td><?php echo $m->metode;?></td>
                  <td><?php echo $m->waktu;?></td>
                  <td><?php echo $m->pengalaman_belajar;?></td>
                  
                  <td><?php echo $m->bobot_nilai;?></td>
                  <td><?php echo $m->id_referensi;?></td>
                  <td>
                    <a href="<?php echo base_url('c_rencana_pembelajaran/edit/'.$m->id_rencana_pembelajaran);?>" class="btn btn-success" role="button" title="Ubah Data"><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url('c_rencana_pembelajaran/delete/'.$m->id_rencana_pembelajaran);?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
    $('#rencana_pembelajaran').DataTable();
  });
</script>