<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cetak extends CI_Controller {

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

        if ($this->session->userdata('rule') !="perjalanandinas")
        {
            redirect('Login/selamat_datang');
        }
		$this->load->model('Proposal_model');
		$this->load->model('Master_model');
		$this->load->model('Usulan_model');
		
       
       
	}

   public function index()
    {
        $data = $this->load->view('mpdf_v');
    }
 
    public function printPDF()
    {
        $mpdf = new \Mpdf\Mpdf();
        $data = $this->load->view('hasilPrint', [], TRUE);
        $mpdf->WriteHTML($data);
        $mpdf->Output();
    }

    
}
