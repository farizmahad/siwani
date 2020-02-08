<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usulan extends CI_Controller {

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
        $data['judul']="Daftar Usulan Reses";
		$data['usulan']=$this->Usulan_model->select_usulan();
		$this->load->view('layout/header_sidebar');
		$this->load->view('layout/header');
		$this->load->view('daftar_usulan_vw',$data);
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

        $group = array('operator','super admin','dewan');
        if (!$this->ion_auth->in_group($group)){ redirect('/');}
        $data['pendamping']=$this->Master_model->select_pendamping();
        $ID = $this->ion_auth->user()->row()->id;
        $users=$this->Master_model->get_users_id($ID);
        foreach($users as $row){
            $data['first_name']=$row->first_name;
            $data['last_name']=$row->last_name;
            $data['gelar']=$row->gelar;
            $data['fraksi']=$row->fraksi;
            $data['dapil']=$row->daerah_pemilihan;
            $data['nama_lengkap']=$row->nama_lengkap;
        }

        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('tambah_usulan2_vw',$data);
        $this->load->view('layout/footer');
    }

      public function autocomplete_dewan()
    {
        $myInput=$_GET['myInput'];
       

        
       /*
        $barang_db         = explode("|",$myInput);
        $nama_depan        = $barang_db[0];
        $nama_belakang     = $barang_db[1];
        $gelar             = $barang_db[2];
        */

        $barang_detail=$this->Usulan_model->cek_dewan($myInput);

        /*
        $terms = $this->guzzle_get('https://api.jurnal.id/core/api/v1/products/'.$id_product,'?apikey=4c547f08b182cc2435b563659e4f5f76');
        */
        echo json_encode($barang_detail);

    }


    public function save_usulan(){

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
        $sound_system=$this->input->post('sound');

        

        $makanan=$this->input->post('makanan');
        $tempat=$this->input->post('tempat');
        $waktu=$this->input->post('waktu');
        $kursi=$this->input->post('kursi');
        $hari=$this->input->post('hari');
        $id_pendamping=$this->input->post('id_pendamping');
        /*
        $minuman=$this->input->post('minuman');
        */

        /*
        $tempat=$this->input->post('tempat');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $usulan=$this->input->post('usulan');
        $biaya=$this->input->post('biaya');
        */
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
            $this->Usulan_model->save_reses($reses,$cek_id_user,$tgl,$jumlah_konsituen,$tenda,$spanduk,$sound_system,$makanan,'',$snack,$tempat,$waktu,$kursi,$hari,$id_pendamping);
          }
           echo $this->session->set_flashdata('message', '<div class="alert alert-success"><b>Usulan berhasil ditambah</b></div>');
           redirect('Proposal');
           /*
        }
        */
      }
       

    }


    function isi_bidang(){

        $group = array('admin kerja','super admin');
        if (!$this->ion_auth->in_group($group)){ redirect('/');}
        /*
        $data['usulan_belum']=$this->Usulan_model->select_usulan_belum();
        */
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


	
    function cetak_proposal(){
        $pilihan=$this->input->get('pilihan');
        $parameter=$this->input->get('parameter');
        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
       
        $data['proposal']=$this->Master_model->select_reses_sudah($pilihan,$parameter);
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('cetak_proposal_vw',$data);
        $this->load->view('layout/footer');
    }

     function cetak_proposal_reses(){
        $pilihan=$this->input->get('pilihan');
        $parameter=$this->input->get('parameter');
        $data['pilihan']=$pilihan;
        $data['parameter']=$parameter;
       
        $data['proposal']=$this->Master_model->select_reses_belum_isi_bidang($pilihan,$parameter);
        $this->load->view('layout/header_sidebar');
        $this->load->view('layout/header');
        $this->load->view('cetak_proposal_reses_vw',$data);
        $this->load->view('layout/footer');
    }



       function namahari(){
        $tanggal=$this->input->get('tgl');
        

    //fungsi mencari namahari
    //format $tgl YYYY-MM-DD
    //harviacode.com
    $tgl=substr($tanggal,8,2);
    $bln=substr($tanggal,5,2);
    $thn=substr($tanggal,0,4);
    $info=date('w', mktime(0,0,0,$bln,$tgl,$thn));

    
    /*
    switch($info){
        case '0': return "Minggu"; break;
        case '1': return "Senin"; break;
        case '2': return "Selasa"; break;
        case '3': return "Rabu"; break;
        case '4': return "Kamis"; break;
        case '5': return "Jumat"; break;
        case '6': return "Sabtu"; break;
    };
    */

    if($info==0){
        $result['hari']="Minggu";
    }elseif($info==1){
         $result['hari']="Senin";
    }elseif($info==2){
         $result['hari']="Selasa";
    }elseif($info==3){
         $result['hari']="Rabu";
    }elseif($info==4){
         $result['hari']="Kamis";
    }elseif($info==5){
         $result['hari']="Jumat";
    }elseif($info==6){
        $result['hari']="Sabtu";
    }
        echo json_encode($result);

    }



}
