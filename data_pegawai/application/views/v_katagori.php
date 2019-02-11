<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Aplikasi Data Pegawaii</title>
  <!-- favicon -->
  <link rel="shortcut icon" href="assets/img/favicon.png">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/datepicker.min.css" rel="stylesheet">
  <link href="assets/css/jquery.dataTables.css" rel="stylesheet">
  <!-- styles -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid"> <!-- /.container-fluid -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">
            <i class="glyphicon glyphicon-check"></i>
            Aplikasi Data Pegawaii
        </a>
    </div>
</div> <!-- /.container-fluid -->
</nav>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h4>
                    <i class="glyphicon glyphicon-user"></i> Data Pegawai
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ModalaAdd"><span class="fa fa-plus"></span><i class="glyphicon glyphicon-plus"></i> Tambah</a>
                    <div class="pull-right btn-tambah">
                        <form method="get" action="<?php echo base_url("pegawai/pencarian/")?>">
                            <table>
                                <tr>
                                    <td>&nbsp;</td>
                                    <td>
                                      <select class="form-control" name="status">
                                        <option>-Pilih status-</option>
                                        <option value="1">Kontrak</option>
                                        <option value="2">Tetap</option>
                                    </select>
                                    <td><input class="btn btn-info"  type="submit" name="button" id="button" value="Tampilkan"></td>
                                </tr>
                            </table> 
                        </form>
                    </div>  
                </h4>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Data Pegawai</h3>
            </div>
            <div class="panel-body">
               <div id="reload" class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="mydata">
                    <thead>
                        <tr>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Unit</th>
                            <th>Status</th>
                            <th style="text-align: right;">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="show_data">

                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- /.panel -->
</div> <!-- /.col -->
</div> <!-- /.row -->
</div> <!-- /.container-fluid -->

<footer class="footer">
  <div class="container-fluid">
    <p class="text-muted pull-right ">Theme by <a href="http://www.getbootstrap.com" target="_blank">Bootstrap</a></p>
</div>
</footer>

<!-- MODAL ADD -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Pegawai</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik" id="nik" class="form-control" type="text" placeholder="Masukan NIK" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama" id="nama" class="form-control" type="text" placeholder="Masukan nama pegawai" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Unit</label>
                        <div class="col-xs-6">
                            <select class="form-control" name="unit" id="unit" required>
                                <option value="">-Pilih Unit-</option>
                                <option value="1">Produksi</option>
                                <option value="2">Pembelian</option>
                                <option value="3">Penjualan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-6">
                           <select class="form-control" name="status" id="status" required>
                            <option value="">-Pilih Status-</option>
                            <option value="1">Kontrak</option>
                            <option value="2">Tetap</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                <button class="btn btn-info" id="btn_simpan">Simpan</button>
            </div>
        </form>
    </div>
</div>
</div>
<!--END MODAL ADD-->

<!-- MODAL EDIT -->
<div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Pegawai</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-xs-3" >NIK</label>
                        <div class="col-xs-9">
                            <input name="nik_edit" id="nik2" class="form-control" type="text" placeholder="Kode Pegawai" style="width:335px;" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Nama</label>
                        <div class="col-xs-9">
                            <input name="nama_edit" id="nama2" class="form-control" type="text" placeholder="Nama" style="width:335px;" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Unit</label>
                        <div class="col-xs-6">
                            <select class="form-control" name="unit_edit" id="unit2" required>
                                <option value="">-Pilih Unit-</option>
                                <option value="1">Produksi</option>
                                <option value="2">Pembelian</option>
                                <option value="3">Penjualan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Status</label>
                        <div class="col-xs-6">
                            <select class="form-control" name="status_edit" id="status2" required>
                                <option value="">-Pilih Status-</option>
                                <option value="1">Kontrak</option>
                                <option value="2">Tetap</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL EDIT-->

<!--MODAL HAPUS-->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Pegawai</h4>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
                    <input type="hidden" name="kode" id="textkode" value="">
                    <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus pegawai ini?</p></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                    <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--END MODAL HAPUS-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        tampil_data_pegawai();  //pemanggilan fungsi tampil pegawai.
        
        $('#mydata').dataTable();

        //fungsi tampil pegawai
        function tampil_data_pegawai(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>index.php/pegawai/data_pegawai',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        '<td>'+data[i].nik+'</td>'+
                        '<td>'+data[i].nama+'</td>'+
                        '<td>'+data[i].unit+'</td>'+
                        '<td>'+data[i].status+'</td>'+
                        '<td style="text-align:right;">'+
                        '<a href="javascript:;" class="glyphicon glyphicon-edit btn btn-info btn-md item_edit" data="'+data[i].nik+'"> Edit</a>'+' '+
                        '<a href="javascript:;" class="glyphicon glyphicon-trash btn btn-danger btn-md item_hapus" data="'+data[i].nik+'"> Hapus</a>'+
                        '</td>'+
                        '</tr>';
                    }
                    $('#show_data').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : 'GET',
                url  :'<?php echo base_url()?>index.php/pegawai/get_pegawai',
                dataType : 'JSON',
                data : {id:id},
                success: function(data){
                    $.each(data,function(nik, nama, id_unit, id_status){
                        $('#ModalaEdit').modal('show');
                        $('[name="nik_edit"]').val(data.nik);
                        $('[name="nama_edit"]').val(data.nama);
                        $('[name="unit_edit"]').val(data.id_unit);
                        $('[name="status_edit"]').val(data.id_status);
                    });
                }
            });
            return false;
        });


        //GET HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Simpan Pegawai
        $('#btn_simpan').on('click',function(){
            var nik=$('#nik').val();
            var nama=$('#nama').val();
            var unit=$('#unit').val();
            var status=$('#status').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/pegawai/simpan_pegawai')?>",
                dataType : "JSON",
                data : {nik:nik , nama:nama, unit:unit, status:status},
                success: function(data){
                    $('[name="nik"]').val("");
                    $('[name="nama"]').val("");
                    $('[name="unit"]').val("");
                    $('[name="status"]').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_pegawai();
                }
            });
            return false;
        });

        //Update Pegawai
        $('#btn_update').on('click',function(){
            var nik=$('#nik2').val();
            var nama=$('#nama2').val();
            var unit=$('#unit2').val();
            var status=$('#status2').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/pegawai/update_pegawai')?>",
                dataType : "JSON",
                data : {nik:nik , nama:nama, unit:unit, status:status},
                success: function(data){
                    $('[name="nik_edit"]').val("");
                    $('[name="nama_edit"]').val("");
                    $('[name="unit_edit"]').val("");
                    $('[name="status_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_pegawai();
                }
            });
            return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/pegawai/hapus_pegawai')?>",
                dataType : "JSON",
                data : {kode:kode},
                success: function(data){
                    $('#ModalHapus').modal('hide');
                    tampil_data_pegawai();
                }
            });
            return false;
        });
    });
</script>
</body>
</html>