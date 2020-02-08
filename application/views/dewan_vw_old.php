 
<link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">
<link href="<?php echo base_url();?>assets/plugins/css/chosen/bootstrap-chosen.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>


<script src="http://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

 <div class="card-header py-3">
                        <h6><strong>Daftar Anggota Dewan</strong></h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
							<!--
                            <div class="col-md-6 col-xl-2 text-nowrap">
                                <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                            </div>
                            -->
                            <div class="col-md-6 col-xl-5 text-nowrap"><button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#addmodalDewan"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Anggota Dewan</button></div>
                            <div class="col-md-6 col-xl-7">
                                <div class="text-md-right dataTables_filter text-size" id="dataTable_filter"><label><input class="form-control-sm form-control form-control-sm" type="search" id="myInput2" aria-controls="dataTable" placeholder="Cari..." style="font-size: 14px;"></label></div>
                            </div>
                        </div>
                        <div class="table-responsive table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 15px;">
                            <table class="table table-hover dataTable my-0" id="myTable">
                                <thead class="text-center">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Anggota Dewan</th>
                                        <th>Fraksi</th>
                                        <th>Dapil</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $count_dewan=count($dewan);
                                    if($count_dewan > 0) {
                                    $no=1;
                                    foreach($dewan as $row):?>
                                    <tr>
                                        <td class="text-center"><?php echo $no++; ?></td>
                                        <td><?php if($row->foto) { ?><img class="rounded-circle mr-2" width="30" height="30" src="<?php echo base_url(); ?>assets/images/<?php echo $row->foto; ?>"> <?php } ?><?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-nowrap text-center"><button class="btn btn-success btn-sm text-size edit_button" type="button" data-toggle="modal" data-target="#editmodalDewan"
                                        data-id="<?php echo $row->id;?>"
                                        data-id_user="<?php echo $row->id_user;?>"
                                        data-id_fraksi="<?php echo $row->id_fraksi;?>"
                                        data-id_dapil="<?php echo $row->id_dapil;?>"
                                        data-jabatan="<?php echo $row->jabatan;?>"
                                        data-level="<?php echo $row->id_level;?>"
                                        data-foto="<?php echo $row->foto;?>"
                                        data-alamat="<?php echo $row->alamat;?>"
                                        data-first_name="<?php echo $row->first_name;?>"
                                        data-last_name="<?php echo $row->last_name;?>"
                                        data-email="<?php echo $row->email;?>"
                                        data-gelar="<?php echo $row->gelar;?>"



                                            ><i class="far fa-edit"></i>&nbsp;Edit</button>&nbsp;
                                            <button class="btn btn-danger btn-sm text-size hapus_button"
                                            data-id="<?php echo $row->id; ?>"
                                            data-id_user="<?php echo $row->id_user; ?>"
                                                type="button" data-toggle="modal" data-target="#hapusmodalDewan"><i class="far fa-trash-alt"></i>&nbsp; Hapus</button>&nbsp;

                                        <button class="btn btn-warning btn-sm text-size editlevel_button" type="button" data-toggle="modal" data-target="#editmodalDewanLevel"
                                        data-id="<?php echo $row->id_user;?>"
                                            ><i class="far fa-edit"></i>&nbsp;Edit Level</button>&nbsp;

                                            </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php }else{ ?>
                                <tr>
                                    <td colspan="3" align="center">Tidak ada data!</td>
                                </tr>

                            <?php } ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-center"><strong>No.</strong></td>
                                        <td class="text-center"><strong>Dewan</strong></td>
                                        <td class="text-center"><strong>Aksi</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite" style="font-size: 14px;">Showing 1 to 10 of 27</p>
                            </div>
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




 <div class="modal fade" role="dialog" tabindex="-1" id="addmodalDewan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    <div class="row" id="1">
                        <div class="col-xl-12">
                            <form id="submit">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><strong>Tambah Data Anggota Dewan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row mb-3">
                                        <div class="col-lg-8 col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card shadow">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Pribadi Anggota Dewan</p>
                                                        </div>
                                                        
                                                        <div class="card-body">
                                                         <div id="pesann"></div>
															<div class="form-row">
																<div class="col-xl-12">
																	<div class="form-group"><label for="first_name"><strong>Nama Lengkap</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Lengkap..." name="namaLengkap" id="namaLengkap"></div>
																</div>
																
																<div class="col-xl-12">
																	<div class="form-group"><label for="first_name"><strong>NIP</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi NIP..." name="nip" id="nip"></div>
																</div>
															</div>
                                                        </div>
                                                    </div>
                                                    <div class="card shadow mb-3">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Login Anggota Dewan</p>
                                                        </div>
                                                        <div class="card-body">
                                                           
                                                                <div class="form-row">
																	<div class="col-xl-6">
                                                                        <div class="form-group"><label for="first_name"><strong>Nama Depan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Depan..." name="namaDepan" id="namaDepan"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label for="last_name"><strong>Nama Belakang</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Belakang..." name="namaBelakang" id="namaBelakang"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label for="email"><strong>Alamat Email</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="user@example.com" name="email" id="email"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group">
                                                                            <label for="first_name"><strong>Level</strong></label>
                                                                          <div>
                                                                           
                                                                    </div>
                                                        

																	<select class="form-control form-control-sm text-size chosen-select" name="levelAkses[]" multiple tabindex="4" id="level">

																   
																					 
																					 <?php foreach($level as $row):?>
																					 <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
																				 <?php endforeach; ?>
																	 </select>

                                                                
                                                        

                                                                </div>


                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="first_name"><strong>Password</strong></label><input class="form-control form-control-sm text-size" type="password" placeholder="Isi Password..." name="password" id="password"></div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="last_name"><strong>Password (Masukkan Lagi)</strong></label><input class="form-control form-control-sm text-size" type="password" placeholder="Isi Password Lagi..." name="konfirmPassword" id="konfirmPassword"></div>
                                                                    </div>
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                    <div class="card shadow mb-3">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Fraksi, Daerah Pemilihan &amp; Jabatan</p>
                                                        </div>
                                                        <div class="card-body">
                                                           
                                                                <div class="form-row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="username"><strong>Fraksi</strong></label><select class="form-control form-control-sm text-size" name="fraksi" id="fraksi">
                                                                            <?php foreach($fraksi as $row):?>
                                                                                   <option value="<?php echo $row->id; ?>"><?php echo $row->fraksi; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select></div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="email"><strong>Daerah Pemilihan</strong></label><select class="form-control form-control-sm text-size" name="dapil" id="dapil">
                                                                            <?php foreach($dapil as $dap):?>
                                                                                  <option value="<?php echo $dap->id; ?>"><?php echo $dap->daerah_pemilihan; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select></div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="email"><strong>Jabatan</strong></label><select class="form-control form-control-sm text-size" name="jabatan" id="jabatan"><option value="Ketua">Ketua</option><option value="Wakil Ketua">Wakil Ketua</option><option value="Anggota">Anggota</option></select></div>
                                                                    </div>
                                                                </div>
                                                       
                                                        </div>
                                                    </div>
                                                    <div class="card mb-3">
                                                        <div class="card-body text-center shadow"><img class="rounded-circle img-fluid mb-3 mt-4" src="assets/img/male_dummy.png" width="160" height="160">
                                                            <div class="text-right mb-3"><input type="file" class="text-size" name="file" onchange="return validasiFiletambah()" id="file_tambah"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm text-size" type="submit">Simpan</button></div>
                            </div>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" role="dialog" tabindex="-1" id="editmodalDewan">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-dialog">
                    <div class="row" id="1">
                        <div class="col-xl-12">
                               <form id="edit_dewan">
                            <div class="text-nowrap modal-content">
                                <div class="modal-header">
                                 
                                    <h5 class="modal-title"><strong>Edit Data Anggota Dewan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                                <div class="modal-body text-size">
                                    <div class="row mb-3">
                                        <div class="col-lg-8 col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="card shadow">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Pribadi Anggota Dewan</p>
                                                        </div>
                                                        <div class="card-body">
                                                            <div id="pesan_edit"></div>
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="first_name"><strong>Nama Depan</strong></label>
                                                                             <input type="hidden" name="id" class="id">
                                                                               <input type="hidden" name="id_user" class="id_user">
                                                                            <input class="form-control form-control-sm text-size first_name" type="text" placeholder="Isi Nama Depan..." name="namaDepan"></div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="last_name"><strong>Nama Belakang</strong></label><input class="form-control form-control-sm text-size last_name" type="text" placeholder="Isi Nama Belakang..." name="namaBelakang"></div>
                                                                    </div>
                                                                </div>
                                                                <!--
                                                                <div class="form-group"><label for="address"><strong>Alamat</strong></label><input class="form-control text-size alamat" type="text" placeholder="Isi Alamat..." name="alamat"></div>

                                                            -->
                                                             <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="first_name"><strong>Gelar</strong></label><input class="form-control form-control-sm text-size gelar" type="text" placeholder="Isi Gelar" name="gelar"></div>
                                                                    </div>

                                                                    <div class="col">

                                                                    <label for="address"><strong>Alamat</strong></label><input class="form-control text-size alamat" type="text" placeholder="Isi Alamat..." name="alamat"></div>
                                                                </div>
                                                          
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card shadow mb-3">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Login Anggota Dewan</p>
                                                        </div>
                                                        <div class="card-body">
                                                                <!--
                                                                <div class="form-row">
                                                                -->
                                                                    <!--
                                                                    <div class="col-xl-6">

                                                                    -->
                                                                        <div class="form-group"><label for="email"><strong>Alamat Email</strong></label><input class="form-control form-control-sm text-size email" type="email" placeholder="user@example.com" name="email"></div>
                                                                        <!--
                                                                    </div>
                                                                
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label for="email"><strong>Level</strong></label><select class="form-control form-control-sm text-size level chosen-select" name="levelAkses" multiple="">
                                                                         <?php foreach($level as $lev):?>
                                                                             <option value="<?php echo $lev->id; ?>"><?php echo $lev->name; ?></option>
                                                                         <?php endforeach; ?>
                                                                        </select></div>
                                                                    </div>
                                                                -->
                                                                <!--
                                                                </div>
                                                            -->
                                                                <div class="form-row">
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="first_name"><strong>Password</strong></label><input class="form-control form-control-sm text-size" type="password" placeholder="Isi Password (Jika akan ganti password)..." name="password"></div>
                                                                    </div>
                                                                    <div class="col">
                                                                        <div class="form-group"><label for="last_name"><strong>Password (Masukkan Lagi)</strong></label><input class="form-control form-control-sm text-size" type="password" placeholder="Isi Password Lagi (Jika akan ganti password)" name="konfirmPassword"></div>
                                                                    </div>
                                                                </div>
                                                         
                                                        </div>
                                                    </div>
                                                    <div class="card shadow mb-3">
                                                        <div class="card-header py-3">
                                                            <p class="text-primary m-0 font-weight-bold">Data Fraksi, Daerah Pemilihan &amp; Jabatan</p>
                                                        </div>
                                                        <div class="card-body">
                                                           
                                                                <div class="form-row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="username"><strong>Fraksi</strong></label><select class="form-control form-control-sm text-size id_fraksi" name="fraksi"> <?php foreach($fraksi as $row):?>
                                                                                   <option value="<?php echo $row->id; ?>"><?php echo $row->fraksi; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select></div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="email"><strong>Daerah Pemilihan</strong></label><select class="form-control form-control-sm text-size id_dapil" name="dapil">
                                                                            
                                                                            <?php foreach($dapil as $dap):?>
                                                                                  <option value="<?php echo $dap->id; ?>"><?php echo $dap->daerah_pemilihan; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select></div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label for="email"><strong>Jabatan</strong></label><select class="form-control form-control-sm text-size jabatan" name="jabatan"><option value="undefined" selected="">Pilh Jabatan...</option><option value="Ketua">Ketua</option><option value="Wakil Ketua">Wakil Ketua</option><option value="Anggota">Anggota</option></select></div>
                                                                    </div>
                                                                </div>
                                                        
                                                        </div>
                                                    </div>
                                                    <div class="card mb-3">
                                                        <div class="card-body text-center shadow">
                                                            Isi jika akan ganti foto<img class="rounded-circle img-fluid mb-3 mt-4" src="assets/img/male_dummy.png" width="160" height="160">
                                                            <div class="text-right mb-3"><input type="file" class="text-size" name="file" onchange="return validasiFile()" id="filess"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer"><button class="btn btn-light btn-sm border rounded-0 text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-primary btn-sm text-size" type="submit">Simpan</button></div>
                            </div>
                        </div>
                    
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" role="dialog" tabindex="-1" id="hapusmodalDewan">
        <div class="modal-dialog" role="document">
              <form id="hapus_dewan">
            <div class="modal-content">
                <div class="modal-header">
                  
                    <h5 class="modal-title"><strong>Hapus Dewan</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                    <input type="hidden" name="id" class="id">
                    <input type="hidden" name="id_user" class="id_user">
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit" id="submit_hapus_dewan">Hapus!</button></div>
            </div>
        </div>
    </form>
    </div>


     <div class="modal fade" role="dialog" tabindex="-1" id="editmodalDewanLevel">
        <div class="modal-dialog" role="document">
              
            <div class="modal-content">
                <div class="modal-header">
                  
                    <h5 class="modal-title"><strong>Edit Level</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                    <div class="modal-body">
                <div id="resultt">
                    
                </div>

        </div>
   
    </div>
