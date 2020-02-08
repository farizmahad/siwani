
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<?php
$ID = $this->ion_auth->user()->row()->id;
?>
<div class="container-fluid">
                <h4 class="text-dark mb-4"><strong><?php echo $judul; ?></strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>usulan/tambah_usulan"><span>Usulan</span></a></li>
                    <?php if($judul=="Daftar Usulan Reses") { ?>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>usulan"><span><strong>Daftar Usulan</strong></span></a></li>
                    <?php }elseif($judul=="Daftar Kesimpulan"){ ?>
                      <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Usulan/kesimpulan"><span><strong>Daftar Kesimpulan</strong></span></a></li>
                     
                    <?php } ?>

                </ol>
                <div class="row">
                    <div class="col">
                        <div class="card shadow">
                      
                             <?php if($judul=="Daftar Usulan Reses"){ ?>
                            <?php 
                    $group1 = array('super admin','admin kerja');
                    if ($this->ion_auth->in_group($group1)){ ?>


                            <div class="card-header py-3">
                                <div><a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>usulan/tambah_usulan"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Usulan</a><a class="btn btn-success btn-sm text-size" role="button" href="<?php echo base_url(); ?>usulan/isi_bidang"><i class="fas fa-plus-circle"></i>&nbsp;Isi Bidang</a></div>
                            </div>
                        <?php } ?>
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-xl-2 text-nowrap">
                                            <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                        </div>
                                        <div class="col-xl-3"><input class="form-control-sm form-control text-size" type="text" id="myInput2" placeholder="Filter Reses..."></div>
                                        <!--
										<div class="col-xl-7 text-right">
                                            <div class="form-group"><label class="text-size">Pilih Reses &nbsp;&nbsp;</label><select class="form-control-sm text-size" id="myInput"><option value="Reses 1">Reses 1</option><option value="Reses 2">Reses 2</option><option value="Reses 3">Reses 3</option></select>
                                                <button
                                                    class="btn btn-success btn-sm text-size" type="button"><i class="fas fa-sync-alt"></i></button>
                                            </div>
                                        </div>
										-->
                                    </div>
                                </div>
                            <?php } ?>
                                <div class="table-responsive text-size" style="font-size: 13px;">
                                    <?php echo $this->session->flashdata('message');?>
                                    <br>
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                                <th style="text-align: left;"><strong>Reses</strong></th>
                                                <th style="text-align: left;"><strong>Dewan</strong></th>
                                                <th style="text-align: left;">Usulan</th>
                                                <th style="text-align: left;">Bidang</th>
                                                <th style="text-align: left;">Biaya</th>
                                               
                                                <th>Aksi</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php
                                             $count_usulan=count($usulan);
                                             if($count_usulan>0){
                                             $no=1;
                                             foreach($usulan as $row):?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $no++; ?></td>
                                                <td>
                                                    Reses
                                                    <?php echo $row->reses; ?>
                                                                 
                                                </td>
                                                <td>
                                                    <?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->usulan; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row->bidang; ?>
                                                </td>
                                                 <td>
                                                  Rp.  <?php echo number_format($row->biaya); ?>
                                                </td>
                                               
                                                <td class="text-nowrap text-center">&nbsp;
 <?php
                                                $group1 = array('super admin','admin kerja');
                                                $group2 = array('admin dewan');
                if ($this->ion_auth->in_group($group1) || ($ID==$row->id_user and $this->ion_auth->in_group($group2))){ ?>




                                                    <button class="btn btn-primary btn-sm text-size lihat_button" type="button" data-toggle="modal" data-target="#lihatModal" data-id="<?php echo $row->id; ?>"><i class="fas fa-search"></i></button>&nbsp;
                 <?php if($judul=="Daftar Usulan Reses") { ?>
                                                    <button class="btn btn-success btn-sm text-size edit_button"
                                                        type="button" data-toggle="modal" data-target="#editModal"  data-id="<?php echo $row->id; ?>"
                                              data-reses="<?php echo $row->reses; ?>"
                                              data-id_user="<?php echo $row->id_user; ?>"
                                              data-tanggal="<?php echo $row->tanggal; ?>"
                                              data-tempat="<?php echo $row->tempat; ?>"
                                              data-nama="<?php echo $row->nama; ?>"
                                              data-alamat="<?php echo $row->alamat; ?>"
                                              data-usulan="<?php echo $row->usulan; ?>"
                                              data-biaya="<?php echo $row->biaya; ?>"
                                              data-proposal="<?php echo $row->proposal; ?>"
                                              data-bidang="<?php echo $row->bidang; ?>"
                                              data-first_name="<?php echo $row->first_name; ?>"
                                              data-last_name="<?php echo $row->last_name; ?>"
                                              data-fraksi="<?php echo $row->fraksi; ?>"
                                              data-daerah_pemilihan="<?php echo $row->daerah_pemilihan; ?>"
                                              data-anggota_dewan="<?php echo $row->first_name; ?>|<?php echo $row->last_name; ?>|<?php echo $row->gelar; ?>"
><i class="far fa-edit"></i></button>
                                                        &nbsp;<button class="btn btn-danger btn-sm text-size hapusbutton" type="button" data-target="#hapusModal" data-toggle="modal" data-id="<?php echo $row->id; ?>"><i class="far fa-trash-alt"></i></button>&nbsp;
<?php } ?>
<?php }else{ ?>

 <center> - </center>
<?php } ?>



<?php if($judul=="Daftar Kesimpulan") { ?>
<button class="btn btn-info btn-sm text-size edit_button"
                                                        type="button" data-target="#editkesimpulan" data-toggle="modal"
data-id="<?php echo $row->id; ?>"
                                              data-reses="<?php echo $row->reses; ?>"
                                              data-id_user="<?php echo $row->id_user; ?>"
                                              data-tanggal="<?php echo $row->tanggal; ?>"
                                              data-tempat="<?php echo $row->tempat; ?>"
                                              data-nama="<?php echo $row->nama; ?>"
                                              data-alamat="<?php echo $row->alamat; ?>"
                                              data-usulan="<?php echo $row->usulan; ?>"
                                              data-biaya="<?php echo $row->biaya; ?>"
                                              data-proposal="<?php echo $row->proposal; ?>"
                                              data-bidang="<?php echo $row->bidang; ?>"
                                              data-first_name="<?php echo $row->first_name; ?>"
                                              data-last_name="<?php echo $row->last_name; ?>"
                                              data-fraksi="<?php echo $row->fraksi; ?>"
                                              data-daerah_pemilihan="<?php echo $row->daerah_pemilihan; ?>"
                                              data-anggota_dewan="<?php echo $row->first_name; ?>|<?php echo $row->last_name; ?>|<?php echo $row->gelar; ?>"
                                              data-kesimpulan="<?php echo $row->kesimpulan; ?>"
                                                        ><i class="fas fa-check"></i></button>

<?php } ?>
                                                    </td>
                                                    
                                            </tr>
                                        <?php endforeach; ?>
                                  <?php  }else{?>
                                             <tr>
                                                 <td colspan="7" align="center">Tidak ada data!</td>
                                             </tr>
                                <?php  } ?>

                                        </tbody>
                                  
                                    </table>
                                </div>
                                
                                <div class="row">
                                    <!---
                                    <div class="col-md-6 align-self-center">
                                        <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 14px;">Showing 1 to 10 of 27</p>
                                    </div>
                                -
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination pagination-sm" id="pagination">
                                                
                                            </ul>
                                        </nav>
                                    </div>
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
                    <h5 class="modal-title"><strong>Edit Usulan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form class="text-size" autocomplete="off" method="post" action="<?php echo base_url(); ?>usulan/save_usulan" enctype="multipart/form-data" id="myform" onSubmit="return validasi()">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete">
                                        <input class="form-control form-control-sm text-size anggota_dewan" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." onmouseover="autofill();" autofocus="on" required
                                                     oninvalid="this.setCustomValidity('Anggota dewan tidak boleh kosong')">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label for="username"><strong>Dapil</strong></label>
                                    <div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-xl-12">
                                                <input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil">

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="tanda" value="usulan">
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl" id="tgl"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm text-size tempat" type="text" name="tempat" placeholder="Isi Tempat..." id="tempat"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Reses Ke- ...</strong></label><select class="form-control form-control-sm text-size reses" name="reses" id="reses"><option value="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama</strong></label><textarea class="form-control form-control-sm text-size nama" placeholder="Isi Nama..." rows="2" name="nama" id="nama"></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Alamat</strong></label><textarea class="form-control form-control-sm text-size alamat" placeholder="Isi Alamat..." rows="2" name="alamat" id="alamat"></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Usulan</strong></label><textarea class="form-control form-control-sm text-size usulan" placeholder="Isi Usulan..." rows="5" name="usulan" id="usulan"></textarea></div>
                            </div>
                            <div class="col">
                                <div class="form-group"><label for="Biaya"><strong>Biaya</strong></label><input class="form-control form-control-sm text-size biaya" type="number" min="0" placeholder="Masukan Biaya..." name="biaya" id="biaya"></div>
                            </div>
                        </div>
                        <!--
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Unggah Proposal (Jika ingin ganti proposal)&nbsp;</strong></label><input type="file" name="file" id="filess" onchange="return validasiFile()"></div>
                            </div>
                        </div>
                      -->
                    
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit">Edit Data</button></div>
            </div>
        </div>
    </div>
