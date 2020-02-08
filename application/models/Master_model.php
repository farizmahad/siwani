<?php
Class Master_model extends CI_Model
{

   function select_dapil(){
   	
      $this->db->select('*');
      $this->db->from('mst_dapil');
      return $this->db->get()->result();
  }

     function select_jabatan(){
    
      $this->db->select('*');
      $this->db->from('mst_jabatan');
      return $this->db->get()->result();
  }
   

  function select_pendamping(){
    
      $this->db->select('*');
      $this->db->from('mst_pendamping');
      return $this->db->get()->result();
  }


  function select_fraksi(){
    
      $this->db->select('*');
      $this->db->from('mst_fraksi');
      return $this->db->get()->result();
  }

   function select_dewan(){
    
      $this->db->select('mst_dewan.id,mst_dewan.id_user,mst_dewan.id_fraksi,mst_dewan.id_dapil,mst_dewan.jabatan as jabatan_dewan,mst_dewan.id_level,mst_dewan.foto,mst_dewan.alamat,users.first_name,users.last_name,users.email,users.gelar,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.nama_lengkap,mst_dewan.nip,mst_dewan.id_jabatan');
      $this->db->from('mst_dewan');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      return $this->db->get()->result();
  }

  function select_dewann(){
    
      $this->db->select('users.first_name,users.last_name,users.gelar,mst_dewan.nama_lengkap');
      $this->db->from('mst_dewan');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      return $this->db->get()->result();
  }
	
	function select_setwan(){
    
      $this->db->select('*');
      $this->db->from('mst_setwan');
      return $this->db->get()->result();
	}

   function last_insert_id(){
    
      $this->db->select('*');
      $this->db->from('users');
      $this->db->order_by('id','desc');
      $this->db->limit('1');
      $query=$this->db->get()->result();
      foreach($query as $row){
        $id=$row->id;
      }
      return $id;

  }


   function select_level(){
    
      $this->db->select('*');
      $this->db->from('groups');
      return $this->db->get()->result();
  }

   function email_exist($email){
    
      $this->db->select('*');
      $this->db->from('users');
      $this->db->where('email',$email);
      return $this->db->get()->result();
  }


    function insert_dapil($dapil)
  {

    $this->db->set('daerah_pemilihan',$dapil);  
    $this->db->insert('mst_dapil');
  }

   function insert_fraksi($fraksi)
  {

    $this->db->set('fraksi',$fraksi);  
    $this->db->insert('mst_fraksi');
  }


   function insert_jabatan($jabatan,$urutan)
  {

    $this->db->set('nama_jabatan',$jabatan);
    $this->db->set('urutan',$urutan);  
    $this->db->insert('mst_jabatan');
  }

  function insert_setwan($nama,$nip,$jabatan,$golongan,$id_jabatan)
  {

    $this->db->set('nama',$nama); 
    $this->db->set('nip',$nip);
    $this->db->set('jabatan',$jabatan);    
    $this->db->set('golongan',$golongan);    
    $this->db->set('id_jabatan',$id_jabatan);    
    $this->db->insert('mst_setwan');
  }
  
  function update_setwan($nama,$nip,$jabatan,$golongan,$id)
  {

	$this->nama =  $nama;
	$this->nip =  $nip;
	$this->jabatan =  $jabatan;
	$this->golongan =  $golongan;
  $this->id_jabatan =  $id_jabatan;
	$this->db->update('mst_setwan', $this, array('id' => $id)); 
  }
  
  function insert_pendamping($nama,$nip,$jabatan)
  {

    $this->db->set('nama',$nama); 
    $this->db->set('nip',$nip);
    $this->db->set('jabatan',$jabatan);    
    $this->db->insert('mst_pendamping');
  }



   function update_pendamping($nama,$nip,$jabatan,$id)
  {

    $this->nama =  $nama;
    $this->nip =  $nip;
     $this->jabatan =  $jabatan;
    $this->db->update('mst_pendamping', $this, array('id' => $id)); 
  }

   function update_dapil($dapil,$id)
  {

    $this->daerah_pemilihan =  $dapil;
    $this->db->update('mst_dapil', $this, array('id' => $id)); 
  }

   function update_fraksi($fraksi,$id)
  {

    $this->fraksi =  $fraksi;
    $this->db->update('mst_fraksi', $this, array('id' => $id)); 
  }



   function update_jabatan($jabatan,$urutan,$id)
  {

    $this->nama_jabatan =  $jabatan;
    $this->urutan =  $urutan;
    $this->db->update('mst_jabatan', $this, array('id' => $id)); 
  }

   function update_dewan($image="",$alamat,$fraksi,$dapil,$jabatan,$id_user,$id,$username="",$namaLengkap,$nip,$id_jabatan)
  {

    $this->alamat   =  $alamat;
    /*
    $this->id_level =  $levelAkses;
    */
    $this->id_fraksi =  $fraksi;
    $this->id_dapil =  $dapil;
    $this->jabatan =  $jabatan;
    $this->nama_lengkap =  $namaLengkap;
    $this->id_jabatan =  $id_jabatan;
    $this->nip =  $nip;
    if($image){
    $this->foto =  $image;
     }
     
    $this->db->update('mst_dewan', $this, array('id' => $id)); 
  }


  function update_groups($last_insert_id,$levelAkses)
  {

    $this->group_id =  $levelAkses;
    $this->db->update('users_groups', $this, array('user_id' => $last_insert_id)); 
  }

  function ubah_groups($last_insert_id,$levelAkses)
  {

    $this->group_id =  $levelAkses;
    $this->db->update('users_groups', $this, array('user_id' => $last_insert_id)); 
  }
   function delete_dapil($id){

    $this->db->where('id', $id);
    $this->db->delete('mst_dapil');
  }

   function delete_fraksi($id){

    $this->db->where('id', $id);
    $this->db->delete('mst_fraksi');
  }


     function delete_jabatan($id){

    $this->db->where('id', $id);
    $this->db->delete('mst_jabatan');
  }


  function delete_dewan($id){

    $this->db->where('id', $id);
    $this->db->delete('mst_dewan');
  }

  function delete_users($id_users){

    $this->db->where('id', $id_users);
    $this->db->delete('users');
  }

   function delete_pendamping($id){

    $this->db->where('id', $id);
    $this->db->delete('mst_pendamping');
  }
	
	function delete_setwan($id){

		$this->db->where('id', $id);
		$this->db->delete('mst_setwan');
	}
  
  function delete_users_groups($id_users){

    $this->db->where('user_id', $id_users);
    $this->db->delete('users_groups');
  }

   function simpan_upload($image="",$alamat,$fraksi,$dapil,$jabatan,$last_insert_id,$namaLengkap,$nip,$id_jabatan){

       $this->db->set('id_fraksi',$fraksi);
       if($image){
          $this->db->set('foto',$image);
       }  
       $this->db->set('alamat',$alamat);
       $this->db->set('id_dapil',$dapil);
       $this->db->set('jabatan',$jabatan);
       $this->db->set('id_user',$last_insert_id); 
       $this->db->set('nama_lengkap',$namaLengkap);
       $this->db->set('nip',$nip);  
       $this->db->set('id_jabatan',$id_jabatan); 
       $this->db->insert('mst_dewan');
        
    }


    function simpan_upload_no_image($alamat,$levelAkses,$fraksi,$dapil,$jabatan,$last_insert_id){
        $data = array(
                'id_fraksi' =>$fraksi,
                'alamat' => $alamat,
                'id_level' => $levelAkses,
                'id_dapil' => $dapil,
                'jabatan' => $jabatan,
                'id_user' => $last_insert_id
            );  
        $this->db->insert('mst_dewan',$data);
        
    }

 function select_reses1($id){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.waktu,usulan.hari,usulan.id_pendamping,usulan.volume,usulan.lokasi,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      /*
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->group_end();
      */
      $this->db->where('reses',$id);
      return $this->db->get()->result();
  }


   function select_reses_belum($id){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.waktu,usulan.hari,usulan.id_pendamping,usulan.volume,usulan.lokasi');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->group_start();
      $this->db->where('usulan.bidang','NULL');
      $this->db->or_where('usulan.bidang',null);
      $this->db->or_where('usulan.bidang ','');
      $this->db->group_end();
      
      $this->db->where('reses',$id);
      return $this->db->get()->result();
  }

    function select_reses_sudah_isi($id){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.waktu,usulan.hari,usulan.id_pendamping,usulan.volume,usulan.lokasi');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->or_where('usulan.bidang !=','');
      $this->db->group_end();
      
      $this->db->where('reses',$id);
      return $this->db->get()->result();
  }


   function select_reses_seluruh_belum(){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->group_start();
      $this->db->where('usulan.bidang ','NULL');
      $this->db->or_where('usulan.bidang ',null);
      $this->db->or_where('usulan.bidang ','');
      $this->db->group_end();
      
     
      return $this->db->get()->result();
  }


   function select_reses_pemerintahan($bidang){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.waktu,usulan.hari,usulan.id_pendamping,usulan.volume,usulan.lokasi,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('bidang',$bidang);
      return $this->db->get()->result();
  }

  function select_reses_pemerintahan_pilihan($bidang,$pilihan,$parameter){


      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.waktu,usulan.hari,usulan.id_pendamping,usulan.volume,usulan.lokasi,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('bidang',$bidang);
      if($pilihan){
          
          if($pilihan=="dewan" and $parameter){
                $this->db->like('mst_dewan.nama_lengkap',$parameter);
          }elseif($pilihan=="reses1" and $parameter){
            $this->db->where('usulan.reses','1');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses2" and $parameter){
            $this->db->where('usulan.reses','2');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses3" and $parameter){
              $this->db->where('usulan.reses','3');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="tahun" and $parameter){
            $this->db->where('YEAR(tanggal)',$parameter);

          }elseif($pilihan=="reses1" and $parameter==""){
            $this->db->where('usulan.reses','1');
          }elseif($pilihan=="reses2" and $parameter==""){
            $this->db->where('usulan.reses','2');
          }elseif($pilihan=="reses3" and $parameter==""){
            $this->db->where('usulan.reses','3');
          }

      }
      return $this->db->get()->result();
  }

   function select_reses_seluruh(){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      /*
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->group_end();
      */
     
      return $this->db->get()->result();
  }



  function select_reses_belum_isi_bidang($pilihan="",$parameter=""){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,usulan.hari,usulan.waktu,usulan,usulan.id_pendamping,usulan.kursi,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->group_start();
      $this->db->where('usulan.bidang =','NULL');
      $this->db->or_where('usulan.bidang =',null);
      $this->db->group_end();
      /*
      $this->db->where('reses',$id);
      */

      if($pilihan){
          
          if($pilihan=="dewan" and $parameter){
                $this->db->like('mst_dewan.nama_lengkap',$parameter);
          }elseif($pilihan=="reses1" and $parameter){
            $this->db->where('usulan.reses','1');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses2" and $parameter){
            $this->db->where('usulan.reses','2');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses3" and $parameter){
              $this->db->where('usulan.reses','3');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="tahun" and $parameter){
            $this->db->where('YEAR(tanggal)',$parameter);

          }elseif($pilihan=="reses1" and $parameter==""){
            $this->db->where('usulan.reses','1');
          }elseif($pilihan=="reses2" and $parameter==""){
            $this->db->where('usulan.reses','2');
          }elseif($pilihan=="reses3" and $parameter==""){
            $this->db->where('usulan.reses','3');
          }

      }
      return $this->db->get()->result();
  }


  function select_reses_sudah($pilihan="",$parameter=""){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,mst_dewan.foto,users.gelar,usulan.jumlah_konsituen,usulan.snack,usulan.tenda,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman,usulan.kesimpulan,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->group_end();
       


      if($pilihan){
          
          if($pilihan=="dewan"){
                $this->db->like('mst_dewan.nama_lengkap',$parameter);
          }elseif($pilihan=="bidang"){
                 $this->db->like('usulan.bidang',$parameter);
          }elseif($pilihan=="reses1" and $parameter){
            $this->db->where('usulan.reses','1');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses2" and $parameter){
            $this->db->where('usulan.reses','2');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="reses3" and $parameter){
              $this->db->where('usulan.reses','3');
            $this->db->where('YEAR(tanggal)',$parameter);
          }elseif($pilihan=="tahun" and $parameter){
            $this->db->where('YEAR(tanggal)',$parameter);

          }elseif($pilihan=="reses1" and $parameter==""){

            $this->db->where('usulan.reses','1');
          }elseif($pilihan=="reses2" and $parameter==""){
            $this->db->where('usulan.reses','2');
          }elseif($pilihan=="reses3" and $parameter==""){
            $this->db->where('usulan.reses','3');
          }

      }
      /*
      $this->db->where('reses',$id);
      */
      return $this->db->get()->result();
  }





  function get_group($id_dewan){
    $this->db->select('*');
      $this->db->from('users_groups');
      $this->db->join('groups','users_groups.group_id = groups.id','left');
      $this->db->where('users_groups.user_id',$id_dewan);
      return $this->db->get()->result();
  }


 function get_option_level($param){
    
      $this->db->select('*');
      $this->db->from('groups');
      $this->db->WHERE_NOT_IN('id',$param);
      return $this->db->get()->result();
  }


  ///

    public function get_users_id($ID){
      $this->db->select('*');
      $this->db->from('mst_dewan');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('mst_dewan.id_user',$ID);
      return $this->db->get()->result();
    }
}