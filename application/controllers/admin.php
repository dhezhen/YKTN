<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('admin_model');
		$this->load->model('dashboard_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
		$this->load->helper('url');
	}
	
	function login()
	{
		$email = $this->input->post('email',true);
		$password = $this->input->post('password',true);
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
	


	function logout()
	{
		$this->session->sess_destroy();
		$this->template->home('home/content');
	}
	
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

	function daftarpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{		
			$total_peserta = $this->dashboard_model->total_peserta();
			$data['peserta']= $this->dashboard_model->daftarpeserta();
			$data['total_peserta'] = count($total_peserta);

			
			
			
			
			$this->template->admin('admin/daftarpeserta',$data);
			
		}
		else
		{
			$this->template->home('home/content');
		}		
	}
	
	function biodatapeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/pesertaselengkapnya',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function cetak($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
				$data['format']='DATE_RFC850';
				$data['time']=time();
				$data['peserta']=$this->admin_model->select_by_id($id_peserta);		
				$html = $this->load->view('ppdb/dashboard/form_pdf',$data, true);
				// Nomor perserta (untuk nama file)
				

				// Cetak dengan html2pdf
				require(APPPATH."/third_party/html2pdf_v4.03/html2pdf.class.php");
				try {
					ob_end_clean();
					$html2pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', array('20', '5', '20', '5'));
					$html2pdf->WriteHTML($html);
					$html2pdf->Output('biodata.pdf');
				} catch (HTML2PDF_exception $e) {
					// echo $e;
					$this->session->set_flashdata('pesan_error', 'Maaf, kami mengalami kendala teknis. Coba ' . anchor('dashboard/biodata-preview', 'ulangi ', 'class="alert-link"') . ' beberapa saat lagi!');
					redirect('admin/daftarpeserta');
				}
		}
		else
		{
			$this->template->home('home/content');
		}
				
	}
	
	function editpeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/editpeserta',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	


	function edit_nilai($id_peserta){

		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/update_nilai',$data);
		}
	}



	function proses_edit()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
				
				$data['email']=$this->input->post('email');			
				$data['password']=$this->input->post('password');	
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
				$data['wakaf']=$this->input->post('wakaf');
				$data['uang_wakaf']=$this->input->post('uang_wakaf');
				$data['barang_wakaf']=$this->input->post('barang_');
		
				
				
				
				$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia']=$diff->y;
			
			
			$id_peserta=$this->input->post('id_peserta');
			
			$this->admin_model->up_biodata($id_peserta,$data);
			$data2['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			
			
				redirect('admin/editpeserta/'.$id_peserta);
		}
	
		else
		{
			$this->template->home('home/content');
		}
			
	}
	


