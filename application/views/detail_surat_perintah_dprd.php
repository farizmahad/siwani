 <div class="container-fluid">
                <h4 class="text-dark mb-2"><strong>Daftar Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span><strong>Daftar Perjalanan Dinas</strong></span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas?parameter=<?php echo $parameter; ?>&id=<?php echo $row->id; ?>"><span><strong>Detail Perjalanan Dinas</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div>
										<a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas?parameter=<?php echo $parameter;?>"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Perjalanan Dinas</a>
										<a class="btn btn-success btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Exportpdf/laporan_spt?parameter=<?php echo $parameter; ?>&id=<?php echo $id; ?>"><i class="fas fa-file-export"></i>&nbsp;Export Jadi PDF</a>
									</div>
                                    <div>
                                        <div class="form-row mt-4">
                                            <div class="col-xl-2">
                                                <div class="text-center"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png" style="width: 100px;"></div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <h2 class="text-center" style="color: rgb(0,0,0);"><strong>DEWAN PERWAKILAN RAKYAT DAERAH</strong><br><strong>KOTA CIMAHI</strong><br></h2>
                                                </div>
                                                <div>
                                                    <h6 class="text-center" style="color: rgb(0,0,0);">Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php foreach($dinas as $row):?>
                                    <div class="text-center">
                                        <div>
                                            <?php $perihal=$row->perihal; ?>
                                            <hr style="height: 2px;">
                                        </div>
                                        <div class="form-row">
                                            <div class="col-xl-2"></div>
                                            <div class="col">
                                                <h5 class="text-dark"><strong><span style="text-decoration: underline;">SURAT TUGAS</span></strong><br><strong>Nomor: <?php echo $row->surat_perintah; ?></strong></h5>
                                                <h6 class="text-dark">Pimpinan Dewan Perwakilan Rakyat Daerah Kota Cimahi dengan ini:</h6>
                                                <h6 class="text-dark"><strong>MENUGASKAN:</strong></h6>
                                            </div>
                                        </div>
                                        <h6 class="text-left text-dark"><strong>Kepada: Pimpinan dan Anggota DPRD Kota Cimahi, yang terdiri dari:</strong></h6>
                                    </div>
                                </div>
                                <div class="card-body border-dark text-size">
                                    <div class="form-row">
                                        <div class="col-xl-12">
                                            <div class="border-dark">
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary">Pimpinan:</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $no=1;
															$count_atasan=count($atasan);
															if($count_atasan > 0){
                                                            foreach($atasan as $at):
                                                             $id_atasan[]=$at->id_userr;

                                                                ?>
                                                            <tr>
                                                                <td align="center"><?php echo $no++; ?></td>
                                                                <td><?php echo $at->nama_lengkap; ?></td>
                                                                <td><strong><?php echo $at->jabatan; ?></strong></td>
                                                            </tr>
															

                                                        <?php endforeach;?>
															<?php }else{ ?>
															<tr>
														      <td align="center">
															           Tidak ada pimpinan!
															  </td>
															</tr>
															
															
															<?php } ?>

                                                          <!--
                                                            <tr>
                                                                <td>2</td>
                                                                <td>H. Bambang Purnomo</td>
                                                                <td><strong>Wakil Ketua</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>Wahyu Widyatmoko</td>
                                                                <td><strong>Wakil Ketua</strong></td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>H. Agus Solihin</td>
                                                                <td><strong>Wakil Ketua</strong></td>
                                                            </tr>
                                                        -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary">Anggota:</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $users_dinas=$this->Dinas_model->tampil_users_dinas_spt($id,$id_atasan);
                                                            $count_users_dinas=count($users_dinas);  


                                                            if($count_users_dinas>0){

                                                            $no=1;
                                                            foreach($users_dinas as $dow):?>
                                                            <tr>
                                                                <td align="center"><?php echo $no++; ?></td>
                                                                <td><?php echo $dow->nama_lengkap; ?></td>
                                                                <!--
                                                                <td>9</td>
                                                                <td>Ir. Abdul Mahfuri</td>
                                                            -->
                                                            </tr>
                                                        <?php endforeach; ?>
                                                    <?php }else{ ?>
                                                          <tr>
                                                              <td colspan="2" align="center">Tidak ada anggota</td>
                                                          </tr>
                                                    <?php } ?>
                                                            <!--
                                                            <tr>
                                                                <td>6</td>
                                                                <td>Enil Fahdaliza</td>
                                                                <td>10</td>
                                                                <td>Dra. Aida Cakrawati</td>
                                                            </tr>
                                                            <tr>
                                                                <td>7</td>
                                                                <td>H. Amrulah</td>
                                                                <td>11</td>
                                                                <td>Ahmad Dahlan</td>
                                                            </tr>
                                                            <tr>
                                                                <td>8</td>
                                                                <td>H. Nabsun</td>
                                                                <td>12</td>
                                                                <td>Euis Romaya</td>
                                                            </tr>
                                                        -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary">Untuk:</th>
                                                                <th class="text-justify text-primary">
                                                                    <?php echo $perihal; ?>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary"></th>
                                                                <th class="text-justify text-dark">Demikian untuk dilaksanakan sebagaimana mestinya.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    <?php endforeach; ?>
                    </div>
                </div>