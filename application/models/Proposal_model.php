<?php
Class Proposal_model extends CI_Model
{
  
    function tambah_proposal($reses,$cek_id_user,$judulProposal,$image=""){

        $this->db->set('id_user',$cek_id_user);
        $this->db->set('reses',$reses);
        $this->db->set('judul_proposal',$judulProposal);
        if($image){
        $this->db->set('proposal',$image);
        }
        $this->db->insert('proposal');
    }

    function ubah_proposal($reses,$cek_id_user,$judulProposal,$image="",$id){

        $this->db->set('id_user',$cek_id_user);
        $this->db->set('reses',$reses);
        $this->db->set('judul_proposal',$judulProposal);
        if($image){
        $this->db->set('proposal',$image);
        }
        $this->db->where('id_proposal',$id);
        $this->db->update('proposal');
    }



     function tampil_proposal(){
    
      $this->db->select('*');
      $this->db->from('proposal');
      $this->db->join('mst_dewan','mst_dewan.id_user = proposal.id_user','left');
      $this->db->join('users','users.id = mst_dewan.id_user','left');
      $this->db->join('mst_fraksi','mst_dewan.id_fraksi = mst_fraksi.id','left');
      $this->db->join('mst_dapil','mst_dewan.id_dapil = mst_dapil.id','left');
      return $this->db->get()->result();
  }


  function hapus_proposal($id){

    $this->db->where('id_proposal', $id);
    $this->db->delete('proposal');
  }

    function update_proposal_usulan($id,$reses,$cek_id_user,$tgl,$jumlah_konsituen,$snack,$tenda,$spanduk,$sound_system,$makanan,$minuman="",$tempat="",$hari="",$waktu="",$kursi="",$id_pendamping="")
  {

    $this->reses =  $reses;
    $this->id_user =  $cek_id_user;
    $this->tanggal =  $tgl;
    $this->jumlah_konsituen =  $jumlah_konsituen;
    $this->snack =  $snack;
    $this->tenda =  $tenda;
    $this->spanduk =  $spanduk;
    $this->sound_system =  $sound_system;
     $this->makanan =  $makanan;
     if($minuman){ 
     $this->minuman =  $minuman;

     }
     if($tempat){
         $this->tempat =  $tempat;
     }

     if($hari){
         $this->hari =  $hari;
     }
     if($waktu){
         $this->waktu =  $waktu;
     }

     if($kursi){
         $this->kursi =  $kursi;
     }

      if($id_pendamping){
         $this->id_pendamping =  $id_pendamping;
     }



    $this->db->update('usulan', $this, array('id' => $id)); 
  }

   function delete_proposal($id){

    $this->db->where('id', $id);
    $this->db->delete('usulan');
  }

      function simpan_bidang($id,$nama,$alamat,$bidang,$aspirasi,$volume,$lokasi)
  {

    $this->nama =  $nama;
    $this->alamat =  $alamat;
    $this->bidang =  $bidang;
    $this->kesimpulan =  $aspirasi;
    $this->volume =  $volume;
    $this->lokasi =  $lokasi;
    $this->db->update('usulan', $this, array('id' => $id)); 
  }

}