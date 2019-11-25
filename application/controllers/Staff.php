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

    function muhaffizh()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$muhaffizh = $this->Staff_model->daftar_muhaffizh();
			$data['jumlah'] = count($muhaffizh);
			$data['muhaffizh'] = $this->Staff_model->daftar_muhaffizh();
			$this->template->admin('staff/muhaffizh',$data);
		}
		else
		{
			$this->template->home('home/content');
        }      
    }
    
    
    function muhaffizhah(){
        $logged_in = $this->session->userdata('logged_in');
        $level = $this->session->userdata('level');
        if (!empty($logged_in) && $level=='admin'){
            $muhaffizhah = $this->Staff_model->daftar_muhaffizhah();
            $data['jumlah'] = count($muhaffizhah);
            $data['muhaffizhah'] = $muhaffizhah;
            $this->template->admin('staff/muhaffizhah',$data);     
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
				
				$data['nama_p']=$this->input->post('nama_p');			
				$data['tempat_lahir']=$this->input->post('tempat_lahir');			
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');			
                $data['jenis_kelamin']=$this->input->post('jenis_kelamin');
                $data['alamat']=$this->input->post('alamat');
                $data['angkatan']=$this->input->post('angkatan');
                $data['status_pernikahan']=$this->input->post('status_pernikahan');
                $data['status_keaktifan']=$this->input->post('status_keaktifan');
                $data['no_handphone']=$this->input->post('no_handphone');
				$data['foto_diri'] = $gambar['file_name'];
                
				
						$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia']=$diff->y;
			
			
			
			$this->Staff_model->tambah_pengajar($data);
			redirect('staff/daftar_pengajar');
		}
	}
		else
		{
			$this->template->home('admin/beranda');
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

	function update_pengajar()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
			$data['nama_p']=$this->input->post('nama_p');			
				$data['tempat_lahir']=$this->input->post('tempat_lahir');			
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');			
                $data['angkatan']=$this->input->post('angkatan');
                $data['jenis_kelamin']=$this->input->post('jenis_kelamin');
                $data['alamat']=$this->input->post('alamat');
                $data['program']=$this->input->post('program');
                $data['status_pernikahan']=$this->input->post('status_pernikahan');
                $data['status_keaktifan']=$this->input->post('status_keaktifan');
                $data['no_handphone']=$this->input->post('no_handphone');
				$data['foto_diri'] = $gambar['file_name'];
                
				
						$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia']=$diff->y;
			
			
			$this->Staff_model->update_biodata($id_pengajar,$data);
			$data2['pengajar'] = $this->Staff_model->select_by_id($id_pengajar);
			$this->session->set_flashdata('info','Data telah berhasil diupdate');
					
			redirect('staff/daftar_pengajar');
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