<script src="<?php echo base_url(); ?>assets/plugins/js/chosen/chosen.jquery.js"></script>
<script type="text/javascript">
	
	
    $(document).ready(function(){
 
        $('#submit').submit(function(e){
          
            var namaDepan=document.forms["submit"]["namaDepan"].value;
            var namaBelakang=document.forms["submit"]["namaBelakang"].value;
            var gelar=document.forms["submit"]["gelar"].value;
            var alamat=document.forms["submit"]["alamat"].value;
            var email=document.forms["submit"]["email"].value;
            var level=document.forms["submit"]["level"].value;
            var password=document.forms["submit"]["password"].value;
            var konfirmPassword=document.forms["submit"]["konfirmPassword"].value;

            var fraksi=document.forms["submit"]["fraksi"].value;
            var dapil=document.forms["submit"]["dapil"].value;
            var jabatan=document.forms["submit"]["jabatan"].value;

            if (namaDepan==null || namaDepan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama depan tidak boleh kosong!"
            });
          return false;
          }else if(namaBelakang==null || namaBelakang==""){
              swal({
                title: "Peringatan!",
                text: "Nama Belakang tidak boleh kosong!"
            });
          return false;
                
         

           }else if(level==null || level==""){
                swal({
                title: "Peringatan!",
                text: "Level tidak boleh kosong!"
            });
          return false;

      }else if(password==null || password==""){
                swal({
                title: "Peringatan!",
                text: "Password tidak boleh kosong!"
            });
          return false;


           }else if(konfirmPassword==null || konfirmPassword==""){
                swal({
                title: "Peringatan!",
                text: "Konfirmasi Password tidak boleh kosong!"
            });
          return false;

          }else if(password !=konfirmPassword){
                swal({
                title: "Peringatan!",
                text: "Password dan Konfirmasi Password harus sama!"
            });
          return false;

           }else if(fraksi==null || fraksi==""){
                swal({
                title: "Peringatan!",
                text: "Fraksi tidak boleh kosong!"
            });
          return false;

           }else if(dapil==null || dapil==""){
                swal({
                title: "Peringatan!",
                text: "Daerah Pemilihan tidak boleh kosong!"
            });
          return false;

           }else if(jabatan==null || jabatan==""){
                swal({
                title: "Peringatan!",
                text: "Jabatan tidak boleh kosong!"
            });
          return false;

          
          }else{



            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>Master/do_upload',
                   
                     type:"post",
                     dataType:'json',
                     data:new FormData(this),

                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(hasil){
                      
                            if(hasil.pesan==""){
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil ditambah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dewan");
                   
               }}
                 });
            }});
         
 
    });
     

     $('.chosen').chosen();
