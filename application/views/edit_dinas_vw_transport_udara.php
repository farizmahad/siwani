 <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/css/sweetalert/sweetalert.css">
<link href="<?php echo base_url();?>assets/plugins/css/chosen/bootstrap-chosen.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script src="<?php echo base_url(); ?>assets/plugins/js/sweetalert/sweetalert.min.js"></script>


<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

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
                <div class="row justify-content-center mt-3 mb-3">
                    <div class="col-lg-12 col-xl-7">
                        <div class="row mb-3 d-none">
                            <div class="col">
                                <div class="card text-white bg-primary shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card text-white bg-success shadow">
                                    <div class="card-body">
                                        <div class="row mb-2">
                                            <div class="col">
                                                <p class="m-0">Peformance</p>
                                                <p class="m-0"><strong>65.2%</strong></p>
                                            </div>
                                            <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                        </div>
                                        <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-8 col-xl-12">
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/simpan_transportasi_users" id="myform" onSubmit="return validasi()" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div>

                                                                <?php
                                                                   $count_jumlah_peserta=count($user_dinas);
                                                                ?>

                                                                <input type="hidden" value="<?php echo $count_jumlah_peserta; ?>" id="jumlah_peserta">

                                                                <?php 
                                                                    $i=1;
                                                                    foreach($user_dinas as $ros) :?>
                                                                    <h3 align="center">Peserta ke <?php echo $i++;
                                                                    ?>

                                                                </h3>
                                                                    <hr>
                                                                <div class="form-row">
                                                                    <div class="col-xl-12 bg-primary mb-3">
                                                                        <div class="form-group">
                                                                            <h4 class="text-uppercase text-white mt-3 ml-2"><strong>Kendaraan Udara</strong></h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label class="text-primary"><strong>Nama Peserta</strong></label>
                                                                         

                                                                         <select class="form-control form-control-sm text-size chosen" id="user" name="id_user[]">
                                                                    <option value="0">Pilih User</option>
                                                                    <?php foreach($users as $row):?>

                                                                    <?php if($status_peserta_dinas=="1"){ ?>
                                                                    <option value="<?php echo $row->id_user; ?>"

                                                                        <?php
                                                                            if($row->id_user==$ros->id_user){
                                                                                 echo "selected";

                                                                            }
                                                                        ?>
                                                                        >
                                                                        <?php echo $row->nama_lengkap; ?>
                                                                        
                                                                    </option>
                                                                    <?php }elseif($status_peserta_dinas=="2"){ ?>
                                                                       <option value="<?php echo $row->id; ?>"
                                                                         <?php
                                                                            if($row->id==$ros->id_user){
                                                                                 echo "selected";

                                                                            }
                                                                        ?>
                                                                         
                                                                        >
                                                                        <?php echo $row->nama; ?>
                                                                        
                                                                    </option>
                                                                          

                                                                    <?php } ?>


                                                                <?php endforeach; ?>
                                                                </select>
                                                                        </div>
                                                                    </div>

                                                                    <input type="hidden" name="id_dinas" id="dinas" value="<?php echo $id_terakhir; ?>">
                                                                      <input type="hidden" name="jenisKendaraan" id="dinas" value="<?php echo $jenis_kendaraan; ?>">

                                                                    <div class="col-xl-12 text-success mt-3">
                                                                        <h3><strong>Keberangkatan</strong></h3>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Maskapai</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Maskapai..."
                                                                                    name="namaMaskapai[]" id="namaMaskapai" value="<?php echo $ros->nama; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>No. Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi No. Tiket..." name="noTiketMaskapai[]" id="noTiketMaskapai" value="<?php echo $ros->notiket1; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asalUdara[]" id="asalUdara" value="<?php echo $ros->asal; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuanUdara[]" id="tujuanUdara" value="<?php echo $ros->tujuan; ?>"></div>
                                                                    </div>
                                                                    <input type="hidden" name="" value="<?php echo $i; ?>">
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Berangkat</strong></label>
                                                                        <input class="form-control form-control-sm text-size tglBerangkatUdara<?php echo $i-1; ?>" type="date" name="tglBerangkatUdara[]" id="tglBerangkatUdara"value="<?php echo $ros->tgl_berangkat; ?>" onchange="hitung_durasi()"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Harga Tiket</strong></label>
                                                                        <input class="form-control form-control-sm text-size" type="text" name="hargaTiketUdara[]" placeholder="Isi Harga Tiket..." id="hargaTiketUdara" value="<?php echo $ros->hargatiket1; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-12 text-success mt-3">
                                                                        <h3><strong>Kepulangan</strong></h3>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Maskapai</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Maskapai..." name="namaMaskapai2[]"
                                                                                id="namaMaskapai2" value="<?php echo $ros->namarental2;?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>No. Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi No. Tiket..." name="noTiketMaskapai2[]"
                                                                                id="noTiketMaskapai2[]" value="<?php echo $ros->notiket2; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asalUdara2[]" id="asalUdara2" value="<?php echo $ros->asal2; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuanUdara2[]" id="tujuanUdara2" value="<?php echo $ros->tujuan2; ?>"></div>
                                                                    </div>
                                                                     <input type="hidden" name="id_user_dinas[]" id="id_user_dinas" value="<?php echo $ros->id_user_dinas; ?>">  
                                                                      
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size tglKembaliUdara<?php echo $i-1; ?>" type="date" name="tglKembaliUdara[]" id="tglKembaliUdara" value="<?php echo $ros->tgl_kembali; ?>" onchange="alert_tanggal()"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Harga Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" name="hargaTiketUdara2[]" placeholder="Isi Harga Tiket..." id="hargaTiketUdara2" value="<?php echo $ros->hargatiket2; ?>"></div>
                                                                    </div>
                                                                    <?php
                                                                         $id_user_dinas=$ros->id_user_dinas;

                                                                         $uang_harian=$this->Dinas_model->tampil_biaya_lain('uang_harian',$id_user_dinas);

                                                                

                                                                    foreach($uang_harian as $uh):
                                                                    ?>

                                                                    <input type="hidden" name="id_uang_harian" value="<?php echo $uh->id; ?>">
                                                                    <div class="col-xl-12 bg-primary mb-3">
                                                                        <div class="form-group">
                                                                            <h5 class="text-white mt-3 ml-2"><strong>Uang Harian</strong></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size jumlahHariUangHarian<?php echo $i-1; ?>" type="number" min="0" name="jumlahHariUangHarian[]" placeholder="Isi Jumlah Hari..." value="<?php echo $uh->jumlah_hari; ?>" readonly></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateUangHarian[]" placeholder="Isi Rate..." value="<?php echo $uh->rate;?>"></div>
                                                                    </div>
                                                                <?php endforeach; ?>
                                                                    <!--
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalUangHarian[]" placeholder="Isi Jumlah..."></div>
                                                                    </div>
                                                                -->

                                                                <?php
                                                                         $id_user_dinas=$ros->id_user_dinas;

                                                                         $uang_saku=$this->Dinas_model->tampil_biaya_lain('uang_saku',$id_user_dinas);
                                                         
                                                                

                                                                    foreach($uang_saku as $un):
                                                                    ?>
