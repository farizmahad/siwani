 <?php $ID = $this->ion_auth->user()->row()->id; ?>
 <div class="card shadow">
    <?php if(!$hasil){ ?>
                            <div class="card-header py-3">
                                <div><a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>usulan/tambah_usulan"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Proposal</a></div>

                            </div>
                        <?php } ?>
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-12 col-sm-5 col-md-6 col-lg-8 col-xl-8 text-nowrap">
                                            <!--
                                            <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div>
                                        -->
                                        </div>
                                        <div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-4"><input class="form-control-sm form-control text-size" type="text" id="myInput3" placeholder="Cari..."></div>
                                    </div>
                                </div>


                                 <div class="table-responsive text-size" style="font-size: 13px;">
  


                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                             <?php if($hasil){ ?>
                                                       <th><strong>Reses</strong></th>
                                             <?php }else{ ?>
                                                <th><strong>Masa Reses</strong></th>
                                            <?php } ?>
                                                <th><strong>Nama Dewan</strong></th>
                                                <th><strong>Fraksi</strong></th>
                                                <th><strong>Dapil</strong></th>
                                                <th><strong>Tanggal</strong></th>
                                                <th><strong>Jumlah Konstituen</strong></th>
                                                <?php if($hasil){ ?>
                                                 <th><strong>Bidang</strong></th>
                                               <?php } ?>
                                                <th><strong>Aksi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php
                                            $count_proposal=count($proposal);
                                            if($count_proposal > 0){ ?>
                                            <?php 
                                            $no=1;
                                            foreach($proposal as $row):?>
                                           
                                        <tr>
                                            <td align="center"><?php echo $no++; ?></td>
                                            <td>Reses <?php echo $row->reses; ?></td>
                                            <td>
                                                <?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->fraksi; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->daerah_pemilihan; ?>
                                            </td>
                                            <td>
                                                <?php echo $row->tanggal; ?>
                                            </td>
                                            <td align="center">
                                                <?php echo $row->jumlah_konsituen; ?>
                                            </td>
                                            <?php if($hasil){?>
                                            <td align="center">
                                              
                                                <?php if($row->bidang){ ?>
                                                <?php echo $row->bidang; ?>
                                            <?php }else{ ?>
                                                -

                                            <?php } ?>
                                                    

                                                </td>
                                        <?php } ?>
                                            <td class="text-nowrap text-center">&nbsp;<button class="btn btn-primary btn-sm text-size lihat_button" type="button" data-toggle="modal" data-target="#lihatModal"
                                            data-id="<?php echo $row->id; ?>"

                                            <?php if($hasil){ ?>
                                                data-tanda="hasil"
                                             <?php } ?>
                                            <?php /*
                                            data-reses="<?php echo $row->reses; ?>"
                                            data-id_user="<?php echo $row->id_user; ?>"
                                            data-tanggal="<?php echo $row->tanggal; ?>"
                                            data-bidang="<?php echo $row->bidang; ?>"
                                            data-nama_anggota="<?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?>"
                                            data-jumlah_konsituen="<?php echo $row->jumlah_konsituen; ?>"
                                            data-snack="<?php echo $row->snack; ?>"
                                            data-tenda="<?php echo $row->tenda; ?>"
                                            data-spanduk="<?php echo $row->spanduk; ?>"
                                            data-sound_system="<?php echo $row->sound_system; ?>"
                                            data-makanan="<?php echo $row->makanan; ?>"
                                            data-minuman="<?php echo $row->minuman; ?>"
                                            */?>

                                                ><i class="fas fa-search"></i></button>
                                <?php
                                        $group2=array('operator');
                                        $group3=array('dewan');

                                ?>



                                            <?php if(($ID==$row->id_user and ($this->ion_auth->in_group($group3))) || $this->ion_auth->in_group($group2)){ ?>
                                            <button class="btn btn-success btn-sm text-size edit_button" type="button" data-toggle="modal" 
                                            <?php if($hasil) { ?>
                                            data-target="#editModal1"
                                        <?php }else{ ?>
                                             data-target="#editModal"
                                        <?php } ?>
                                            data-id="<?php echo $row->id; ?>"
                                            data-reses="<?php echo $row->reses; ?>"
                                            data-id_user="<?php echo $row->id_user; ?>"
                                            data-tanggal="<?php echo $row->tanggal; ?>"
                                            data-bidang="<?php echo $row->bidang; ?>"
                                            data-nama_anggota="<?php echo $row->first_name; ?>|<?php echo $row->last_name; ?>|<?php echo $row->gelar; ?>"
                                            data-jumlah_konsituen="<?php echo $row->jumlah_konsituen; ?>"
                                            data-snack="<?php echo $row->snack; ?>"
                                            data-tenda="<?php echo $row->tenda; ?>"
                                            data-spanduk="<?php echo $row->spanduk; ?>"
                                            data-sound_system="<?php echo $row->sound_system; ?>"
                                            data-makanan="<?php echo $row->makanan; ?>"
                                            data-minuman="<?php echo $row->minuman; ?>"
                                            data-fraksi="<?php echo $row->fraksi; ?>"
                                            data-daerah_pemilihan="<?php echo $row->daerah_pemilihan; ?>"
                                            data-nama="<?php echo $row->nama; ?>"
                                            data-alamat="<?php echo $row->alamat; ?>"
                                            data-bidang="<?php echo $row->bidang; ?>"
                                            data-kesimpulan="<?php echo $row->kesimpulan; ?>"

                                                ><i class="fas fa-edit"></i></button>&nbsp;


                                               <button class="btn btn-danger btn-sm text-size edit_button" type="button" data-target="#hapusModal" data-toggle="modal" data-id="<?php echo $row->id; ?>"
                                                data-reses="<?php echo $row->reses; ?>"
                                                <?php if($hasil){ ?>
                                                    data-tanda="hasil";
                                                <?php } ?>
                                                 
                                                ><i class="far fa-trash-alt"></i></button>
                                             <?php } ?>
                                            </td>
                                                
                                            </tr>
                                        <?php endforeach; ?>
                                        <?php }else{ ?>

                                            <tr>
                                                <td colspan="8" align="center">Tidak ada data!</td>
                                            </tr>

                                        <?php } ?>
                                         
                                        </tbody>
                                    </table>
                                </div>
                                  </div>
                        </div>
                    </div>




