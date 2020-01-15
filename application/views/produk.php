<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Data Produk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    #pkey {
      display: none;
    }
  </style>
</head>
<body>

  <!-- List -->
  <h1>Data Produk</h1>
  <table id="table-produk" border="1">
    <thead>
      <tr>
        <th>ID Produk</th>
        <th>Nama Produk</th>
        <th>Operasi</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>

  <div class="mt-4"></div>
  <button class="btn btn-success" type="button" id="add">Tambah</button>
  <!-- Form -->
  <h1>Form Produk</h1>
  <form id="form-produk" action="" method="post" enctype="multipart/form-data">
  <table>
    <tr id="pkey">
      <td><label for="id_produk">ID Produk</label></td>
      <td><input type="text" name="id_produk" id="id_produk"></td>
    </tr>
    <tr>
      <td><label for="nama_produk">Nama Produk</label></td>
      <td><input type="text" name="nama_produk" id="nama_produk" required></td>
    </tr>
    <tr>
      <td><label for="id_jenis">Jenis Produk</label></td>
      <td>
        <select name="id_jenis" id="id_jenis"></select>
      </td>
    </tr>
    <tr>
      <td><label for="satuan">Satuan</label></td>
      <td>
        <select name="satuan" id="satuan"></select>
      </td>
    </tr>
    <tr>
      <td><label for="harga">Harga</label></td>
      <td><input type="number" name="harga" id="harga" min="0" required></td>
    </tr>
    <tr>
      <td><label for="stok">Stok</label></td>
      <td><input type="number" name="stok" id="stok" min="0" required></td>
    </tr>
    <tr>
      <td><label for="deskripsi">Deskripsi</label></td>
      <td><textarea name="deskripsi" id="deskripsi" required></textarea></td>
    </tr>
    <tr>
      <td>
        <button class="btn btn-primary" type="submit" id="submit">Submit</button>
      </td>
    </tr>
  </table>
  </form>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
  <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <script>
  $(document).ready(function(e) {
    $("#table-produk").DataTable();
    $("#pkey").hide();
    $("form#form-produk").attr('action', 'http://localhost/bakery/api/produk/add/');

    // Prepare View
    $.getJSON("http://localhost/bakery/api/satuan/get/", function(response) {
      var opts = "";
      for (let i = 0; i < response.data.length; i++) {
        $("select#satuan").append(
          $("<option>").val(response.data[i].satuan).text(response.data[i].satuan)
        )
      }
    });
    $.getJSON("http://localhost/bakery/api/jenis_produk/get/", function(response) {
      var opts = "";
      for (let i = 0; i < response.data.length; i++) {
        $("select#id_jenis").append(
          $("<option>").val(response.data[i].id_jenis).text(response.data[i].jenis)
        )
      }
    });

    function clearForm() {
      $("#id_produk").val("");
      $('#id_produk').removeAttr('readonly');
      $("#nama_produk").val("");
      $("#harga").val("");
      $("#stok").val("");
      $("#deskripsi").val("");
    }
    function getData() {
      $("table#table-produk tbody").html("");
      $.getJSON("http://localhost/bakery/api/produk/get/", function(response) {
        var rows = "";
        for (let i = 0; i < response.data.length; i++) {
          $("table#table-produk tbody").append(
            $("<tr>").append(
              [
                $("<td>").text(response.data[i].id_produk),
                $("<td>").text(response.data[i].nama_produk),
                $("<td>").append(
                  [
                    $("<button/>", {value: response.data[i].id_produk, class: "btn btn-info upd"}).text('UPDATE'),
                    $("<button/>", {value: response.data[i].id_produk, class: "btn btn-danger del"}).text('DELETE'),
                  ]
                ),
              ]
            )
          )
        }
        $('.upd').click(function(){
          $("form#form-produk").attr('action', 'http://localhost/bakery/api/produk/update/');
          $.getJSON("http://localhost/bakery/api/produk/get/?id_produk=" + $(this).attr('value'), function(response) {
            if(response.data.length != 0) {
              $("#id_produk").val(response.data[0].id_produk);
              $('#id_produk').attr('readonly', '');
              $("#nama_produk").val(response.data[0].nama_produk);
              $("#satuan").val(response.data[0].satuan);
              $("#id_jenis").val(response.data[0].id_jenis);
              $("#harga").val(response.data[0].harga);
              $("#stok").val(response.data[0].stok);
              $("#deskripsi").val(response.data[0].deskripsi);
              $("#formModal").show();
            } else {
              alert('Data Not Found');
            }
          });
        });
        $('.del').click(function(){
          $.getJSON("http://localhost/bakery/api/produk/delete/?id_produk=" + $(this).attr('value'), function(response) {
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
          $("form#form-produk").attr('action', 'http://localhost/bakery/api/produk/add/');
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
      // console.log(send);
      $.ajax(send);
    });
  });
  </script>
</body>
</html>