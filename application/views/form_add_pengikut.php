
      <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Form Tambah Data Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="index.html"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="daftar_proposal_masa_reses.html"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="form_proposal_masa_reses.html"><span><strong>Form Tambah Data Perjalanan Dinas</strong><br></span></a></li>
                </ol>
                <div class="row no-gutters">
                    <div class="col-md-3 col-lg-3 col-xl-3 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2 mt-1">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                                <h6 class="text-size-heading-dinas2"><strong>No. Surat &amp; uraian dinas</strong></h6>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-forward fa-2x text-success"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-3 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2 mt-1">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>Kendaraan &amp; biaya</strong></h1>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-forward fa-2x text-primary"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col mr-2 mt-1">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>Data Pendamping</strong></h1>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-forward fa-2x text-primary"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-3 col-lg-3 col-xl-3 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-dark py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto mr-1 mt-1">
                                            <div class="text-uppercase text-dark font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>3.</strong></h1>
                                            </div>
                                        </div>
                                        <div class="col mr-2 mt-1">
                                            <div class="text-uppercase text-dark font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>Selesai</strong><br></h1>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-check-circle fa-2x text-dark"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card shadow">
                    <div class="card-header">
                        <div>
                            <p><strong>Isi Nama Pengikut, Tanggal Lahir &amp; Keterangan</strong></p>
                        </div>
                    </div>
                    <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/save_pengikut">
                    <div class="card-body">
                        <div class="table-responsive table mt-2 text-size" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <tbody>
                                    <tr>
                                         <input type="hidden" name="id_dinas" value="<?php echo $id_dinas; ?>">
                                        <td><input class="form-control-sm form-control text-size" type="text" placeholder="Isi Nama Pengikut..." name="namaPengikut"></td>
                                        <td class="text-center"><input class="form-control-sm form-control text-size" type="date" placeholder="Isi Tanggal Lahir..." name="tglPengikut"></td>
                                        <td class="text-center"><input class="form-control-sm form-control text-size" type="text" placeholder="Isi Keterangan..." name="keteranganPengikut"></td>
                                        <td><button class="btn btn-success btn-block btn-sm" type="submit">Tambah Pengikut</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                  
                        
                        <?php
                               $count_pengikut=count($pengikut);

                        if($count_pengikut > 0){
                        ?>
                        <div class="table-responsive table mt-2 text-size" id="dataTable" role="grid" aria-describedby="dataTable_info">
                            <table class="table dataTable my-0" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Pengikut</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Keterangan</th> 
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($pengikut as $row):?>
                                     <tr>
                                         <td><?php echo $row->nama_pengikut; ?></td>
                                         <td><?php echo $row->tgl_lahir; ?></td>
                                         <td><?php echo $row->keterangan;?></td>
                                         <td align="center">
                                            <button class="btn btn-danger btn-sm text-size hapus_button"
                                                type="button" data-toggle="modal" data-target="#hapusmodalFraksi"
                                                data-id="<?php echo $row->id; ?>"
                                                data-id_dinas="<?php echo $row->id_dinas; ?>"
                                                ><i class="far fa-trash-alt"></i>&nbsp; Hapus</button>&nbsp;
                                         </td>
                                     </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>


</form>
                    
           
                        <div class="row">
                            <div class="col-md-6 align-self-center">
                                <p id="dataTable_info" class="dataTables_info text-size" role="status" aria-live="polite">
                                <a href="<?php echo base_url(); ?>Perjalanan_dinas">
                                <button class="btn btn-primary btn-sm mr-2" type="button">Selesai</button>
                               </a>
                               <a href="<?php echo base_url(); ?>Perjalanan_dinas">
                                <button class="btn btn-warning btn-sm text-dark mr-2" type="button">Lewati</button></p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="modal fade" role="dialog" tabindex="-1" id="hapusmodalFraksi">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/hapus_pengikut">
                <div class="modal-header">
                    <h5 class="modal-title"><strong>Hapus Pengikut</strong></h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body">
                    <p>Anda yakin akan menghapus data ini?</p>
                    <input type="hidden" name="id" class="id">
                    <input type="hidden" name="id_dinas" class="id_dinas">
                </div>
                <div class="modal-footer"><button class="btn btn-light btn-sm text-size" type="button" data-dismiss="modal">Tutup</button><button class="btn btn-danger btn-sm text-size" type="submit">Hapus!</button></div>
            </div>
        </form>
        </div>
    </div>


<script>
     $(document).on( "click", '.hapus_button',function(e) {
    var id= $(this).data('id');
    var id_dinas= $(this).data('id_dinas');
    

    $(".id").val(id);
    $(".id_dinas").val(id_dinas);
 
   
  
});
       
</script>