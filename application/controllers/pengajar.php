<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('pengajar_model');
		$this->load->model('Staff_model');
		$this->load->model('Pengajar_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
		$this->load->helper('url');
	}
	

	function login()
	{
		$nama_p = $this->input->post('nama_p',true);
		$no_hp = $this->input->post('no_hp',true);
		//$angkatan = $this->input->post('angkatan',true);
		
		$akun = $this->pengajar_model->cek_akun($nama_p,$no_hp);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'nama_p'=>$nama_p,
							'logged_in'=>true
			);
			
		$this->session->set_userdata($data);
	//	$message = "Anda berhasil Login ";
		//echo "<script type='text/javascript'>alert('$message');</script>";
			//redirect('pengajar/beranda');
			$data['peserta']= $this->pengajar_model->peserta_halaqoh();
			$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
			$this->template->pengajar('pengajar/beranda',$data);
		}
		
		else

		{
			$message = "Maaf,Email atau password salah";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$data['peserta']= $this->pengajar_model->peserta_halaqoh();;
			$data['pengajar'] = $this->Staff_model->daftar_pengajar();
			//redirect('pengajar/home/beranda');
			$this->load->view('pengajar/home/login',$data);
					}
		}


	 function logout()
	{
		$this->session->sess_destroy();
		$data['pengajar'] = $this->Staff_model->daftar_pengajar();
		$this->load->view('pengajar/home/login',$data);
	}

	function beranda (){
		
		$data['peserta']= $this->pengajar_model->peserta_halaqoh();
		$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
		$this->template->pengajar('pengajar/beranda',$data);


	
	}

	function perolehan_hari($id_peserta){

		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='pengajar')
		{
			$data['peserta'] = $this->pengajar_model->select_by_id($id_peserta);
			$this->template->pengajar('pengajar/update_perolehan_hari',$data);
		}
	}

	function perolehan_juz($id_peserta){
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='pengajar')
		{
			$data['peserta'] = $this->pengajar_model->select_by_id($id_peserta);
			$this->template->pengajar('pengajar/update_perolehan_juz',$data);
		}
	}

	function proses_update_perolehan_harian(){
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='pengajar')
		{
		
			$data['h1']=$this->input->post('h1');	
			$data['h2']=$this->input->post('h2');	
			$data['h3']=$this->input->post('h3');	
			$data['h4']=$this->input->post('h4');	
			$data['h5']=$this->input->post('h5');	
			$data['h6']=$this->input->post('h6');	
			$data['h7']=$this->input->post('h7');	
			$data['h8']=$this->input->post('h8');	
			$data['h9']=$this->input->post('h9');	
			$data['h10']=$this->input->post('h10');	
			$data['h11']=$this->input->post('h11');	
			$data['h12']=$this->input->post('h12');	
			$data['h13']=$this->input->post('h13');	
			$data['h14']=$this->input->post('h14');	
			$data['h15']=$this->input->post('h15');	
			$data['h16']=$this->input->post('h16');	
			$data['h17']=$this->input->post('h17');	
			$data['h18']=$this->input->post('h18');	
			$data['h19']=$this->input->post('h19');	
			$data['h20']=$this->input->post('h20');	
			$data['h21']=$this->input->post('h21');	
			$data['h22']=$this->input->post('h22');	
			$data['h23']=$this->input->post('h23');	
			$data['h24']=$this->input->post('h24');	
			$data['h25']=$this->input->post('h25');	
			$data['h26']=$this->input->post('h26');	
			$data['h27']=$this->input->post('h27');	
			$data['h28']=$this->input->post('h28');	
			$data['h29']=$this->input->post('h29');	
			$data['h30']=$this->input->post('h30');	
			$data['h31']=$this->input->post('h31');	
			$data['h32']=$this->input->post('h32');	
			$data['h33']=$this->input->post('h33');	
			$data['h34']=$this->input->post('h34');	


			$id_peserta=$this->input->post('id_peserta');
			$this->pengajar_model->up_biodata($id_peserta,$data);
			$data2['peserta'] = $this->pengajar_model->select_by_id($id_peserta);
				
			$data['peserta']= $this->pengajar_model->peserta_halaqoh();
			$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			$this->template->pengajar('pengajar/beranda',$data);
			
			
			
			
		}
 			else {
				$data['peserta']= $this->pengajar_model->peserta_halaqoh();
				$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
				$this->template->pengajar('pengajar/beranda',$data);

 			}				
	
		}	
	function proses_update_perolehan_juz(){
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='pengajar')
		{
		
			$data['j1']=$this->input->post('j1');	
			$data['j2']=$this->input->post('j2');	
			$data['j3']=$this->input->post('j3');	
			$data['j4']=$this->input->post('j4');	
			$data['j5']=$this->input->post('j5');	
			$data['j6']=$this->input->post('j6');	
			$data['j7']=$this->input->post('j7');	
			$data['j8']=$this->input->post('j8');	
			$data['j9']=$this->input->post('j9');	
			$data['j10']=$this->input->post('j10');	
			$data['j11']=$this->input->post('j11');	
			$data['j12']=$this->input->post('j12');	
			$data['j13']=$this->input->post('j13');	
			$data['j14']=$this->input->post('j14');	
			$data['j15']=$this->input->post('j15');	
			$data['j16']=$this->input->post('j16');	
			$data['j17']=$this->input->post('j17');	
			$data['j18']=$this->input->post('j18');	
			$data['j19']=$this->input->post('j19');	
			$data['j20']=$this->input->post('j20');	
			$data['j21']=$this->input->post('j21');	
			$data['j22']=$this->input->post('j22');	
			$data['j23']=$this->input->post('j23');	
			$data['j24']=$this->input->post('j24');	
			$data['j25']=$this->input->post('j25');	
			$data['j26']=$this->input->post('j26');	
			$data['j27']=$this->input->post('j27');	
			$data['j28']=$this->input->post('j28');	
			$data['j29']=$this->input->post('j29');	
			$data['j30']=$this->input->post('j30');	


			$id_peserta=$this->input->post('id_peserta');
			$this->pengajar_model->up_biodata($id_peserta,$data);
			$data2['peserta'] = $this->pengajar_model->select_by_id($id_peserta);
				
			$data['peserta']= $this->pengajar_model->peserta_halaqoh();
			$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			$this->template->pengajar('pengajar/beranda',$data);
			
			
			
			
		}
 			else {
				$data['peserta']= $this->pengajar_model->peserta_halaqoh();
				$data['peserta_juz']= $this->pengajar_model->peserta_halaqoh();
				$this->template->pengajar('pengajar/beranda',$data);

 			}				
	
		}	


	

	/*
	function beranda()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{

			//total data peserta yang masuk
			$peserta = $this->admin_model->daftarpeserta();
			//$data['jumlah'] = count($peserta);
			//$peserta_gn = $this->admin_model->peserta_ign();

		
			$peserta = $this->dashboard_model->daftarpeserta();
			$total_peserta = $this->dashboard_model->total_peserta();

				//Peserta ganjill=======|| ganjil (g) || genap = (gnp)
			//$peserta_ganjil = $this->dashboard_model->daftarpeserta_ganjil();
			$peserta_i = $this->dashboard_model->peserta_i();
			$peserta_mutqin_i = $this->dashboard_model->program_mutqin_i();
			$peserta_sebulan_i = $this->dashboard_model->program_sebulan_i();
			$peserta_3pekan_i = $this->dashboard_model->program_3pekan_i();
			$peserta_2pekan_i = $this->dashboard_model->program_2pekan_i();
			$peserta_1pekan_i = $this->dashboard_model->program_1pekan_i();
			$peserta_weekend_i_tahsin = $this->dashboard_model->program_weekend_i_tahsin();
			$peserta_weekend_i_tahfizh = $this->dashboard_model->program_weekend_i_tahfizh();

			http://[::1]/acs/access/card
			//jumlah peserta ikhwan ganjil
			///
			//$data['peserta_ganjil'] = count($peserta_ganjil);
			$data['total_peserta'] = count($peserta);
			$data['peserta'] = count($peserta);
			$data['jumlah_i'] = count($peserta_i);
			$data['program_mutqin_i'] = count($peserta_mutqin_i);
			$data['program_sebulan_i'] = count($peserta_sebulan_i);
			$data['program_3pekan_i'] = count($peserta_3pekan_i);
			$data['program_2pekan_i'] = count($peserta_2pekan_i);
			$data['program_1pekan_i'] = count($peserta_1pekan_i);
			$data['program_weekend_i_tahfizh'] = count($peserta_weekend_i_tahfizh);
			$data['program_weekend_i_tahsin'] = count($peserta_weekend_i_tahsin);



			//akhwat ganjjil 
			$peserta_a = $this->dashboard_model->peserta_a();
			$peserta_mutqin_a = $this->dashboard_model->program_mutqin_a();
			$peserta_sebulan_a = $this->dashboard_model->program_sebulan_a();
			$peserta_3pekan_a = $this->dashboard_model->program_3pekan_a();
			$peserta_2pekan_a = $this->dashboard_model->program_2pekan_a();
			$peserta_1pekan_a = $this->dashboard_model->program_1pekan_a();
			$peserta_weekend_a_tahsin = $this->dashboard_model->program_weekend_a_tahsin();
			$peserta_weekend_a_tahfizh = $this->dashboard_model->program_weekend_a_tahfizh();


			//jumlah peserta akwaht ganjil
			$data['jumlah_a'] = count($peserta_a);
			$data['program_mutqin_a'] = count($peserta_mutqin_a);
			$data['program_sebulan_a'] = count($peserta_sebulan_a);
			$data['program_3pekan_a'] = count($peserta_3pekan_a);
			$data['program_2pekan_a'] = count($peserta_2pekan_a);
			$data['program_1pekan_a'] = count($peserta_1pekan_a);
			$data['program_weekend_a_tahfizh'] = count($peserta_weekend_a_tahfizh);
			$data['program_weekend_a_tahsin'] = count($peserta_weekend_a_tahsin);
			
			

		//============================================================//
			$data['peserta'] = $this->dashboard_model->peserta_i();
			$this->template->admin('admin/beranda',$data);
		}
		else
		{
			$this->template->home('home/content');
		}		
	}
 */
	
}