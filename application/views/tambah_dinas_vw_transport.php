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
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Perjalanan_dinas"><span><strong>Form Tambah Data Perjalanan Dinas</strong><br></span></a></li>
                </ol>
                <div class="row no-gutters">
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto mr-1 mt-1">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>1.</strong></h1>
                                            </div>
                                        </div>
                                        <div class="col mr-2 mt-1">
                                            <div class="text-uppercase text-success font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>Nomor Surat &amp; uraian dinas</strong></h1>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-forward fa-2x text-success"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-2">
                        <a href="#">
                            <div class="card shadow border-left-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col-auto mr-1 mt-1">
                                            <div class="text-uppercase text-primary font-weight-bold text-xs mb-1">
                                                <h1 class="text-size-heading-dinas"><strong>2.</strong></h1>
                                            </div>
                                        </div>
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
                    <div class="col-md-6 col-lg-4 col-xl-4 mb-2">
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
                                                <h1 class="text-size-heading-dinas"><strong>Tambah Pengikut</strong></h1>
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
                    <div class="col-lg-8 col-xl-7">
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
                                        <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/save_transportasi" id="myform" onSubmit="return validasi()" enctype="multipart/form-data" name="frmJK">
                                            <div class="form-row">
                                                <div class="col-xl-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-success card-title"><strong>Anggota</strong></h5>
                                                            <div>
                                                                <div class="form-group"><label class="text-primary text-size">Nama Anggota</label><select class="form-control form-control-sm text-size chosen" id="id_user" multiple="" name="id_user[]">
                                                                    <?php foreach($users as $row):?>

                                                                    <?php if($status_peserta_dinas=="1"){ ?>
                                                                    <option value="<?php echo $row->id_user; ?>">
                                                                        <?php echo $row->nama_lengkap; ?>
                                                                        
                                                                    </option>
                                                                    <?php }elseif($status_peserta_dinas=="2"){ ?>
                                                                       <option value="<?php echo $row->id; ?>">
                                                                        <?php echo $row->nama; ?>
                                                                        
                                                                    </option>
                                                                          

                                                                    <?php } ?>


                                                                <?php endforeach; ?>
                                                                </select></div>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="id_dinas" id="dinas" value="<?php echo $id_terakhir; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div role="tablist" id="accordion-1">
                                                        <div class="card">
                                                            <div class="card-header bg-primary" role="tab">
                                                                <h5 class="mb-0"><a class="text-white" data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1"><strong>Udara</strong></a></h5>
                                                            </div>
                                                            <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                                                <div class="card-body">
                                                                    <div class="form-row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" value="1" name="jenisTransport" id="jenisTransport"><label class="form-check-label text-size" for="formCheck-1"><strong>Udara</strong></label></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 bg-primary mb-3">
                                                                            <div class="form-group">
                                                                                <h5 class="text-white mt-3 ml-2"><strong>Maskapai</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Nama Maskapai</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Maskapai..."
                                                                                    name="namaMaskapai" id="namaMaskapai" ></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>No. Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi No. Tiket..." name="noTiketMaskapai" id="noTiketMaskapai"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asalUdara" id="asalUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuanUdara" id="tujuanUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglBerangkatUdara" id="tglBerangkatUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglKembaliUdara" id="tglKembaliUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Harga Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" name="hargaTiketUdara" placeholder="Isi Harga Tiket..." id="hargaTiketUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-12 bg-primary mb-3">
                                                                            <div class="form-group">
                                                                                <h5 class="text-white mt-3 ml-2"><strong>Uang Harian</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="jumlahHariUangHarian"
                                                                                    placeholder="Isi Jumlah Hari..." id="jumlahHariUangHarian"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateUangHarian" placeholder="Isi Rate..." id="rateUangHarian"></div>
                                                                        </div>
                                                                        <!--
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalUangHarian" placeholder="Isi Jumlah..." id="totalUangHarian"></div>
                                                                        </div>
                                                                    -->
                                                                        <div class="col-xl-12 bg-primary mb-3">
                                                                            <div class="form-group mt-3">
                                                                                <h5 class="text-white ml-2"><strong>Uang Saku</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="jumlahHariUangSaku"
                                                                                    placeholder="Isi Jumlah Hari..." id="jumlahHariUangSaku"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateUangSaku" placeholder="Isi Rate..." id="rateUangSaku"></div>
                                                                        </div>
                                                                        <!--
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalUangSaku" placeholder="Isi Jumlah..." id="totalUangSaku"></div>
                                                                        </div>
                                                                    -->
                                                                        <div class="col-xl-12 bg-primary mb-3">
                                                                            <div class="form-group mt-3">
                                                                                <h5 class="text-white ml-2"><strong>Akomodasi / Kontribusi</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Nama Hotel</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Hotel..." name="hotelUdara"
                                                                                    id="hotelUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Check-in</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkInUdara" id="checkInUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Check-Out</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkOutUdara" id="checkOutUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari / Paket</strong></label><input class="form-control form-control-sm text-size" type="number" name="hariUdara" min="0"
                                                                                    placeholder="Isi Jumlah Hari / Paket..." id="hariUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" name="rateHotelUdara" min="0" placeholder="Isi Rate..." id="rateHotelUdara"></div>
                                                                        </div>
                                                                        <!--
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" name="totalHotelUdara" min="0" placeholder="Isi Jumlah..." id="totalHotelUdara"></div>
                                                                        </div>
                                                                    -->

                                                                        <div class="col-xl-12 mt-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Uang Representasi</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangRepresentasiUdara"
                                                                                    min="0" placeholder="Isi Uang Representasi..." id="uangRepresentasiUdara"></div>
                                                                        </div>
                                                                        <div class="col-xl-6 mt-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Transport Lokal</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportLokal" min="0"
                                                                                    placeholder="Isi Transport Lokal..." ID="uangTransportLokal"></div>
                                                                        </div>
                                                                        <div class="col-xl-6 mt-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Transport Bandara</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangTransportBandara"
                                                                                    min="0" placeholder="Isi Transport Hotel..." id="uangTransportBandara"></div>
                                                                        </div>

                                                                        <!--
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Total</strong></label><input class="form-control form-control-sm text-size" type="number" name="totalRepresentasiUdara" min="0" placeholder="Isi Total..." id="totalRepresentasiUdara"></div>
                                                                        </div>
                                                                    -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card">
                                                            <div class="card-header bg-danger" role="tab">
                                                                <h5 class="mb-0"><a class="text-white" data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2"><strong>Darat</strong></a></h5>
                                                            </div>
                                                            <div class="collapse show item-2" role="tabpanel" data-parent="#accordion-1">
                                                                <div class="card-body">
                                                                    <div class="form-row">
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group">
                                                                                <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="jenisTransport" value="2" id="jenisTransport"><label class="form-check-label text-size" for="formCheck-1"><strong>Darat</strong></label></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12 bg-danger mb-3">
                                                                            <div class="form-group">
                                                                                <h5 class="text-white mt-3 ml-2"><strong>Transportasi</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Nama Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Rental..." name="namaRental"
                                                                                    id="namaRentall"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Alamat Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Alamat Rental..."
                                                                                    name="alamatRental" id="alamatRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Kontak Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Kontak Rental..."
                                                                                    name="kontakRental" id="kontakRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asalRental" id="asalRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuanRental" id="tujuanRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglBerangkatRental" id="tglBerangkatRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglKembaliRental" id="tglKembaliRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="jumlahHariRental" placeholder="Isi Jumlah Hari..." id="jumlahHariRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateRental" placeholder="Isi Rate..." id="rateRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalRental" placeholder="Isi Jumlah..." id="totalRental"></div>
                                                                        </div>
                                                                        <div class="col-xl-12 bg-danger mb-3">
                                                                            <div class="form-group">
                                                                                <h5 class="text-white mt-3 ml-2"><strong>Akomodasi</strong></h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-xl-12">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Nama Hotel</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Hotel..." name="hotelDarat"
                                                                                    id="hotelDarat"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Check-in</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkInDarat" id="checkInDarat"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Check-Out</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkOutDarat" id="checkOutDarat"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" name="rateAkoDarat" min="0" placeholder="Isi Rate..." id="rateAkoDarat"></div>
                                                                        </div>
                                                                        <div class="col-xl-6">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" name="jumlahAkoDarat" min="0" placeholder="Isi Jumlah..." id="jumlahAkoDarat"></div>
                                                                        </div>
                                                                        <div class="col-xl-6 mt-3">
                                                                            <div class="form-group"><label class="text-primary text-size"><strong>Nama GU</strong></label><input class="form-control form-control-sm" type="text" placeholder="Isi GU..." name="gudarat" id="gudarat"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="col-xl-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-success card-title"><strong>Pembebanan Anggaran</strong></h5>
                                                            <div>
                                                                <div class="form-group"><label class="text-primary text-size">Nama Anggota</label>
																	<select class="form-control text-size" id="exampleFormControlSelect1" name="anggaran">
																	  <option value="Sekretariat DPRD Kota Cimahi">Sekretariat DPRD Kota Cimahi</option>
																	  <option value="DPRD Kota Cimahi">DPRD Kota Cimahi</option>
																	</select>
																</div>
																
																<div class="form-group"><label class="text-primary text-size">Akun</label>
																	<input class="form-control form-control-sm text-size" type="text" placeholder="Isi Akun..." name="akun" id="akun">
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
											
												
												
												<div class="col-xl-12">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h5 class="text-success card-title"><strong>Keterangan</strong></h5>
                                                            <div>
                                                                <div class="form-group"><textarea name="keterangan_rental" class="form-control" placeholder="Keterangan"> </textarea>
																</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
                                            </div>
                                            <div class="form-group text-center"><button class="btn btn-primary btn-block btn-sm pt-2 pb-2 text-size" type="submit"><i class="far fa-edit"></i>&nbsp;Simpan Data Perjalanan Dinas</button></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="<?php echo base_url(); ?>assets/plugins/js/chosen/chosen.jquery.js"></script>
        <script>
            $('.chosen').chosen();
        </script>
        
        <script>

    function validasi()
    {

        
        var id_user=document.forms["myform"]["id_user"].value;
        if (id_user==null || id_user=="")
          {
           swal({
                title: "Peringatan!",
                text: "Anggota Dewan tidak boleh kosong!"
            });
          return false;
          };

        var udara=frmJK.jenisTransport[0].checked;
        var darat=frmJK.jenisTransport[1].checked;
        



        if(udara==false && darat==false){

        swal({
                title: "Peringatan!",
                text: "Silakan pilih salah satu Jenis Transport (Udara/Darat)!"
            });
          return false;

        }else if(udara==false && darat==true){
            var namaRental=document.forms["myform"]["namaRental"].value;
            var tglBerangkatRental=document.forms["myform"]["tglBerangkatRental"].value;
            var tglKembaliRental=document.forms["myform"]["tglKembaliRental"].value;
            var hotelDarat=document.forms["myform"]["hotelDarat"].value;
           
           

        if (namaRental==null || namaRental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama Rental tidak boleh kosong!"
            });
          return false;
          };

            if (tglBerangkatRental==null || tglBerangkatRental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal berangkat rental tidak boleh kosong!"
            });
          return false;
          };


            if (tglKembaliRental==null || tglKembaliRental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal kembali rental tidak boleh kosong!"
            });
          return false;
          };


            if (hotelDarat==null || hotelDarat=="")
          {
           swal({
                title: "Peringatan!",
                text: "Hotel (Darat) tidak boleh kosong!"
            });
          return false;
          };


        /*
            var pesawat=frmJK.jenisKendaraan[0].checked;
            var kereta=frmJK.jenisKendaraan[1].checked;
            var bus=frmJK.jenisKendaraan[2].checked;

            if(pesawat==false && kereta==false && bus==false){
                swal({
                title: "Peringatan!",
                text: "Silakan pilih salah satu Jenis Kendaraan Umum terlebih dahulu!"
                });
               return false;
            }
            

          var namaRental=document.forms["myform"]["namaRentall"].value;
          alert(namaRental);
          var nomorTiket=document.forms["myform"]["nomorTiket"].value;
          var asal=document.forms["myform"]["asal"].value;
          var tujuan=document.forms["myform"]["tujuan"].value;


          if (namaRental==null || namaRental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama Rental tidak boleh kosong !"
            });
          return false;

          }else if(nomorTiket==null | nomorTiket==""){

             swal({
                title: "Peringatan!",
                text: "Nomor Tiket tidak boleh kosong !"
            });
             return false;

          }else if(asal==null || asal==""){
            
             swal({
                title: "Peringatan!",
                text: "Asal tidak boleh kosong !"
            });
             return false;

          }else if(tujuan==null | tujuan==""){

              swal({
                title: "Peringatan!",
                text: "Tujuan tidak boleh kosong !"
            });
             return false;

          };

          */
         
        }else if(udara==true && darat==false){


             var namaMaskapai=document.forms["myform"]["namaMaskapai"].value;
             var noTiketMaskapai=document.forms["myform"]["noTiketMaskapai"].value;
             var tglBerangkatUdara=document.forms["myform"]["tglBerangkatUdara"].value;
             var tglKembaliUdara=document.forms["myform"]["tglKembaliUdara"].value;

             if (namaMaskapai==null || namaMaskapai=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama Maskapai tidak boleh kosong!"
            });
          return false;
          };

            if (noTiketMaskapai==null || noTiketMaskapai=="")
          {
           swal({
                title: "Peringatan!",
                text: "No Tiket Maskapai tidak boleh kosong!"
            });
          return false;
          };
         
          if (tglBerangkatUdara==null || tglBerangkatUdara=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tgl Berangkat (Udara) tidak boleh kosong!"
            });
          return false;
          };

         if (tglKembaliUdara==null || tglKembaliUdara=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tgl Kembali (Udara) tidak boleh kosong!"
            });
          return false;
          };






          
          /*
            var namaRental=document.forms["myform"]["namaRental"].value;
            var platNomor_rental=document.forms["myform"]["platNomor_rental"].value;
            var namaRental=document.forms["myform"]["namaRental"].value;
            var alamatRental=document.forms["myform"]["alamatRental"].value;
            var asal_rental=document.forms["myform"]["asal_rental"].value;
            var tujuan_rental=document.forms["myform"]["tujuan_rental"].value;

            if (namaRental==null ||namaRental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Nama Rental tidak boleh kosong!"
            });
          return false;

          }else if(platNomor_rental==null || platNomor_rental==""){

            swal({
                title: "Peringatan!",
                text: "Plat Nomor (Rental) tidak boleh kosong!"
            });
          return false;

          }else if(namaRental==null || namaRental==""){

               swal({
                title: "Peringatan!",
                text: "Nama Rental tidak boleh kosong!"
            });
          return false;

          }else if(alamatRental==null || alamatRental==""){

                swal({
                title: "Peringatan!",
                text: "Alamat Rental tidak boleh kosong!"
            });
          return false;

          }else if(asal_rental==null || asal_rental==""){

            swal({
                title: "Peringatan!",
                text: "Asal (Rental) tidak boleh kosong!"
            });
          return false;

          }else if(tujuan_rental==null || tujuan_rental==""){
             swal({
                title: "Peringatan!",
                text: "Tujuan (Rental) tidak boleh kosong!"
            });
          return false;

          };
          */
                  


        }
     }
</script>