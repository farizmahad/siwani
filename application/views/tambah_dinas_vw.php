 <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Form Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas"><span><strong>Form Tambah Perjalanan Dinas</strong></span></a></li>
                </ol>
                <div class="row justify-content-center mb-3">
                    <div class="col-lg-8 col-xl-7">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card shadow mb-3 text-size">
                                    <div class="card-header py-3"></div>
                                    <div class="card-body">
                                        <form autocomplete="off" method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/simpan_perjalanan_dinas" enctype="multipart/form-data" id="myform" onSubmit="return validasi()">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                  <?php echo $this->session->flashdata('message');?>
                                                    <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Perihal</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Perihal..." rows="5" name="perihal" id="perihal"></textarea></div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Asal</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="asal" name="asal" placeholder="Isi Asal..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Tujuan Lokasi</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="tujuan_lokasi" name="tujuanLokasi" placeholder="Isi Tujuan Lokasi..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Lama Perjalanan</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size" type="number" id="lamaPerjalanan" name="lamaPerjalanan" placeholder="Isi Lama Perjalanan..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>No. Surat Perintah</strong></label>
                                                        <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="suratPerintah" name="suratPerintah" placeholder="Isi Nomor Surat Perintah..."></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tgl_berangkat" id="tgl_berangkat"></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tgl_kembali" id="tgl_kembali"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Unggah Surat Perintah&nbsp;</strong></label><input type="file" name="file"></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center"><button class="btn btn-primary btn-block btn-sm text-size" type="submit"><i class="far fa-edit"></i>&nbsp;Simpan Data Perjalanan Dinas</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
</script>