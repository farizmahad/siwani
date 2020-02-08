  <div class="modal-header">
                    <h5 class="modal-title text-primary"><strong>Edit Proposal Masa Reses</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
            <?php foreach($detail_proposal as $row):?>
                <form autocomplete="off" id="edit_proposal">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size reses" id="reses" name="reses"><option value="">Pilih Reses...</option>

                                    <option value="1" <?php if($row->reses=="1"){ ?> selected <?php } ?>>Reses 1</option>
                                    <option value="2" <?php if($row->reses=="2"){ ?> selected <?php } ?>>Reses 2</option>
                                    <option value="3" <?php if($row->reses=="3"){ ?> selected <?php } ?>>Reses 3</option>
                                </select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size nama_anggotaa" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on" value="<?php echo $row->nama_lengkap; ?>"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly="" value="<?php echo $row->fraksi; ?>"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Dapil</strong></label>
                                    <div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-xl-12"><input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil" value="<?php echo $row->daerah_pemilihan; ?>"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Tanggal Pelaksanaan</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl" id="tgl" value="<?php echo $row->tanggal; ?>" onchange="return cekHari()"></div>
                            </div>

                            <div class="col-xl-2">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Hari </strong></label><input class="form-control form-control-sm text-size hari" type="text" name="hari" id="hari" readonly="" value="<?php echo $row->hari; ?>"></div>
                            </div>
							
							<!-- Input Tambahan: TEMPAT, format: VARCHAR-->
							<div class="col-xl-12">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm text-size tempat" type="text" name="tempat" placeholder="Isi Tempat..." id="tempat" value="<?php echo $row->tempat; ?>"></div>
							</div>
							
							<!-- Input Tambahan: waktu, format: VARCHAR-->
							<div class="col-xl-12">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Waktu (WIB)</strong></label><input class="form-control form-control-sm text-size waktu" type="text" name="waktu" placeholder="Isi Waktu..." id="waktu" value="<?php echo $row->waktu; ?>"></div>
							</div>
												
                            <div class="col-xl-12">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Jumlah Konstituen</strong></label><input class="form-control form-control-sm text-size jumlah_konsituen" type="text" name="jumlah_konsituen" placeholder="Isi Jumlah Konstituen..." id="jumlah_konsituen" value="<?php echo $row->jumlah_konsituen; ?>"></div>
                            </div>
                            <div class="col-xl-12 mt-2">
                                <div class="form-group">
                                    <h5 class="text-primary"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Snack Box</strong></label><input class="form-control form-control-sm text-size snack" type="text" placeholder="Isi Jumlah Snack..." name="snack" value="<?php echo $row->snack; ?>">
                                 
								</div>
                            </div>
							<div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Nasi Box</strong></label><input class="form-control form-control-sm text-size makanan" placeholder="Isi Jumlah Porsi Makanan..." name="makanan" value="<?php echo $row->makanan; ?>"> </div>
                            </div>
							
							<!--Input Tambahan: Kursi-->
							<div class="col-xl-6">
								<div class="form-group"><label class="text-primary text-size" for="username"><strong>Kursi</strong></label><textarea class="form-control form-control-sm text-size kursi" placeholder="Isi Jumlah Kursi..." rows="2" name="kursi" id="kursi"><?php echo $row->kursi; ?></textarea></div>
							</div>
							
							<!--Perubahan Tampilan Input-->
							<div class="col-xl-6">
								<div class="form-group"><label class="text-primary" for="username"><strong></strong></label>
									<div class="form-check"><input class="form-check-input spanduk" type="checkbox" id="formCheck-1" name="spanduk" value="Ya" <?php if($row->spanduk){?> checked <?php } ?>><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Spanduk</strong></label></div>
									<div class="form-check"><input class="form-check-input tenda" type="checkbox" id="formCheck-1" name="tenda" value="Ya" <?php if($row->tenda){?> checked <?php } ?>><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Tenda</strong></label></div>
									<div class="form-check"><input class="form-check-input sound_system" type="checkbox" id="formCheck-1" name="sound" value="Ya" <?php if($row->sound_system){?> checked <?php } ?>><label class="form-check-label text-primary text-size" for="formCheck-1"><strong>Sound</strong></label></div>
								</div>
							</div>
                            <input type="hidden" name="id" value="<?php echo $row->id; ?>">
							
							<!--Input Tambahan: Pendamping-->
							<div class="col-xl-12">
                                                    <div class="form-group"><label class="text-primary" for="username"><strong>Pendamping</strong></label>
                                                      <select class="form-control text-size" name="id_pendamping" id="id_pendamping">
                                                        <option value="">Pilih Pendamping</option>
                                                        <?php foreach($pendamping as $ros):?>
                                                            <option value="<?php echo $ros->id; ?>" <?php if($ros->id==$row->id_pendamping){ ?> selected <?php } ?>><?php echo $ros->nama; ?></option>
                                                        <?php endforeach; ?>
                                                      </select>
                                                    </div>
                                                </div>
							
							<!--
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary text-size" for="username"><strong>Tenda</strong></label><textarea class="form-control form-control-sm text-size tenda" placeholder="Isi Ukuran Tenda..." rows="2" name="tenda"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Spanduk</strong></label><textarea class="form-control form-control-sm text-size spanduk" placeholder="Isi Ukuran Spanduk..." rows="2" name="spanduk"></textarea></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Sound System</strong></label><textarea class="form-control form-control-sm text-size sound_system" placeholder="Isi Jumlah Sound System..." rows="2" name="sound_system"></textarea></div>
                            </div>
                            
							
                            <div class="col-xl-6">
                                <div class="form-group"><label class="text-primary" for="username"><strong>Minuman</strong></label><textarea class="form-control form-control-sm text-size minuman" placeholder="Isi Jumlah Kemasan Minuman..." rows="2" name="minuman"></textarea></div>
                            </div>
							-->
                        </div>
               
                    </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit" id="submit_edit_proposal">Edit Proposal</button></div>
            </form>
                <?php endforeach;?>
                <?php

              $dewan=$this->Master_model->select_dewann();

        ?>

        <script>
    /*
var namaDewan = ["Acep Jamaludin, M.Hum","Agung Yudaswara,ST","Agus Solihin","Ahmad Dahlan","Ayi Khusnayaddi","Rani"];
*/

var namaDewan = [<?php foreach($dewan as $row){
                echo"'";echo $row->nama_lengkap;echo"'";echo",";
                
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
 function cekHari(){
     var tgl=document.forms["edit_proposal"]["tgl"].value;


$.ajax({
                       url:"<?php echo base_url();?>Usulan/namahari",
                       data:'&tgl='+tgl,
                       dataType:'json',
                       success:function(hasil){
                           var hasil = hasil.hari;
                           document.getElementById('hari').value=hasil;  
                              
                       
       }
                   });
                  
    
}
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
