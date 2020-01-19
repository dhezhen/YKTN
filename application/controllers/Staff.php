<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller
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


	function login()
	 {
	// 	$email = $this->input->post('email',true);
	// 	$password = $this->input->post('password',true);
		$pengajar = $this->input->post('pengajar',true);
		$id_pengajar = $this->input->post('id_pengajar',true);
		$angkatan = $this->input->post('angkatan',true);
		
		$akun = $this->admin_model->cek_akun($email,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'angkatan'=>$angkatan,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
		$this->session->set_flashdata('succes', "anda berhasil Login");
			redirect('admin/beranda');

			//$this->template->admin('admin/beranda');
		}
		else
		{
			$this->template->home('home/login');
		}
	}

    function daftar_pengajar()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$pengajar = $this->Staff_model->daftar_pengajar();
			$data['jumlah'] = count($pengajar);
			$data['pengajar'] = $this->Staff_model->daftar_pengajar();
			$this->template->admin('staff/daftar_pengajar',$data);
		}
		else
		{
			$this->template->home('home/content');
        }      
    }

    function halaqoh_ikhwan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data_peserta_ikhwan = $this->Staff_model->daftar_halaqoh_ikhwan();
			$data['jumlah'] = count($data_peserta_ikhwan);
			$data['peserta_ikhwan'] = $this->Staff_model->daftar_halaqoh_ikhwan();
			$this->template->admin('staff/halaqoh_ikhwan',$data);
		}
		else
		{
			$this->template->home('home/content');
        }      
    }
    
    
    function halaqoh_akhwat(){
        $logged_in = $this->session->userdata('logged_in');
        $level = $this->session->userdata('level');
        if (!empty($logged_in) && $level=='admin'){
            $data_peserta_akhwat = $this->Staff_model->daftar_halaqoh_akhwat();
            $data['jumlah'] = count($data_peserta_akhwat);
            $data['peserta_akhwat'] = $data_peserta_akhwat;
            $this->template->admin('staff/halaqoh_akhwat',$data);     
        }
        else 
        {
            $this->template->home('home/content');
        }
    }

    function tambah_pengajar()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('staff/tambah_pengajar');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}

    function tambah_pengajar_proses()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$config['upload_path'] = './uploads/pengajar/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 12000;
			$config['max_width']=12000;
			$config['max_height'] = 12000;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload())
			{
				$id_pengajar = $this->session->userdata('id_pengajar');
				$this->session->set_flashdata('info','Foto Gagal');
				redirect('staff/tambah_pengajar/'.$id_pengajar);
			}
			else
			{


				$gambar = $this->upload->data();
				$data['program_p'] = $this->input->post('program_p');
				$data['nama_p']=$this->input->post('nama_p');			
				$data['tempat_lahir_p']=$this->input->post('tempat_lahir_p');			
				$data['tanggal_lahir_p']=$this->input->post('tanggal_lahir_p');			
                $data['jenis_k']=$this->input->post('jenis_k');
                $data['alamat_p']=$this->input->post('alamat_p');
                $data['angkatan']=$this->input->post('angkatan');
                $data['status_pernikahan_p']=$this->input->post('status_pernikahan_p');
                $data['status_keaktifan']=$this->input->post('status_keaktifan');
                $data['no_hp']=$this->input->post('no_hp');
				$data['foto_diri'] = $gambar['file_name'];
                
				
						$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia_p']=$diff->y;
			
			
			
			$this->Staff_model->tambah_pengajar($data);
			redirect('staff/daftar_pengajar');
		}
	}
		else
		{
			$this->template->home('admin/beranda');
		}
			
	}


	function update_muhaffizhah ($id_peserta){
		$logged_in = $this->session->userdata('logged_in');
		$level	   = $this->session->userdata('level');
		if (!empty($logged_in)&& $level=='admin'){
			$data['peserta'] = $this->Staff_model->select_by_id_peserta($id_peserta);
			$data['pengajar'] = $this->Staff_model->daftar_muhaffizhah();
			$this->template->admin('staff/form_update_muhaffizhah',$data);
		}
	}
	function proses_update_muhaffizhah()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
					
			$data['id_pengajar']=$this->input->post('id_pengajar');	
			$id_peserta=$this->input->post('id_peserta');
			
			$this->Staff_model->update_muhaffizhah($id_peserta,$data);
			$data2['peserta'] = $this->Staff_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Data telah berhasil diupdate');
			
			
			redirect('staff/halaqoh_akhwat');
		}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}
	function update_muhaffizh($id_peserta){
		$logged_in = $this->session->userdata('logged_in');
        $level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{

			//$id_pengajar = $this->input->post('id_pengajar');
            $data['peserta'] = $this->Staff_model->select_by_id_peserta($id_peserta);
            $data['pengajar'] = $this->Staff_model->daftar_muhaffizh();
			$this->template->admin('staff/form_update_muhaffizh',$data);
        }
		
	}

	function proses_update_muhaffizh()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
					
			$data['id_pengajar']=$this->input->post('id_pengajar');	
			$id_peserta=$this->input->post('id_peserta');
			
			$this->Staff_model->update_muhaffizh($id_peserta,$data);
			$data2['peserta'] = $this->Staff_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Data telah berhasil diupdate');
			
			
			redirect('staff/halaqoh_ikhwan');
		}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}


    function update($id_pengajar){
        $logged_in = $this->session->userdata('logged_in');
        $level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{

			
            $data['pengajar'] = $this->Staff_model->select_by_id($id_pengajar);
			$this->template->admin('staff/form_update_pengajar',$data);
        }
	}
	


	function update_proses()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$config['upload_path'] = './uploads/pengajar/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 12000;
			$config['max_width']=12000;
			$config['max_height'] = 12000;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload())
			{
				$id_pengajar = $this->input->post('id_pengajar');
				$this->session->set_flashdata('info','Foto Gagal');
				redirect('staff/update/'.$id_pengajar);
			} else{

				$gambar = $this->upload->data();
				$data['program_p'] = $this->input->post('program_p');
				$data['nama_p']=$this->input->post('nama_p');			
				$data['tempat_lahir_p']=$this->input->post('tempat_lahir_p');			
				$data['tanggal_lahir_p']=$this->input->post('tanggal_lahir_p');			
                $data['jenis_k']=$this->input->post('jenis_k');
                $data['alamat_p']=$this->input->post('alamat_p');
                $data['angkatan']=$this->input->post('angkatan');
                $data['status_pernikahan_p']=$this->input->post('status_pernikahan_p');
                $data['status_keaktifan']=$this->input->post('status_keaktifan');
                $data['no_hp']=$this->input->post('no_hp');
				$data['foto_diri'] = $gambar['file_name'];
                
				
						$birthday = $this->input->post('tanggal_lahir_p');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia_p']=$diff->y;
			
			$id_pengajar = $this->input->post('id_pengajar');
			$this->Staff_model->update_biodata($id_pengajar,$data);
			$data2['pengajar'] = $this->Staff_model->select_by_id($id_pengajar);
			$this->session->set_flashdata('info','Data telah berhasil diupdate');
					
			redirect('staff/daftar_pengajar');
		}
	}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}


    // function proses_update()
	// {
	// 	$logged_in = $this->session->userdata('logged_in');
	// 	$level = $this->session->userdata('level');
	// 	if (!empty($logged_in) && $level=='admin')
	// 	{
	// 		    $data['nama_p']=$this->input->post('nama_p');			
	// 			$data['tempat_lahir']=$this->input->post('tempat_lahir');			
	// 			$data['tanggal_lahir']=$this->input->post('tanggal_lahir');			
    //             $data['angkatan']=$this->input->post('angkatan');
    //             $data['jenis_kelamin']=$this->input->post('jenis_kelamin');
    //             $data['alamat']=$this->input->post('alamat');
    //             $data['program']=$this->input->post('program');
    //             $data['status_pernikahan']=$this->input->post('status_pernikahan');
    //             $data['status_keaktifan']=$this->input->post('status_keaktifan');
    //             $data['no_handphone']=$this->input->post('no_handphone');
	// 			$data['foto_diri'] = $gambar['file_name'];
                
				
	// 					$birthday = $this->input->post('tanggal_lahir');
						
	// 					// Convert Ke Date Time
	// 					$biday = new DateTime($birthday);
	// 					$today = new DateTime();
	// 					$diff = $today->diff($biday);		
			
	// 		$data['usia']=$diff->y;
			
			
	// 		$this->Staff_model->update_biodata($id_pengajar,$data);
	// 		$data2['pengajar'] = $this->Staff_model->select_by_id($id_pengajar);
	// 		$this->session->set_flashdata('info','Data telah berhasil diupdate');

			
	// 		redirect('Staff/daftar_pengajar'); 
	// 	}
 	// 		else{
 	// 				$this->template->admin('home/content');

 	// 		}		
	
    //     }
        
        
	function delete($id_pengajar)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['pengajar'] = $this->Staff_model->select_by_id($id_pengajar);
		if (!empty($logged_in) && $level=='admin')
		{
			
			// $this->template->dashboard_user('ppdb/dashboard/home');
		
			$this->Staff_model->hapus_pengajar($id_pengajar);
			redirect('staff/daftar_pengajar');}
		
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	


}