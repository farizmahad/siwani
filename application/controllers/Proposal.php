<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proposal extends CI_Controller {

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
		$this->load->model('Proposal_model');
		$this->load->model('Master_model');
		$this->load->model('Usulan_model');
		
       
       
	}

    function index(){
        /*
    	$data['proposal']=$this->Proposal_model->tampil_proposal();
        */

        $data['reses1']=$this->Master_model->select_reses1('1');
        $data['reses2']=$this->Master_model->select_reses1('2');
        $data['reses3']=$this->Master_model->select_reses1('3');
        $data['total']=$this->Master_model->select_reses_belum_isi_bidang();
    	$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('proposal_vw',$data);
		$this->load->view('layout/footer');
    }

    function simpan_proposal(){

    	$reses=$this->input->post('reses');
    	$id=$this->input->post('id');
        
    	$anggotaDewan=$this->input->post('anggotaDewan');
    	$barang_db         = explode("|",$anggotaDewan);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];

        $cek_id_user=$this->Usulan_model->cek_id_user($nama_depan,$nama_belakang,$gelar);

    	$judulProposal=$this->input->post('judulProposal');


        $config['upload_path']="./assets/proposal"; //path folder file upload
        $config['allowed_types']='pdf|xls|xlsx|csv'; //type file yang boleh di upload
        $config['encrypt_name'] = TRUE; //enkripsi file name upload
        $this->load->library('upload',$config);
    	if($this->upload->do_upload("file")){ //upload file
    		

            $data = array('upload_data' => $this->upload->data()); //ambil file name yang diupload
           

            $image= $data['upload_data']['file_name'];
              
            if($id){
				$this->Proposal_model->ubah_proposal($reses,$cek_id_user,$judulProposal,$image,$id);
            }else{
				$this->Proposal_model->tambah_proposal($reses,$cek_id_user,$judulProposal,$image);
        }
           
           
          }else{

            if($id){
               $this->Proposal_model->ubah_proposal($reses,$cek_id_user,$judulProposal,'',$id);
            }else{
               $this->Proposal_model->tambah_proposal($reses,$cek_id_user,$judulProposal,'');
            }

          }

          redirect('Proposal/reses_proposal/'.$reses);

    }

    function hapus_proposal(){
    	$id=$this->input->post('id');
    	$this->Proposal_model->hapus_proposal($id);
    	redirect('Proposal');
    }


    function reses_proposal($id,$hasil="",$pilihan="",$parameter=""){
        
/*
        $pilihan=$this->input->post('pilihan');
        $parameter=$this->input->post('parameter');
        */
        
        

        $data['hasil']=$hasil;
        if($id=="1" or $id=="2" or $id=="3"){
             $data['proposal']=$this->Master_model->select_reses1($id);
        }else{

            if($id=="pemerintahan"){
                $bidang="Bidang Pemerintahan";
                $data['bidang']=$bidang;
            }elseif($id=="ekonomi"){
                $bidang="Bidang Ekonomi Keuangan";
            }elseif($id=="pembangunan"){
                $bidang="Bidang Pembangunan";
            }elseif($id=="kesejahteraanrakyat"){
                $bidang="Bidang Kesejahteraan Rakyat";
            }
            $data['bidang']=$bidang;
            $data['id_bidang']=$id;
            $data['pilihan']=$pilihan;
            $data['parameter']=$parameter;
           
            if($pilihan){
              $data['proposal']=$this->Master_model->select_reses_pemerintahan_pilihan($bidang,$pilihan,$parameter);
            }else{
            $data['proposal']=$this->Master_model->select_reses_pemerintahan($bidang);
            }
        }
        $this->load->view('pilih_reses2_vw',$data);
    }

    function detail_proposal(){
        $id=$this->input->post('ids');
        $tanda=$this->input->post('tanda');
        $data['hasil']=$tanda;

        $data['id_proposal']=$id;
        $data['detail_proposal']=$this->Usulan_model->detail_usulan_sudah($id);


        $this->load->view('detail_proposal2_vw',$data);

    }

     function ubah_proposal(){
        $id=$this->input->post('ids');
        

        
        $tanda=$this->input->post('tanda');
        $data['hasil']=$tanda;

        $data['id_proposal']=$id;
        $data['detail_proposal']=$this->Usulan_model->detail_usulan_non($id);
		$data['pendamping']=$this->Master_model->select_pendamping(); 

        $this->load->view('edit_usulan_vw',$data);
        

    }


    public function edit_proposal(){

        $id=$this->input->post('id');
        $reses=$this->input->post('reses');
        $namaAnggota=$this->input->post('namaAnggota');
        /*
        $barang_db         = explode("|",$namaAnggota);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];
        */

        $cek_id_user=$this->Usulan_model->cek_id_user($namaAnggota);

        $tgl=$this->input->post('tgl');
        $jumlah_konsituen=$this->input->post('jumlah_konsituen');
        $snack=$this->input->post('snack');
        $tenda=$this->input->post('tenda');
        $spanduk=$this->input->post('spanduk');
        $sound_system=$this->input->post('sound_system');
        $makanan=$this->input->post('makanan');
        $minuman=$this->input->post('minuman');

        $tempat=$this->input->post('tempat');
        $hari=$this->input->post('hari');
        $waktu=$this->input->post('waktu');
        $kursi=$this->input->post('kursi');
        $id_pendamping=$this->input->post('id_pendamping');


        
        
            $result['pesan']="";

            if($id){
            $this->Proposal_model->update_proposal_usulan($id,$reses,$cek_id_user,$tgl,$jumlah_konsituen,$snack,$tenda,$spanduk,$sound_system,$makanan,$minuman,$tempat,$hari,$waktu,$kursi,$id_pendamping);
            }
        
        echo json_encode($result);
        
    }

     public function simpan_bidang(){

        $id=$this->input->post('id');
       
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $bidang=$this->input->post('bidang');
        $aspirasi=$this->input->post('aspirasi');
        $volume=$this->input->post('volume');
        $lokasi=$this->input->post('lokasi');
        /*
        $minuman=$this->input->post('minuman');
        */




        
       
            $result['pesan']="";

            if($id){
            $this->Proposal_model->simpan_bidang($id,$nama,$alamat,$bidang,$aspirasi,$volume,$lokasi);
            }
        
        echo json_encode($result);
        
    }

    function hapus_proposal_reses(){
      $id=$this->input->post('id');
      $this->Proposal_model->delete_proposal($id);

    }

}
