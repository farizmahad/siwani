<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
	}

	public function index()
	{
		$ID = $this->ion_auth->user()->row()->id;
        $data['users']=$this->Usulan_model->get_users($ID);
		$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('profile_vw',$data);
		$this->load->view('layout/footer');
		
	}


	public function simpan_profile(){

		
		$password      = $this->input->post('password');
		$id            = $this->input->post('id');
		

		$id_dewan          = $this->input->post('id_dewan');
			
		$config['upload_path']="./assets/images"; //path folder file upload
        $config['allowed_types']='gif|jpg|png'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
        	

            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
            $image= $data['upload_data']['file_name'];
            $this->Usulan_model->update_foto_dewan($id_dewan,$image);  
           
         }else{
                 

           if($password){

           	 $data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'  => $this->input->post('last_name'),
					'email'      => $this->input->post('email'),
					'password'   => $password,
		     );
           }else{
              $data = array(
					'first_name' => $this->input->post('first_name'),
					'last_name'  => $this->input->post('last_name'),
					'email'      => $this->input->post('email'),
		     );

           }

           $this->ion_auth->update($id, $data);
     
         }


         redirect('Profile');

	}




}
