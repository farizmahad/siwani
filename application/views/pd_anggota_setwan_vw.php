
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://pagination.js.org/dist/2.1.4/pagination.min.js"></script>

<script src="https://pagination.js.org/dist/2.1.4/pagination.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>
<div class="card-header py-3">
                        <h6><strong>Daftar Daerah Pemilihan</strong></h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                              <!--
                            <div class="col-md-6 col-xl-2 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                              -->
                            <div class="col-md-6 col-xl-5 text-nowrap"><button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#addmodalDapil"><i class="fas fa-plus-circle"></i>&nbsp; Tambah Daerah Pemilihan</div>
                            <div class="col-md-6 col-xl-7">
                                <div class="text-md-right dataTables_filter text-size" id="dataTable_filter"><label><input class="form-control-sm form-control form-control-sm" type="search" id="myInput2" aria-controls="dataTable" placeholder="Cari..." style="font-size: 14px;"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 15px;">
                            <table class="table table-hover" id="myTable">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Daerah Pemilihan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count_dapil=count($dapil);
                                    if($count_dapil>0) {
                                    $no=1;
                                    foreach($dapil as $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $row->daerah_pemilihan; ?></td>
                                        <td class="text-nowrap text-center"><button class="btn btn-success btn-sm text-size edit_button" type="button" data-toggle="modal" data-target="#editmodalDapil" 
                                        data-id="<?php echo $row->id; ?>"
                                        data-daerah_pemilihan="<?php echo $row->daerah_pemilihan; ?>"
                                          ><i class="far fa-edit"></i>&nbsp;Edit</button>&nbsp;

                                          <button class="btn btn-danger btn-sm text-size hapus_button"
                                                type="button" data-toggle="modal" data-target="#hapusmodalDapil" data-id="<?php echo $row->id; ?>"><i class="far fa-trash-alt"></i>&nbsp; Hapus</button>&nbsp;</td>
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
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 14px;">Showing 1 to 10 of 27</p>
                            </div>
                          -->
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
                          <div id="pagination"></div>

                        </div>





    <div class="modal fade" role="dialog"  id="addmodalDapil">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    
                    <form id="form_tambah_dapil">
                    
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                
                                    <h5 class="modal-title"><strong>Tambah Daerah Pemilihan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row">
                                        <div class="col-xl-12">
                                                <p id="pesann" align="center"></p>
                                                <div class="form-group"><label>Nama Daerah Pemilihan</label><input class="form-control text-size" type="text" placeholder="Daerah Pemilihan" id="dapil" name="dapil"></div>
                                                
                                          
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm text-size" type="button" id="submit_tambah_dapil">Simpan</button></div>
                            </div>
                        </div>
                    </div>
                    
                </form>
            
                </div>
            </div>
        </div>
    </div>
   <div class="modal fade" role="dialog" tabindex="-1" id="editmodalDapil">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    <div class="row">
                      <form id="edit_dapil">
                    
                        <div class="col-xl-12">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Edit Dapil</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row">
                                        <div class="col-xl-12">
                                             <p id="pesan_edit" align="center"></p>
                                                <div class="form-group"><label>Nama Daerah Pemilihan</label><input class="form-control form-control-sm text-size daerah_pemilihan" type="text" name="dapil" id="dapil"></div>
                                                <input type="hidden" name="id" class="id">
                                           
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success btn-sm text-size" type="submit" id="submit_edit_dapil">Edit</button></div>
                            </div>
                        </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="hapusmodalDapil">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form id="hapus_dapil">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Daerah Pemilihan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                    <input type="hidden" name="id" class="id">
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit" id="submit_hapus_dapil">Hapus!</button></div>
            </div>
          </form>
        </div>
    </div>
<!--
    <script>
                  $(document).ready(function() {
                     //untuk simpan barang     
                    $("#submit_dapil").click(function(){
                         $.ajax({
                           
                           url : "<?php echo base_url(); ?>Master/save_dapil", 
                           type: "POST", 
                           data: $("#form_dapil").serialize(),
                             success: function(data) {
                             swal({
                title: "Berhasil!",
                text: "Data berhasil ditambah!"
            });
                            $('#addmodalDapil').hide();
                             $('#result').load("<?php echo base_url() ?>Master/detail_master/dapil");

                            }
                         });
                       

                     });
                    //**end**

                    //untuk load list barang di awal
                    
                    //**end**

                    //untuk delete barang
                    $(document).on('click','.hapus_barang',function(){
                      var row_id=$(this).attr("id"); 
                      $.ajax({
                        url : "<?php echo base_url();?>index.php/Mbarang/hapus_barang",
                        method : "POST",
                        data : {row_id : row_id},
                        success :function(data){
                           $('#list_barang').html(data);
                        }
                      });
                    });

                    //**end**

                  });





function ambilData(){
$('#result').load("<?php echo base_url() ?>Master/detail_master/dapil");
return false;
}
</script>
-->

<!--
<script>
   function reply_submit() {
   
      var dapil=document.forms["form_dapil"]["dapil"].value;
      var param=document.forms["form_dapil"]["param"].value;


        $.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Master/save_dapil",
           data:{dapil,param},
          success: function(data){
              
              $('#result').load("<?php echo base_url() ?>Master/detail_master/"+$param);
              return false
              alert('Berhasil menambah data');
           }

        });
        
  
} 
</script>
-->

