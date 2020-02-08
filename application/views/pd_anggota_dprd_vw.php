<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://pagination.js.org/dist/2.1.4/pagination.min.js"></script>

<script src="https://pagination.js.org/dist/2.1.4/pagination.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>
				<div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
								<h6><strong>Daftar <?php echo $tambah; ?></strong></h6>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div class="row no-gutters">
                                        <div class="col-xl-12">
                                            <div><a class="btn btn-primary btn-sm text-size mr-2" role="button" href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas?parameter=<?php echo $parameter; ?>"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Data Perjalanan Dinas <?php echo $tambah; ?></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-12 col-sm-5 col-md-6 col-lg-8 col-xl-8 text-nowrap">
                                            <!--
                                            <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="2" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select></label></div>-->
                                        </div>

                                        <div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-4 mb-2"><input class="form-control-sm form-control text-size" type="text" id="myInput2" placeholder="Cari..."></div>
                                    </div>
                                </div>

                                <?php echo $this->session->flashdata('message');?>
                                <div class="table-responsive text-size" style="font-size: 13px;">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                                <th><strong>Peserta Dinas</strong></th>
                                                <th><strong>No. Surat Tugas</strong></th>
                                                 <th><strong>Maksud</strong></th>
                                                 <th><strong>Pejabat yang berwenang</strong></th>
                                                <th><strong>Aksi</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php if(count($perjalanan_dinas) >0) { ?>
                                            <?php 
                                            
                                            $no=1;
                                            foreach($perjalanan_dinas as $row):?>
                                            <tr>
                                                <td class="text-nowrap text-center"><?php echo $no++; ?></td>
                                                <td>
                                                  <?php if($row->status_peserta_dinas=="1"){ ?>
                                                         Anggota DPRD
                                                  <?php }elseif($row->status_peserta_dinas=="2"){ ?>
                                                        Anggota Setwan
                                                  <?php } ?>
                                                </td>
                                                <td><?php echo $row->surat_perintah; ?></td>
                                                <td><?php echo $row->perihal; ?></td>
                                                <td><?php echo $row->pejabat; ?></td>
                                                
                                                <td class="text-nowrap text-center">
                                                    
                                                    &nbsp;

                                                    <a class="mr-1" href="<?php echo base_url(); ?>Perjalanan_dinas/detail_surat_perintah?parameter=<?php echo $parameter; ?>&id=<?php echo $row->id; ?>"><button class="btn btn-warning btn-sm text-dark text-size" type="button"><i class="fas fa-search"></i></button></a>

                                                    <a href="<?php echo base_url(); ?>Perjalanan_dinas/detail_surat_dinas/<?php echo $row->id_dinas; ?>">
                                                    <button class="btn btn-primary btn-sm text-size" type="button"><i class="fas fa-search"></i></button></a>&nbsp;
                                                  
                                                      
                                                    <a href="<?php echo base_url(); ?>Perjalanan_dinas/ubah_perjalanan_dinas?id=<?php echo $row->id; ?>"><button class="btn btn-success btn-sm text-size edit_button"
                                                        type="button" 
                                                        ><i class="far fa-edit"></i>
                                                    </button> </a>
                                                           
                                                        <button class="btn btn-danger btn-sm text-size hapusbutton" type="button" data-target="#hapusModal" data-toggle="modal" data-id="<?php echo $row->id_dinas; ?>" ><i class="far fa-trash-alt"></i></button>


                                                    </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php }else{ ?>
                                            <tr>
                                                <td colspan="9" align="center">Tidak ada data!</td>
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
                                    <div class="col-md-6">
                                        <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                            <ul class="pagination pagination-sm">
                                              <?php
												   if($link){
													echo  $link; 
													}
												   ?> 
                                            </ul>
                                        </nav>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
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
                <input type="hidden" class="id" name="id">
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="close" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </div>
    </form>
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