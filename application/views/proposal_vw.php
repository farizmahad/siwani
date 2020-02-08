			<div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Daftar Proposal Masa Reses</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <!--
                    <li class="breadcrumb-item"><a href="daftar_proposal_masa_reses.html"><span>Proposal</span></a></li>
                -->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Proposal"><span><strong>Daftar Proposal Masa Reses</strong></span></a></li>
                </ol>
				<div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
                        <div class="card shadow border-left-primary py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                            <h5 class="text-size-heading"><strong>Masa Reses 1</strong></h5>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span class="text-primary"><strong><?php echo count($reses1); ?> Orang</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-primary"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-primary btn-sm text-size btnDewan" type="button"  data-target="#result" id="1" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
                        <div class="card shadow border-left-success py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                            <h5><strong>Masa Reses 2</strong></h5>
                                        </div>
                                        <div class="text-dark font-weight-bold h5 mb-0"><span class="text-success"><strong><?php echo count($reses2); ?> Orang</strong><br></span></div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-success"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-success btn-sm text-size" type="button" data-target="#result" id="2" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-4">
                        <div class="card shadow border-left-danger py-2">
                            <div class="card-body">
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-uppercase text-danger font-weight-bold text-xs mb-1">
                                            <h5><strong>Masa Reses 3</strong></h5>
                                        </div>
                                        <div class="row no-gutters align-items-center">
                                            <div class="col-auto">
                                                <div class="text-dark font-weight-bold h5 mb-0 mr-3"><span class="text-danger"><strong><?php echo count($reses3); ?> Orang</strong><br></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto"><i class="fas fa-flag fa-2x text-danger"></i></div>
                                </div>
                                <div class="row align-items-center no-gutters">
                                    <div class="col mr-2">
                                        <div class="text-right text-dark font-weight-bold h5 mb-0 p-1"><button class="btn btn-danger btn-sm text-size" type="button"  data-target="#result" id="3" onClick="reply_click(this.id)">Lihat Daftar</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" id="result">
                       
                      

                </div>
                         
                </div>
                
    
   
    <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-primary">
                    <h5 class="modal-title"><strong>Edit Proposal Masa Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Masa Reses</strong></td>
                                    <td>Reses 1</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Nama Dewan</strong></td>
                                    <td>Ir. H. Achmad Zulkarnain, MT</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Fraksi</strong></td>
                                    <td>F-PKS</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Daerah Pemilihan (Dapil)</strong></td>
                                    <td>Cimahi 2</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Hari, Tanggal</strong></td>
                                    <td>21 Oktober 2019</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Jumlah Konstituen</strong></td>
                                    <td>15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="modal-title text-primary mt-4"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Snack</strong></td>
                                    <td>100 Pack</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Tenda</strong></td>
                                    <td>8 x 7 meter</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Spanduk</strong></td>
                                    <td>2 buah ukuran 1 x 2 meter</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Sound System</strong></td>
                                    <td>1 Set</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Kursi</strong></td>
                                    <td>150 Buah</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Makanan</strong></td>
                                    <td>100 Porsi</td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Minuman</strong></td>
                                    <td>30 Dus Air Mineral</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer"><button class="btn btn-primary text-size" type="button" data-dismiss="modal">Tutup</button></div>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="hapusModal">
        <form method="POST" action="<?php echo base_url();?>Proposal/hapus_proposal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Usulan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                </div>
                <input type="hidden" name="id" class="id_proposal">
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </div>
    </div>
</form>
    
        <?php

              $dewan=$this->Master_model->select_dewann();

        ?>

        <script>
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

autocomplete(document.getElementById("myInput2"), namaDewan);

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
  
    function validasi()
    {

      var reses=document.forms["myform"]["reses"].value;

        if (reses==null || reses=="")
          {
           swal({
                title: "Peringatan!",
                text: "Reses tidak boleh kosong!"
            });
          return false;
          };



        var myInput=document.forms["myform"]["myInput"].value;

        if (myInput==null || myInput=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

            var judul=document.forms["myform"]["judul"].value;

        if (judul==null || judul=="")
          {
           swal({
                title: "Peringatan!",
                text: "Judul tidak boleh kosong!"
            });
          return false;
          };

           var unggah=document.forms["myform"]["unggah"].value;

        if (unggah==null || unggah=="")
          {
           swal({
                title: "Peringatan!",
                text: "Proposal tidak boleh kosong!"
            });
          return false;
          };
    
    
     }
</script>
<script>
 function validasiFile(){
    var inputFile = document.getElementById('unggah');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){
        alert('Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf');
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}
</script>
 <script>
    $(document).on( "click", '.edit_button',function(e) {
    var id        = $(this).data('id');
    var id_user      = $(this).data('id_user');
    var judul_proposal          = $(this).data('judul_proposal');
    var reses              = $(this).data('reses');
    var namaAnggota              = $(this).data('nama_anggota');

   

    $(".id").val(id);
    $(".id_user").val(id_user);
    $(".judul_proposal").val(judul_proposal);
    $(".reses").val(reses);
    $(".namaAnggota").val(namaAnggota);
    });


      $(document).on( "click", '.hapus_button',function(e) {
    var id_proposal       = $(this).data('id');
    

   

    $(".id_proposal").val(id_proposal);
  
    });
    </script>

<script>
  
    function validasi1()
    {

      var reses=document.forms["myform1"]["reses"].value;

        if (reses==null || reses=="")
          {
           swal({
                title: "Peringatan!",
                text: "Reses tidak boleh kosong!"
            });
          return false;
          };



        var myInput=document.forms["myform1"]["myInput"].value;

        if (myInput==null || myInput=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

            var judul=document.forms["myform1"]["judul"].value;

        if (judul==null || judul=="")
          {
           swal({
                title: "Peringatan!",
                text: "Judul tidak boleh kosong!"
            });
          return false;
          };

           var unggah=document.forms["myform1"]["unggah"].value;

        if (unggah==null || unggah=="")
          {
           swal({
                title: "Peringatan!",
                text: "Proposal tidak boleh kosong!"
            });
          return false;
          };
    
    
     }
</script>
<script>
  function reply_click(clicked_id)
            {
                var id=clicked_id;              
                $('#result').load("<?php echo base_url() ?>Proposal/reses_proposal/"+id);
            }  
</script>