function proses_update_nilai()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
					
			$data['nilai_tahsin']=$this->input->post('nilai_tahsin');	
			$id_peserta=$this->input->post('id_peserta');
			
			$this->admin_model->up_biodata($id_peserta,$data);
			$data2['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			
			
			redirect('admin/belumdiverifikasi/');
		}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}


		function update_pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
					
			$data['isi']=$this->input->post('isi');	
			$id=$this->input->post('id');
			
			$this->admin_model->updatePengumuman($id,$data);
			$data2['pengumuman'] = $this->admin_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			
			
			redirect('admin/pengumuman/');
		}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}
	

	function hapus_peserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
		if (!empty($logged_in) && $level=='admin')
		{
			$message = "Apakah anda akan menghapus data <?php echo $peserta->nama_lengkap; ?>";
					echo "<script type='text/javascript'>alert('$message');</script>";
			$this->template->dashboard_user('ppdb/dashboard/home');
		
			$this->admin_model->hapus_peserta($id_peserta);
			redirect('admin/daftarpeserta');}
		
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	
	function tambahpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('admin/tambahpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}



	
	function tambah_peserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$config['upload_path'] = './uploads/Dokumen/';
			$config['allowed_types'] = 'jpg|jpeg|png';
			$config['max_size'] = 12000;
			$config['max_width']=12000;
			$config['max_height'] = 12000;

			$this->load->library('upload',$config);

			if (!$this->upload->do_upload())
			{
				$id_peserta = $this->session->userdata('id_peserta');
				$this->session->set_flashdata('info','Foto Gagal');
				redirect('admin/tambahpeserta/'.$id_peserta);
			}
			else
			{


				$gambar = $this->upload->data();
				
				$data['email']=$this->input->post('email');			
				$data['email']=$this->input->post('email');			
				$data['password']=$this->input->post('password');			
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
				//$data['fb']=$this->input->post('fb');
				//$data['ig']=$this->input->post('ig');
				$data['stok_hafalan']=$this->input->post('stok_hafalan');
				$data['alamat']=$this->input->post('alamat');
				$data['pekerjaan']=$this->input->post('pekerjaan');
				$data['no_handphone']=$this->input->post('no_handphone');
				//$data['alergi_makanan']=$this->input->post('alergi_makanan');
				$data['ukuran_baju']=$this->input->post('ukuran_baju');
				$data['program']=$this->input->post('program');
				$data['angkatan']=$this->input->post('angkatan');
				$data['sekolah_instansi']=$this->input->post('sekolah_instansi');
				
				$data['status_pernikahan']=$this->input->post('status_pernikahan');

				$data['nama_ayah']=$this->input->post('nama_ayah');
				$data['nama_ayah_arab']=$this->input->post('nama_ayah_arab');

				$data['info_karantina']=$this->input->post('info_karantina');
				//$data['wakaf']=$this->input->post('wakaf');
				//$data['uang_wakaf']=$this->input->post('uang_wakaf');
				///$data['barang_wakaf']=$this->input->post('barang_');
				//$data['nilai_tahsin']=$this->input->post('nilai_tahsin');
				$data['foto_diri'] = $gambar['file_name'];
			
						$birthday = $this->input->post('tanggal_lahir');
						
						// Convert Ke Date Time
						$biday = new DateTime($birthday);
						$today = new DateTime();
						$diff = $today->diff($biday);		
			
			$data['usia']=$diff->y;
			
			
			
			$this->admin_model->tambahpeserta($data);
			redirect('admin/daftarpeserta');
		}
	}
		else
		{
			$this->template->home('admin/beranda');
		}
			
	}


	function keuangan()
	{
		$logged_in= $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in)&& $level=='admin')

		{
			
			$data['peserta'] = $this->admin_model->daftarpeserta();
			$this->template->admin('admin/keuangan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}

	}
	
	function form_pembayaran($id_peserta){

		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->template->admin('admin/form_pembayaran',$data);
		}
	}

	function update_pembayaran()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
					
			$data['uang_regis']=$this->input->post('uang_regis');	
			$data['uang_akomodasi']=$this->input->post('uang_akomodasi');	
			$data['uang_wakaf']=$this->input->post('uang_wakaf');	
			$id_peserta=$this->input->post('id_peserta');
			
			$this->admin_model->up_biodata($id_peserta,$data);
			$data2['peserta'] = $this->admin_model->select_by_id($id_peserta);
			$this->session->set_flashdata('info','Dokumen telah berhasil diupdate');
			
			
			redirect('admin/keuangan');
		}
 			else{
 					$this->template->home('home/content');

 			}		
	
		}


	
	function daftarverifpeserta()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$this->template->admin('admin/daftarverifpeserta');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function belumdiverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertabelumdiverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertabelumdiverifikasi();
			$this->template->admin('admin/belumdiverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function telahverifikasi()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$peserta = $this->admin_model->pesertatelahverifikasi();
			$data['jumlah'] = count($peserta);
			$data['peserta'] = $this->admin_model->pesertatelahverifikasi();
			$this->template->admin('admin/telahverifikasi',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function verifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/belumdiverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function unverifikasipeserta($id_peserta)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 'belum diverifikasi';
			$this->admin_model->up_biodata($id_peserta,$data);
			redirect('admin/telahverifikasi');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function daftarpesan()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pesan'] = $this->admin_model->daftarpesan();
			$this->template->admin('admin/daftarpesan',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function bukapesan($id)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['status'] = 2;
			$this->admin_model->uppesan($id,$data);
			
			$data2['pesan'] = $this->admin_model->bukapesan($id);
			$this->template->admin('admin/bukapesan',$data2);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function pengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$data['pengumuman'] = $this->admin_model->pengumuman();
			$this->template->admin('admin/pengumuman',$data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function hidupkanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dihidupkan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function matikanpengumuman()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$id = 2;
			$data['status'] = 'dimatikan';
			$this->admin_model->uppengumuman($id,$data);
			redirect('admin/pengumuman');
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
	
	function download($nama)
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
			$name = $nama;
			$data = file_get_contents('uploads/Dokumen/'.$nama);
			force_download($name, $data);
		}
		else
		{
			$this->template->home('home/content');
		}
		
	}
}