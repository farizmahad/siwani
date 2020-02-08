
            <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Cetak Rekap Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="index.html"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="daftar_proposal_masa_reses.html"><span><strong>Cetak Perjalanan Dinas</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card shadow">
                            <div class="card-header py-3">
                                <form method="GET" action="<?php echo base_url(); ?>Perjalanan_dinas/filter_dinas">
                                    <div>
                                        <div class="form-row">
                                            <div class="col-xl-3 col-lg-3 col-md-3 mb-1">
                                                <div>
													<select class="form-control form-control-sm text-size" name="pilihan">
                                                        <!--
														<option value="tanggal">Tanggal</option>
                                                    -->
                                                        <option value="semua">Semua</option>
														<option value="udara">Transportasi Udara</option>
														<option value="darat">Transportasi Darat</option>

                                                        


													</select>
												</div>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-3 mb-1">
                                                <div><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Parameter(Nama Maskapai/Nama Rental/Jenis User)" name="parameter"></div>
                                            </div>
                                            <div class="col-xl-2 col-lg-2 col-md-3 mb-1">
                                                <div><button class="btn btn-primary btn-block btn-sm text-size" type="submit"><i class="fas fa-search"></i>&nbsp;Go!</button></div>
                                            </div>
                                            <div class="col-xl-3 col-lg-3 col-md-3">
                                                <div><a href="<?php echo base_url(); ?>Perjalanan_dinas/rekapitulasi_dinas?pilihan=<?php echo $pilihan;?>&parameter=<?php echo $parameter; ?>"><button class="btn btn-success btn-block btn-sm text-size" type="button"><i class="fas fa-download"></i>&nbsp;Unduh</button></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="card-body">
                                <div class="mb-2">
                                    <div class="row justify-content-end">
                                        <div class="col-12 col-sm-7 col-md-6 col-lg-4 col-xl-3"><input class="form-control-sm form-control text-size" type="text" id="myInput2" placeholder="Cari..."></div>
                                    </div>
                                </div>
                                <div class="table-responsive text-size" style="font-size: 13px;">
                                    <table class="table">
                                        <thead class="text-center">
                                            <tr>
                                                <th><strong>No.</strong></th>
                                                <th><strong>No. Surat</strong></th>
                                                <th><strong>Tanggal</strong></th>
                                                <th><strong>Jenis Transportasi</strong></th>
                                                 <th><strong>User</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php
                                             $no=1;
                                             foreach($dinas as $din):?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td class="text-left"><?php echo $din->surat_perintah; ?><br></td>
                                                <td class="text-left"><?php echo $din->tgl_input; ?></span></td>
                                                <td class="text-center">
                                                   <?php if($din->jenis_kendaraan=="1"){ ?>
                                                               Darat
                                                  <?php }elseif($din->jenis_kendaraan=="2"){ ?>

                                                           Udara
                                                   <?php } ?>
                                                </span></td>

                                                <td>
                                                    <?php if($din->status_peserta_dinas=="1"){ ?>
                                                              Anggota DPRD
                                                    <?php }elseif($din->status_peserta_dinas=="2"){ ?>
                                                              Anggota Setwan
                                                    <?php } ?>
                                                </td>
                                                
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>

                                <!--
                                <div class="row">
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
                                </div>
                            -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card shadow collapse">
                    <div class="card-header py-3">
                        <div><a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="form_proposal_masa_reses.html"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Usulan</a><a class="btn btn-success btn-sm text-size" role="button"
                                href="pembidangan.html"><i class="fas fa-plus-circle"></i>&nbsp;Isi Bidang</a></div>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="col-md-6 col-xl-2 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length text-size" aria-controls="dataTable"><label>Show&nbsp;<select class="form-control form-control-sm form-control form-control-sm custom-select custom-select-sm" style="font-size: 14px;"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6 col-xl-3 text-nowrap"><select class="form-control form-control-sm"><option value="undefined" selected="">Pilih Reses...</option><option value="1">Reses 1</option><option value="2">Reses 2</option><option value="3">Reses 3</option></select></div>
                                <div
                                    class="col-md-6 col-xl-7">
                                    <div class="text-md-right text-size"><label><input class="form-control form-control-sm" type="text" id="myInput" placeholder="Search..."></label></div>
                            </div>
                    </div>
                    </form>
                    <div class="table-responsive table mt-1" role="grid" style="font-size: 13px;">
                        <table class="table table-hover dataTable my-0" id="dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Reses</th>
                                    <th>Dewan</th>
                                    <th>Usulan</th>
                                    <th>Bidang</th>
                                    <th>Biaya</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="myTable">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">1</td>
                                    <td class="text-center"><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><a href="detail_anggota_dewan.html">Acep Jamaludin, M.Hum.&nbsp;</a></td>
                                    <td class="text-left">Pantau distribusi Gas Subsidi secara merata 0 Kegiatan RW 28/RT 01 Melong</td>
                                    <td>BIDANG KESEJARHTERAAN RAKYAT</td>
                                    <td>Rp. 500.000</td>
                                    <td class="text-nowrap text-center">&nbsp;<button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#lihatModal"><i class="fas fa-search"></i></button>&nbsp;<button class="btn btn-success btn-sm text-size" type="button"
                                            data-toggle="modal" data-target="#editModal"><i class="far fa-edit"></i></button><button class="btn btn-danger btn-sm text-size" type="button" data-target="#hapusModal" data-toggle="modal"><i class="far fa-trash-alt"></i></button>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center"><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><a href="detail_anggota_dewan.html">Acep Jamaludin, M.Hum.&nbsp;</a></td>
                                    <td class="text-left">Pantau distribusi Gas Subsidi secara merata 0 Kegiatan RW 28/RT 01 Melong</td>
                                    <td>BIDANG KESEJARHTERAAN RAKYAT</td>
                                    <td>Rp. 500.000</td>
                                    <td class="text-nowrap text-center">&nbsp;<button class="btn btn-primary btn-sm text-size" type="button" data-toggle="modal" data-target="#lihatModal"><i class="fas fa-search"></i></button>&nbsp;<button class="btn btn-success btn-sm text-size" type="button"
                                            data-toggle="modal" data-target="#editModal"><i class="far fa-edit"></i></button><button class="btn btn-danger btn-sm text-size" type="button" data-target="#hapusModal" data-toggle="modal"><i class="far fa-trash-alt"></i></button>&nbsp;</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td class="text-center"><strong>No.</strong></td>
                                    <td class="text-center"><strong>Reses</strong></td>
                                    <td class="text-center"><strong>Dewan</strong></td>
                                    <td class="text-center"><strong>Usulan</strong></td>
                                    <td class="text-center"><strong>Bidang</strong></td>
                                    <td class="text-center"><strong>Biaya</strong></td>
                                    <td class="text-center"><strong>Aksi</strong></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
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
                    </div>
                </div>
            </div>
        </div>
    