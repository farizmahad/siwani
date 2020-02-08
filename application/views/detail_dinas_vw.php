<div class="modal-body">
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>Dewan</th>
                                    <th style="text-align: left;">Perihal</th>
                                    <th style="text-align: left;">Asal</th>
                                    <th style="text-align: left;">Lokasi Tujuan</th>
                                    <th style="text-align: left;">No. Surat Perintah</th>
                                    <th style="text-align: left;">Tgl. berangkat</th>
                                    <th style="text-align: left;">Tgl. kembali</th>
                                    <th>Unduh</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                
                                $no=1;
                                foreach($detail_dinas as $row):?>
                                <tr>
                                    <td class="text-center"><?php echo $no++; ?></td>
                                    <td class="text-center"><img class="rounded-circle mr-2" width="30" height="30" src="assets/img/avatars/avatar1.jpeg"><a href="detail_anggota_dewan.html"><?php echo $row->first_name; ?> <?php echo $row->last_name; ?> <?php echo $row->gelar; ?>&nbsp;</a></td>
                                    <td class="text-left"><?php echo $row->perihal; ?></td>
                                    <td><?php echo $row->asal; ?></td>
                                    <td><?php echo $row->tujuan_lokasi; ?></td>
                                    <td><?php echo $row->surat_perintah; ?></td>
                                     <td><?php echo $row->tgl_berangkat; ?></td>
                                     <td><?php echo $row->tgl_kembali; ?></td>
                                    <td align="center">
                                         <a href="<?php echo base_url(); ?>assets/perjalanan_dinas/<?php echo $row->file; ?>" download ="<?php echo base_url(); ?>assets/perjalanan_dinas/<?php echo $row->file; ?>"> Unduh</a>

                                    </td>
                                   
                                </tr>
                            <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                    <!--
                    <?php foreach($detail_usulan as $us):?>
                    <form class="text-size" autocomplete="off">
                        <div class="form-row">
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Reses Ke- ...</strong></label>

                                  <?php


                                        if($us->reses=="12"){
                                            $tulis_reses="Reses 1";
                                        }elseif($us->reses=="13"){
                                             $tulis_reses="Reses 2";
                                        }elseif($us->reses=="14"){
                                            $tulis_reses="Reses 3";
                                        }
                                  ?>
                                       <input class="form-control form-control-sm text-size" type="text" id="myInput" name="anggotaDewan" placeholder="Isi Nama Anggota Dewan..." readonly="" value="<?php echo $tulis_reses; ?>">
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama Anggota Dewan</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="myInput" name="anggotaDewan" placeholder="Isi Nama Anggota Dewan..." readonly="" value="<?php echo $row->first_name; ?> <?php echo $row->last_name; ?>"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Fraksi</strong></label>
                                    <div class="autocomplete"><input class="form-control form-control-sm text-size" type="text" id="myInput2" name="anggotaDewan" placeholder="Isi Fraksi..." readonly="" value="<?php echo $row->fraksi; ?>"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xl-6">
                                <div class="form-group"><label for="username"><strong>Dapil</strong></label><input class="form-control form-control-sm" type="text" readonly="" placeholder="Daerah Pemilihan..." value="<?php echo $row->daerah_pemilihan; ?>"></div>
                            </div>
                            <div class="col-xl-6">
                                <div class="form-group"><label for="username"><strong>Tanggal</strong></label><input class="form-control form-control-sm text-size" type="date" name="tgl" readonly="" value="<?php echo $row->tanggal; ?>"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Tempat</strong></label><input class="form-control form-control-sm text-size" type="text" name="tempat" placeholder="Isi Tempat..." readonly="" value="<?php echo $row->tempat; ?>"></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Nama</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Nama..." rows="2" name="nama" readonly=""><?php echo $row->nama; ?></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Alamat</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Alamat..." rows="2" name="alamat" readonly=""><?php echo $row->alamat; ?></textarea></div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group"><label for="username"><strong>Usulan</strong></label><textarea class="form-control form-control-sm text-size" placeholder="Isi Usulan..." rows="5" readonly=""><?php echo $row->usulan; ?></textarea></div>
                            </div>
                            <div class="col">
                                <div class="form-group"><label for="Biaya"><strong>Biaya</strong></label><input class="form-control form-control-sm text-size" type="text" min="0" placeholder="Masukan Biaya..." value="<?php echo number_format($row->biaya); ?>" readonly></div>
                            </div>
                        </div>
                        
                        <?php endforeach;?>
                        -->

                        