<div class="container-fluid">
                <h4 class="text-dark mb-2"><strong>Daftar Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb" style="font-size: 14px;">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span><strong>Daftar Perjalanan Dinas</strong></span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas?parameter=<?php echo $parameter; ?>&id=<?php echo $row->id; ?>"><span><strong>Detail Perjalanan Dinas</strong></span></a></li>
                </ol>

                <?php foreach($dinas as $row):?>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <form>
                            <div class="card shadow" style="background-color: rgb(255,255,255);">
                                <div class="card-header py-3" style="background-color: rgb(255,255,255);">
                                    <div><a class="btn btn-primary btn-sm text-size btn-inline-first" role="button" href="<?php echo base_url(); ?>Perjalanan_dinas/tambah_perjalanan_dinas?parameter=<?php echo $parameter;?>"><i class="fas fa-plus-circle"></i>&nbsp;Tambah Perjalanan Dinas</a>

                                        <a href="<?php echo base_url(); ?>Exportpdf/laporan_spt?parameter=<?php echo $parameter; ?>&id=<?php echo $id; ?>"><button class="btn btn-success btn-sm text-size btn-inline-first"
                                            type="button"><i class="fas fa-file-export"></i>&nbsp;Export Jadi PDF</button></a>

                                        </div>
                                    <div>
                                        <div class="form-row mt-4">
                                            <div class="col-xl-2">
                                                <div class="text-center"><img class="img-fluid" src="<?php echo base_url(); ?>assets/img/Logo-Cimahi.png" style="width: 100px;"></div>
                                            </div>
                                            <div class="col">
                                                <div>
                                                    <h2 class="text-center" style="color: rgb(0,0,0);"><strong>PEMERINTAH KOTA CIMAHI</strong><br><strong>SEKRETARIAT DEWAN PERWAKILAN RAKYAT</strong><br></h2>
                                                </div>
                                                <div>
                                                    <h6 class="text-center" style="color: rgb(0,0,0);">Jl. Dra. Hj. Djulaeha Karmita No. 5 Kota Cimahi Telp. / Fax. (022) 6633315 - 6641809</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row mt-4">
                                            <div class="col-xl-2"></div>
                                            <div class="col">
                                                <div class="text-center">
                                                    <h5 class="text-dark"><strong><span style="text-decoration: underline;">SURAT PERINTAH TUGAS</span></strong><br><strong>Nomor: <?php echo $row->surat_perintah; ?></strong></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-5">
                                        <table class="table">
                                            <tbody class="text-size">
                                                <tr>
                                                    <td class="text-left">Nama</td>
                                                    <td>:</td>
                                                    <td class="text-left"><?php echo $anggota_ketua; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left">Jabatan</td>
                                                    <td>:</td>
                                                    <td class="text-left">Sekretaris DPRD Kota Cimahi</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div>
                                        <hr style="height: 2px;">
                                    </div>
                                </div>
                                <div class="card-body border-dark text-size">
                                    <div class="form-row">
                                        <div class="col-xl-12">
                                            <div class="border-dark">
                                                <h6 class="text-center text-dark"><strong>MEMERINTAHKAN</strong></h6>
                                                <h6 class="text-left text-dark"><strong>Kepada:</strong></h6>
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-striped table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary">No.</th>
                                                                <th class="text-center text-primary">Nama / NIP</th>
                                                                <th class="text-center text-primary">Pangkat/Gol/Jabatan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php 
                                                            $no=1;
                                                            foreach($users_dinas as $ow):?>
                                                            <tr>
                                                                <td class="text-center"><?php echo $no++; ?></td>
                                                                <td><strong><span style="text-decoration: underline;"><?php echo $ow->nama; ?></span></strong><br>NIP. <?php echo $ow->nip; ?></td>
                                                                <td class="text-center"><?php echo $ow->golongan; ?><br><?php echo $ow->jabatan; ?></td>
                                                            </tr>
                                                        <?php endforeach; ?>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="table-responsive table-borderless">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center text-primary">Untuk:</th>
                                                                <th class="text-justify text-primary">
                                                                    <?php echo $row->perihal; ?>
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
                                                                <th class="text-justify text-dark">Selesai melaksanakan tugas agar membuat laporan.<br>Demikian untuk dilaksanakan sebagaimana mestinya.</th>
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