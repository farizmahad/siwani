<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
		/*
		$group = array('admin kerja','admin');
		if (!$this->ion_auth->in_group($group))
		{
			$this->session->set_flashdata('message', 'Anda Tidak punya akses ke halaman Master');
			redirect('Login');
		}
		*/
		$this->load->model('Master_model');
		$this->load->model('Usulan_model');
		$this->load->model('Dinas_model');
	}
	


	public function index()
	{
	    $rule=$this->session->userdata('rule');

		$data['reses1']=$this->Master_model->select_reses_belum('1');
        $data['reses2']=$this->Master_model->select_reses_belum('2');
        $data['reses3']=$this->Master_model->select_reses_belum('3');
        $data['total_belum']=$this->Master_model->select_reses_seluruh_belum();


        $data['reses1_sudah']=$this->Master_model->select_reses_sudah_isi('1');
        $data['reses2_sudah']=$this->Master_model->select_reses_sudah_isi('2');
        $data['reses3_sudah']=$this->Master_model->select_reses_sudah_isi('3');

        $data['total_sudah']=$data['reses1_sudah'] + $data['reses2_sudah'] + $data['reses3_sudah'];


        $data['reses_pemerintahan']=$this->Master_model->select_reses_pemerintahan('Bidang Pemerintahan');
        $data['reses_ekonomi']=$this->Master_model->select_reses_pemerintahan('Bidang Ekonomi Keuangan');
        $data['reses_pembangunan']=$this->Master_model->select_reses_pemerintahan('Bidang Pembangunan');
        $data['reses_kesejahteraan_rakyat']=$this->Master_model->select_reses_pemerintahan('Bidang Kesejahteraan Rakyat');

		$this->load->view('layout/header_sidebar',$data);
		$this->load->view('layout/header',$data);
		if($rule=="reses"){
		  $this->load->view('dashboard_vw',$data);
	   }elseif($rule=="perjalanandinas"){

	   	    $data['dinas_dprd']=$this->Dinas_model->tampil_dinas_dprd('1');
	   	    $data['dinas_setwan']=$this->Dinas_model->tampil_dinas_dprd('2');

	   	    $data['dinas_darat']=$this->Dinas_model->tampil_dinas_jenis('1');
	   	    $data['dinas_udara']=$this->Dinas_model->tampil_dinas_jenis('2');
	   	   $this->load->view('dashboard_vw_dinas',$data);
	   }elseif($rule=="jadwalsidang"){
	   	   redirect('Sidang');
	   }
		$this->load->view('layout/footer');

	  

	   }
		
	
}
