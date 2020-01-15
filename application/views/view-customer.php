
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
                                <li class="breadcrumb-item"><a href="#">PEMBELI</a></li>
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
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Operasi</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Nama Customer</th>
                                                <th>Email</th>
                                                <th>Jenis Kelamin</th>
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
                            <label class="text-muted m-b-15 f-s-12">Email</label>
                            <input type="email" class="form-control input-flat" id="email" name="email" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Password</label>
                            <input type="password" class="form-control input-flat" id="password" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control input-flat" id="id_pembeli" name="id_pembeli">
                            <label class="text-muted m-b-15 f-s-12">Nama Pembeli</label>
                            <input type="text" class="form-control input-flat" id="nama_pembeli" name="nama_pembeli" placeholder="Masukkan Nama Pembeli">
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Jenis Kelamin</label>
                            <select class="form-control input-flat" id="jk" name="jk"></select>
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Alamat</label>
                            <textarea class="form-control input-flat" id="alamat_jalan" name="alamat_jalan"></textarea>
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Kabupaten</label>
                            <textarea class="form-control input-flat" id="alamat_kab" name="alamat_kab"></textarea>
                            <!-- <input type="text" class="form-control input-flat" id="alamat_kab" name="alamat_kab"> -->
                        </div>
                        <div class="form-group">
                            <label class="text-muted m-b-15 f-s-12">Provinsi</label>
                            <textarea class="form-control input-flat" id="alamat_prov" name="alamat_prov"></textarea>
                            <!-- <input type="text" class="form-control input-flat" id="alamat_prov" name="alamat_prov"> -->
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
  $("form#form-produk").attr('action', 'http://localhost/bakery/api/customer/add/');
  // Prepare View
  $.getJSON("http://localhost/bakery/api/jenis_kelamin/get/", function(response) {
    var opts = "";
    for (let i = 0; i < response.data.length; i++) {
      $("select#jk").append(
        $("<option>").val(response.data[i].jk).text(response.data[i].jk)
      )
    }
  });
  function clearForm() {
    $("#id_pembeli").val("");
    $('#id_pembeli').removeAttr('readonly');
    $("#email").val("");
    $("#password").val("");
    $("#nama_pembeli").val("");
    $("#alamat_jalan").val("");
    $("#alamat_kab").val("");
    $("#alamat_prov").val("");
  }
  function getData() {
    $("table#table-produk tbody").html("");
    $.getJSON("http://localhost/bakery/api/customer/get/", function(response) {
      var rows = "";
      for (let i = 0; i < response.data.length; i++) {
        $("table#table-produk tbody").append(
          $("<tr>").append(
            [
              $("<td>").text(response.data[i].id_pembeli),
              $("<td>").text(response.data[i].nama_pembeli),
              $("<td>").text(response.data[i].email),
              $("<td>").append(
                [
                  $("<button/>", {value: response.data[i].id_pembeli, class: "btn btn-info upd"}).text('UPDATE').attr("data-toggle", "modal").attr("data-target", "#formModal"),
                  $("<button/>", {value: response.data[i].id_pembeli, class: "btn btn-danger del"}).text('DELETE'),
                ]
              ),
            ]
          )
        )
      }
      $('.upd').click(function(){
        $("form#form-produk").attr('action', 'http://localhost/bakery/api/customer/update/');
        $.getJSON("http://localhost/bakery/api/customer/get/?id_pembeli=" + $(this).attr('value'), function(response) {
          if(response.data.length != 0) {
            $("#id_pembeli").val(response.data[0].id_pembeli);
            $('#id_pembeli').attr('readonly', '');
            $("#email").val(response.data[0].email);
            $("#password").val(response.data[0].password);
            $("#nama_pembeli").val(response.data[0].nama_pembeli);
            $("#jk").val(response.data[0].jk);
            $("#alamat_jalan").val(response.data[0].alamat_jalan);
            $("#alamat_kab").val(response.data[0].alamat_kab);
            $("#alamat_prov").val(response.data[0].alamat_prov);
            $("#formModal").show();
          } else {
            alert('Data Not Found');
          }
        });
      });
      $('.del').click(function(){
        $.getJSON("http://localhost/bakery/api/customer/delete/?id_pembeli=" + $(this).attr('value'), function(response) {
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
        $("form#form-produk").attr('action', 'http://localhost/bakery/api/customer/add/');
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