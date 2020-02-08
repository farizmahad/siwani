<?php foreach($detail_proposal as $sow):?>
<div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Masa Reses</strong></td>
                                    <td>
                                        <?php if($sow->reses){ ?>
                                        Reses <?php echo $sow->reses; ?>
                                    <?php }else{ ?>
                                           -
                                    <?php } ?>
                                            

                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Nama Dewan</strong></td>
                                    <td>
                                        <?php if($sow->nama_lengkap){ ?>
                                        <?php echo $sow->nama_lengkap; ?>
                                        <?php }else{ ?>
                                              -
                                        <?php } ?>
                                            
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Fraksi</strong></td>
                                    <td>
                                        <?php if($sow->fraksi){ ?>
                                        <?php echo $sow->fraksi; ?>
                                            
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Daerah Pemilihan (Dapil)</strong></td>
                                    <td>
                                        <?php if($sow->daerah_pemilihan){ ?>
                                        <?php echo $sow->daerah_pemilihan; ?>
                                        <?php }else{ ?>
                                             -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Hari, Tanggal Pelaksanaan</strong></td>
                                    <td>
                                        <?php if($sow->hari){ ?>
                                        <?php echo $sow->hari; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Tempat</strong></td>
                                    <td>
                                        <?php if($sow->tempat){ ?>
                                        <?php echo $sow->tempat; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Waktu (WIB)</strong></td>
                                    <td>
                                        <?php if($sow->waktu) {?>
                                        <?php echo $sow->waktu; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Jumlah Konstituen</strong></td>
                                    <td> 
                                        <?php if($sow->jumlah_konsituen){?>
                                        <?php echo $sow->jumlah_konsituen; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h5 class="modal-title text-primary mt-4"><strong>Fasilitas yang Dibutuhkan</strong></h5>
                    <div class="table-responsive table-bordered table mt-1" id="dataTable" role="grid" aria-describedby="dataTable_info" style="font-size: 13px;">
                        <table class="table table-bordered table-hover dataTable my-0" id="dataTable">
                            <tbody>
                                <tr>
                                    <td class="text-left"><strong>Snack Box</strong></td>
                                    <td>
                                        <?php if($sow->snack){?>
                                        <?php echo $sow->snack; ?>
                                         <?php }else{ ?>
                                             -
                                        <?php } ?>
                                            
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Nasi Box</strong></td>
                                    <td>
                                        <?php if($sow->makanan){?>
                                        <?php echo $sow->makanan; ?>
                                        <?php }else{ ?>
                                              -
                                        <?php } ?>
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Kursi</strong></td>
                                    <td>
                                        <?php if($sow->kursi){?>
                                        <?php echo $sow->kursi; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Spanduk</strong></td>
                                    <td>
                                        <?php if($sow->spanduk){?>
                                        <?php echo $sow->spanduk; ?>
                                        <?php }else{ ?>
                                              -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Tenda</strong></td>
                                    <td>
                                        <?php if($sow->tenda) { ?>
                                        <?php echo $sow->tenda; ?>
                                            
                                        <?php }else{ ?>
                                               -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Sound System</strong></td>
                                    <td>
                                        <?php if($sow->sound_system){?>
                                        <?php echo $sow->sound_system; ?>
                                        <?php }else{ ?>
                                                 -
                                        <?php } ?>
                                        </td>
                                </tr>
								<tr>
                                    <td class="text-left"><strong>Pendamping</strong></td>
                                    <?php if($sow->id_pendamping){ ?>
                                    <?php $id_pendamping=$sow->id_pendamping;

                                       $users=$this->Usulan_model->tampil_users($id_pendamping);
                                       foreach($users as $us){
                                           $nama=$us->nama;
                                           $nip=$us->nip;
                                           $jabatan=$us->jabatan;
                                           
                                       }
                                     ?>
                                    <?php } ?>
                                    <td>
                                        <?php if($sow->id_pendamping){ ?>
                                        <?php echo $nama;?> | <?php echo $nip; ?> | <?php echo $jabatan; ?>
                                        <?php }else{ ?>  
                                                 -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <!--
                                
                            -->
                                
								
                                <!--
								<tr>
                                    <td class="text-left"><strong>Minuman</strong></td>
                                    <td><?php echo $sow->minuman; ?></td>
                                </tr>
								-->
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
                                    <td>
                                        <?php if($sow->nama){?>
                                        <?php echo $sow->nama; ?>
                                        <?php }else{ ?>
                                              -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Alamat Pengusul</strong></td>
                                    <td>
                                        <?php if($sow->alamat_pengusul){ ?>
                                        <?php echo $sow->alamat_pengusul; ?>
                                        <?php }else{ ?>
                                              -
                                        <?php } ?>
                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Bidang</strong></td>
                                    <td>
                                        <?php if($sow->bidang){?>
                                        <?php echo $sow->bidang; ?>
                                    <?php }else{ ?>
                                          -
                                    <?php } ?>
                                            

                                        </td>
                                </tr>
                                <tr>
                                    <td class="text-left"><strong>Usulan Aspirasi</strong></td>
                                    <td>
                                        <?php if($sow->kesimpulan){?>
                                        <?php echo $sow->kesimpulan; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                            

                                        </td>
                                </tr>
								
								<!-- Tampilan Data Baru: Volume-->
								<tr>
                                    <td class="text-left"><strong>Volume / Ukuran / </strong></td>
                                    <td>
                                        <?php if($sow->volume){?>
                                        <?php echo $sow->volume; ?>
                                    <?php }else{ ?>
                                        -
                                    <?php } ?>
                                            

                                        </td>
                                </tr>
								
								<!-- Tampilan Data Baru: Lokasi-->
								<tr>
                                    <td class="text-left"><strong>Lokasi</strong></td>
                                    <td>
                                        <?php if($sow->lokasi){?>
                                        <?php echo $sow->lokasi; ?>
                                        <?php }else{ ?>
                                            -
                                        <?php } ?>
                                            
                                        </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                <?php  } ?>
                    <?php endforeach; ?>