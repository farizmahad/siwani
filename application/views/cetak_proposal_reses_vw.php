 <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Cetak Data Proposal Reses</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Usulan/cetak_proposal_reses"><span><strong>Cetak Proposal Reses</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <div>
                                    <form method="get" action="<?php echo base_url(); ?>Usulan/cetak_proposal_reses" id="myform">
                                    <div class="row">
                                        <div class="col-xl-2"><select class="custom-select custom-select-sm text-size mr-2" name="pilihan" id="pilihan"><option value="">Cetak berdasarkan</option>
                                            <option value="dewan">Anggota Dewan</option>
                                            <option value="reses1">Reses 1</option>
                                            <option value="reses2">Reses 2</option>
                                            <option value="reses3">Reses 3</option>
                                        <option value="tahun">Tahun</option>
                                        </select></div>
                                        <div
                                            class="col-xl-2"><input class="form-control-sm text-size mr-2" type="text" placeholder="Isi Parameter..." name="parameter" id="parameter"></div>
                                    <div class="col-xl-1"><button class="btn btn-primary btn-block btn-sm text-size" type="submit">Go!</button></div>

                                    </form>

                                    <div class="col-xl-2">
                                       <a href="<?php echo base_url(); ?>Export/export_proposal_reses?pilihan=<?php echo $pilihan; ?>&parameter=<?php echo $parameter; ?>" type="button" class="btn btn-primary btn-block btn-sm text-size">Unduh </a>
									   </div>
                                </div>

                            </div>
                        </div>

                        <div class="card-body">
                            <div>
                                <div class="row justify-content-end mb-2">
                                    <div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-3"><input class="form-control-sm form-control text-size" type="text" id="myInput3" placeholder="Cari..."></div>
                                </div>
                            </div>

                            <?php
                            if($pilihan || $parameter){ ?>

                                <?php if(count($proposal)>0){ ?>
                                        Proposal dengan filter <?php echo $pilihan; ?> dan <?php echo $parameter; ?>

                             <?php   }else{ ?>
                                     Data tidak ditemukan 

                              <?php } ?>

                            <?php  }
                            ?>
                            <div class="table-responsive text-size" style="font-size: 13px;">
                                <table class="table example2" id="myTable">
                                    <thead class="text-center">
                                        <tr>
                                            <th><strong>No.</strong></th>
                                            <th><strong>Reses</strong></th>
                                            <th><strong>Nama Anggota DPRD</strong></th>
                                            <th><strong>Fraksi</strong></th>
                                            <th><strong>Dapil</strong></th>
                                            <th><strong>Hari, Tanggal</strong></th>
                                            <th><strong>Tempat</strong></th>
                                            <th><strong>Waktu (WIB)</strong></th>
                                            <th><strong>Jumlah Konstituen</strong></th>
                                            <th><strong>Snack</strong></th>
                                            <th><strong>Nasi Box</strong></th>
                                            <th><strong>Kursi</strong></th>
                                            <th><strong>Spanduk</strong></th>
                                            <th><strong>Tenda</strong></th>
                                            <th><strong>Sound</strong></th>
                                            <th><strong>Pendamping</strong></th>
                                            <!--
                                            <th>Aksi</th>
                                            --->
                                        </tr>
                                    </thead>
                                    <tbody id="myTable">
                                        <?php
                                         $count_proposal=count($proposal);
                                         if($count_proposal>0){
                                            $no=1;
                                         foreach($proposal as $row):?>
                                        <tr>
                                            <td class="text-nowrap text-center"><?php echo $no++; ?></td>
                                            <td class="text-nowrap text-left">Reses <?php echo $row->reses; ?><br></td>
                                            <td class="text-nowrap">
                                               <?php if($row->foto){ ?>
                                                <img class="rounded-circle mr-2" width="30" height="30" src="<?php echo base_url(); ?>assets/images/<?php echo $row->foto; ?>">
                                            <?php } ?>

                                               <!-- <a href="detail_anggota_dewan.html"><span style="text-decoration: underline;">--><?php echo $row->nama_lengkap; ?><!--</span></a></td>-->
                                            <td class="text-nowrap"><?php echo $row->fraksi;?><br></td>
                                            <td><?php echo $row->daerah_pemilihan; ?></td>
                                            <td><?php echo $row->hari; ?>, <?php echo $row->tanggal; ?></td>
                                            <td><?php echo $row->tempat; ?></td>
                                            <td><?php echo $row->waktu; ?></td>
                                            <td><?php echo $row->jumlah_konsituen; ?></td>
                                            <td><?php echo $row->snack; ?></td>
                                             <td><?php echo $row->makanan; ?></td>
                                             <td><?php echo $row->kursi; ?></td>

                                              <td>
                                                <?php if($row->spanduk) { ?>
                                                <?php echo $row->spanduk; ?>
                                                <?php }else{ ?>

                                                    -
                                                <?php } ?>
                                                </td>
                                              <td>
                                                 <?php if($row->tenda){ ?>
                                                 <?php echo $row->tenda; ?>
                                                 <?php }else{ ?>
                                                    -
                                                <?php } ?>
                                                 </td>
                                              <td>
                                                <?php if($row->sound_system){ ?>
                                                <?php echo $row->sound_system; ?>
                                                <?php }else{ ?>
                                                    -
                                                <?php } ?>
                                                </td>

                                            <td class="text-center">
                                                <?php $id_pendamping=$row->id_pendamping;
                                                

                                         if($id_pendamping !=0) { ?>
                                            <?php 
                                       $users=$this->Usulan_model->tampil_users($id_pendamping);
                                       foreach($users as $us){
                                           $nama=$us->nama;
                                           $nip=$us->nip;
                                           $jabatan=$us->jabatan;
                                           
                                       }
                                     ?>
                                     <?php echo $nama; ?>
                                 <?php }else{ ?>
                                            -
                                <?php } ?>
                                            </td>
                                           
                                            <!--
                                            <td class="text-nowrap text-center">&nbsp;
                                                <a href="<?php echo base_url(); ?>Export/cetak_1/<?php echo $row->id; ?>">
                                                <button class="btn btn-primary btn-sm text-size" type="button"><i class="fas fa-print"></i></button></a>&nbsp; </td>
                                            -->
                                        </tr>
                                    <?php endforeach; ?>
                                <?php }else{ ?>
                                    <tr>
                                        <td colspan="16" align="center">Tidak ada data!</td>
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
                        </div>
                    </div>
                </div>
            </div>
            <script>
  
    function validasi()
    {
       var pilihan=document.forms["myform"]["pilihan"].value;
        if (pilihan==null || pilihan=="")
          {
           swal({
                title: "Peringatan!",
                text: "Cetak berdasarkan harus diisi!"
            });
          return false;
          };

       var parameter=document.forms["myform"]["parameter"].value;
        if (parameter==null || parameter=="")
          {
           swal({
                title: "Peringatan!",
                text: "Isian harus diisi!"
            });
          return false;
          };


      


     }
</script>
<script>
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
$(function () {
    $('.example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": false,
        "autoWidth": false,
       
        "scrollX": true
        
    });
});
</script>


