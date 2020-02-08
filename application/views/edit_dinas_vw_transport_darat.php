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
                            <div class="col-lg-12 col-xl-12">
                                <div class="row">
                                    <div class="col">
                                        <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/aksi_ubah_transportasi_users" id="myform" onSubmit="return validasi()" enctype="multipart/form-data">
                                            <div class="form-row">
                                                <div class="col">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div>
                                                                
                                                                <div class="form-row">
                                                                    <div class="col-lg-3 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asalRental" id="asalRental" value="<?php echo $asal_dinas; ?>"></div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuanRental" id="tujuanRental" value="<?php echo $tujuan_dinas; ?>"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglBerangkatRental" id="tglBerangkatRental" value="<?php echo $tgl_berangkat_dinas; ?>"onchange="hitung_durasi()"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglKembaliRental" id="tglKembaliRental" value="<?php echo $tgl_kembali_dinas; ?>" onchange="alert_tanggal()"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah Hari</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="jumlahHariRental" placeholder="Isi Jumlah Hari..." id="jumlahHariRental" value="<?php echo $jumlah_hari_dinas; ?>" readonly></div>
                                                                    </div>
                                                                </div>
                                                            
                                                             
                                                                    <?php

                                                                         $count_user_dinas=count($user_dinas);

                                                                    ?>
                                                                    <input type="hidden" value="<?php echo $count_user_dinas; ?>" id="jumlah_peserta">


                                                                    <?php 
                                                                    $i=0;
                                                                    foreach($user_dinas as $ros) :

                                                                     $i++;
                                                                        ?>


                                                                    

                                                                     
                                                                    <h3 align="center">Peserta ke <?php echo $i; ?></h3>
                                                                    <hr>
                                                                <div class="form-row">
                                                                    <div class="col-xl-12 bg-success mb-3">
                                                                        <div class="form-group">
                                                                            <h4 class="text-white mt-3 ml-2"><strong>Kendaraan Darat</strong></h4>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Peserta</strong></label>
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

                                                                     
                                                                           <input type="hidden" name="id_user_dinas[]" id="id_user_dinas" value="<?php echo $ros->id_user_dinas; ?>">  
                                                                      


                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Rental..." name="namaRental[]"
                                                                                    id="namaRentall"

                                                                        value="<?php echo $ros->nama; ?>"
                                                                                    ></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Alamat Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Alamat Rental..." name="alamatRental[]" id="alamatRental" value="<?php echo $ros->alamat; ?>"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Kontak Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Kontak Rental..." name="kontakRental[]" id="kontakRental" value="<?php echo $ros->kontak; ?>"></div>
                                                                    </div>
                                                                   
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="rateRental[]" placeholder="Isi Rate..." id="rateRental[]" value="<?php echo $ros->rate; ?>"></div>
                                                                    </div>
                                                                    <!--
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="totalRental" placeholder="Isi Jumlah..." id="totalRental"></div>
                                                                    </div>
                                                                -->


                                                                <?php
                                                                  $id_user_dinas=$ros->id_user_dinas;
                                                                 
                                                                       $hotel=$this->Dinas_model->tampil_hotel($id_user_dinas);

                                                                foreach($hotel as $ho):
                                                                ?>
                                                                    <div class="col-xl-12 bg-success mb-3">
                                                                        <div class="form-group">
                                                                            <h5 class="text-white mt-3 ml-2"><strong>Akomodasi</strong></h5>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama Hotel</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Hotel..." name="hotelDarat[]"
                                                                                    id="hotelDarat" value="
                                                                                    <?php echo $ho->hotel; ?>"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Check-in</strong></label><input class="form-control form-control-sm text-size checkInDarat<?php echo $i; ?>" type="date" name="checkInDarat[]" id="checkInDarat" onchange="sum();" value="<?php echo $ho->tgl_mendaftar; ?>"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Check-Out</strong></label><input class="form-control form-control-sm text-size checkOutDarat<?php echo $i; ?>" type="date" name="checkOutDarat[]" id="checkOutDarat" value="<?php echo $ho->tgl_keluar; ?>" onchange="sum();"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Rate</strong></label><input class="form-control form-control-sm text-size rateAkoDarat<?php echo $i; ?>" type="number" name="rateAkoDarat[]" min="0" placeholder="Isi Rate..." id="rateAkoDarat" value="<?php echo $ho->biaya; ?>"  onkeyup="sum();"></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Jumlah</strong></label><input class="form-control form-control-sm text-size jumlahAkoDarat<?php echo $i; ?>" type="number" name="jumlahAkoDarat[]" min="0" placeholder="Isi Jumlah..." id="jumlahAkoDarat" value="<?php echo $ho->jumlah_ako; ?>" readonly></div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-xl-6 mt-3">
                                                                        <div class="form-group"><label class="text-primary text-size"><strong>Nama GU</strong></label><input class="form-control form-control-sm" type="text" placeholder="Isi GU..." name="gudarat[]" id="gudarat" value="<?php echo $ho->gu; ?>">
                                                                         <input type="hidden" name="id_penginapan[]"
                                                                         value="<?php echo $ho->id_penginapan ?>"
                                                                         >
                                                                        
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach; ?>
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

        <script src="<?php echo base_url(); ?>assets/plugins/js/chosen/chosen.jquery.js"></script>
        <script>
            $('.chosen').chosen();
        </script>
        <script>

            function validasi()
            {
                /*
                 var id_user=document.forms["myform"]["user"].value;
alert(id_user);
                 if (id_user==null || id_user=="")
                        {
                                swal({
                                title: "Peringatan!",
                                text: "Peserta Dinas tidak boleh kosong!"
                                    });
                                return false;
                        };



            }
            */
        </script>

        <script>


            function alert_tanggal(){


                var tgl_awal=$('#tglBerangkatRental').val();
                var tgl_akhir=$('#tglKembaliRental').val();

                if(tgl_akhir < tgl_awal){
                    $("#jumlahHariRental").val('');
                   swal({
                title: "Peringatan!",
                text: "Tanggal Kembali tidak boleh lebih kecil dari tanggal berangkat!"
                 });
                  return false;

                }else{
                    hitung_durasi();
                }


            }


            
            function hitung_durasi(){
                var tgl_awal=$('#tglBerangkatRental').val();
                var tgl_akhir=$('#tglKembaliRental').val();

                var jumlah_peserta=$('#jumlah_peserta').val();

            


                var tgl_awal_pisah= tgl_awal.split('-');
            
                var tgl_akhir_pisah= tgl_akhir.split('-');

                var objek_tgl=new Date();

                var tgl_awal_leave=objek_tgl.setFullYear(tgl_awal_pisah[0], tgl_awal_pisah[1], tgl_awal_pisah[2]);

                var tgl_akhir_leave=objek_tgl.setFullYear(tgl_akhir_pisah[0], tgl_akhir_pisah[1], tgl_akhir_pisah[2]);

                var hasil=(tgl_akhir_leave-tgl_awal_leave)/(60*60*24*1000) +1;
                /*
                var checkin = addDays(new Date(tgl_awal), 1);
                */

/*
                 var checkin = addDays(new Date(tgl_awal), 1);
                 */
                var checkout = addDays(new Date(tgl_akhir), 1);
                var anu=formatDate(checkout);

/*
                var em='7';
                alert(em);
                */

                $('#jumlahHariRental').val(hasil);

                for (x = 1; x <= jumlah_peserta; x++) {
                    
                $('.checkOutDarat'+x).val(tgl_akhir);
                $('.checkInDarat'+x).val(tgl_awal);
            }
               
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
                        
                             var akodarat=$('.rateAkoDarat'+x).val();
                             
                             var tgl_awal=$('.checkInDarat'+x).val();
                             var tgl_akhir=$('.checkOutDarat'+x).val();

                             if(tgl_akhir < tgl_awal){

                                    swal({
                title: "Peringatan!",
                text: "Tanggal Check-out tidak boleh lebih kecil dari check-in!"
                 });
                  return false;
                             }else{

                              var tgl_awal_pisah= tgl_awal.split('-');
            
                var tgl_akhir_pisah= tgl_akhir.split('-');

                var objek_tgl=new Date();

                var tgl_awal_leave=objek_tgl.setFullYear(tgl_awal_pisah[0], tgl_awal_pisah[1], tgl_awal_pisah[2]);

                var tgl_akhir_leave=objek_tgl.setFullYear(tgl_akhir_pisah[0], tgl_akhir_pisah[1], tgl_akhir_pisah[2]);

                var hasil=(tgl_akhir_leave-tgl_awal_leave)/(60*60*24*1000) +1-1;


                         var anu=akodarat * hasil;

                             $('.jumlahAkoDarat'+x).val(anu);


                         }
                     }


            }

        </script>