</form>

   <div class="modal fade" role="dialog" tabindex="-1" id="hapusModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                 <form method="POST" action="<?php echo base_url(); ?>Usulan/delete_usulan">
                <div class="modal-header">
                   
                    <h5 class="modal-title"><strong>Hapus Usulan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                    <input type="hidden" name="id" class="id">
                    <input type="hidden" name="tanda" value="usulan">
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </form>
        </div>
    </div>

<a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div class="modal fade" role="dialog" tabindex="-1" id="lihatModal">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Lihat Usulan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                   
                    <div id="result">

                   
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button></div>
            </div>
        </div>
</div>




<div class="modal fade" role="dialog" tabindex="-1" id="editkesimpulan">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Tambah Kesimpulan Usulan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form class="text-size" autocomplete="off" method="post" action="<?php echo base_url(); ?>usulan/save_kesimpulan" id="myform_1" onSubmit="return validasi_1()">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete">
                                        <input class="form-control form-control-sm text-size anggota_dewan" type="text" id="myInput" name="namaAnggota" placeholder="Isi Nama Anggota Dewan..." readonly="">
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="id" class="id">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size fraksi" type="text" id="myInput2" name="fraksi" placeholder="Fraksi..." readonly=""></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label for="username"><strong>Dapil</strong></label>
                                    <div>
                                        <div class="form-row justify-content-center">
                                            <div class="col-xl-12">
                                                <input class="form-control form-control-sm text-size daerah_pemilihan" type="text" placeholder="Daerah Pemilihan..." name="dapil" readonly="" id="dapil">

                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size tanggal" type="date" name="tgl" required
                                                     oninvalid="this.setCustomValidity('Tanggal tidak boleh kosong')" readonly=""></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm text-size tempat" type="text" name="tempat" placeholder="Isi Tempat..." required
                                                     oninvalid="this.setCustomValidity('Tempat tidak boleh kosong')" readonly=""></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Reses Ke- ...</strong></label>
                                <input class="form-control form-control-sm text-size reses" type="text" name="tempat" placeholder="Isi Tempat..." required
                                                     oninvalid="this.setCustomValidity('Tempat tidak boleh kosong')" readonly>

                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama</strong></label><textarea class="form-control form-control-sm text-size nama" placeholder="Isi Nama..." rows="2" name="nama"  required
                                                     oninvalid="this.setCustomValidity('Nama tidak boleh kosong')" readonly></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Alamat</strong></label><textarea class="form-control form-control-sm text-size alamat" placeholder="Isi Alamat..." rows="2" name="alamat" required
                                                     oninvalid="this.setCustomValidity('Alamat tidak boleh kosong')" readonly></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Usulan</strong></label><textarea class="form-control form-control-sm text-size usulan" placeholder="Isi Usulan..." rows="5" name="usulan" required 
                                                     oninvalid="this.setCustomValidity('Usulan tidak boleh kosong')" readonly></textarea></div>
                            </div>
                            <div class="col">
                                <div class="form-group"><label for="Biaya"><strong>Biaya</strong></label><input class="form-control form-control-sm text-size biaya" type="number" min="0" placeholder="Masukan Biaya..." name="biaya" required
                                                     oninvalid="this.setCustomValidity('Biaya tidak boleh kosong')" readonly></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Kesimpulan</strong></label><textarea class="form-control form-control-sm kesimpulan" placeholder="Isi Kesimpulan..." rows="9" name="kesimpulan" id="kesimpulan"></textarea></div>
                            </div>
                        </div>   
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit">Tambah Kesimpulan</button></div>
            </div>
        </div>
    </div>
