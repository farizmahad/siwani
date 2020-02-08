
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>
 <div class="card-header py-3">
                        <h6><strong>Daftar Jabatan</strong></h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                                <!--
                            <div class="col-md-6 col-xl-2 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            -->
                            <div class="col-md-6 col-xl-5 text-nowrap"><button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#addmodalFraksi"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Jabatan</button></div>
                            <div class="col-md-6 col-xl-7">
                                <div class="text-md-right dataTables_filter text-size" id="dataTable_filter"><label><input class="form-control-sm form-control form-control-sm" type="search" id="myInput2" aria-controls="dataTable" placeholder="Cari..." style="font-size: 14px;"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 15px;">
                            <table class="table table-hover dataTable my-0" id="myTable">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Jabatan</th>
                                        <th>Urutan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                     $count_jabatan=count($jabatan);
                                     if($count_jabatan>0) {
                                     $no=1;
                                     foreach($jabatan as $row): ?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $row->nama_jabatan; ?></td>
                                        <td><?php echo $row->urutan; ?></td>
                                        <td class="text-nowrap text-center"><button class="btn btn-success btn-sm text-size edit_button" type="button" data-toggle="modal" data-target="#editmodalFraksi"
                                         data-id="<?php echo $row->id ?>"
                                         data-nama_jabatan="<?php echo $row->nama_jabatan; ?>"
                                         data-urutan="<?php echo $row->urutan; ?>"

                                            ><i class="far fa-edit"></i>&nbsp;Edit</button>&nbsp;


                                            <button class="btn btn-danger btn-sm text-size hapus_button"
                                                type="button" data-toggle="modal" data-target="#hapusmodalFraksi"
                                                data-id="<?php echo $row->id; ?>"
                                                ><i class="far fa-trash-alt"></i>&nbsp; Hapus</button>&nbsp;</td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                                    <tr>
                                        <td colspan="3" align="center">Tidak ada data!</td>
                                    </tr>
                            <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            
                            <!--
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
                        <div class="modal fade" role="dialog" tabindex="-1" id="addmodalFraksi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    <div class="row">
                        <div class="col-xl-12">
                            <form id="form_tambah_jabatan">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Tambah Jabatan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row">
                                        <div class="col-xl-12">
                                       <p id="pesann" align="center"></p>
                                                <div class="form-group"><label>Nama Jabatan</label><input class="form-control form-control-sm text-size" type="text" name="jabatan" placeholder="Jabatan" id="jabatan"></div>
                                                 <div class="form-group"><label>Urutan</label><input class="form-control form-control-sm text-size" type="number" name="urutan" placeholder="Urutan" id="urutan"></div>
                                         
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm text-size" type="submit" id="submit_tambah_jabatan">Simpan</button></div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <div class="modal fade" role="dialog" tabindex="-1" id="editmodalFraksi">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    <div class="row">
                        <div class="col-xl-12">
                            <form id="edit_fraksi">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Edit Jabatan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row">
                                        <div class="col-xl-12">
                                        <p id="pesan_edit" align="center"></p>
                                                <div class="form-group"><label>Nama Jabatan</label><input class="form-control form-control-sm text-size nama_jabatan" type="text" name="jabatan" placeholder="Jabatan" id="jabatan"></div>
                                                 <div class="form-group"><label>Urutan</label><input class="form-control form-control-sm text-size urutan" type="number" name="urutan" placeholder="Urutan" id="urutan"></div>
                                                 <input type="hidden" name="id" class="id">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm text-size" type="submit" id="submit_edit_fraksi">Simpan</button></div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" tabindex="-1" id="hapusmodalFraksi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="hapus_fraksi">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Jabatan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                    <input type="hidden" name="id" class="id">
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit" id="submit_hapus_fraksi">Hapus!</button></div>
            </div>
        </form>
        </div>
    </div>
    <script>
		$(document).ready(function(){
		  $("#myInput2").on("keyup", function() {
			var value = $(this).val().toLowerCase();
			$("#myTable tr").filter(function() {
			  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
			});
		  });
		});

$(document).on( "click", '.edit_button',function(e) {
    var id= $(this).data('id');
    var nama_jabatan = $(this).data('nama_jabatan');
    var urutan = $(this).data('urutan');
     
    
    $(".id").val(id);
    $(".nama_jabatan").val(nama_jabatan);
    $(".urutan").val(urutan);

   
  
});

$(document).on( "click", '.hapus_button',function(e) {
    var id= $(this).data('id');
    

    $(".id").val(id);
 
   
  
});


   $(document).ready(function() {



                   $("#submit_tambah_jabatan").click(function(){
                    var jabatan=document.forms["form_tambah_jabatan"]["jabatan"].value;
                    var urutan=document.forms["form_tambah_jabatan"]["urutan"].value;





            if (jabatan==null || jabatan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Jabatan tidak boleh kosong!"
            });
          return false;
          }else if(urutan==null || urutan==""){
              swal({
                title: "Peringatan!",
                text: "Urutan tidak boleh kosong!"
            });
          return false;
          }else{

                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/save_jabatan", 
                           type: "POST", 
                           dataType:'json',
                          data:{jabatan,urutan},
                             success: function(hasil) {
                            
                            
 if(hasil.pesan==''){
                            
                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#jabatan").val('');
                             $("#urutan").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil ditambah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/jabatan");
                            }
                            }
                         });
                       
                 return false;
                     }});
                     //untuk simpan barang     
                    $("#submit_edit_fraksi").click(function(){
                       
var jabatan=document.forms["edit_fraksi"]["jabatan"].value;
var urutan=document.forms["edit_fraksi"]["urutan"].value;




            if (jabatan==null || jabatan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Jabatan tidak boleh kosong!"
            });
          return false;
          }


        if (urutan==null || urutan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Urutan tidak boleh kosong!"
            });
          return false;
          }



          else{


                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/save_jabatan", 
                           type: "POST",
                           dataType:'json', 
                           data: $("#edit_fraksi").serialize(),
                             success: function(data) {
                                 $("#pesan_edit").html(data.pesan);
                                 if(data.pesan==""){
                            
                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#jabatan").val('');
                             $("#urutan").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/jabatan");
                            }
                        }
                         });
                       
                 return false;
                     }});
                    
                        $("#submit_hapus_fraksi").click(function(){

                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/delete_jabatan", 
                           type: "POST", 
                           data: $("#hapus_fraksi").serialize(),
                             success: function(data) {
                             
                             $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#fraksi").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil dihapus');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/jabatan");
                            }
                         });
                       
                 return false;
                     });







                  });


</script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>