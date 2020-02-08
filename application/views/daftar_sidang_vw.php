<div class="container-fluid">
                <h3 class="text-dark mb-4">Jadwal Sidang / Rapat</h3>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="index.html"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="daftar_jadwal_sidang_rapat.html"><span><strong>Jadwal Sidang / Rapat</strong></span></a></li>
                </ol>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <div><button class="btn btn-primary btn-sm text-size btn-inline-first" type="button" data-toggle="modal" data-target="#addJadwal"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Jadwal Sidang</button></div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right dataTables_filter" id="dataTable_filter"><label><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-2 text-size" id="dataTable" role="grid" aria-describedby="dataTable_info">

                              <?php echo $this->session->flashdata('message');?>
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th class="text-center">No.</th>
                                        <th class="text-center">Hari / Tanggal</th>
                                        <th class="text-center">Waktu</th>
                                        <th class="text-center">Tempat</th>
                                        <th class="text-center">Acara</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no=1;
                                    foreach($jadwal as $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php echo $row->hari; ?>, <?php echo date('d F Y', strtotime($row->tanggal)); ?></td>
                                        <td><?php echo $row->waktu; ?></td>
                                        <td><?php echo $row->tempat; ?></td>
                                        <td><?php echo $row->acara; ?></td>
                                        <td class="text-center"><button class="btn btn-success btn-sm mr-1 edit_button" type="button" data-toggle="modal" data-target="#editModal"
                                data-id="<?php echo $row->id; ?>"
                                data-tanggal="<?php echo $row->tanggal;?>"
                                data-hari="<?php echo $row->hari;?>"
                                data-waktu="<?php echo $row->waktu;?>"
                                data-tempat="<?php echo $row->tempat;?>"
                                data-acara="<?php echo $row->acara;?>"

                                            ><i class="fas fa-edit"></i></button><button class="btn btn-danger btn-sm mr-1 edit_button" type="button" data-toggle="modal"
                                                data-target="#hapusModal"
data-id="<?php echo $row->id; ?>"

                                                ><i class="fas fa-trash-alt" da=""></i></button></td>
                                    </tr>
                                <?php endforeach; ?>
                                   
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info text-size" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                            </div>
                            <div class="col-md-6">
                                <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers text-size">
                                    <ul class="pagination">
                                        <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="modal fade" role="dialog" tabindex="-1" id="addJadwal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Tambah Jadwal Sidang / Rapat</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <form class="text-size" autocomplete="off" method="POST" action="<?php echo base_url(); ?>Sidang/simpan_jadwal" onsubmit="return validasi()" id="myform">
                        <div class="form-row">
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm" type="date" placeholder="Isi Tanggal..." name="tanggal" id="tanggal" onchange="return cekHari()"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Hari</strong></label><input class="form-control form-control-sm text-size" type="text" name="hari" placeholder="Isi Hari..." readonly="" id="hari"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Waktu</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Waktu..." name="waktu" id="waktu"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm" type="text" placeholder="Isi Tempat..." name="tempat" id="tempat"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Acara</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Acara..." rows="2" name="acara" id="acara"></textarea></div>
                            </div>
                        </div>
                   
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary text-size" type="submit">Simpan</button></div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="editModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Edit Jadwal Sidang / Rapat</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                   <form method="POST" action="<?php echo base_url(); ?>Sidang/simpan_jadwal" onsubmit="return validasi_edit()" id="myform_edit">

                        <div class="form-row">
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm tanggal" type="date" placeholder="Isi Tanggal..." id="tanggal"></div>

                                <input type="hidden" name="id" class="id">
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Hari</strong></label><input class="form-control form-control-sm text-size hari" type="text" name="hari" placeholder="Isi Hari..." readonly="" id="hari"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Waktu</strong></label><input class="form-control form-control-sm text-size waktu" type="text" name="waktu"  id="waktu" placeholder="Isi Waktu..."></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm tempat" type="text" placeholder="Isi Tempat..." name="tempat" id="tempat"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Acara</strong></label><textarea class="form-control form-control-sm text-size acara" placeholder="Isi Acara..." rows="2" name="acara" id="acara"></textarea></div>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer"><button class="btn btn-light text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-success text-size" type="submit">Ubah</button></div>
            </form>
            </div>
        </div>
    </div>
    <div class="modal fade" role="dialog" tabindex="-1" id="hapusModal">
        <form method="POST" action="<?php echo base_url(); ?>Sidang/hapus_sidang">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger"><strong>Hapus Jadwal Sidang / Rapat</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <p class="text-danger">Anda yakin akan menghapus data ini?</p>
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </div>
    </div>
</form>
    </div>

    <script>
        
        function validasi(){

            var tanggal=document.forms["myform"]["tanggal"].value;

            if (tanggal==null || tanggal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal tidak boleh kosong!"
            });
          return false;
          };


           var waktu=document.forms["myform"]["waktu"].value;

            if (waktu==null || waktu=="")
          {
           swal({
                title: "Peringatan!",
                text: "Waktu tidak boleh kosong!"
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


          
          var acara=document.forms["myform"]["acara"].value;

            if (acara==null || acara=="")
          {
           swal({
                title: "Peringatan!",
                text: "Acara tidak boleh kosong!"
            });
          return false;
          };


        }


    </script>
   
        <script>
 function cekHari(){
     var tgl=document.forms["myform"]["tanggal"].value;


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
        
    $(document).on( "click", '.edit_button',function(e) {
    var id = $(this).data('id');
    var tanggal = $(this).data('tanggal');
    var hari = $(this).data('hari');
    var waktu = $(this).data('waktu');
    var tempat = $(this).data('tempat');
    var acara = $(this).data('acara');
   
    
    $(".id").val(id);
    $(".tanggal").val(tanggal);
    $(".hari").val(hari);
    $(".waktu").val(waktu);
    $(".tempat").val(tempat);
    $(".acara").val(acara);
   
  
});

    </script>

    <script>
        
        function validasi_edit(){

            var tanggal=document.forms["myform_edit"]["tanggal"].value;

            if (tanggal==null || tanggal=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal tidak boleh kosong!"
            });
          return false;
          };


           var waktu=document.forms["myform_edit"]["waktu"].value;

            if (waktu==null || waktu=="")
          {
           swal({
                title: "Peringatan!",
                text: "Waktu tidak boleh kosong!"
            });
          return false;
          };


           var tempat=document.forms["myform_edit"]["tempat"].value;

            if (tempat==null || tempat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tempat tidak boleh kosong!"
            });
          return false;
          };


          
          var acara=document.forms["myform_edit"]["acara"].value;

            if (acara==null || acara=="")
          {
           swal({
                title: "Peringatan!",
                text: "Acara tidak boleh kosong!"
            });
          return false;
          };


        }


    </script>
   
        