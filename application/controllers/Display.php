<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class display extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('Staff_model');
		$this->load->model('dashboard_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
		$this->load->helper('url');
	}

    function display_perolehan(){
        $logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
            $data_peserta_ikhwan = $this->Staff_model->daftar_halaqoh_ikhwan();
            $data_peserta_akhwat = $this->Staff_model->daftar_halaqoh_akhwat();
			$data['jumlah_i'] = count($data_peserta_ikhwan);
			$data['jumlah_a'] = count($data_peserta_akhwat);
			$data['peserta_ikhwan'] = $this->Staff_model->daftar_halaqoh_ikhwan();
			$data['peserta_akhwat'] = $this->Staff_model->daftar_halaqoh_akhwat();
			$this->template->admin('display/display_perolehan_peserta',$data);
		}
		else
		{
			$this->template->home('home/content');
        }     


    }
	
	


}