<input type="hidden" name="id_uang_saku" value="<?php echo $un->id; ?>">
                                                                    <div class="col-xl-12 bg-primary mb-3">
                                                                        <div class="form-group mt-3">
                                                                            <h5 class="text-white ml-2"><strong>Uang Saku</strong></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size jumlahHariUangSaku<?php echo $i-1; ?>" type="number" min="0" name="jumlahHariUangSaku[]" placeholder="Isi Jumlah Hari..." value="<?php echo $un->jumlah_hari; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateUangSaku[]" placeholder="Isi Rate..." value="<?php echo $un->rate; ?>"></div>
                                                                    </div>
                                                                <?php endforeach;?>
                                                                    <!--
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalUangSaku" placeholder="Isi Jumlah..."></div>
                                                                    </div>
                                                                -->
                                                                    <div class="col-xl-12 bg-primary mb-3">
                                                                        <div class="form-group mt-3">
                                                                            <h5 class="text-white ml-2"><strong>Akomodasi / Kontribusi</strong></h5>
                                                                        </div>
                                                                    </div>
                                                                     <?php
                                                                  $id_user_dinas=$ros->id_user_dinas;
                                                                 
                                                                       $hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);

                                                                foreach($hotel as $ho):
                                                                ?>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Hotel</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Hotel..." name="hotelUdara[]"
                                                                                 value="<?php echo $ho->hotel; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Check-in</strong></label><input class="form-control form-control-sm text-size checkInUdara<?php echo $i-1; ?>" type="date" name="checkInUdara[]" value="<?php echo $ho->tgl_mendaftar; ?>"onchange="sum();"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Check-Out</strong></label><input class="form-control form-control-sm text-size checkOutUdara<?php echo $i-1; ?>" type="date" name="checkOutUdara[]" value="<?php echo $ho->tgl_keluar; ?>" onchange="sum();"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari / Paket</strong></label><input class="form-control form-control-sm text-size hariUdara<?php echo $i-1; ?>" type="number" name="hariUdara[]" min="0" placeholder="Isi Jumlah Hari / Paket..." value="<?php echo $ho->lama; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" name="rateHotelUdara[]" min="0" placeholder="Isi Rate..." value="<?php echo $ho->biaya; ?>"></div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" name="totalHotelUdara" min="0" placeholder="Isi Jumlah..."></div>
                                                                    </div>
                                                                -->
                                                                    <div class="col-xl-12 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Uang Representasi</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangRepresentasiUdara[]" min="0"
                                                                                placeholder="Isi Uang Representasi..." value="<?php echo $ho->uang_representasi; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Transport Lokal (Keberangkatan)</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportLokal1[]"
                                                                                min="0" placeholder="Isi Transport Lokal..." value="<?php echo $ho->transport_lokal; ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Transport Lokal (Kepulangan)</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportLokal2[]"
                                                                                min="0" placeholder="Isi Transport Lokal..." value="<?php echo $ho->transport_lokal2 ?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Transport Bandara (Keberangkatan)</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportBandara1[]"
                                                                                min="0" placeholder="Isi Transport Hotel..." value="<?php echo $ho->transport_bandara;?>"></div>
                                                                    </div>
                                                                    <div class="col-xl-6 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Transport Bandara (Kepulangan)</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportBandara2[]"
                                                                                min="0" placeholder="Isi Transport Hotel..." value="<?php echo $ho->transport_bandara2; ?>"></div>
                                                                    </div>

                                                                    <input type="hidden" name="id_penginapan[]"
                                                                         value="<?php echo $ho->id_penginapan ?>"
                                                                         >
                                                                <?php endforeach; ?>
                                                                    <!--
                                                                    <div class="col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Total</strong></label>
                                                                            <h2 class="text-danger">Rp. 0,00</h2>
                                                                        </div>
                                                                    </div>
                                                                -->

                                                                </div>
                                                                <?php endforeach; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center"><button class="btn btn-success btn-block btn-sm pt-2 pb-2 text-size" type="submit"><i class="far fa-edit"></i>&nbsp;Simpan Data Perjalanan Dinas</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="bg-white sticky-footer">
        <script src="<?php echo base_url(); ?>assets/plugins/js/chosen/chosen.jquery.js"></script>
        <script>
            $('.chosen').chosen();
        </script>
        <script>


            function alert_tanggal(){
                var jumlah_peserta=$('#jumlah_peserta').val();

                for (x = 1; x <= jumlah_peserta; x++) {
                  var tgl_awal=$('.tglBerangkatUdara'+x).val();
                  var tgl_akhir=$('.tglKembaliUdara'+x).val();

                    if(tgl_akhir < tgl_awal){

                            swal({
                            title: "Peringatan!",
                            text: "Tanggal Kembali tidak boleh lebih kecil dari tanggal berangkat!"
                     });
                            return false;
                   }else{
                    hitung_durasi();
                   }
            }
/*
                if(tgl_akhir < tgl_awal){
                    $("#jumlahHariUangHarian").val('');
                    $("#jumlahHariUangSaku").val('');
                   swal({
                title: "Peringatan!",
                text: "Tanggal Kembali tidak boleh lebih kecil dari tanggal berangkat!"
                 });
                  return false;
                  */
/*
                }else{
                    hitung_durasi();
                }
                */


            }


            
            function hitung_durasi(){
                var jumlah_peserta=$('#jumlah_peserta').val();

            

                for (x = 1; x <= jumlah_peserta; x++) {

                 var tgl_awal=$('.tglBerangkatUdara'+x).val();
                 var tgl_akhir=$('.tglKembaliUdara'+x).val();


                 

                var tgl_awal_pisah= tgl_awal.split('-');
            
                var tgl_akhir_pisah= tgl_akhir.split('-');

                var objek_tgl=new Date();

                var tgl_awal_leave=objek_tgl.setFullYear(tgl_awal_pisah[0], tgl_awal_pisah[1], tgl_awal_pisah[2]);

                var tgl_akhir_leave=objek_tgl.setFullYear(tgl_akhir_pisah[0], tgl_akhir_pisah[1], tgl_akhir_pisah[2]);

                var hasil=(tgl_akhir_leave-tgl_awal_leave)/(60*60*24*1000) + 1;
                /*
                var checkin = addDays(new Date(tgl_awal), 1);
                */
                   

                 
                    $('.jumlahHariUangHarian'+x).val(hasil);
                    $('.jumlahHariUangSaku'+x).val(hasil);

                    var checkout = addDays(new Date(tgl_akhir), 1);
                    var anu=formatDate(checkout);

                    $('.checkOutUdara'+x).val(anu);
                    $('.checkInUdara'+x).val(tgl_awal);
                    var o=x+1;
                    $('.tglBerangkatUdara'+o).val(tgl_awal);
                    $('.tglKembaliUdara'+o).val(tgl_akhir);



                       // hitng selisih hotel


                    
                var checkin_pisah= tgl_awal.split('-');
            
                var checkout_pisah= anu.split('-');

                var objek_tgl_hotel=new Date();

                var tgl_checkin_leave=objek_tgl_hotel.setFullYear(checkin_pisah[0], checkin_pisah[1], checkin_pisah[2]);

                var tgl_checkout_leave=objek_tgl_hotel.setFullYear(checkout_pisah[0], checkout_pisah[1], checkout_pisah[2]);

                var hasil_hotel=(tgl_checkout_leave-tgl_checkin_leave)/(60*60*24*1000) + 1;

                 $('.hariUdara'+x).val(hasil_hotel);




                 }

/*
                 var checkin = addDays(new Date(tgl_awal), 1);
                 */
                 /*
                var checkout = addDays(new Date(tgl_akhir), 1);
                var anu=formatDate(checkout);
                */

/*
                var em='7';
                alert(em);
                */
/*
                $('#jumlahHariRental').val(hasil);

                for (x = 1; x <= jumlah_peserta; x++) {
                $('.checkOutDarat'+x).val(anu);
                $('.checkInDarat'+x).val(tgl_awal);
            }
            */
               
            }


            function addDays(theDate, days) {
                  return new Date(theDate.getTime() - days*24*60*60*1000);
            }



            function formatDate(date) {
    var d = new Date(date),
        month = '' + (d.getMonth() + 1),
        day = '' + d.getDate(),
        year = d.getFullYear();

    if (month.length < 2) 
        month = '0' + month;
    if (day.length < 2) 
        day = '0' + day;

    return [year, month, day].join('-');
}

        </script>

        
         <script>
            function sum(){

                    
                    var jumlah_peserta=$('#jumlah_peserta').val();
                      


                     for (x = 1; x <= jumlah_peserta; x++) {
                        
                             
                             var tgl_awall=$('.checkInUdara'+x).val();
                             var tgl_akhirr=$('.checkOutUdara'+x).val();
                        

                             if(tgl_akhirr < tgl_awall){

                                    swal({
                title: "Peringatan!",
                text: "Tanggal Check-out tidak boleh lebih kecil dari check-in!"
                 });
                  return false;
                             }else{

                              var tgl_awall_pisah= tgl_awall.split('-');
            
                var tgl_akhirr_pisah= tgl_akhirr.split('-');

                var objek_tgll=new Date();

                var tgl_awall_leave=objek_tgll.setFullYear(tgl_awall_pisah[0], tgl_awall_pisah[1], tgl_awall_pisah[2]);

                var tgl_akhirr_leave=objek_tgll.setFullYear(tgl_akhirr_pisah[0], tgl_akhirr_pisah[1], tgl_akhirr_pisah[2]);

                var hasill=(tgl_akhirr_leave-tgl_awall_leave)/(60*60*24*1000) +1;



                             $('.hariUdara'+x).val(hasill);


                         }
                     }


            }

        </script>