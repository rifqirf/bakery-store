
<div class="content-wrap">
    <div class="main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                    <div class="page-header">
                        <div class="page-title">
                            <h1> <?= strtoupper(str_replace( base_url(), "", current_url() )) ?> </h1>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
                <div class="col-lg-4 p-l-0 title-margin-left">
                    <div class="page-header">
                        <div class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">BAHAN</a></li>
                                <li class="breadcrumb-item active">LIHAT DATA</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /# column -->
            </div>
            <!-- /# row -->
            <section id="main-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-title">
                              <button class="btn btn-success" type="button" id="add" data-toggle="modal" data-target="#formModal">Tambah Data</button>
                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="table-produk" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID Bahan</th>
                                                <th>Nama Bahan</th>
                                                <th>Harga</th>
                                                <th>Satuan</th>
                                                <th>Stok</th>
                                                <th>Operasi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Bahan</th>
                                                <th>Nama Bahan</th>
                                                <th>Harga</th>
                                                <th>Satuan</th>
                                                <th>Stok</th>
                                                <th>Operasi</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer">
                            <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="form">
              <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="formModalTitle">FORM DATA</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <form id="form-produk" action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control input-flat" id="id_bahan" name="id_bahan">
                            <label class="text-muted m-b-15 f-s-12">Nama Bahan</label>
                            <input type="text" class="form-control input-flat" id="nama_bahan" name="nama_bahan" placeholder="Masukkan Nama Bahan">
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Satuan</label>
                            <select class="form-control input-flat" id="satuan" name="satuan"></select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Harga</label>
                            <input type="number" class="form-control input-flat" min="0" id="harga" name="harga">
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Stok</label>
                            <input type="number" class="form-control input-flat" min="0" id="stok" name="stok">
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Supplier</label>
                            <select class="form-control input-flat" id="id_supplier" name="id_supplier"></select>
                        </div>
                      </div>
                    <div class="modal-footer">
                      <button type="button" id="cancel" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button class="btn btn-primary" type="submit" id="submit">Submit</button>
                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
        </div>
    </div>
</div>
<div class="mt-4"></div>
<div id="search">
    <button type="button" class="close">×</button>
    <form>
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
<!-- jquery vendor -->
<script src="<?= base_url("assets/js/lib/jquery.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/jquery.nanoscroller.min.js"); ?>"></script>
<!-- nano scroller -->
<script src="<?= base_url("assets/js/lib/menubar/sidebar.js"); ?>"></script>
<script src="<?= ""//base_url("assets/js/lib/preloader/pace.min.js"); ?>"></script>
<!-- sidebar -->
<!-- <script src="<?= ""//base_url("assets/js/lib/"); ?>"></script> -->
<!-- bootstrap -->
<script src="<?= base_url("assets/js/lib/bootstrap.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/scripts.js"); ?>"></script>
<!-- scripit init-->
<script src="<?= base_url("assets/js/lib/data-table/datatables.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/dataTables.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/dataTables.buttons.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/buttons.bootstrap4.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/jszip.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/pdfmake.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/vfs_fonts.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/buttons.html5.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/buttons.print.min.js"); ?>"></script>
<script src="<?= base_url("assets/js/lib/data-table/buttons.colVis.min.js"); ?>"></script>
<script>
$(document).ready(function(e) {
  $("#table-produk").DataTable();
  $("#pkey").hide();
  $("form#form-produk").attr('action', 'http://localhost/bakery/api/bahan/add/');
  // Prepare View
  $.getJSON("http://localhost/bakery/api/satuan/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#satuan").append(
        $("<option>").val(response.data[i].satuan).text(response.data[i].satuan)
      )
    }
  });
  $.getJSON("http://localhost/bakery/api/supplier/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#id_supplier").append(
        $("<option>").val(response.data[i].id_supplier).text(response.data[i].nama_supplier)
      )
    }
  });
  function clearForm() {
    $("#id_bahan").val("");
    $('#id_bahan').removeAttr('readonly');
    $("#nama_bahan").val("");
    $("#harga").val("");
    $("#stok").val("");
    $("#deskripsi").val("");
  }
  function getData() {
    $("table#table-produk tbody").html("");
    $.getJSON("http://localhost/bakery/api/bahan/get/", function(response) {
      var rows = "";
      for (let i = 0; i < response.data.length; i++) {
        $("table#table-produk tbody").append(
          $("<tr>").append(
            [
              $("<td>").text(response.data[i].id_bahan),
              $("<td>").text(response.data[i].nama_bahan),
              $("<td>").text(response.data[i].harga),
              $("<td>").text(response.data[i].satuan),
              $("<td>").text(response.data[i].stok),
              $("<td>").append(
                [
                  $("<button/>", {value: response.data[i].id_bahan, class: "btn btn-info upd"}).text('UPDATE').attr("data-toggle", "modal").attr("data-target", "#formModal"),
                  $("<button/>", {value: response.data[i].id_bahan, class: "btn btn-danger del"}).text('DELETE'),
                ]
              ),
            ]
          )
        )
      }
      $('.upd').click(function(){
        $("form#form-produk").attr('action', 'http://localhost/bakery/api/bahan/update/');
        $.getJSON("http://localhost/bakery/api/bahan/get/?id_bahan=" + $(this).attr('value'), function(response) {
          if(response.data.length != 0) {
            $("#id_bahan").val(response.data[0].id_bahan);
            $('#id_bahan').attr('readonly', '');
            $("#nama_bahan").val(response.data[0].nama_bahan);
            $("#satuan").val(response.data[0].satuan);
            $("#harga").val(response.data[0].harga);
            $("#stok").val(response.data[0].stok);
            $("#id_supplier").val(response.data[0].id_supplier);
            $("#formModal").show();
          } else {
            alert('Data Not Found');
          }
        });
      });
      $('.del').click(function(){
        $.getJSON("http://localhost/bakery/api/bahan/delete/?id_bahan=" + $(this).attr('value'), function(response) {
          if(response.data.status != 0) {
            alert('Success');
          } else {
            console.log(response);
            alert('Failed');
          }
          getData();
        });
      });
      $("#add").click(function(){
        $("form#form-produk").attr('action', 'http://localhost/bakery/api/bahan/add/');
        clearForm();
      });
    });
  }
  
  getData();
  $("form#form-produk").on('submit', function(evt){
    evt.preventDefault();
    var datas = $(this).serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});
    // console.log(datas);
    var send = {
      // type: "POST",
      url: $(this).attr("action"),
      dataType: 'json',
      contentType: false,
      // cache: false,
      // processData:false,
      data: datas,
      beforeSend: function() {
        $("#submit").prop('disabled', true);
      },
      complete: function() {  
        $("#submit").prop('disabled', false);
      },
      success: function(response) {
        alert(response.status_message);
        console.log(response);
        getData();
        clearForm();
      },
      error: function(response) {
        alert(response.status_message);
        console.log(response);
      },
    };

    $.ajax(send);
  });
});
</script>