<?php
Class Dinas_model extends CI_Model
{
  /*
    function tambah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,$image=""){

    	$this->db->set('id_user',$cek_id_user);
    	$this->db->set('perihal',$perihal);
    	$this->db->set('asal',$asal);
    	$this->db->set('tujuan_lokasi',$tujuanLokasi);
    	$this->db->set('lama_perjalanan',$lamaPerjalanan);
    	$this->db->set('surat_perintah',$suratPerintah);
    	$this->db->set('tgl_kembali',$tgl_kembali);
    	$this->db->set('tgl_berangkat',$tgl_berangkat);
    	$this->db->set('file',$image);
    	$this->db->insert('perjalanan_dinas');
    }

/*
     function tambah_transport_dinas($jenisTransport,$jenisKendaraan_rental,$platNomor_rental,$namaRental="",$alamatRental="",$asal_rental,$tujuan_rental,$tglBerangkat_rental="",$tglKembali_rental="",$lamaSewa_rental="",$biayaSewa_rental="",$nama_tiket="",$nama_tagihan="",$id_perjalanan_dinas,$nomorTiket=""){

        $this->db->set('jenis',$jenisTransport);
        $this->db->set('jenis_kendaraan',$jenisKendaraan_rental);
        $this->db->set('plat_nomor',$platNomor_rental);
        if($namaRental){
          $this->db->set('nama_rental',$namaRental);   
        }

        if($alamatRental){
          $this->db->set('alamat_rental',$alamatRental);
        }

        $this->db->set('asal',$asal_rental);
        $this->db->set('tujuan',$tujuan_rental);
        
        if($tglBerangkat_rental){
              $this->db->set('tgl_berangkat',$tglBerangkat_rental);
        }

        if($tglKembali_rental){
               $this->db->set('tgl_kembali',$tglKembali_rental);
        }

        if($lamaSewa_rental){
            $this->db->set('lama_sewa',$lamaSewa_rental);
        }


        if($biayaSewa_rental){
              $this->db->set('biaya_sewa',$biayaSewa_rental);
        }
      

        if($nama_tiket){
              $this->db->set('tiket',$nama_tiket);
        }

        
        if($nama_tagihan){
             $this->db->set('tagihan',$nama_tagihan);
        }

        if($nomorTiket){
             $this->db->set('nomor_tiket',$nomorTiket);
        }


        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->insert('transportasi');
    }


     function tambah_penginapan($id_perjalanan_dinas,$hotel,$checkIn,$checkOut,$lamaMenginap,$biayaMenginap,$nama_tagihan_penginapan=""){

        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->set('hotel',$hotel);
        $this->db->set('tgl_mendaftar',$checkIn);
        $this->db->set('tgl_keluar',$checkOut);
        $this->db->set('lama',$lamaMenginap);
        $this->db->set('biaya',$biayaMenginap);
        if($nama_tagihan_penginapan){
              $this->db->set('tagihan',$nama_tagihan_penginapan);
        }
        $this->db->insert('penginapan');
    }


    function tambah_biaya_lainnya($id_perjalanan_dinas,$uangRepresentasi="",$transportLokal="",$transportBandara="",$nama_tagihan_lain=""){
       
       if($uangRepresentasi){
        $this->db->set('uang_representasi',$uangRepresentasi);
       }

       if($transportLokal){
         $this->db->set('transport_lokal',$transportLokal);
       }

       if($transportBandara){
         $this->db->set('transport_bandara',$transportBandara);
       }

      if($nama_tagihan_lain){
         $this->db->set('tagihan',$nama_tagihan_lain);
       }

        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->insert('biaya_lainya');
    }


    function ubah_perjalanan_dinas($cek_id_user,$perihal,$asal,$tujuanLokasi,$lamaPerjalanan,$suratPerintah,$tgl_kembali,$tgl_berangkat,$image="",$id){

        $this->db->set('id_user',$cek_id_user);
        $this->db->set('perihal',$perihal);
        $this->db->set('asal',$asal);
        $this->db->set('tujuan_lokasi',$tujuanLokasi);
        $this->db->set('lama_perjalanan',$lamaPerjalanan);
        $this->db->set('surat_perintah',$suratPerintah);
        $this->db->set('tgl_kembali',$tgl_kembali);
        $this->db->set('tgl_berangkat',$tgl_berangkat);
        if($image){
        $this->db->set('file',$image);
        }
        $this->db->where('id',$id);
        $this->db->update('perjalanan_dinas');
    }
    */

    function tampil_perjalanan_dinas($number="",$offset=""){

		$this->db->select('*,perjalanan_dinas.id as id_dinas');
		$this->db->from('perjalanan_dinas');
    /*
		$this->db->join('mst_dewan','mst_dewan.id_user = perjalanan_dinas.id_user','left');
		$this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->join('transportasi','perjalanan_dinas.id = transportasi.id_perjalanan_dinas','left');
         $this->db->where('perjalanan_dinas.id_transportasi !=','0');
         */
         if($number){
         $this->db->limit($number,$offset);
       }
		return $this->db->get()->result();
	}
/*
     function jumlah_perjalanan_dinas(){

        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->join('mst_dewan','mst_dewan.id_user = perjalanan_dinas.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->join('transportasi','perjalanan_dinas.id = transportasi.id_perjalanan_dinas','left');
         $this->db->where('perjalanan_dinas.id_transportasi !=','0');
        return $this->db->get()->num_rows();
    }


      function tampil_perjalanan_dinas_transportasi(){

        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->join('mst_dewan','mst_dewan.id_user = perjalanan_dinas.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->where('perjalanan_dinas.id_transportasi','0');
        return $this->db->get()->result();
    }

    function tampil_transportasi($dinas){

        $this->db->select('*');
        $this->db->from('transportasi');
         $this->db->where('id_perjalanan_dinas',$dinas);
        return $this->db->get()->result();
    }
      function tampil_penginapan($dinas){

        $this->db->select('*');
        $this->db->from('penginapan');
         $this->db->where('id_perjalanan_dinas',$dinas);
        return $this->db->get()->result();
    }
    function tampil_biaya_lain($dinas){

        $this->db->select('*');
        $this->db->from('biaya_lainya');
         $this->db->where('id_perjalanan_dinas',$dinas);
        return $this->db->get()->result();
    }



    function detail_dinas($id_dinas){

        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->join('mst_dewan','mst_dewan.id_user = perjalanan_dinas.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->where('perjalanan_dinas.id',$id_dinas);
        return $this->db->get()->result();

    }

    function delete_dinas($id){
    $this->db->where('id', $id);
    $this->db->delete('perjalanan_dinas');
    }

     function cek_id_transport_terakhir(){

        $this->db->select('id');
        $this->db->from('transportasi');
        $this->db->order_by('id','DESC');
        $this->db->limit('1');
        $query=$this->db->get()->result();
        foreach($query as $row){
            $id_transport=$row->id;
        }
        return $id_transport;
    }


     function ubah_transport_dinas($jenisTransport,$jenisKendaraan_rental,$platNomor_rental,$namaRental="",$alamatRental="",$asal_rental,$tujuan_rental,$tglBerangkat_rental="",$tglKembali_rental="",$lamaSewa_rental="",$biayaSewa_rental="",$nama_tiket="",$nama_tagihan="",$id_perjalanan_dinas,$nomorTiket="",$id_transport){

        $this->db->set('jenis',$jenisTransport);
        $this->db->set('jenis_kendaraan',$jenisKendaraan_rental);
        $this->db->set('plat_nomor',$platNomor_rental);
        if($namaRental){
          $this->db->set('nama_rental',$namaRental);   
        }

        if($alamatRental){
          $this->db->set('alamat_rental',$alamatRental);
        }

        $this->db->set('asal',$asal_rental);
        $this->db->set('tujuan',$tujuan_rental);
        
        if($tglBerangkat_rental){
              $this->db->set('tgl_berangkat',$tglBerangkat_rental);
        }

        if($tglKembali_rental){
               $this->db->set('tgl_kembali',$tglKembali_rental);
        }

        if($lamaSewa_rental){
            $this->db->set('lama_sewa',$lamaSewa_rental);
        }


        if($biayaSewa_rental){
              $this->db->set('biaya_sewa',$biayaSewa_rental);
        }
      

        if($nama_tiket){
              $this->db->set('tiket',$nama_tiket);
        }

        
        if($nama_tagihan){
             $this->db->set('tagihan',$nama_tagihan);
        }

        if($nomorTiket){
             $this->db->set('nomor_tiket',$nomorTiket);
        }


        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->where('id',$id_transport);
        $this->db->update('transportasi');
    }


     function ubah_penginapan($id_perjalanan_dinas,$hotel,$checkIn,$checkOut,$lamaMenginap,$biayaMenginap,$nama_tagihan_penginapan="",$id_penginapan){

        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->set('hotel',$hotel);
        $this->db->set('tgl_mendaftar',$checkIn);
        $this->db->set('tgl_keluar',$checkOut);
        $this->db->set('lama',$lamaMenginap);
        $this->db->set('biaya',$biayaMenginap);
        if($nama_tagihan_penginapan){
              $this->db->set('tagihan',$nama_tagihan_penginapan);
        }
        $this->db->where('id',$id_penginapan);
        $this->db->update('penginapan');
    }

    function ubah_biaya_lainnya($id_perjalanan_dinas,$uangRepresentasi="",$transportLokal="",$transportBandara="",$nama_tagihan_lain="",$id_biaya_lain){
       
       if($uangRepresentasi){
        $this->db->set('uang_representasi',$uangRepresentasi);
       }

       if($transportLokal){
         $this->db->set('transport_lokal',$transportLokal);
       }

       if($transportBandara){
         $this->db->set('transport_bandara',$transportBandara);
       }

      if($nama_tagihan_lain){
         $this->db->set('tagihan',$nama_tagihan_lain);
       }

        $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
        $this->db->where('id',$id_biaya_lain);
        $this->db->update('biaya_lainya');
    }


     function tambah_surat_tugas($nomorSuratTugas,$maksudPerjalanan){

      $this->db->set('surat_perintah',$nomorSuratTugas);
      $this->db->set('perihal',$maksudPerjalanan);
      $this->db->insert('perjalanan_dinas');
    }
    */
/*

    function cek_id_terakhir(){
      $this->db->select('*');
      $this->db->from('perjalanan_dinas');
      $this->db->order_by('id','DESC');
      $this->db->limit('1');
      $query=$this->db->get()->result();
        foreach($query as $row){
            $id_dinas=$row->id;
        }
        return $id_dinas;

    }
/*
    function tampil_users_dewan(){
        $this->db->select('*,users.id as id_user');
        $this->db->from('users');
        $this->db->join('users_groups','users_groups.user_id = users.id','left');
        $this->db->where('users_groups.group_id','4');
        return $this->db->get()->result();
    }

*/
    function tambah_transport($namaRental,$alamatRental,$kontakRental,$asalRental,$tujuanRental,$tglBerangkatRental,$tglkembaliRental,$jumlahHariRental,$rateRental,$totalRental,$jenisTransport,$id_perjalanan_dinas,$hargaTiketUdara="",$noTiketMaskapai="",$anggaran="",$akun="",$keterangan_rental){
      
      $this->db->set('jenis',$jenisTransport);
      $this->db->set('nama_rental',$namaRental);
      $this->db->set('alamat_rental',$alamatRental);
      $this->db->set('kontak_rental',$kontakRental);
      $this->db->set('tgl_berangkat',$tglBerangkatRental);
      $this->db->set('tgl_kembali',$tglkembaliRental);
      $this->db->set('lama_sewa',$jumlahHariRental);
      $this->db->set('biaya_sewa',$rateRental);
      $this->db->set('total_biaya_rental',$totalRental);
      $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
      $this->db->set('asal',$asalRental);
      $this->db->set('tujuan',$tujuanRental);

      if($hargaTiketUdara){
        $this->db->set('harga_tiket',$hargaTiketUdara);
      }

       if($noTiketMaskapai){
        $this->db->set('nomor_tiket',$noTiketMaskapai);
      }

      if($anggaran){
        $this->db->set('anggaran',$anggaran);
      }

       if($akun){
        $this->db->set('akun',$akun);
      }

       if($keterangan_rental){
        $this->db->set('keterangan_rental',$keterangan_rental);
      }
      $this->db->insert('transportasi');

    }



    function cek_id_terakhir(){
      $this->db->select('*');
      $this->db->from('perjalanan_dinas');
      $this->db->order_by('id','DESC');
      $this->db->limit('1');
      $query=$this->db->get()->result();
        foreach($query as $row){
            $id_dinas=$row->id;
        }
        return $id_dinas;

    }

    function cek_id_terakhir_user_dinas(){
      $this->db->select('*');
      $this->db->from('users_dinas');
      $this->db->order_by('id','DESC');
      $this->db->limit('1');
      $query=$this->db->get()->result();
        foreach($query as $row){
            $id_dinas=$row->id;
        }
        return $id_dinas;

    }



     function tambah_penginapan($cek_terakhir,$hotelDarat,$checkInDarat,$checkOutDarat,$jumlahAkoDarat,$gudarat,$hariUdara="",$rateHotelUdara,$totalHotelUdara="",$uangRepresentasi="",$uangTransportlokal="",$uangTransportBandara="",$totalRepresentasi=""){
      $this->db->set('id_perjalanan_dinas',$cek_terakhir);
      $this->db->set('hotel',$hotelDarat);
      $this->db->set('tgl_mendaftar',$checkInDarat);
      $this->db->set('tgl_keluar',$checkOutDarat);
      $this->db->set('jumlah_ako',$jumlahAkoDarat);
      $this->db->set('gu',$gudarat);
      if($hariUdara){
          $this->db->set('lama',$hariUdara);
      }

      if($rateHotelUdara){
         $this->db->set('biaya',$rateHotelUdara);
      }

      if($totalHotelUdara){
        $this->db->set('total_rate',$totalHotelUdara);
      }

      if($uangRepresentasi){
         $this->db->set('uang_representasi',$uangRepresentasi);
      }

      if($uangTransportlokal){
         $this->db->set('transport_lokal',$uangTransportlokal);
      }

       if($uangTransportBandara){
         $this->db->set('transport_bandara',$uangTransportBandara);
      }

       if($totalRepresentasi){
         $this->db->set('total_representasi',$totalRepresentasi);
      }
      $this->db->insert('penginapan');

    }

     function tampil_users_dewan(){
        $this->db->select('*,users.id as id_user');
        $this->db->from('users');
        $this->db->join('users_groups','users_groups.user_id = users.id','left');
        $this->db->where('users_groups.group_id','4');
        return $this->db->get()->result();
    }

  function tambah_surat_tugas($nomorSuratTugas,$maksudPerjalanan,$peserta_dinas,$pejabat,$tgl_input,$tingkatBiaya,$jumlahPesertaDinas,$jenis_kendaraan,$ID){

      $this->db->set('surat_perintah',$nomorSuratTugas);
      $this->db->set('perihal',$maksudPerjalanan);
      $this->db->set('status_peserta_dinas',$peserta_dinas);
      $this->db->set('pejabat',$pejabat);
      $this->db->set('tgl_input',$tgl_input);
      $this->db->set('tingkat_biaya',$tingkatBiaya);
      $this->db->set('jumlah_peserta',$jumlahPesertaDinas);
      $this->db->set('jenis_kendaraan',$jenis_kendaraan);
      $this->db->set('id_user',$ID);
      $this->db->insert('perjalanan_dinas');
    }


    function tambah_uang_harian($id_dinas,$jumlahHariUangHarian,$rateUangHarian,$totalUangHarian,$nama){
       $this->db->set('id_perjalanan_dinas',$id_dinas);
      $this->db->set('nama',$nama);
       $this->db->set('rate',$rateUangHarian);
       $this->db->set('total',$totalUangHarian);
         $this->db->set('jumlah_hari',$jumlahHariUangHarian);
      $this->db->insert('biaya_lainya');

    }

    function jumlah_perjalanan_dinas(){

        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->join('mst_dewan','mst_dewan.id_user = perjalanan_dinas.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->join('transportasi','perjalanan_dinas.id = transportasi.id_perjalanan_dinas','left');
         $this->db->where('perjalanan_dinas.id_transportasi !=','0');
        return $this->db->get()->num_rows();
    }

    function delete_dinas($id){
    $this->db->where('id', $id);
    $this->db->delete('perjalanan_dinas');
    }
	
	function select_perjalanan_dinas($pilihan="",$parameter=""){
   	
        if($parameter=="DPRD" || $parameter=="dprd" || $parameter=="Dprd"){
               $param_user="1";
        }

         if($parameter=="Setwan" || $parameter=="SETWAN" || $parameter=="setwan"){
              $param_user="2";
          }



      $this->db->select('*,perjalanan_dinas.id as id_dinas');
      $this->db->from('perjalanan_dinas');
      $this->db->join('users_dinas','users_dinas.id_dinas = perjalanan_dinas.id','left');

      if($pilihan=="udara" and $parameter==""){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','2');
      }elseif($pilihan=="darat" and $parameter==""){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','1');
        

      }elseif($pilihan=="semua" and $parameter==""){


      }elseif($pilihan=="udara" and $parameter){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','2');
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
        $this->db->group_end();

      }elseif($pilihan=="darat" and $parameter){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','1');
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
         $this->db->group_end();
      }elseif($pilihan=="semua" and $parameter){
      
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
         $this->db->group_end();
      }


      $this->db->group_by('perjalanan_dinas.id');
      return $this->db->get()->result();
  }

  function select_perjalanan_dinas_id($id_terakhir){
    
      $this->db->select('*');
      $this->db->from('perjalanan_dinas');
      $this->db->where('id',$id_terakhir);
      return $this->db->get()->result();
  }
  
  
    function tampil_perjalanan_dinas_id($id){
        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->where('id',$id);
        return $this->db->get()->result();

    }

     function ubah_surat_tugas($nomorSuratTugas,$maksudPerjalanan="",$id,$peserta_dinas="",$pejabat="",$tingkatBiaya="",$jumlahPesertaDinas=""){

        $this->db->set('surat_perintah',$nomorSuratTugas);
        if($maksudPerjalanan){
           $this->db->set('perihal',$maksudPerjalanan);
         }
         if($peserta_dinas){
            $this->db->set('status_peserta_dinas',$peserta_dinas);
         }

         if($pejabat){
           $this->db->set('pejabat',$pejabat);
         }

         if($tingkatBiaya){
           $this->db->set('tingkat_biaya',$tingkatBiaya);
         }

       if($jumlahPesertaDinas){
           $this->db->set('jumlah_peserta',$jumlahPesertaDinas);
         }

        $this->db->where('id',$id);
        $this->db->update('perjalanan_dinas');
    }

    function tampil_users_dinas($id){
        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental');
        $this->db->from('users_dinas');
        $this->db->join('mst_dewan','users_dinas.id_user = mst_dewan.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->join('mst_jabatan','mst_jabatan.id = mst_dewan.id_jabatan','left');
        $this->db->where('id_dinas',$id);
        $this->db->order_by('mst_jabatan.urutan','ASC');
        return $this->db->get()->result();

    }


    function tampil_users_dinas_spt($id,$id_atasan=""){
        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental');
        $this->db->from('users_dinas');
        $this->db->join('mst_dewan','users_dinas.id_user = mst_dewan.id_user');
        $this->db->join('users','users.id = mst_dewan.id_user');
        $this->db->where('users_dinas.id_dinas',$id);
        /*
        $this->db->group_start();
            $this->db->where('mst_dewan.jabatan !=','Wakil Ketua');
            $this->db->or_where('mst_dewan.jabatan !=','Ketua');
        $this->db->group_end();
        */
        $this->db->where_not_in('users_dinas.id_user',$id_atasan);
        $this->db->where('users_dinas.id_user !=',0);
        

        return $this->db->get()->result();

    }


    function tampil_users_dinas_limit_1($id){
        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental');
        $this->db->from('users_dinas');
        $this->db->join('mst_dewan','users_dinas.id_user = mst_dewan.id_user','left');
        $this->db->join('users','users.id = mst_dewan.id_user','left');
        $this->db->limit('1');
        $this->db->where('id_dinas',$id);
        return $this->db->get()->result();

    }


    function tampil_users_dinas_setwan($id){
        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental');
        $this->db->from('users_dinas');
        $this->db->join('mst_setwan','users_dinas.id_user = mst_setwan.id','left');
        $this->db->join('mst_jabatan','mst_setwan.id_jabatan = mst_jabatan.id','left');
    
        $this->db->where('id_dinas',$id);
        $this->db->where('jabatan !=','Sekretaris DPRD');
        $this->db->order_by('mst_jabatan.urutan','ASC');
        return $this->db->get()->result();

    }

    function tampil_users_dinas_setwan_limit_1($id){
        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental');
        $this->db->from('users_dinas');
        $this->db->join('mst_setwan','users_dinas.id_user = mst_setwan.id','left');
        $this->db->where('id_dinas',$id);
        $this->db->limit('1');
        return $this->db->get()->result();
        

    }


    function get_option_users($param){
    
      $this->db->select('*');
      $this->db->from('mst_dewan');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->WHERE_NOT_IN('users.id',$param);
      return $this->db->get()->result();
  }

  function get_option_users_setwan($param){
    
      $this->db->select('*');
      $this->db->from('mst_setwan');
      $this->db->WHERE_NOT_IN('id',$param);
      return $this->db->get()->result();
  }


     function tampil_transportasi($id){
        $this->db->select('*');
        $this->db->from('transportasi');
        $this->db->where('id_perjalanan_dinas',$id);
        return $this->db->get()->result();
    }

     function tampil_penginapan($dinas){

        $this->db->select('*');
        $this->db->from('penginapan');
        $this->db->where('id_perjalanan_dinas',$dinas);
        return $this->db->get()->result();
    }


     function tampil_uang_harian($dinas,$param){

        $this->db->select('*');
        $this->db->from('biaya_lainya');
        $this->db->where('id_perjalanan_dinas',$dinas);
        $this->db->where('nama',$param);
        return $this->db->get()->result();
    }

   



   function hapus_users_dinas($id){
    $this->db->where('id_dinas', $id);
    $this->db->delete('users_dinas');
    }


     function ubah_transport($namaRental,$alamatRental,$kontakRental,$asalRental,$tujuanRental,$tglBerangkatRental,$tglkembaliRental,$jumlahHariRental,$rateRental,$totalRental,$jenisTransport,$id_perjalanan_dinas,$hargaTiketUdara="",$noTiketMaskapai="",$id_transportasi,$anggaran="",$akun="",$keterangan_rental){

      $this->db->set('jenis',$jenisTransport);
      $this->db->set('nama_rental',$namaRental);
      $this->db->set('alamat_rental',$alamatRental);
      $this->db->set('kontak_rental',$kontakRental);
      $this->db->set('tgl_berangkat',$tglBerangkatRental);
      $this->db->set('tgl_kembali',$tglkembaliRental);
      $this->db->set('lama_sewa',$jumlahHariRental);
      $this->db->set('biaya_sewa',$rateRental);
      $this->db->set('total_biaya_rental',$totalRental);
      $this->db->set('id_perjalanan_dinas',$id_perjalanan_dinas);
      $this->db->set('asal',$asalRental);
      $this->db->set('tujuan',$tujuanRental);

      if($hargaTiketUdara){
        $this->db->set('harga_tiket',$hargaTiketUdara);
      }

       if($noTiketMaskapai){
        $this->db->set('nomor_tiket',$noTiketMaskapai);
      }


      if($anggaran){
        $this->db->set('anggaran',$anggaran);
      }

       if($akun){
        $this->db->set('akun',$akun);
      }
   
      if($keterangan_rental){
        $this->db->set('keterangan_rental',$keterangan_rental); 
      }

      $this->db->where('id',$id_transportasi);
      $this->db->update('transportasi');

    }


    function ubah_penginapan($cek_terakhir,$hotelDarat,$checkInDarat,$checkOutDarat,$jumlahAkoDarat,$gudarat,$hariUdara="",$rateHotelUdara="",$totalHotelUdara="",$uangRepresentasi="",$uangTransportlokal="",$uangTransportBandara="",$totalRepresentasi="",$id_penginapan){
      $this->db->set('id_perjalanan_dinas',$cek_terakhir);
      $this->db->set('hotel',$hotelDarat);
      $this->db->set('tgl_mendaftar',$checkInDarat);
      $this->db->set('tgl_keluar',$checkOutDarat);
      $this->db->set('jumlah_ako',$jumlahAkoDarat);
      $this->db->set('gu',$gudarat);
      if($hariUdara){
          $this->db->set('lama',$hariUdara);
      }

      if($rateHotelUdara){
         $this->db->set('biaya',$rateHotelUdara);
      }

      if($totalHotelUdara){
        $this->db->set('total_rate',$totalHotelUdara);
      }

      if($uangRepresentasi){
         $this->db->set('uang_representasi',$uangRepresentasi);
      }

      if($uangTransportlokal){
         $this->db->set('transport_lokal',$uangTransportlokal);
      }

       if($uangTransportBandara){
         $this->db->set('transport_bandara',$uangTransportBandara);
      }

       if($totalRepresentasi){
         $this->db->set('total_representasi',$totalRepresentasi);
      }
      $this->db->where('id',$id_penginapan);
      $this->db->update('penginapan');

    }



    function ubah_uang_harian($id_dinas,$jumlahHariUangHarian,$rateUangHarian,$totalUangHarian,$nama,$id_biaya_harian){
       $this->db->set('id_perjalanan_dinas',$id_dinas);
      $this->db->set('nama',$nama);
       $this->db->set('rate',$rateUangHarian);
       $this->db->set('total',$totalUangHarian);
         $this->db->set('jumlah_hari',$jumlahHariUangHarian);
      $this->db->where('id',$id_biaya_harian);
      $this->db->update('biaya_lainya');

    }


    function tampil_perjalanan_dinas_status_user($status_user){
        $this->db->select('*,perjalanan_dinas.id as id_dinas');
        $this->db->from('perjalanan_dinas');
        $this->db->where('status_peserta_dinas',$status_user);
        return $this->db->get()->result();
    }


    function select_ketua_dprd($id){
		/*
        $this->db->select('*');
        $this->db->from('mst_dewan');
        $this->db->like('jabatan','Ketua DPRD');
        $this->db->or_like('jabatan','Wakil Ketua');
        return $this->db->get()->result();
		*/
		 $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.nama as namarental, users_dinas.id_user as id_userr');
        $this->db->from('users_dinas');
        $this->db->join('mst_dewan','users_dinas.id_user = mst_dewan.id_user','left');
        $this->db->join('mst_jabatan','mst_dewan.id_jabatan = mst_jabatan.id','left');
        /*
        $this->db->join('users','users.id = mst_dewan.id_user','left');
       
        */
         $this->db->where('users_dinas.id_dinas',$id);
         /*
        $this->db->like('jabatan','Ketua');
        $this->db->or_like('jabatan','Wakil Ketua');
        */
        $this->db->group_start();
             $this->db->where('mst_dewan.jabatan','Ketua');
             $this->db->or_where('mst_dewan.jabatan','Wakil Ketua');
        $this->db->group_end();
		    $this->db->order_by('mst_jabatan.urutan','ASC');
        return $this->db->get()->result();

    }

     function select_atasan_setwan(){
        $this->db->select('*');
        $this->db->from('mst_setwan');
        $this->db->like('jabatan','Sekretaris');
        return $this->db->get()->result();

    }


    function tambah_pengikut($id_dinas,$namaPengikut,$tglPengikut,$keteranganPengikut){
      $this->db->set('id_dinas',$id_dinas);
      $this->db->set('nama_pengikut',$namaPengikut);
      $this->db->set('tgl_lahir',$tglPengikut);
      $this->db->set('keterangan',$keteranganPengikut);
      $this->db->insert('pengikut_dinas');

    }


    function tampil_pengikut($id_dinas){
        $this->db->select('*');
        $this->db->from('pengikut_dinas');
        $this->db->where('id_dinas',$id_dinas);
        return $this->db->get()->result();

    }


    function hapus_pengikut($ID){

    $this->db->where('id', $ID);
    $this->db->delete('pengikut_dinas');
  }

   function cek_jumlah_peserta_dinas($id){
      $this->db->select('jumlah_peserta');
      $this->db->from('perjalanan_dinas');
      $this->db->where('id',$id);
      $query=$this->db->get()->result();
        foreach($query as $row){
            $jumlah_peserta=$row->jumlah_peserta;
        }
        return $jumlah_peserta;

    }



    function tampil_hotel($id_user_dinas){
        $this->db->select('*,penginapan.id as id_penginapan');
        $this->db->from('penginapan');
        $this->db->where('id_user_dinas',$id_user_dinas);
        return $this->db->get()->result();
          
    }

    function tampil_biaya_lain($status,$id_user_dinas){
        $this->db->select('*');
        $this->db->from('biaya_lainya');
        $this->db->where('nama',$status);
        $this->db->where('id_user_dinas',$id_user_dinas);
        return $this->db->get()->result();
          
    }


    function input_data($data,$table){
       return $this->db->insert($table,$data);
    }

    function ubah_data($data,$table,$where){
      $this->db->where($where);
      return $this->db->update($table,$data);
  }


   function users_dinas($pilihan="",$parameter=""){

    if($parameter=="DPRD" || $parameter=="dprd" || $parameter=="Dprd"){
               $param_user="1";
        }

         if($parameter=="Setwan" || $parameter=="SETWAN" || $parameter=="setwan"){
              $param_user="2";
          }


        $this->db->select('*,users_dinas.id as id_user_dinas,users_dinas.id_user as id_people');
        $this->db->from('users_dinas');
        $this->db->join('perjalanan_dinas','users_dinas.id_dinas = perjalanan_dinas.id','left');
        if($pilihan=="udara" and $parameter==""){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','2');
        }elseif($pilihan=="darat" and $parameter==""){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','1');
        

      }elseif($pilihan=="semua" and $parameter==""){

      }elseif($pilihan=="udara" and $parameter){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','2');
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
        $this->db->group_end();

      }elseif($pilihan=="darat" and $parameter){
        $this->db->where('perjalanan_dinas.jenis_kendaraan','1');
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
        $this->db->group_end();
      }elseif($pilihan=="semua" and $parameter){
      
        $this->db->group_start();
         $this->db->where('users_dinas.nama',$parameter);
         $this->db->or_where('users_dinas.namarental2',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$parameter);
         $this->db->or_where('perjalanan_dinas.surat_perintah',$perihal);
         $this->db->or_where('perjalanan_dinas.status_peserta_dinas',$param_user);
         $this->db->group_end();
      }
        
        /*
        $this->db->join('mst_dewan','mst_dewan.id_user = users_dinas.id_user','left');
        */
        
        return $this->db->get()->result();
   }


   function tampil_detail_dewan($id_dewan){
       $this->db->select('*');
       $this->db->from('mst_dewan');
       $this->db->where('id_user',$id_dewan);
       $query=$this->db->get()->result();
       foreach($query as $row){
        $nama_lengkap=$row->nama_lengkap;
       }
       return $nama_lengkap;
   }


   function tampil_detail_setwan($id_setwan){
       $this->db->select('*');
       $this->db->from('mst_setwan');
       $this->db->where('id',$id_setwan);
       $query2=$this->db->get()->result();
       foreach($query2 as $row){
         $nama=$row->nama;
       }
       return $nama;

   }


   function tampil_dinas_dprd($param){
        $this->db->select('*');
        $this->db->from('perjalanan_dinas');
        $this->db->where('status_peserta_dinas',$param);
        return $this->db->get()->result();
          
    }

     function tampil_dinas_jenis($param){
        $this->db->select('*');
        $this->db->from('perjalanan_dinas');
        $this->db->where('jenis_kendaraan',$param);
        return $this->db->get()->result();
          
    }

    function tampil_ketua_dprd(){
        $this->db->select('*');
        $this->db->from('mst_dewan');
        $this->db->where('mst_dewan.jabatan','Ketua');
        $this->db->limit('1');
        return $this->db->get()->result();
       


          
    }

     function tampil_sekretaris_setwan(){
        $this->db->select('*');
        $this->db->from('mst_setwan');
        $this->db->like('jabatan','Sekretaris');
        $this->db->limit('1');
        return $this->db->get()->result();
        


          
    }


}