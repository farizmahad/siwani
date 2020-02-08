<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sidang extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	

	function __construct()
	{
		parent::__construct();

        if ($this->session->userdata('rule') !="jadwalsidang")
        {
            redirect('Login/selamat_datang');
        }
		$this->load->model('Proposal_model');
		$this->load->model('Master_model');
		$this->load->model('Usulan_model');
		$this->load->model('Sidang_model');
		
       
       
	}

   public function index()
    {
    	$data['jadwal']=$this->Sidang_model->tampil_sidang();
        $this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('daftar_sidang_vw',$data);
		$this->load->view('layout/footer');
    }

    public function simpan_jadwal(){
    	$tanggal=$this->input->post('tanggal');
    	$id=$this->input->post('id');
    	$hari=$this->input->post('hari');
    	$waktu=$this->input->post('waktu');
    	$tempat=$this->input->post('tempat');
    	$acara=$this->input->post('acara');
        
        if($id){
           $this->Sidang_model->ubah_jadwal_sidang($tanggal,$hari,$waktu,$tempat,$acara,$id);
        }else{
    	   $this->Sidang_model->tambah_jadwal_sidang($tanggal,$hari,$waktu,$tempat,$acara);
       }

    	echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Jadwal Sidang berhasil diperbaharui</b></div>');
		
    	redirect('Sidang');

    }
 
   
   function hapus_sidang(){


      $id=$this->input->post('id');
      $this->Sidang_model->hapus_jadwal_sidang($id);
      echo $this->session->set_flashdata('message', '<div class="alert alert-info"><b>Jadwal Sidang berhasil dihapus</b></div>');
		
    	redirect('Sidang');

   }

    
}
