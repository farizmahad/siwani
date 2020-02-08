
<?php $ID = $this->ion_auth->user()->row()->id; ?>
      
<div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Form Tambah Proposal Masa Reses</strong><br></h4>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Proposal"><span>Proposal</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Usulan/tambah_usulan"><span><strong>Form Tambah Proposal Masa Reses</strong><br></span></a></li>
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
                                    <div class="card-header py-3"><a class="btn btn-success btn-sm text-white text-size" role="button" href="<?php echo base_url(); ?>Proposal"><i class="far fa-list-alt"></i>&nbsp; Daftar Proposal</a></div>
                                    <div class="card-body">
                                          <form autocomplete="off" method="POST" action="<?php echo base_url(); ?>usulan/save_usulan" enctype="multipart/form-data" id="myform" onSubmit="return validasi()">
                                            <div class="form-row">
                                                 <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size" name="reses" id="reses"
                                                        ><option value="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                                                </div>


                                                <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                                        <div class="autocomplete">
                                                          <?php
                                                               $group2=array('operator');
                                                                   if($this->ion_auth->in_group($group2)){ ?>
                                                                  <input class="form-control form-control-sm text-size" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on">
                                                         <?php }else{ ?>
                                                                    <input class="form-control form-control-sm text-size" type="text" name="namaAnggota" value="<?php echo $first_name; ?>|<?php echo $last_name; ?>|<?php echo $gelar; ?>" readonly>
                                                         <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>



                                                 <div class="col-xl-12">
                                                    <div class="form-group"><label for="username"><strong>Fraksi</strong></label>
                                                        <div class="autocomplete">
                                                                <?php
                                                               $group2=array('operator');
                                                                   if($this->ion_auth->in_group($group2)){ ?>
                                                                      <input class="form-control form-control-sm text-size" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly="">
                                                             <?php }else{ ?>
                                                                     <input class="form-control form-control-sm text-size" type="text"  name="fraksi" value="<?php echo $fraksi; ?>" readonly>
                                                             <?php } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Dapil</strong></label>
                                                        <div>
                                                            <div class="form-row justify-content-center">
                                                                <div class="col-xl-12">

                                                              <?php
                                                               $group2=array('operator');
                                                               if($this->ion_auth->in_group($group2)){ ?>
                                                                  <input class="form-control form-control-sm text-size" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil">
                                                                <?php }else{ ?>
                                                                      <input class="form-control form-control-sm text-size" type="text" placeholder="Daerah Pemilihan..." name="dapil"  id="dapil" value="<?php echo $dapil; ?>" readonly>
                                                                <?php } ?>

                                                                </div>
                                                                <div class="col-xl-12 invisible">
                                                                    
                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-1" checked="" name="dapil" value="1"><label class="form-check-label" for="formCheck-1">I</label></div>
                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-1" name="dapil" value="2"><label class="form-check-label" for="formCheck-1">II</label></div>
                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-1" name="dapil" value="3"><label class="form-check-label" for="formCheck-1">III</label></div>
                                                                    <div class="form-check form-check-inline"><input class="form-check-input" type="radio" id="formCheck-1" name="dapil" value="4"><label class="form-check-label" for="formCheck-1">IV</label></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-xl-6">
                                                    <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size" type="date" name="tgl" id="tgl"></div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Jumlah Konstituen</strong></label><input class="form-control form-control-sm text-size" type="text" name="jumlah_konsituen" placeholder="Isi Jumlah Konstituen..." id="jumlah_konsituen"></div>
                                                </div>
                                                <div class="col-xl-12 mt-2">
                                                    <div class="form-group">
                                                        <h5 class="text-primary"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Snack</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Jumlah Snack..." rows="2" name="snack"></textarea></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Tenda</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Ukuran Tenda..." rows="2" name="tenda"></textarea></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Spanduk</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Ukuran Spanduk..." rows="2" name="spanduk"></textarea></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Sound System</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Jumlah Sound System..." rows="2" name="sound_system"></textarea></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Makanan</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Jumlah Porsi Makanan..." rows="2" name="makanan"></textarea></div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Minuman</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Jumlah Kemasan Minuman..." rows="2" name="minuman"></textarea></div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <div class="col-xl-12"><button class="btn btn-primary btn-block btn-sm text-size" type="submit"><i class="far fa-edit"></i>&nbsp;Simpan Proposal</button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <table>
            
           <tr>
               <td></td>
           </tr>


        </table>



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

 function autofill(){

        var myInput =document.getElementById('myInput').value;

        

        $.ajax({
                       url:"<?php echo base_url();?>Usulan/autocomplete_dewan",
                       data:'&myInput='+myInput,
                       success:function(data){
                           var hasil = JSON.parse(data);    
                        $.each(hasil, function(key,val){   
                        document.getElementById('myInput2').value=val.fraksi;  
                         document.getElementById('dapil').value=val.daerah_pemilihan;   
          
                 });
       }
                   });
                  
    }
</script>
<script>
 function validasiFile(){
    var inputFile = document.getElementById('filess');
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

       var namaAnggota=document.forms["myform"]["myInput"].value;
        if (namaAnggota==null || namaAnggota=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

       var tgl=document.forms["myform"]["tgl"].value;
        if (tgl==null || tgl=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal tidak boleh kosong!"
            });
          return false;
          };


        var jumlah_konsituen=document.forms["myform"]["jumlah_konsituen"].value;
        if (jumlah_konsituen==null || jumlah_konsituen=="")
          {
           swal({
                title: "Peringatan!",
                text: "Jumlah konsituen tidak boleh kosong!"
            });
          return false;
          };

        
     }
</script>
