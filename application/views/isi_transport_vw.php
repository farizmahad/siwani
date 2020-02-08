<div class="container-fluid">
                <h4 class="text-dark mb-4"><strong>Form Isi Transport Perjalanan Dinas</strong><br></h4>
                <ol class="breadcrumb text-size">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard"><span>Dashboard</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>daftar-perjalanan-dinas"><span>Perjalanan Dinas</span></a></li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>isi-transport/<?php echo $id; ?>"><span><strong>Isi Transport Perjalanan Dinas</strong></span></a></li>
                </ol>


 <form method="POST" action="<?php echo base_url(); ?>Perjalanan_dinas/save_transport" id="myform" onSubmit="return validasi()" enctype="multipart/form-data" name="frmJK">
                <div class="row mb-3">
                    <div class="col-lg-8 col-xl-9">
                        <div class="row">
                            <div class="col">
                                    <div class="form-row">
                                        <div class="col-xl-12">
                                            <div role="tablist" id="accordion-1">
                                                <div class="card">
                                                    <div class="card-header" role="tab">
                                                        <h6 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1" class="text-size"><strong>Sewa / Rental</strong></a></h6>
                                                    </div>
                                                    <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1">
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <div class="form-check"><input class="form-check-input" type="radio" id="jenis_transport_rental" name="jenisTransport" value="1"><label class="form-check-label text-size" for="formCheck-1"><strong>Sewa / Rental</strong></label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Jenis Kendaraan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Jenis Kendaraan..." name="jenisKendaraan_rental" id="jenisKendaraan_rental"></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Plat Nomor</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Plat Nomor..." name="platNomor_rental" id="platNomor_rental"></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Nama Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nama Rental..." name="namaRental" id="namaRental"></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Alamat Rental</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Alamat Rental..." name="alamatRental" id="alamatRental"></div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group"><label class="text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asal_rental" id="asal_rental"></div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group"><label class="text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuan_rental" id="tujuan_rental"></div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group"><label class="text-size"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglBerangkat_rental"></div>
                                                                </div>
                                                                <div class="col-xl-3">
                                                                    <div class="form-group"><label class="text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglKembali_rental"></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Lama Sewa</strong></label><input class="form-control form-control-sm text-size" type="text" name="lamaSewa_rental" placeholder="Isi Lama Sewa..."></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Biaya Sewa (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="biayaSewa_rental" placeholder="Isi Biaya Sewa..."></div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Unggah Tiket &nbsp;</strong><br></label><input type="file" class="text-size" name="tiket_rental" id="tiket_rental" onchange="return validasiFile()"></div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group"><label class="text-size"><strong>Unggah Bill &nbsp;</strong><br></label><input type="file" class="text-size" name="tagihan_rental" id="tagihan_rental" onchange="return validasiFile_tagihan_rental()"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="card">
                                                    <div class="card-header" role="tab">
                                                        <h6 class="mb-0"><a data-toggle="collapse" aria-expanded="true" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2" class="text-size"><strong>Umum</strong></a></h6>
                                                    </div>
                                                    <div class="collapse show item-2" role="tabpanel" data-parent="#accordion-1">
                                                        <div class="card-body">
                                                            <div class="form-row">
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <div class="form-check"><input class="form-check-input" type="radio" id="jenis_transport_umum" name="jenisTransport" value="2"><label class="form-check-label text-size" for="formCheck-1"><strong>Umum</strong></label></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-12">
                                                                    <div class="form-group">
                                                                        <div class="form-row">
                                                                            <div class="col-xl-12"><label class="col-form-label text-size"><strong>Jenis Kendaraan</strong></label></div>
                                                                            <div class="col-xl-12">
                                                                                <div class="form-check form-check-inline"><input class="form-check-input" type="radio" name="jenisKendaraan" value="Pesawat"><label class="form-check-label text-size" for="formCheck-2"><strong>Pesawat</strong></label></div>
                                                                                <div
                                                                                    class="form-check form-check-inline"><input class="form-check-input" type="radio"  name="jenisKendaraan" value="Kerta"><label class="form-check-label text-size" for="formCheck-2"><strong>Kereta</strong></label></div>
                                                                            <div
                                                                                class="form-check form-check-inline"><input class="form-check-input" type="radio" name="jenisKendaraan"value="Bus"><label class="form-check-label text-size" for="formCheck-2"><strong>Bus</strong></label></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group"><label class="text-size"><strong>Maskapai / Jenis Kereta / Nama PO</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Maskapai / Jenis Kereta / Nama PO..."
                                                                    name="platNomor" id="maskapai"></div>
                                                        </div>

                                                        <input type="hidden" name="id_perjalanan_dinas" value="<?php echo $id; ?>">
                                                        <div class="col-xl-6">
                                                            <div class="form-group"><label class="text-size"><strong>Nomor Tiket</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Nomor Tiket..." name="nomorTiket" id="nomorTiket"></div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group"><label class="text-size"><strong>Asal</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Asal..." name="asal" id="asal"></div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group"><label class="text-size"><strong>Tujuan</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Tujuan..." name="tujuan" id="tujuan"></div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group"><label class="text-size"><strong>Tanggal Berangkat</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglBerangkat"></div>
                                                        </div>
                                                        <div class="col-xl-3">
                                                            <div class="form-group"><label class="text-size"><strong>Tanggal Kembali</strong></label><input class="form-control form-control-sm text-size" type="date" name="tglKembali"></div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                                    <div class="form-group"><label class="text-size"><strong>Lama Sewa</strong></label><input class="form-control form-control-sm text-size" type="text" name="lamaSewa" placeholder="Isi Lama Sewa..."></div>
                                                                </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group"><label class="text-size"><strong>Biaya Sewa (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" min="0" name="biayaSewa" placeholder="Isi Biaya Sewa..."></div>
                                                        </div>
                                                        <div class="col-xl-6">
                                                            <div class="form-group"><label class="text-size"><strong>Unggah Tiket &nbsp;</strong><br></label><input type="file" class="text-size" name="tiket" id="tiket_umum" onchange="return validasiFile_tiket_umum()"></div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group"><label class="text-size"><strong>Unggah Bill &nbsp;</strong><br></label><input type="file" class="text-size" name="tagihan" id="tagihan_umum" onchange="return validasiFile_tagihan_umum()"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="text-primary card-title"><strong>Penginapan</strong></h6>
                                        <div class="form-row">
                                            <div class="col-xl-12">
                                                <div class="form-group"><label class="text-size"><strong>Hotel</strong></label><input class="form-control form-control-sm text-size" type="text" placeholder="Isi Hotel..." name="hotel" id="hotel"></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Check-in</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkIn" id="checkIn"></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Check-Out</strong></label><input class="form-control form-control-sm text-size" type="date" name="checkOut" id="checkOut"></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Lama</strong></label><input class="form-control form-control-sm text-size" type="number" name="lamaMenginap" min="0" placeholder="Isi Lama Menginap..."></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Biaya (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" name="biayaMenginap" min="0" placeholder="Isi Biaya Menginap..." id="biayaMenginap"></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Unggah Bill &nbsp;</strong></label><input type="file" class="text-size" name="billMenginap" id="tagihan_penginapan" onchange="return validasiFile_tagihan_penginapan()"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="text-primary card-title"><strong>Biaya Lainnya</strong></h6>
                                        <div class="form-row">
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Uang Representasi (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" name="uangRepresentasi" min="0" placeholder="Isi Uang Representasi..."></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Transport Lokal (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" name="transportLokal" min="0" placeholder="Isi Transport Lokal..."></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Transport Ke Bandara / Terminal (Rp. ...)</strong></label><input class="form-control form-control-sm text-size" type="number" name="transportBandara" min="0" placeholder="Isi Transport Ke Bandara / Terminal..."></div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="form-group"><label class="text-size"><strong>Unggah Bill &nbsp;</strong></label><input type="file" class="text-size" name="billLainnya" id="tagihan_lain" onchange="return validasiFile_tagihan_lain()"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center"><button class="btn btn-primary btn-block btn-sm text-size" type="submit"><i class="far fa-edit"></i>&nbsp;Simpan Data Perjalanan Dinas</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>

<script>

    function validasi()
    {

        
         
        var rental=frmJK.jenisTransport[0].checked;
        var umum=frmJK.jenisTransport[1].checked;
        

        if(rental==false && umum==false){

        swal({
                title: "Peringatan!",
                text: "Silakan pilih salah satu Jenis Transport (Umum/Sewa)!"
            });
          return false;

        }else if(rental==false && umum==true){

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

          var maskapai=document.forms["myform"]["maskapai"].value;
          var nomorTiket=document.forms["myform"]["nomorTiket"].value;
          var asal=document.forms["myform"]["asal"].value;
          var tujuan=document.forms["myform"]["tujuan"].value;


          if (maskapai==null || maskapai=="")
          {
           swal({
                title: "Peringatan!",
                text: "Maskapai/Jensi Kereta/Nama PO tidak boleh kosong !"
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
         
        }else if(rental==true && umum==false){

            var jenisKendaraan_rental=document.forms["myform"]["jenisKendaraan_rental"].value;
            var platNomor_rental=document.forms["myform"]["platNomor_rental"].value;
            var namaRental=document.forms["myform"]["namaRental"].value;
            var alamatRental=document.forms["myform"]["alamatRental"].value;
            var asal_rental=document.forms["myform"]["asal_rental"].value;
            var tujuan_rental=document.forms["myform"]["tujuan_rental"].value;

            if (jenisKendaraan_rental==null || jenisKendaraan_rental=="")
          {
           swal({
                title: "Peringatan!",
                text: "Jenis Kendaraan (Rental) tidak boleh kosong!"
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
                  


        }

    
        var hotel=document.forms["myform"]["hotel"].value;
        if (hotel==null || hotel=="")
          {
           swal({
                title: "Peringatan!",
                text: "Hotel tidak boleh kosong!"
            });
          return false;
          };


        var checkIn=document.forms["myform"]["checkIn"].value;
        if (checkIn==null || checkIn=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal Check In tidak boleh kosong!"
            });
          return false;
          };


        var checkOut=document.forms["myform"]["checkOut"].value;
        if (checkOut==null || checkOut=="")
          {
           swal({
                title: "Peringatan!",
                text: "Tanggal Check Out tidak boleh kosong!"
            });
          return false;
          };

        var biayaMenginap=document.forms["myform"]["biayaMenginap"].value;
        if (biayaMenginap==null || biayaMenginap=="")
          {
           swal({
                title: "Peringatan!",
                text: "Biaya menginap tidak boleh kosong!"
            });
          return false;
          };



     }
</script>

<script>
 function validasiFile(){
    var inputFile = document.getElementById('tiket_rental');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}


 function validasiFile_tagihan_rental(){
    var inputFile = document.getElementById('tagihan_rental');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}


 function validasiFile_tiket_umum(){
    var inputFile = document.getElementById('tiket_umum');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}



 function validasiFile_tagihan_umum(){
    var inputFile = document.getElementById('tagihan_umum');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}


 function validasiFile_tagihan_penginapan(){
    var inputFile = document.getElementById('tagihan_penginapan');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}


function validasiFile_tagihan_lain(){
    var inputFile = document.getElementById('tagihan_lain');
    var pathFile = inputFile.value;
    var ekstensiOk = /(\.csv|\.xlsx|\.xls|\.jpg|\.pdf)$/i;
    if(!ekstensiOk.exec(pathFile)){

        swal({
                title: "Peringatan!",
                text: "Silakan upload file yang memiliki ekstensi .csv/.xlsx/.xls/.jpg/.pdf"
            });
        inputFile.value = '';
        return false;
    }else{
        //Pratinjau gambar
        if (inputFile.files && inputFile.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('pratinjauGambar').innerHTML = '<img src="'+e.target.result+'"/>';
            };
            reader.readAsDataURL(inputFile.files[0]);
        }
    }
}
</script>