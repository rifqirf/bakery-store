
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
                                <li class="breadcrumb-item"><a href="#"><?= strtoupper($page) ?></a></li>
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
                              <!-- <button class="btn btn-success" type="button" id="add" data-toggle="modal" data-target="#formModal">Tambah Data</button> -->
                            </div>
                            <div class="bootstrap-data-table-panel">
                                <div class="table-responsive">
                                    <table id="table-penjualan" class="display table table-borderd table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pembeli</th>
                                                <th>Nama Toko</th>
                                                <th>Timestamp</th>
                                                <th>Status</th>
                                                <th>Operasi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pembeli</th>
                                                <th>Nama Toko</th>
                                                <th>Timestamp</th>
                                                <th>Status</th>
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
                    <form id="form-penjualan" action="" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control input-flat" id="no_pj" name="no_pj">
                            <label class="text-muted m-b-15 f-s-12">Nama Pembeli</label>
                            <select class="form-control input-flat" readonly id="id_pembeli" name="id_pembeli"></select>
                            <!-- <label class="text-muted m-b-15 f-s-12" id="id_pembeli" name="id_pembeli"></label> -->
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Nama Toko</label>
                            <select class="form-control input-flat" readonly id="id_toko" name="id_toko"></select>
                            <!-- <label class="text-muted m-b-15 f-s-12" id="id_toko" name="id_toko"></label> -->
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Timestamp</label>
                            <input type="datetime" class="form-control input-flat" readonly id="timestmp" name="timestmp">
                            <!-- <label class="text-muted m-b-15 f-s-12" id="timestmp" name="timestmp"></label> -->
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Status</label>
                            <!-- <input type="number" class="form-control input-flat" min="1" max="3" id="status" name="status"> -->
                            <select class="form-control input-flat" id="status" name="status"></select>
                        </div>
                        <div class="form-group">
                          <div class="card">
                              <div class="card-title">
                                  Detail Penjualan
                              </div>
                              <div class="bootstrap-data-table-panel">
                                  <div class="table-responsive">
                                      <table id="table-detail" class="display table table-borderd table-hover">
                                          <thead>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>Nama Produk</th>
                                                  <th>Harga</th>
                                                  <th>Qty</th>
                                                  <th>Subtotal</th>
                                              </tr>
                                          </thead>
                                          <tbody></tbody>
                                          <tfoot>
                                              <tr>
                                                  <th>No.</th>
                                                  <th>Nama Produk</th>
                                                  <th>Harga</th>
                                                  <th>Qty</th>
                                                  <th>Subtotal</th>
                                              </tr>
                                          </tfoot>
                                      </table>
                                  </div>
                              </div>
                          </div>
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
  $("form#form-penjualan").attr('action', 'http://localhost/bakery/api/penjualan/add/');
  // Prepare View
  $.getJSON("http://localhost/bakery/api/customer/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#id_pembeli").append(
        $("<option>").val(response.data[i].id_pembeli).text(response.data[i].nama_pembeli)
      )
    }
  });
  $.getJSON("http://localhost/bakery/api/toko/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#id_toko").append(
        $("<option>").val(response.data[i].id_toko).text(response.data[i].nama_toko)
      )
    }
  });
  $.getJSON("http://localhost/bakery/api/status/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#status").append(
        $("<option>").val(response.data[i].status).text(response.data[i].message)
      )
    }
  });
  function clearForm() {
    $("#no_pj").val("");
    $('#no_pj').removeAttr('readonly');
    // $('#timestmp').attr('readonly');
  }
  function getData() {
    $("table#table-penjualan tbody").html("");
    $.getJSON("http://localhost/bakery/api/penjualan/get/", function(response) {
      var rows = "";
      for (let i = 0; i < response.data.length; i++) {
        $("table#table-penjualan tbody").append(
          $("<tr>").append(
            [
              $("<td>").text(response.data[i].no_pj),
              $("<td>").text(response.data[i].nama_pembeli),
              $("<td>").text(response.data[i].nama_toko),
              $("<td>").text(response.data[i].timestmp),
              $("<td>").text(response.data[i].message),
              $("<td>").append(
                [
                  $("<button/>", {value: response.data[i].no_pj, class: "btn btn-info upd"}).text('UPDATE').attr("data-toggle", "modal").attr("data-target", "#formModal"),
                  $("<button/>", {value: response.data[i].no_pj, class: "btn btn-danger del"}).text('DELETE'),
                ]
              ),
            ]
          )
        )
      }
      $('.upd').click(function(){
        $("form#form-penjualan").attr('action', 'http://localhost/bakery/api/penjualan/update/');
        var id = $(this).attr('value');
        $.getJSON("http://localhost/bakery/api/penjualan/get/?no_pj=" + id, function(response) {
          if(response.data.length != 0) {
            $("#no_pj").val(response.data[0].no_pj);
            $('#no_pj').attr('readonly', '');
            $("#id_pembeli").val(response.data[0].id_pembeli);
            $("#id_toko").val(response.data[0].id_toko);
            $("#timestmp").val(response.data[0].timestmp);
            $('#timestmp').attr('readonly', '');
            $("#status").val(response.data[0].status);
            $.getJSON("http://localhost/bakery/api/detail_penjualan/get/?no_pj=" + id, function(res){
              var rows = "";
              $("table#table-detail tbody").html("");
              for (let i = 0; i < res.data.length; i++) {
                $("table#table-detail tbody").append(
                  $("<tr>").append(
                    [
                      $("<td>").text(i+1),
                      $("<td>").text(res.data[i].nama_produk),
                      $("<td>").text(res.data[i].harga),
                      $("<td>").text(res.data[i].qty),
                      $("<td>").text(res.data[i].qty * res.data[i].harga),
                    ]
                  )
                )
              }
            });
            $("#formModal").show();
          } else {
            alert('Data Not Found');
          }
        });
      });
      $('.del').click(function(){
        var id = $(this).attr('value');
        $.getJSON("http://localhost/bakery/api/penjualan/delete/?no_pj=" + id, function(response) {
          if(response.data.status != 0) {
            $.getJSON("http://localhost/bakery/api/penjualan/delete/?no_pj=" + id, function(response) {
              if(response.data.status != 0) {
                alert('Success');
              } else {
                console.log(response);
                alert('Failed');
              }
              getData();
            });
          } else {
            console.log(response);
            alert('Failed');
          }
        });
      });
      $("#add").click(function(){
        $("form#form-penjualan").attr('action', 'http://localhost/bakery/api/penjualan/add/');
        var today = new Date();
        var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
        var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        var dateTime = date+' '+time;
        $("#timestmp").val(datetime);
        clearForm();
      });
    });
  }
  
  getData();
  $("form#form-penjualan").on('submit', function(evt){
    evt.preventDefault();
    var datas = $(this).serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});
    console.log(datas);
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