</script>

<script type="text/javascript">
    $(document).ready(function(){
 
        $('#edit_dewan').submit(function(e){
    var namaDepan=document.forms["edit_dewan"]["namaDepan"].value;
            var namaBelakang=document.forms["edit_dewan"]["namaBelakang"].value;
            var gelar=document.forms["edit_dewan"]["gelar"].value;
            var alamat=document.forms["edit_dewan"]["alamat"].value;
            var email=document.forms["edit_dewan"]["email"].value;
          
            var password=document.forms["edit_dewan"]["password"].value;
            var konfirmPassword=document.forms["edit_dewan"]["konfirmPassword"].value;

            var fraksi=document.forms["edit_dewan"]["fraksi"].value;
            var dapil=document.forms["edit_dewan"]["dapil"].value;
            var jabatan=document.forms["edit_dewan"]["jabatan"].value;

            if (namaDepan==null || namaDepan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama depan tidak boleh kosong!"
            });
          return false;
          }else if(namaBelakang==null || namaBelakang==""){
              swal({
                title: "Peringatan!",
                text: "Nama Belakang tidak boleh kosong!"
            });
          return false;
            
          }else if(password !=konfirmPassword){
                swal({
                title: "Peringatan!",
                text: "Password dan Konfirmasi Password harus sama!"
            });
          return false;

           }else if(fraksi==null || fraksi==""){
                swal({
                title: "Peringatan!",
                text: "Fraksi tidak boleh kosong!"
            });
          return false;

           }else if(dapil==null || dapil==""){
                swal({
                title: "Peringatan!",
                text: "Daerah Pemilihan tidak boleh kosong!"
            });
          return false;

           }else if(jabatan==null || jabatan==""){
                swal({
                title: "Peringatan!",
                text: "Jabatan tidak boleh kosong!"
            });
          return false;
      }else{
          
            e.preventDefault(); 
                 $.ajax({
                     url:'<?php echo base_url();?>Master/edit_dewan',
                   
                     type:"post",
                     dataType:'json',
                     data:new FormData(this),

                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,
                      success: function(hasil){

                           $("#pesan_edit").html(hasil.pesan);
                           if(hasil.pesan==""){
                            $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil diubah');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dewan");
                   }
               }
                 });
            }});
         
 
    });
     
