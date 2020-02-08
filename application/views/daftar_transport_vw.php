 <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Daftar Transport Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>perjalanan_dinas/daftar_transport"><span><strong>Daftar Transport</strong></span></a></li>
                </ol>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <div><a class="btn btn-primary btn-sm text-size mr-2" role="button" href="<?php echo base_url(); ?>perjalanan_dinas"><i class="fas fa-plus-circle"></i>&nbsp;Daftar Perjalanan Dinas</a></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-6 col-lg-8 col-xl-8 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                <div class="text-md-right dataTables_filter text-size" id="dataTable_filter"><label><input class="form-control-sm form-control form-control-sm" type="search" aria-controls="dataTable" placeholder="Search" style="font-size: 14px;"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 15px;">
                            <?php echo $this->session->flashdata('message');?>
                            <table class="table table-hover dataTable my-0" id="dataTable">
                                <thead class="text-center">
                                    <tr>
                                        
                                       <th><strong>No.</strong></th>
                                                <th><strong>Nama</strong></th>
                                                <th><strong>Perihal</strong></th>
                                                <th>Asal</th>
                                                <th>Tujuan Lokasi</th>
                                                <th>No. Surat Perintah</th>
                                                <th>Tgl Berangkat</th>
                                                <th>Tgl Kembali</th>
                                                <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($perjalanan_dinas as $row):?>
                                            <tr>
                                                <td class="text-nowrap text-center">1</td>
                                                <td class="text-nowrap text-left"><img class="rounded-circle mr-2" width="30" height="30" src="<?php echo base_url(); ?>assets/images/<?php echo $row->foto; ?>"><a href="detail_anggota_dewan.html"><?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?>&nbsp;</a><br></td>
                                                <td class="text-nowrap"><?php echo $row->perihal; ?></td>
                                                <td><?php echo $row->asal; ?></td>
                                                <td><?php echo $row->tujuan_lokasi; ?><br></td>
                                                <td class="text-nowrap"><?php echo $row->surat_perintah; ?><br></td>
                                                <td>
                                                    <?php echo $row->tgl_berangkat; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->tgl_kembali; ?>
                                                </td>

                                                <td class="text-nowrap text-center">


                                                    <button class="btn btn-success btn-sm text-size edit_button"
                                                        type="button" data-toggle="modal" data-target="#editModal"
                                                         data-id="<?php echo $row->id_dinas;?>"
                                                         data-nama_anggota="<?php echo $row->first_name; ?>|<?php echo $row->last_name; ?>|<?php echo $row->gelar; ?>"
                                                         data-perihal="<?php echo $row->perihal; ?>"
                                                         data-asal="<?php echo $row->asal; ?>"
                                                         data-tujuan_lokasi="<?php echo $row->tujuan_lokasi; ?>"
                                                         data-lama_perjalanan="<?php echo $row->lama_perjalanan; ?>"
                                                         data-surat_perintah="<?php echo $row->surat_perintah; ?>"
                                                         data-tgl_berangkat="<?php echo $row->tgl_berangkat; ?>"
                                                         data-tgl_kembali="<?php echo $row->tgl_kembali; ?>"
                                                        ><i class="far fa-edit"></i>&nbsp; Edit</button> 

                                                        <button class="btn btn-danger btn-sm text-size hapusbutton" type="button" data-target="#hapusModal" data-toggle="modal" data-id="<?php echo $row->id_dinas; ?>" ><i class="far fa-trash-alt"></i>&nbsp; Hapus</button>&nbsp;
                                                       <a href="<?php echo base_url(); ?>Perjalanan_dinas/isi_transport/<?php echo $row->id_dinas; ?>" type="button" class="btn btn-primary btn-sm text-size"><i class="far fa-share-square"></i>&nbsp; Isi Transport</a>&nbsp;</td>
                                            </tr>
                                        <?php endforeach; ?>
                                </tbody>
                                
                            </table>
                        </div>
                        <div class="row">
                            <!--
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 14px;">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        -->
                        </div>
                    </div>
                </div>
            </div>
            
      <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Edit Perjalanan Dinas</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form class="text-size" autocomplete="off" enctype="multipart/form-data" id="myform" onSubmit="return validasi()" method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/simpan_perjalanan_dinas">
                      <div class="form-row">
                                                <div class="col-xl-12">
                                                  
                                                    <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size namaAnggota" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..."></div>
                                                    </div>
                                                </div>
                                                <input type="hidden" name="id" class="id">
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Perihal</strong></label><textarea class="form-control form-control-sm text-size perihal" placeholder="Isi Perihal..." rows="5" name="perihal" id="perihal"></textarea></div>
                                                </div>
                                                <input type="hidden" name="tanda" value="tanda">
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Asal</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size asal" type="text" id="asal" name="asal" placeholder="Isi Asal..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Tujuan Lokasi</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size tujuan_lokasi" type="text" id="tujuan_lokasi" name="tujuanLokasi" placeholder="Isi Tujuan Lokasi..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Lama Perjalanan</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size lama_perjalanan" type="number" id="lamaPerjalanan" name="lamaPerjalanan" placeholder="Isi Lama Perjalanan..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>No. Surat Perintah</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size surat_perintah" type="text" id="suratPerintah" name="suratPerintah" placeholder="Isi Nomor Surat Perintah..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size tgl_berangkat" type="date" name="tgl_berangkat" id="tgl_berangkat"></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size tgl_kembali" type="date" name="tgl_kembali" id="tgl_kembali"></div>
                                                </div>
                                                  <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Unggah Surat Perintah (Jika ingin diganti)&nbsp;</strong></label><input type="file" name="file"></div>
                                                </div>
                                            </div>
                                            </div>
                                            
                                           
                    
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit">Edit Data</button></div>
            </div>
        </form>
        </div>
    </div>

 <div class="modal fade" role="dialog" tabindex="-1" id="hapusModal">
    <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/hapus_dinas">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Perjalanan Dinas</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                </div>
                <input type="hidden" name="tanda" value="tanda">
                <input type="hidden" class="id" name="id">
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="close" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </div>
    </form>
    </div>