</form>



 <?php

              $dewan=$this->Master_model->select_dewann();
              

              
            

            


        ?>


<script src="http://code.jquery.com/jquery.min.js"></script>

<script src="<?php echo base_url(); ?>assets/jquery.twbsPagination.js"></script>
    <script>
	
	$(document).ready(function(){
  $("#myInput2").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
        
  $(document).on( "click", '.hapusbutton',function(e) {
    var id= $(this).data('id');
    
     
    $(".id").val(id);
   
  
  
});


  $(document).on( "click", '.edit_button',function(e) {
    var id= $(this).data('id');
    var reses = $(this).data('reses');  
    var id_user = $(this).data('id_user');
    var tanggal = $(this).data('tanggal');
    var tempat = $(this).data('tempat');
    var nama= $(this).data('nama');
    var alamat = $(this).data('alamat');
    var usulan = $(this).data('usulan');
    var biaya = $(this).data('biaya');
    var proposal = $(this).data('proposal');
    var bidang = $(this).data('bidang');
    var first_name = $(this).data('first_name');
    var last_name = $(this).data('last_name');
    var fraksi = $(this).data('fraksi');
    var daerah_pemilihan = $(this).data('daerah_pemilihan');
    var anggota_dewan = $(this).data('anggota_dewan');
    var kesimpulan = $(this).data('kesimpulan');



    $(".id").val(id);
    $(".reses").val(reses);
    $(".id_user").val(id_user);
    $(".tanggal").val(tanggal);
    $(".tempat").val(tempat);
    $(".nama").val(nama);
    $(".alamat").val(alamat);
    $(".usulan").val(usulan);
    $(".biaya").val(biaya);
    $(".proposal").val(proposal);
    $(".bidang").val(bidang);  
    $(".first_name").val(first_name);
    $(".last_name").val(last_name);
    $(".fraksi").val(fraksi);
    $(".daerah_pemilihan").val(daerah_pemilihan);
    $(".anggota_dewan").val(anggota_dewan);
    $(".kesimpulan").val(kesimpulan);
  
  
});

 $(document).on("click", ".lihat_button", function () {
        var myId = $(this).data('id');


        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Usulan/detail_usulan',
            data: { ids: myId},
            success: function(response) {
                $('#result').html(response);
            }
        });
    });  
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
<!--
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
-->
<script>
    
  
    function validasi_1()
    {
       var kesimpulan=document.forms["myform_1"]["kesimpulan"].value;
       

        if (kesimpulan==null || kesimpulan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Kesimpulan tidak boleh kosong!"
            });
          return false;
          };

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


        var tempat=document.forms["myform"]["tempat"].value;
        if (tempat==null || tempat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tempat tidak boleh kosong!"
            });
          return false;
          };

         var nama=document.forms["myform"]["nama"].value;
        if (nama==null || nama=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama tidak boleh kosong!"
            });
          return false;
          };


         var alamat=document.forms["myform"]["alamat"].value;
        if (alamat==null || alamat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Alamat tidak boleh kosong!"
            });
          return false;
          };

           var usulan=document.forms["myform"]["usulan"].value;
        if (usulan==null || usulan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Usulan tidak boleh kosong!"
            });
          return false;
          };


           var biaya=document.forms["myform"]["biaya"].value;
        if (biaya==null || biaya=="")
          {
           swal({
                title: "Peringatan!",
                text: "Biaya tidak boleh kosong!"
            });
          return false;
          };
     }


    
</script>