<?php
Class Sidang_model extends CI_Model
{
  
    function tambah_jadwal_sidang($tanggal,$hari,$waktu,$tempat,$acara){
      $this->db->set('tanggal',$tanggal);
      $this->db->set('hari',$hari);
      $this->db->set('waktu',$waktu);
      $this->db->set('tempat',$tempat);
      $this->db->set('acara',$acara);
      $this->db->insert('jadwal_sidang');

    }

    function ubah_jadwal_sidang($tanggal,$hari,$waktu,$tempat,$acara,$id){
      $this->db->set('tanggal',$tanggal);
      $this->db->set('hari',$hari);
      $this->db->set('waktu',$waktu);
      $this->db->set('tempat',$tempat);
      $this->db->set('acara',$acara);
      $this->db->where('id',$id);
      $this->db->update('jadwal_sidang');

    }

     function tampil_sidang(){

      $this->db->select('*');
      $this->db->from('jadwal_sidang');

      return $this->db->get()->result();
    }

    function hapus_jadwal_sidang($id){

      $this->db->where('id', $id);
    $this->db->delete('jadwal_sidang');  
    }


  
}