<script>
        
          <?php

              $dewan=$this->Master_model->select_dewann();
              

              
            

            


        ?>

    /*
var namaDewan = ["Acep Jamaludin, M.Hum","Agung Yudaswara,ST","Agus Solihin","Ahmad Dahlan","Ayi Khusnayaddi","Rani"];
*/

var namaDewan = [<?php foreach($dewan as $row){
                echo"'";echo $row->first_name;echo"|";echo $row->last_name;echo"|";echo $row->gelar;echo"'";echo",";
                
              }?>];
/*
var namaFraksi = ["HANURA","PDI PERJUANGAN","PPP","GERINDRA-PAN","GOLKAR", "PKS"];

var namaDapil = ["Dapil 1","Dapil 2","Dapil 3"];
*/

function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
}

autocomplete(document.getElementById("myInput"), namaDewan);

autocomplete(document.getElementById("myInput2"), namaFraksi);

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

    </script>
    <script>
         $(document).on( "click", '.edit_button',function(e) {
    var id        = $(this).data('id');
    var namaAnggota      = $(this).data('nama_anggota');
    
    var perihal          = $(this).data('perihal');
    var asal               = $(this).data('asal');
    var tujuan_lokasi      = $(this).data('tujuan_lokasi');
    var lama_perjalanan      = $(this).data('lama_perjalanan');
    var surat_perintah      = $(this).data('surat_perintah');
    var tgl_berangkat     = $(this).data('tgl_berangkat');
    var tgl_kembali     = $(this).data('tgl_kembali');
   

    $(".id").val(id);
    $(".namaAnggota").val(namaAnggota);
    $(".perihal").val(perihal);
    $(".asal").val(asal);
    $(".tujuan_lokasi").val(tujuan_lokasi);
    $(".lama_perjalanan").val(lama_perjalanan);
    $(".surat_perintah").val(surat_perintah);
    $(".tgl_berangkat").val(tgl_berangkat);
    $(".tgl_kembali").val(tgl_kembali);

    });
    </script>
    <script>
  
    function validasi()
    {
       var namaAnggota=document.forms["myform"]["myInput"].value;
       

        if (namaAnggota==null || namaAnggota=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

       var perihal=document.forms["myform"]["perihal"].value;
        if (perihal==null || perihal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Perihal tidak boleh kosong!"
            });
          return false;
          };


        var asal=document.forms["myform"]["asal"].value;
        if (asal==null || asal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Asal tidak boleh kosong!"
            });
          return false;
          };

         var tujuan_lokasi=document.forms["myform"]["tujuan_lokasi"].value;
        if (tujuan_lokasi==null || tujuan_lokasi=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tujuan Lokasi tidak boleh kosong!"
            });
          return false;
          };


         var lamaPerjalanan=document.forms["myform"]["lamaPerjalanan"].value;
        if (lamaPerjalanan==null || lamaPerjalanan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Lama Perjalanan tidak boleh kosong!"
            });
          return false;
          };

           var suratPerintah=document.forms["myform"]["suratPerintah"].value;
        if (suratPerintah==null || suratPerintah=="")
          {
           swal({
                title: "Peringatan!",
                text: "No. Surat Perintah tidak boleh kosong!"
            });
          return false;
          };


           var tgl_berangkat=document.forms["myform"]["tgl_berangkat"].value;
        if (tgl_berangkat==null || tgl_berangkat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal berangkat tidak boleh kosong!"
            });
          return false;
          };

          var tgl_kembali=document.forms["myform"]["tgl_kembali"].value;
        if (tgl_kembali==null || tgl_kembali=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal kembali tidak boleh kosong!"
            });
          return false;
          };
     }


$(document).on("click", ".lihat_button", function () {
        var myId = $(this).data('id');
    

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Perjalanan_dinas/detail_dinas',
            data: { ids: myId},
            success: function(response) {
                $('#resultt').html(response);
            }
        });
    });  


$(document).on( "click", '.hapusbutton',function(e) {
    var id= $(this).data('id');
  
     
    $(".id").val(id);
   
  
  
});

</script>