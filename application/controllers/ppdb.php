<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('ppdb_model');
		$this->load->helper('date');
	}
	
	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$this->template->dashboard_user('ppdb/dashboard/home',$data);
			
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	

	function daftar()
	{
		$this->template->ppdb('ppdb/pendaftaran');
	}
	
	function proses_daftar()
	{
		$data['nama_lengkap'] = $this->input->post('nama_lengkap',true);
		$data['email'] = $this->input->post('email',true);
		$data['password'] = $this->input->post('password',true);
		$data['no_handphone'] = $this->input->post('no_handphone',true);
		$data['angkatan'] = $this->input->post('angkatan',true);
	
		
		$email = $this->input->post('email',true);
		$cek_email = $this->ppdb_model->cek_email($email);
		$num_account = count($cek_email);
		
		$this->form_validation->set_rules('nama_lengkap','Nama Lengkap','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('angkatan','angkatan','required');
		$this->form_validation->set_rules('no_handphone','no_handphone','required');
		
		
		if ($this->form_validation->run()==FALSE)
		{
			$this->template->ppdb('ppdb/pendaftaran');
		}
		else
		{
			if ($num_account > 0)
			{
				$this->session->set_flashdata('error','<div class="alert alert-warning" role="alert">Maaf email sudah ada yang menggunakan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
			else
			{
				$this->ppdb_model->daftar_peserta($data);
				$this->session->set_flashdata('error','<div class="alert alert-success" role="alert">Pendaftaran berhasil. Silahkan Login dengan menggunakan Akun yang sudah didaftarkan</div>');
				$this->template->ppdb('ppdb/pendaftaran');
			}
		}
	}
	

	function prosedur()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/prosedur');
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	function proses_login()
	{
		$email = $this->input->post('email',true);
		$password = $this->input->post('password',true);
		
		$akun2 = $this->ppdb_model->cek_akun($email,$password);
		$akun = count($akun2);
		
		if ($akun > 0)
		{
			$data_session = array(
									'level'=>$akun2->level,
									'id_peserta'=>$akun2->id_peserta,
									'status'=>$akun2->status,
									'id_peserta'=>$akun2->id_peserta,
									'logged_in'=>true
			);
			
			$this->session->set_userdata($data_session);
			$message = "anda berhasil login";
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			//echo "<script type='text/javascript'>alert('$message');</script>";

			$this->template->dashboard_user('ppdb/dashboard/home',$data);
		}
		else
		{
				$message = "Maaf,Email atau password salah";
				echo "<script type='text/javascript'>alert('$message');</script>";

			$this->template->ppdb('ppdb/prosedur');
		}
	}


	
	function logout()
	{


		$this->session->sess_destroy();

$message = "Terimakasih, jangan lupa Tilawah";
echo "<script type='text/javascript'>alert('$message');</script>";
		

		$this->template->ppdb('ppdb/prosedur');
	}
	
	function update_biodata($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	function up_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$config['upload_path'] = './uploads/Dokumen/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 12000;
			$config['max_width'] = 12000;
			$config['max_height'] = 12000;
			
			$this->load->library('upload',$config);
			
			if (!$this->upload->do_upload())
			{
				$id_peserta = $this->session->userdata('id_peserta');
				$this->session->set_flashdata('info','Foto Gagal');
				redirect('ppdb/update_biodata/'.$id_peserta);
			}
			else
			{
				$gambar = $this->upload->data();
				$gambar2 = $this->upload->data();
				$gambar3 = $this->upload->data();
				
				$data['email']=$this->input->post('email');			
				$data['no_identitas']=$this->input->post('no_identitas');
				$data['nama_lengkap']=$this->input->post('nama_lengkap');
				$data['nama_lengkap_arab']=$this->input->post('nama_lengkap_arab');
				$data['nama_panggilan']=$this->input->post('nama_panggilan');
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
				$data['tempat_lahir']=$this->input->post('tempat_lahir');
				$data['status_peserta']=$this->input->post('status_peserta');
				$data['kewarganegaraan']=$this->input->post('kewarganegaraan');
				$data['alamat']=$this->input->post('alamat');
				$data['kabupaten']=$this->input->post('kabupaten');
				$data['provinsi']=$this->input->post('provinsi');
				$data['no_darurat']=$this->input->post('no_darurat');
				$data['fb']=$this->input->post('fb');
				$data['ig']=$this->input->post('ig');
				$data['stok_hafalan']=$this->input->post('stok_hafalan');
				$data['alamat']=$this->input->post('alamat');
				$data['pekerjaan']=$this->input->post('pekerjaan');
				$data['no_handphone']=$this->input->post('no_handphone');
				$data['alergi_makanan']=$this->input->post('alergi_makanan');
				$data['ukuran_baju']=$this->input->post('ukuran_baju');
				$data['program']=$this->input->post('program');
				$data['angkatan']=$this->input->post('angkatan');
				$data['sekolah_instansi']=$this->input->post('sekolah_instansi');
				
				$data['status_pernikahan']=$this->input->post('status_pernikahan');

				$data['nama_ayah']=$this->input->post('nama_ayah');
				$data['nama_ayah_arab']=$this->input->post('nama_ayah_arab');

				$data['info_karantina']=$this->input->post('info_karantina');
				// $data['wakaf']=$this->input->post('wakaf');
				// $data['uang_wakaf']=$this->input->post('uang_wakaf');
				// $data['barang_wakaf']=$this->input->post('barang_');
				$data['nilai_tahsin']=$this->input->post('nilai_tahsin');
				
				
				$data['foto_diri'] = $gambar['file_name'];
				$data['foto_identitas'] = $gambar2['file_name'];
				$data['foto_suket'] = $gambar3['file_name'];
				
			$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia']=$diff->y;
				
				$id_peserta=$this->input->post('id_peserta');
				
				$this->ppdb_model->update_biodata($data,$id_peserta);
				
				$data2['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
				$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
				$this->template->dashboard_user('ppdb/dashboard/form_preview',$data2);
			}
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['peserta'] = $this->ppdb_model->semua_peserta();
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/daftar_peserta',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/daftar_peserta',$data);
		}
	}
	
	function form_biodata()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			
			$this->template->dashboard_user('ppdb/dashboard/form_biodata',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	function form_preview()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['peserta'] = $this->ppdb_model->select_by_id($id_peserta);
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$this->template->dashboard_user('ppdb/dashboard/form_preview',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}


		
	function cetak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$id_peserta = $this->session->userdata('id_peserta');
			$data['format']='DATE_RFC850';
			$data['time']=time();
			$data['peserta']=$this->ppdb_model->select_by_id($id_peserta);	
			$html = $this->load->view('ppdb/dashboard/form_pdf',$data, true);
			// Nomor perserta (untuk nama file)
			

			// Cetak dengan html2pdf
			require(APPPATH."/third_party/html2pdf_v4.03/html2pdf.class.php");
			
			
			try {
					ob_end_clean();
					$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('10', '10', '20', '10'));
					
					$html2pdf->AddFont("arab");
					$html2pdf->WriteHTML($html);
					$html2pdf->Output("Formulir Pendaftaran.pdf");
				} 
			catch (HTML2PDF_exception $e) 
				{
					 echo $e;
					$this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
					redirect('ppdb/form_preview');
				}
		}
		else
		{
			$this->template->ppdb('ppdb/prosedur');
		}
	}
	
	
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['pengumuman'] = $this->ppdb_model->tampilpengumuman();
		$data['peserta'] = $this->ppdb_model->pengumuman();
	
	
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/pengumuman',$data);
		}
		else
		{
			$this->template->ppdb('ppdb/pengumuman',$data);
		}
	}


function jadwal()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='peserta')
		{
			$data['jadwal'] = $this->ppdb_model->jadwal();
			$this->template->dashboard_user('ppdb/jadwal',$data);
		}
		else
		{
		$this->template->ppdb('ppdb/jadwal',$data);
		}
		
	}


	
	function kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level == 'peserta')
		{
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->template->ppdb('ppdb/kontak');
		}
	}

	




	
	function proses_kontak()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		
		$data['nama'] = $this->input->post('nama',true);
		$data['nope'] = $this->input->post('nope',true);
		$data['isi'] = $this->input->post('isi',true);
		$data['judul'] = $this->input->post('judul',true);
		
		if (!empty($logged_in) && $level == 'peserta')
		{	
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->dashboard_user('ppdb/kontak');
		}
		else
		{
			$this->ppdb_model->kirim_pesan($data);
			$this->session->set_flashdata('info','<div class="alert alert-success" role="alert">Pesan Berhasil Dikirim</div>');
			$this->template->ppdb('ppdb/kontak');
		}
	}
}