<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_reses extends CI_Controller {

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
		if (!$this->ion_auth->logged_in()){ redirect('/');}
		$this->load->model('Master_model');
        $this->load->model('Usulan_model');
         $this->load->helper('tgl_indo');
	}
	

	public function index()
	{
        /* $data['judul']="Daftar Usulan Reses";
		$data['usulan']=$this->Usulan_model->select_usulan(); */

        $data['reses_pemerintahan']=$this->Master_model->select_reses_pemerintahan('Bidang Pemerintahan');
        $data['reses_ekonomi']=$this->Master_model->select_reses_pemerintahan('Bidang Ekonomi Keuangan');
        $data['reses_pembangunan']=$this->Master_model->select_reses_pemerintahan('Bidang Pembangunan');
        $data['reses_kesejahteraan_rakyat']=$this->Master_model->select_reses_pemerintahan('Bidang Kesejahteraan Rakyat');
        
        $data['reses1']=$this->Master_model->select_reses1('1');
        $data['reses2']=$this->Master_model->select_reses1('2');
        $data['reses3']=$this->Master_model->select_reses1('3');
        $data['total']=$this->Usulan_model->select_usulan();
		$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('daftar_hasil_reses',$data);
		$this->load->view('layout/footer');
		
	}

    public function kesimpulan()
    {
        $data['judul']="Daftar Kesimpulan";
        $data['usulan']=$this->Usulan_model->select_usulan();
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('daftar_usulan_vw',$data);
        $this->load->view('layout/footer');
        
    }

    public function tambah_usulan(){

        $group = array('admin kerja','super admin');
        if (!$this->ion_auth->in_group($group)){ redirect('/');}

        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('tambah_usulan_vw');
        $this->load->view('layout/footer');
    }

      public function autocomplete_dewan()
    {
        $myInput=$_GET['myInput'];
        $barang_db         = explode("|",$myInput);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];

        $barang_detail=$this->Usulan_model->cek_dewan($nama_depan,$nama_belakang,$gelar);

        /*
        $terms = $this->guzzle_get('https://api.jurnal.id/core/api/v1/products/'.$id_product,'?apikey=4c547f08b182cc2435b563659e4f5f76');
        */
        echo json_encode($barang_detail);

    }


    public function save_usulan(){

        $id=$this->input->post('id');
        $reses=$this->input->post('reses');
        $namaAnggota=$this->input->post('namaAnggota');
        $barang_db         = explode("|",$namaAnggota);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];

        $cek_id_user=$this->Usulan_model->cek_id_user($nama_depan,$nama_belakang,$gelar);

        $tgl=$this->input->post('tgl');
        $tempat=$this->input->post('tempat');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $usulan=$this->input->post('usulan');
        $biaya=$this->input->post('biaya');
        $tanda=$this->input->post('tanda');


        if($id){
         
        $config['upload_path']="./assets/proposal"; //path folder file upload
        $config['allowed_types']='gif|jpg|png|pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file
            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            $image= $data['upload_data']['file_name'];
            
            $this->Usulan_model->update_reses($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,$image,$id);
           
          }else{
            $this->Usulan_model->update_reses_proposal($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,$id);

          }
          echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Usulan berhasil diubah</b></div>');
          if($tanda=="usulan"){
            redirect('Usulan');
          }else{
           redirect('Usulan/isi_bidang');
          }

        }else{
            /*
        $filename = $_FILES["file"]["name"];

        $extensi = pathinfo($filename, PATHINFO_EXTENSION);
        
        if($extensi !="csv" or $extensi !="xlsx" or $extensi !="xls" or $extensi !="pdf" or $extensi !="jpg"){
             echo $this->session->set_flashdata('message', '<div class="alert alert-warning"> File harus csv, xlsx, xls, pdf, jpg.</div>');
            redirect('Usulan/tambah_usulan');

        }else{
        */

        $config['upload_path']="./assets/proposal"; //path folder file upload
        $config['allowed_types']='jpg|pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
         
        $this->load->library('upload',$config); //call library upload 
        if($this->upload->do_upload("file")){ //upload file

            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
 
            $image= $data['upload_data']['file_name'];
            
            $this->Usulan_model->save_reses($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,$image);
           
          }else{
            $this->Usulan_model->save_reses($reses,$cek_id_user,$tgl,$tempat,$nama,$alamat,$usulan,$biaya,'');
          }
           echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Usulan berhasil ditambah</b></div>');
           redirect('Usulan/isi_bidang');
           /*
        }
        */
      }
       

    }


    function isi_bidang(){

        $group = array('admin kerja','super admin');
        if (!$this->ion_auth->in_group($group)){ redirect('/');}
        $data['usulan_belum']=$this->Usulan_model->select_usulan_belum();
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('isi_bidang_vw',$data);
        $this->load->view('layout/footer');

    }

    function delete_usulan(){
        $id=$this->input->post('id');
        $tanda=$this->input->post('tanda');
        $this->Usulan_model->delete_usulan($id);
         echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Usulan berhasil dihapus</b></div>');
        if($tanda=="bidang"){
            redirect('Usulan/isi_bidang');
        }elseif($tanda=="usulan"){
            redirect('Usulan');
        }


    }


    function save_bidang(){
       $id=$this->input->post('id');
       $bidang=$this->input->post('bidang'); 
       $this->Usulan_model->update_bidang($id,$bidang);
       echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Bidang berhasil diubah</b></div>');
       redirect('Usulan');
    }


    function save_kesimpulan(){
        $id=$this->input->post('id');
        $kesimpulan=$this->input->post('kesimpulan');

        $this->Usulan_model->update_kesimpulan($id,$kesimpulan);
        echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Kesimpulan berhasil diubah</b></div>');
        redirect('Usulan/kesimpulan');

    }

    function detail_usulan(){

        $id_usulan= $this->input->post('ids');
        $data['detail_usulan']=$this->Usulan_model->detail_usulan($id_usulan);
        $this->load->view('detail_usulan_vw',$data);
    }


	
    


}
