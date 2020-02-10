<!DOCTYPE html>
<html>
<?php $this->load->view('admin/layoutA/head') ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php $this->load->view('admin/layoutA/header') ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php $this->load->view('admin/layoutA/sidebar') ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Master Data Peminjaman Buku</li>
          </ol>
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
                <div class="box-header">
                  <h3 class="box-title">Data Peminjaman Buku
                  </h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <input type="text" style="float:right" id="inputt" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
                <div class="box-body">
                  <table id="dataBuku" class="table table-bordered table-hover">

                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
                     $i = $this->uri->segment('3') + 1;
                     foreach ($peminjam as $item){  ?>
                      <tr>
                        <td><?=$i++;?></td>
                        <td><?=$item->anggota;?></td>
                        <td><?=$item->petugas;?></td>
                        <td><?=$item->JudulBuku;?></td>
                        <td><?=$item->Tgl_pinjam;?></td>
                        <?php if($item->Tgl_kembali == NULL || $item->Tgl_kembali == 0000-00-00){ ?>
                        <td>
                          <a class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> Buku Belum dikembalikan</a>
                        </td>
                        <?php }else{ ?>
                        <td>
                          <?=$item->Tgl_kembali;?>
                        </td>
                        <?php } ?>
                       
                      </tr>
                      <?php } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Nama Peminjam</th>
                        <th>Petugas Yang Melayani</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Mengembalikan</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col -->
          </div><!-- /.row -->
    </section>
    </div>
  <!-- /.content-wrapper -->
  <?php $this->load->view('admin/layoutA/footer') ?>

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<?php $this->load->view('admin/layoutA/scrip') ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/admin/plugins')?>/datatables/dataTables.bootstrap.min.js"></script>

    <script>
      // $(function () {
      //   $('#dataBuku').DataTable({"pageLength": 10});
      // });
      function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("inputt");
      filter = input.value.toUpperCase();
      table = document.getElementById("databuku");
      tr = table.getElementsByTagName("tr");
      //alert(tr.length);
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
    </script>

@endsection
