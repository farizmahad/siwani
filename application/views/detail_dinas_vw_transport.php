<!--

<div class="container-fluid">
                <h4 class="text-dark mb-2"><strong>Daftar Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Daftar Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas/detail_surat_dinas/<?php echo $id;?>"><span><strong>Detail Perjalanan Dinas</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div><a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Perjalanan Dinas</a></div>
                                    <div class="text-center">
                                        <h5 class="text-dark"><strong><span style="text-decoration: underline;">SURAT PERJALANAN DINAS</span>&nbsp;</strong><br><strong>Nomor: <?php echo $no_surat_tugas; ?></strong></h5>
                                    </div>
                                </div>
                                <div class="card-body border-dark text-size">
                                    <div class="form-row">
                                        <div class="col-xl-12">
                                            <div class="border-dark">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Pejabat yang Berwenang Memberi Perintah</th>
                                                                <th><?php echo $pejabat; ?></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <h6 class="text-primary ml-2 mt-3"><strong>Nama / NIP Pegawai yang Diperintahkan</strong></h6>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th style="text-align: center;">No.</th>
                                                                <th>Nama</th>
                                                                <th>NIP</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            if(count($user_dinas) >0) { 
                                                            $no=1;
                                                            foreach($user_dinas as $row):?>
                                                            <tr>
                                                                <td align="center"><?php echo $no++; ?></td>
                                                                <td><?php echo $row->nama_lengkap;?></td>
                                                                <td>
                                                                    <?php echo $row->nip; ?>
                                                                </td>
                                                            </tr>
                                                        <?php endforeach;?>
                                                            <?php }else{ ?>
                                                                <tr>
                                                                    <td colspan="3" align="center">Tidak ada data!</td>
                                                                </tr>

                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <h6 class="text-primary ml-2 mt-3"><strong>Pangkat dan Golongan Ruang Gaji &amp;&nbsp;Tingkat Biaya Perjalanan Dinas</strong></h6>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Pangkat / Golongan</th>
                                                                <th>Jabatan / Instansi</th>
                                                                <th>Tingkat Biaya Perjalanan Dinas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Ketua DRPD</td>
                                                                <td>DPRD Kota Cimahi</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>Anggota DPRD</td>
                                                                <td>DPRD Kota Cimahi</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Maksud Perjalanan Dinas</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $perihal; ?><br></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Alat Angkutan yang Dipergunakan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                               <?php if($jenis=="1"){ ?>
                                                                         Udara
                                                               <?php }elseif($jenis=="2"){ ?>
                                                                          Darat
                                                               <?php } ?>


                                                                    <br></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Tempat Berangkat Dari</th>
                                                                <th class="text-primary">Tempat Tujuan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $asal; ?><br></td>
                                                                <td><?php echo $tujuan; ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Lamanya Perjalanan Dinas</th>
                                                                <th class="text-primary">Tanggal Berangkat</th>
                                                                <th class="text-primary">Tanggal Kembali</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $lama_sewa; ?> Hari<br></td>
                                                                <td><?php echo $tgl_berangkat; ?></td>
                                                                <td><?php echo $tgl_kembali;?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Pengikut Nama</th>
                                                                <th class="text-primary">Tanggal Lahir</th>
                                                                <th class="text-primary">Keterangan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($pengikut_dinas as $ros):?>
                                                            <tr>
                                                                <td><?php echo $ros->nama_pengikut; ?><br></td>
                                                                <td><?php echo $ros->tgl_lahir; ?></td>
                                                                <td><?php echo $ros->keterangan; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Pembebanan Anggaran</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>a. Instansi</td>
                                                                <td>
                                                                   <?php if($anggaran){?>
                                                                    <?php echo $anggaran; ?>
                                                                        
                                                                    <?php } ?>
                                                                    </td>
                                                            </tr>
                                                            <tr>
                                                                <td>b. Akun</td>
                                                                <td>
                                                                    <?php if($akun){?>
                                                                    <?php echo $akun; ?>
                                                                    <?php } ?>
                                                                    </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-primary">Keterangan Lain-lain</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <?php if($keterangan_rental){ ?>
                                                                    <?php echo $keterangan_rental; ?>
                                                                    <?php } ?>
                                                                    </td>
                                                            </tr>
                                                            <tr></tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                -->

                 <div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Daftar Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span><strong>Daftar Perjalanan Dinas</strong></span></a></li>
                </ol>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form>
                            <div class="card shadow">
                                <div class="card-header py-3">
                                    <div>

                                        <a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas?parameter=<?php echo $parameter; ?>"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Perjalanan Dinas</a>
                                        <a class="btn btn-success btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Exportpdf/laporan_visum?id=<?php echo $id;?>"><i class="fas fa-file-export"></i>&nbsp;Export Jadi PDF</a>


                                    </div>
                                    <div class="text-center mt-5">
                                        <h5 class="text-dark"><strong><span style="text-decoration: underline;">SURAT PERJALANAN DINAS</span>&nbsp;</strong><br><strong>Nomor: <?php echo $no_surat_tugas; ?></strong></h5>
                                    </div>
                                </div>
                                <div class="card-body border-dark text-size">
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div class="border-dark">
                                                <p class="text-dark">Pejabat yang Berwenang Memberi Perintah</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <p>
                                                   <?php if($status_peserta_dinas=="1"){?>
                                                   Ketua DPRD Kota Cimahi
                                                   <?php }elseif($status_peserta_dinas=="2"){ ?>
                                                   Sekretaris DPRD Kota Cimahi
                                                   <?php } ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p>Nama / NIP Pegawai yang diperintahkan</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                <p>No.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p>Nama</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p>NIP</p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                    $no=1;
                                    foreach($user_dinas as $col):?>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                <p><?php echo $no++; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p>
                                                    <?php if($status_peserta_dinas=="1"){
                                                        echo $col->nama_lengkap;
                                                    }elseif($status_peserta_dinas=="2"){
                                                        echo $col->nama;
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p><?php echo $col->nip; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>


                                    
                                    <div class="form-row">
                                    </div>
                                    <div class="form-row mt-2">
                                        <div class="col-xl-5">
                                            <div>
                                                <p>a. Pangkat dan Golongan Ruang Gaji</p>
                                            </div>
                                            <div>
                                                <p>b. Tingkat Biaya Perjalanan Dinas</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                <p>No.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p>Pkt. / Gol.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p>Jabatan / Instansi</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p>Tingkat Biaya Perj. Dinas</p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    $nos=1;
                                    foreach($user_dinas as $dow):
                                    $asal_dinas=$dow->asal;
                                    $tujuan_dinas=$dow->tujuan;
                                    $tgl_berangkat_dinas=$dow->tgl_berangkat;
                                    $tgl_kembali_dinas=$dow->tgl_kembali;
                                    $jumlah_hari_dinas=$dow->jumlah_hari;
                                        ?>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                <p><?php echo $nos++; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p> <?php if($status_peserta_dinas=="1"){
                                                        echo $dow->jabatan;
                                                        echo "/";
                                                        echo "-";
                                                    }elseif($status_peserta_dinas=="2"){
                                                        echo $dow->jabatan;
                                                        echo "/";
                                                        echo $dow->golongan;
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p>DPRD Kota Cimahi</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p><?php echo $tingkat_biaya; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                     <?php endforeach; ?>
                                    
                                    <!--
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                <p>3</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-2">
                                            <div>
                                                <p>Anggota DPRD</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p>DPRD Kota Cimahi<br></p>
                                            </div>
                                        </div>
                                    </div>
                                -->
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p>Maksud Perjalanan Dinas</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <p><?php echo $perihal; ?><br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <p>Alat Angkutan yang Dipergunakan</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <p>
                                                <?php if($jenis_kendaraan=="1"){
                                                    echo "Darat";
                                                }elseif($jenis_kendaraan=="2"){
                                                    echo "Udara";
                                                }

                                                 ?>

                                                    <br></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <div class="form-row">
                                                    <div class="col-xl-12">
                                                        <p>a. Tempat Berangkat dari</p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p>b. Tempat Tujuan</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <div class="form-row">
                                                    <div class="col-xl-12">
                                                        <p><?php echo $asal_dinas; ?></p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p><?php echo $tujuan_dinas; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="col-xl-5">
                                            <div>
                                                <div class="form-row">
                                                    <div class="col-xl-12">
                                                        <p>a. Lamanya Perjalanan Dinas</p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p>b. Tanggal Berangkat</p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p>c. Tanggal Harus Kembali</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div></div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div>
                                                <div class="form-row">
                                                    <div class="col-xl-12">
                                                        <p><?php echo $jumlah_hari_dinas; ?> Hari</p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p><?php echo date_indo($tgl_berangkat_dinas); ?></p>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <p><?php echo date_indo($tgl_kembali_dinas); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-xl-4">
                                            <div>
                                                <p>Nama Pengikut</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div>
                                                <p>Tanggal Lahir</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div>
                                                <p>Keterangan</p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php 
                                    $nom=1;
                                    foreach($pengikut_dinas as $pe):?>
                                    <div class="form-row">



                                        <div class="col-xl-1">
                                            <div>
                                                
                                                <p>

                                                    <?php echo $nom++; ?>.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                
                                                <p>
                                                    
                                                    <?php echo $pe->nama_pengikut; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                
                                                <p>

                                                    <?php echo $nom++; ?>.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                                <p><?php echo date_indo($pe->tgl_lahir); ?></p>
                                            </div>
                                        </div>
                                        <div class="col-xl-1">
                                            <div>
                                                
                                                <p>

                                                    <?php echo $nom++; ?>.</p>
                                            </div>
                                        </div>
                                        <div class="col-xl-3">
                                            <div>
                                             <p><?php echo $pe->keterangan; ?></p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                <?php endforeach; ?>

                                </div>
                            </div>
                        </form>
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
    </div>
    