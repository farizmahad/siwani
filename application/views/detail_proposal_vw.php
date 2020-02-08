<?php foreach($detail_proposal as $sow):?>
<div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Masa Reses</strong></td>
                                    <td>Reses <?php echo $sow->reses; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Nama Dewan</strong></td>
                                    <td><?php echo $sow->first_name; ?> <?php echo $sow->last_name; ?> <?php echo $sow->gelar; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Fraksi</strong></td>
                                    <td><?php echo $sow->fraksi; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Daerah Pemilihan (Dapil)</strong></td>
                                    <td><?php echo $sow->daerah_pemilihan; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Tanggal</strong></td>
                                    <td><?php echo $sow->tanggal; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Jumlah Konstituen</strong></td>
                                    <td><?php echo $sow->jumlah_konsituen; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="modal-title text-primary mt-4"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Snack</strong></td>
                                    <td><?php echo $sow->snack; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Tenda</strong></td>
                                    <td><?php echo $sow->tenda; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Spanduk</strong></td>
                                    <td><?php echo $sow->spanduk; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Sound System</strong></td>
                                    <td><?php echo $sow->sound_system; ?></td>
                                </tr>
                                <!--
                                <tr>
                                    <td class="text-left"><strong>Kursi</strong></td>
                                    <td>150 Buah</td>
                                </tr>
                            -->
                                <tr>
                                    <td class="text-left"><strong>Makanan</strong></td>
                                    <td><?php echo $sow->makanan; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Minuman</strong></td>
                                    <td><?php echo $sow->minuman; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <?php if($hasil) { ?>
                    <h5 class="modal-title text-primary mt-4"><strong>Hasil Reses</strong></h5>
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Nama Pengusul</strong></td>
                                    <td><?php echo $sow->nama; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Alamat Pengusul</strong></td>
                                    <td><?php echo $sow->alamat; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Bidang</strong></td>
                                    <td><?php echo $sow->spanduk; ?></td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Aspirasi</strong></td>
                                    <td><?php echo $sow->kesimpulan; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php  } ?>
                    <?php endforeach; ?>