</script>
<script>
    $(document).on( "click", '.edit_button',function(e) {
    var id= $(this).data('id');
    var id_user = $(this).data('id_user');  
    var id_fraksi = $(this).data('id_fraksi');
    var id_dapil = $(this).data('id_dapil');
    var jabatan = $(this).data('jabatan');
    var level = $(this).data('level');
    var foto = $(this).data('foto');
    var alamat = $(this).data('alamat');
    var first_name = $(this).data('first_name');
    var last_name = $(this).data('last_name');
    var email = $(this).data('email');
    var gelar = $(this).data('gelar');
     
    $(".id").val(id);
    $(".id_user").val(id_user);
    $(".id_fraksi").val(id_fraksi);
    $(".id_dapil").val(id_dapil);
    $(".jabatan").val(jabatan);
    $(".level").val(level);
    $(".foto").val(foto);
    $(".alamat").val(alamat);
    $(".first_name").val(first_name); 
    $(".last_name").val(last_name);
    $(".email").val(email);
    $(".gelar").val(gelar);
  
});



$(document).on( "click", '.hapus_button',function(e) {
    var id= $(this).data('id');
    var id_user= $(this).data('id_user');

    $(".id").val(id);
    $(".id_user").val(id_user);
 

});
</script>

<script>

   $(document).ready(function() {
      $("#submit_hapus_dewan").click(function(){
                         $.ajax({

                           
                           url : "<?php echo base_url(); ?>Master/delete_dewan", 
                           type: "POST", 
                           data: $("#hapus_dewan").serialize(),
                             success: function(data) {
                             
                             $("[data-dismiss=modal]").trigger({ type: "click" });
                           
                             $("#dapil").val('');
                             /*
                             reply_click("dapil").trigger({ type: "click" });
                             */
                             alert('Data berhasil dihapus');
                              $('#result').load("<?php echo base_url() ?>Master/detail_master/dewan");
                            }
                         });
                       
                 return false;
                     });


                  });


 $(document).on("click", ".editlevel_button", function () {
        var myId = $(this).data('id');
        


        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>Master/edit_level',
            data: { ids: myId},
            success: function(response) {
                $('#resultt').html(response);
            }
        });
    });  
</script>
<script> $('.chosen-select').chosen({width: "100%"}); </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
 function validasiFile(){
    var inputFile = document.getElementById('filess');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.png|\.jpeg)$/i;
    if(!ekstensiOk.exec(pathFile)){
        swal({
                title: "Peringatan!",
                text: "Silakan upload file .jpg, .png, .jpeg!"
            });
          
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
 function validasiFiletambah(){
    var inputFile = document.getElementById('file_tambah');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.jpg|\.png|\.jpeg)$/i;
    if(!ekstensiOk.exec(pathFile)){
        swal({
                title: "Peringatan!",
                text: "Silakan upload file .jpg, .png, .jpeg!"
            });
          
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
    $(document).ready(function(){
      $("#myInput2").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
            
</script>