<script>
	$(document).ready(function(){
	  $("#myInput2").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#myTable tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });
	});
    /*
    function tambahdata(){

      var dapil=document.forms["form_dapil"]["dapil"].value;
      
       $.ajax({
           type: "POST",
           url: "<?php echo base_url() ?>Master/save_dapil",
           dataType:'json',
           data:{dapil},
          success: function(hasil){
              $("#pesan").html(hasil.pesan);
              if(hasil.pesan==''){
            swal({
                title: "",
                text: "Tambah data berhasil!"
            });

                
                $("#addmodalDapil").modal('toggle');
               
                 $("#dapil").val('');
                
              }
           }

        });
    }
*/

$(document).on( "click", '.edit_button',function(e) {
    var id= $(this).data('id');
    var daerah_pemilihan = $(this).data('daerah_pemilihan');

    $(".id").val(id);
    $(".daerah_pemilihan").val(daerah_pemilihan);
   
  
});

$(document).on( "click", '.hapus_button',function(e) {
    var id= $(this).data('id');
    

    $(".id").val(id);
 
   
  
});


   $(document).ready(function() {



                   $("#submit_tambah_dapil").click(function(){
                    var dapil=document.forms["form_tambah_dapil"]["dapil"].value;

                     if (dapil==null || dapil=="")
          {
           swal({
                title: "Peringatan!",
                text: "Daerah Pemilihan tidak boleh kosong!"
            });
          return false;
          }else{

                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/save_dapil", 
                           type: "POST", 
                           dataType:'json',
                          data:{dapil},
                             success: function(hasil) {
                            
                            $("#pesann").html(hasil.pesan);
 if(hasil.pesan==''){
                            
                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil ditambah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dapil");
                            }
                            }
                         });
                       
                 return false;
                     }});
                     //untuk simpan barang     
                    $("#submit_edit_dapil").click(function(){

var dapil=document.forms["edit_dapil"]["dapil"].value;
        if (dapil==null || dapil=="")
          {
           swal({
                title: "Peringatan!",
                text: "Daerah Pemilihan tidak boleh kosong!"
            });
          return false;
          }else{



                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/save_dapil", 
                           type: "POST", 
                           dataType:'json',
                           data: $("#edit_dapil").serialize(),
                             success: function(data) {
                              console.log(data);
                             $("#pesan_edit").html(data.pesan);
                             if(data.pesan==''){

                               $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dapil");
                            }
                          }
                         });
                       
                 return false;
                     }});
                    
                        $("#submit_hapus_dapil").click(function(){

                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/delete_dapil", 
                           type: "POST", 
                           data: $("#hapus_dapil").serialize(),
                             success: function(data) {
                             
                             $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil dihapus');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dapil");
                            }
                         });
                       
                 return false;
                     });







                  });


</script>  

  <script type='text/javascript'>
$(document).ready(function() {
  createPagination(0);
  $('#pagination').on('click','a',function(e){
    e.preventDefault(); 
    var pageNum = $(this).attr('data-ci-pagination-page');
    createPagination(pageNum);
  });
  function createPagination(pageNum){
    $.ajax({
      url: '<?=base_url()?>index.php/Employee/loadData/'+pageNum,
      type: 'get',
      dataType: 'json',
      success: function(responseData){
        $('#pagination').html(responseData.pagination);
        paginationData(responseData.empData);
      }
    });
  }
  function paginationData(data) {
    $('#employeeList tbody').empty();
    for(emp in data){
      var empRow = "<tr>";
      empRow += "<td>"+ data[emp].id +"</td>";
      empRow += "<td>"+ data[emp].name +"</td>";
      empRow += "<td>"+ data[emp].age +"</td>"
      empRow += "<td>"+ data[emp].skills +"</td>"
      empRow += "<td>"+ data[emp].designation +"</td>"
      empRow += "<td>"+ data[emp].address +"</td>";
      empRow += "</tr>";
      $('#example2 tbody').append(empRow);          
    }
  }
});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>