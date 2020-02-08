<?php
Class Usulan_model extends CI_Model
{

   function cek_dewan($myInput){
    /*
      $this->db->select('*');
      $this->db->from('users');
      $this->db->join('mst_dewan','mst_dewan.id_user = users.id','left');
       $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
       $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('users.first_name',$first);
      $this->db->where('users.last_name',$last);
      if($gelar){
      $this->db->where('users.gelar',$gelar);
      }
      */

      $this->db->select('*');
      /*
      $this->db->join('mst_dewan','mst_dewan.id_user = users.id','left');
      */
      $this->db->from('mst_dewan');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('nama_lengkap',$myInput);
      /*
      $this->db->where('users.last_name',$last);
      */
      return $this->db->get()->result();
  }


  function select_usulan(){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,users.gelar,usulan.kesimpulan,mst_dewan.foto');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->group_end();
      return $this->db->get()->result();
  }


  function detail_usulan($id){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,users.gelar,usulan.kesimpulan,mst_dewan.foto,usulan.hari,usulan.waktu,usulan.lokasi,usulan.id_pendamping,usulan.jumlah_konsituen,usulan.snack,usulan.makanan,usulan.kursi,usulan.spanduk,usulan.sound_system,usulan.tenda');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->group_start();
      $this->db->where('usulan.bidang !=','NULL');
      $this->db->or_where('usulan.bidang !=',null);
      $this->db->group_end();
      $this->db->where('usulan.id',$id);
      return $this->db->get()->result();
  }

  function detail_usulan_non($id){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat as alamat_pengusul,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,users.gelar,usulan.kesimpulan,mst_dewan.foto,usulan.hari,usulan.waktu,usulan.lokasi,usulan.id_pendamping,usulan.jumlah_konsituen,usulan.snack,usulan.makanan,usulan.kursi,usulan.spanduk,usulan.sound_system,usulan.tenda,mst_dewan.nama_lengkap');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->where('usulan.id',$id);
      return $this->db->get()->result();
  }


  function detail_usulan_sudah($id){
    /*
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,users.gelar,usulan.kesimpulan,mst_dewan.foto.usulan.jumlah_konsituen,usulan.snack,usulan.tenda
        ,usulan.spanduk,usulan.sound_system,usulan.makanan,usulan.minuman');
        */
      $this->db->select('*,usulan.alamat as alamat_pengusul');
      $this->db->from('usulan');
      $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');

      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      
      $this->db->where('usulan.id',$id);
      return $this->db->get()->result();
  }


  function select_usulan_belum(){
    
      $this->db->select('usulan.id,usulan.reses,usulan.id_user,usulan.tanggal,usulan.tempat,usulan.nama,usulan.alamat,usulan.usulan,usulan.biaya,usulan.proposal,usulan.bidang,users.first_name,users.last_name,mst_fraksi.fraksi,mst_dapil.daerah_pemilihan,users.gelar');
      $this->db->from('usulan');
       $this->db->join('mst_dewan','mst_dewan.id_user = usulan.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      $this->db->group_start();
      $this->db->where('usulan.bidang =','NULL');
      $this->db->or_where('usulan.bidang =',null);
      $this->db->group_end();
      return $this->db->get()->result();
  }



   function cek_id_user($namaAnggota){
    
      $this->db->select('*');
      $this->db->from('mst_dewan');
      $this->db->where('nama_lengkap',$namaAnggota);
      $query=$this->db->get()->result();
      foreach($query as $row){
        $id=$row->id_user;
      }
      return $id;
  }

   
   function save_reses($reses,$cek_id_user,$tgl,$jumlah_konsituen,$tenda,$spanduk,$sound_system,$makanan,$minuman,$snack,$tempat="",$waktu="",$kursi="",$hari="",$id_pendamping){

    $this->db->set('reses',$reses);
    $this->db->set('id_user',$cek_id_user);
    $this->db->set('tanggal',$tgl);
    /*
    $this->db->set('tempat',$tempat);
    $this->db->set('nama',$nama);
    $this->db->set('alamat',$alamat);
    $this->db->set('usulan',$usulan);
    $this->db->set('biaya',$biaya);
    $this->db->set('proposal',$image);
    */

    if($tempat){
      $this->db->set('tempat',$tempat);
    }

      if($hari){
      $this->db->set('hari',$hari);
    }


    if($waktu){
      $this->db->set('waktu',$waktu);
    }

    if($kursi){
      $this->db->set('kursi',$kursi);
    }
    $this->db->set('jumlah_konsituen',$jumlah_konsituen);
    $this->db->set('tenda',$tenda);
    $this->db->set('snack',$snack);
    $this->db->set('spanduk',$spanduk);
    $this->db->set('sound_system',$sound_system);
    $this->db->set('makanan',$makanan);
    if($id_pendamping){
      $this->db->set('id_pendamping',$id_pendamping);
    }
    /*
    $this->db->set('minuman',$minuman);
    */
    $this->db->insert('usulan');

   }


    function update_reses($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,$image,$id)
  {

    $this->reses=  $reses;
    $this->id_user=  $cek_id_user;
    $this->tanggal=  $tgl;
    $this->tempat=  $tempat;
    $this->nama=  $nama;
    $this->alamat=  $alamat;
    $this->usulan=  $usulan;
    $this->biaya=  $biaya;
    $this->proposal=  $image;
     
    $this->db->update('usulan', $this, array('id' => $id)); 
  }

   function update_reses_proposal($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,$id)
  {

    $this->reses=  $reses;
    $this->id_user=  $cek_id_user;
    $this->tanggal=  $tgl;
    $this->tempat=  $tempat;
    $this->nama=  $nama;
    $this->alamat=  $alamat;
    $this->usulan=  $usulan;
    $this->biaya=  $biaya;
    $this->db->update('usulan', $this, array('id' => $id)); 
  }

  function update_bidang($id,$bidang)
  {

    $this->bidang=  $bidang;
    $this->db->update('usulan', $this, array('id' => $id)); 
  }

   function update_kesimpulan($id,$kesimpulan)
  {

    $this->kesimpulan=  $kesimpulan;
    $this->db->update('usulan', $this, array('id' => $id)); 
  }




  function delete_usulan($id){

    $this->db->where('id', $id);
    $this->db->delete('usulan');
  }

   function get_users($ID){

    $this->db->select('*,mst_dewan.id as id_dewan');
    $this->db->from('users');
     $this->db->join('mst_dewan','mst_dewan.id_user = users.id','left');
    $this->db->where('users.id',$ID);
    return $this->db->get()->result();
  }


  function tampil_users($ID){

    $this->db->select('*');
    $this->db->from('mst_pendamping');
    $this->db->where('mst_pendamping.id',$ID);
    return $this->db->get()->result();
  }


    function update_foto_dewan($id_dewan,$image)
  {

        $this->foto =  $image;
        $this->db->update('mst_dewan', $this, array('id' => $id_dewan)); 
  }
    
}