<div class="modal fade" role="dialog" tabindex="-1" id="lihatModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-primary">
                    <h5 class="modal-title"><strong>Lihat Proposal Masa Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body" id="result_reses">
                    
                </div>
                <div class="modal-footer"><button class="btn btn-primary text-size" type="button" data-dismiss="modal">Tutup</button></div>
            </div>
        </div>
    </div>



    <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><strong>Edit Proposal Masa Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form autocomplete="off" id="edit_proposal">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size reses" id="reses" name="reses"><option value="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size nama_anggotaa" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Dapil</strong></label>
                                    <div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-xl-12"><input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl" id="tgl"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Jumlah Konstituen</strong></label><input class="form-control form-control-sm text-size jumlah_konsituen" type="text" name="jumlah_konsituen" placeholder="Isi Jumlah Konstituen..." id="jumlah_konsituen"></div>
                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="form-group">
                                    <h5 class="text-primary"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Snack</strong></label><textarea class="form-control form-control-sm text-size snack" placeholder="Isi Jumlah Snack..." rows="2" name="snack"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Tenda</strong></label><textarea class="form-control form-control-sm text-size tenda" placeholder="Isi Ukuran Tenda..." rows="2" name="tenda"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Spanduk</strong></label><textarea class="form-control form-control-sm text-size spanduk" placeholder="Isi Ukuran Spanduk..." rows="2" name="spanduk"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Sound System</strong></label><textarea class="form-control form-control-sm text-size sound_system" placeholder="Isi Jumlah Sound System..." rows="2" name="sound_system"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Makanan</strong></label><textarea class="form-control form-control-sm text-size makanan" placeholder="Isi Jumlah Porsi Makanan..." rows="2" name="makanan"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Minuman</strong></label><textarea class="form-control form-control-sm text-size minuman" placeholder="Isi Jumlah Kemasan Minuman..." rows="2" name="minuman"></textarea></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit" id="submit_edit_proposal">Edit Proposal</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="editModal1">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-primary"><strong>Tambah Hasil Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form class="text-size" autocomplete="off" id="simpan_bidang">
                        <div class="form-row">
                            <div class="col-xl-12">
                                 <div class="form-group"><label class="text-primary" for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size reses" id="reses" name="reses" readonly><option value="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                            </div>
                            <div class="col-xl-12">
                              <div class="form-group"><label class="text-primary" for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size nama_anggotaa" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on" readonly=""></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                 <div class="form-group"><label class="text-primary" for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group">
                                    <label class="text-primary" for="username"><strong>Dapil</strong></label>
                                   <input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil"></div>
                                
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl"></div>

                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama Pengusul</strong></label><textarea class="form-control form-control-sm text-size nama" placeholder="Isi Nama Pengusul..." rows="2" name="nama" id="nama"></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Alamat Pengusul</strong></label><textarea class="form-control form-control-sm text-size alamat" placeholder="Isi Alamat Pengusul..." rows="2" name="alamat"></textarea></div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Pembidangan</strong></label><select class="form-control form-control-sm bidang" name="bidang" id="bidang"><option value="">Pilih Bidang...</option><option value="Bidang Pemerintahan">Bidang Pemerintahan</option><option value="Bidang Ekonomi Keuangan">Bidang Ekonomi Keuangan</option><option value="Bidang Pembangunan">Bidang Pembangunan</option><option value="Bidang Kesejahteraan Rakyat">Bidang Kesejahteraan Rakyat</option></select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Aspirasi</strong></label><textarea class="form-control form-control-sm kesimpulan" placeholder="Isi Aspirasi..." rows="9" name="aspirasi" id="aspirasi"></textarea></div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit" id="submit_simpan_bidang">Simpan Hasil Reses</button></div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="hapusModal">
        <form id="hapus_proposal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Proposal</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                </div>
                <input type="hidden" name="id" class="id">
                <input type="hidden" name="reses" class="reses" id="reses">
                 <input type="hidden" name="tanda" class="tanda">
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit" id="submit_hapus_proposal">Hapus!</button></div>
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
  $("#myInput3").on("keyup", function() {
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
        /*
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
    */
     var id         = $(this).data('id');
     var reses      = $(this).data('reses');
     var id_user      = $(this).data('id_user');
     var tanggal      = $(this).data('tanggal');
     var bidang      = $(this).data('bidang');
     var nama_anggota      = $(this).data('nama_anggota');
        var tanda      = $(this).data('tanda');

     var jumlah_konsituen      = $(this).data('jumlah_konsituen');
     var snack      = $(this).data('snack');
     var tenda     = $(this).data('tenda');
     var spanduk     = $(this).data('spanduk');
     var sound_system     = $(this).data('sound_system');
     var makanan    = $(this).data('makanan');
     var minuman   = $(this).data('minuman');
     var fraksi   = $(this).data('fraksi');
     var daerah_pemilihan   = $(this).data('daerah_pemilihan');
     var nama   = $(this).data('nama');
     var alamat   = $(this).data('alamat');
     var bidang   = $(this).data('bidang');
     var kesimpulan   = $(this).data('kesimpulan');


     $(".id").val(id);
     $(".reses").val(reses);
     $(".id_user").val(id_user);
     $(".tanggal").val(tanggal);
     $(".bidang").val(bidang);
     $(".nama_anggotaa").val(nama_anggota);
     $(".jumlah_konsituen").val(jumlah_konsituen);
     $(".snack").val(snack);
     $(".tenda").val(tenda);
     $(".spanduk").val(spanduk);
     $(".sound_system").val(sound_system);
     $(".makanan").val(makanan);
     $(".minuman").val(minuman);
     $(".fraksi").val(fraksi);
     $(".daerah_pemilihan").val(daerah_pemilihan);
     $(".nama").val(nama);
     $(".alamat").val(alamat);
     $(".bidang").val(bidang);
     $(".kesimpulan").val(kesimpulan);
  $(".tanda").val(tanda);


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
    $(document).on("click", ".lihat_button", function () {
        var myId = $(this).data('id');
        var tanda = $(this).data('tanda');
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Proposal/detail_proposal',
            data: { ids: myId,tanda: tanda},
            success: function(response) {
                $('#result_reses').html(response);
            }
        });
    });  
</script>
<script>
     $(document).ready(function() {

                     //untuk simpan barang     
                    $("#submit_edit_proposal").click(function(){

                         var reses=document.forms["edit_proposal"]["reses"].value;
                         var nama_anggota=document.forms["edit_proposal"]["myInput"].value;
                         var tgl=document.forms["edit_proposal"]["tgl"].value;
                         var jumlah_konsituen=document.forms["edit_proposal"]["jumlah_konsituen"].value;
                         /*
                         var myInput=document.forms["edit_proposal"][""].value;
                         */
                         
                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Proposal/edit_proposal", 
                           type: "POST", 
                           dataType:'json',
                           data: $("#edit_proposal").serialize(),
                             success: function(data) {
                             
                             $("#pesan_edit").html(data.pesan);

                               if (reses==null || reses=="")
          {
           swal({
                title: "Peringatan!",
                text: "Reses tidak boleh kosong!"
            });
          return false;
      }else  
                               if (jumlah_konsituen==null || jumlah_konsituen=="")
          {
           swal({
                title: "Peringatan!",
                text: "Jumlah Konsituen tidak boleh kosong!"
            });
          return false;
      }else  
                               if (tgl==null || tgl=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tgl tidak boleh kosong!"
            });
          return false;
      }


      else{

                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           

                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Proposal/reses_proposal/"+reses);
                            }
                          }
                         });
                       
                 return false;
                     });
                    
                        $("#submit_hapus_proposal").click(function(){
var reses=document.forms["hapus_proposal"]["reses"].value;
                         $.ajax({
                           
                           url : "<?php echo base_url(); ?>Proposal/hapus_proposal_reses", 
                           type: "POST", 
                           data: $("#hapus_proposal").serialize(),
                             success: function(data) {
                             
                             $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil dihapus');
                                $('#result').load("<?php echo base_url() ?>Proposal/reses_proposal/"+reses);
                            }
                         });
                       
                 return false;
                     });


                             $("#submit_simpan_bidang").click(function(){
                         var reses=document.forms["simpan_bidang"]["reses"].value;
                         var hasil="hasil";
                         var nama=document.forms["simpan_bidang"]["nama"].value;
                         var bidang=document.forms["simpan_bidang"]["bidang"].value;
                         var aspirasi=document.forms["simpan_bidang"]["aspirasi"].value;
                        
                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Proposal/simpan_bidang", 
                           type: "POST", 
                           dataType:'json',
                           data: $("#simpan_bidang").serialize(),
                             success: function(data) {
                              console.log(data);
                             $("#pesan_edit").html(data.pesan);

                                 if (nama==null || nama=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama tidak boleh kosong!"
            });
          return false;
          }else if(bidang==null || bidang=="")
 {
           swal({
                title: "Peringatan!",
                text: "Bidang tidak boleh kosong!"
            });
          return false;
          }

else if(aspirasi==null || aspirasi=="")
 {
           swal({
                title: "Peringatan!",
                text: "Aspirasi tidak boleh kosong!"
            });
          return false;
          }

          else
                             {

                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           

                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Proposal/reses_proposal/"+reses+"/"+hasil);
                            }
                          }
                         });
                       
                 return false;
                     });

                  });

</script>  
