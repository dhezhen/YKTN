<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('template');
		$this->load->library('form_validation');
		$this->load->model('admin_model');
		$this->load->model('dashboard_model');
		$this->load->helper('date');
		$this->load->library('pagination');
		$this->load->helper('download');
		$this->load->helper('url');
	}
	
	function login()
	{
		$username = $this->input->post('username',true);
		$password = $this->input->post('password',true);
		
		$akun = $this->admin_model->cek_akun($username,$password);
		$temp_account = count($akun);
		
		if ($temp_account > 0)
		{
			$data = array(
							'level'=>$akun->level,
							'logged_in'=>true
			);
			
			$this->session->set_userdata($data);
			redirect('admin/beranda');
			//$this->template->admin('admin/beranda');
		}
		else
		{
			$this->template->home('home/content');
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

			//Peserta ganjill=======|| ganjil (g) || genap = (gnp)
			$peserta_ganjil = $this->dashboard_model->daftarpeserta_ganjil();
			$peserta_ig = $this->dashboard_model->peserta_ig();
			$peserta_mutqin_ig = $this->dashboard_model->program_mutqin_ig();
			$peserta_sebulan_ig = $this->dashboard_model->program_sebulan_ig();
			$peserta_3pekan_ig = $this->dashboard_model->program_3pekan_ig();
			$peserta_2pekan_ig = $this->dashboard_model->program_2pekan_ig();
			$peserta_1pekan_ig = $this->dashboard_model->program_1pekan_ig();
			$peserta_weekend_ig_tahsin = $this->dashboard_model->program_weekend_ig_tahsin();
			$peserta_weekend_ig_tahfizh = $this->dashboard_model->program_weekend_ig_tahfizh();

			http://[::1]/acs/access/card
			//jumlah peserta ikhwan ganjil
			$data['peserta_ganjil'] = count($peserta_ganjil);
			$data['jumlah_ig'] = count($peserta_ig);
			$data['program_mutqin_ig'] = count($peserta_mutqin_ig);
			$data['program_sebulan_ig'] = count($peserta_sebulan_ig);
			$data['program_3pekan_ig'] = count($peserta_3pekan_ig);
			$data['program_2pekan_ig'] = count($peserta_2pekan_ig);
			$data['program_1pekan_ig'] = count($peserta_1pekan_ig);
			$data['program_weekend_ig_tahfizh'] = count($peserta_weekend_ig_tahfizh);
			$data['program_weekend_ig_tahsin'] = count($peserta_weekend_ig_tahsin);



			//akhwat ganjjil 
			$peserta_ag = $this->dashboard_model->peserta_ag();
			$peserta_mutqin_ag = $this->dashboard_model->program_mutqin_ag();
			$peserta_sebulan_ag = $this->dashboard_model->program_sebulan_ag();
			$peserta_3pekan_ag = $this->dashboard_model->program_3pekan_ag();
			$peserta_2pekan_ag = $this->dashboard_model->program_2pekan_ag();
			$peserta_1pekan_ag = $this->dashboard_model->program_1pekan_ag();
			$peserta_weekend_ag_tahsin = $this->dashboard_model->program_weekend_ag_tahsin();
			$peserta_weekend_ag_tahfizh = $this->dashboard_model->program_weekend_ag_tahfizh();


			//jumlah peserta akwaht ganjil
			$data['jumlah_ag'] = count($peserta_ag);
			$data['program_mutqin_ag'] = count($peserta_mutqin_ag);
			$data['program_sebulan_ag'] = count($peserta_sebulan_ag);
			$data['program_3pekan_ag'] = count($peserta_3pekan_ag);
			$data['program_2pekan_ag'] = count($peserta_2pekan_ag);
			$data['program_1pekan_ag'] = count($peserta_1pekan_ag);
			$data['program_weekend_ag_tahfizh'] = count($peserta_weekend_ag_tahfizh);
			$data['program_weekend_ag_tahsin'] = count($peserta_weekend_ag_tahsin);
			
			//batas perhitungan peserta ganjil===============================

			//Peserta genap==================================================
			$peserta_genap = $this->dashboard_model->daftarpeserta_genap();
			$peserta_ignp = $this->dashboard_model->peserta_ignp();
			$peserta_mutqin_ignp = $this->dashboard_model->program_mutqin_ignp();
			$peserta_sebulan_ignp = $this->dashboard_model->program_sebulan_ignp();
			$peserta_3pekan_ignp = $this->dashboard_model->program_3pekan_ignp();
			$peserta_2pekan_ignp = $this->dashboard_model->program_2pekan_ignp();
			$peserta_1pekan_ignp = $this->dashboard_model->program_1pekan_ignp();
			$peserta_weekend_ignp_tahsin = $this->dashboard_model->program_weekend_ignp_tahsin();
			$peserta_weekend_ignp_tahfizh = $this->dashboard_model->program_weekend_ignp_tahfizh();


			//jumlah peserta ikhwan ganjil
			$data['peserta_genap'] = count($peserta_genap);
			$data['jumlah_ignp'] = count($peserta_ignp);
			$data['program_mutqin_ignp'] = count($peserta_mutqin_ignp);
			$data['program_sebulan_ignp'] = count($peserta_sebulan_ignp);
			$data['program_3pekan_ignp'] = count($peserta_3pekan_ignp);
			$data['program_2pekan_ignp'] = count($peserta_2pekan_ignp);
			$data['program_1pekan_ignp'] = count($peserta_1pekan_ignp);
			$data['program_weekend_ignp_tahfizh'] = count($peserta_weekend_ignp_tahfizh);
			$data['program_weekend_ignp_tahsin'] = count($peserta_weekend_ignp_tahsin);



			//akhwat ganjjil 
			$peserta_agnp = $this->dashboard_model->peserta_agnp();
			$peserta_mutqin_agnp = $this->dashboard_model->program_mutqin_agnp();
			$peserta_sebulan_agnp = $this->dashboard_model->program_sebulan_agnp();
			$peserta_3pekan_agnp = $this->dashboard_model->program_3pekan_agnp();
			$peserta_2pekan_agnp = $this->dashboard_model->program_2pekan_agnp();
			$peserta_1pekan_agnp = $this->dashboard_model->program_1pekan_agnp();
			$peserta_weekend_agnp_tahsin = $this->dashboard_model->program_weekend_agnp_tahsin();
			$peserta_weekend_agnp_tahfizh = $this->dashboard_model->program_weekend_agnp_tahfizh();


			//jumlah peserta akwaht genap
			$data['jumlah_agnp'] = count($peserta_agnp);
			$data['program_mutqin_agnp'] = count($peserta_mutqin_agnp);
			$data['program_sebulan_agnp'] = count($peserta_sebulan_agnp);
			$data['program_3pekan_agnp'] = count($peserta_3pekan_agnp);
			$data['program_2pekan_agnp'] = count($peserta_2pekan_agnp);
			$data['program_1pekan_agnp'] = count($peserta_1pekan_agnp);
			$data['program_weekend_agnp_tahfizh'] = count($peserta_weekend_agnp_tahfizh);
			$data['program_weekend_agnp_tahsin'] = count($peserta_weekend_agnp_tahsin);


			//batas Peserta genap==================================================







		//============================================================//
			$data['peserta'] = $this->dashboard_model->peserta_ig();
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
			$peserta = $this->dashboard_model->daftarpeserta();

			$peserta_ganjil = $this->dashboard_model->daftarpeserta_ganjil();
			$peserta_genap = $this->dashboard_model->daftarpeserta_genap();
			$data['peserta']= $this->dashboard_model->daftarpeserta();
			$data['jumlah_ganjil'] = count($peserta_ganjil);
			$data['jumlah_genap'] = count($peserta_genap);
			
			$data['peserta_ganjil'] = $this->dashboard_model->daftarpeserta_ganjil();
			$data['peserta_genap'] = $this->dashboard_model->daftarpeserta_genap();
			
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
	
	function proses_edit()
	{
		$logged_in = $this->session->userdata('logged_in');
		$level = $this->session->userdata('level');
		if (!empty($logged_in) && $level=='admin')
		{
		
				
				$data['email']=$this->input->post('email');			
				$data['no_identitas']=$this->input->post('no_identitas');
				$data['nama_lengkap']=$this->input->post('nama_lengkap');
				$data['nama_lengkap_arab']=$this->input->post('nama_lengkap_arab');
				$data['nama_panggilan']=$this->input->post('nama_panggilan');
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
				$data['bulan_lahir']=$this->input->post('bulan_lahir');
				$data['tahun_lahir']=$this->input->post('tahun_lahir');
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
				$data['nilai_tahsin']=$this->input->post('nilai_tahsin');
				
				
				
				$tanggal_lahir=$this->input->post('tanggal_lahir');
				$bulan_lahir=$this->input->post('bulan_sekolah');
				$tahun_lahir=$this->input->post('tahun_sekolah');
			
			$tanggal_today=date('d');
			$bulan_today=date('m');
			$tahun_today=date('Y');
			
			$harilahir=gregoriantojd($data['bulan_lahir'],$data['tanggal_lahir'],$data['tahun_lahir']);
			$hariini=gregoriantojd($bulan_today,$tanggal_today,$tahun_today);
			
			$umur=$hariini-$harilahir; //menghitung selisih hari
			$tahun=$umur/365; //menghitung usia tahun
			$sisa=$umur%365; //sisa pembagian dari tahun untuk menghitung bulan
			$bulan=$sisa/30; //menghitung usia bulan
			$hari=$sisa%30; //menghitung sisa hari
			
			$data['usia']=floor($tahun)." tahun ".floor($bulan)." bulan ".floor($hari)." hari";
			
			if ((floor($tahun) <= 5))
			{
				if (floor($bulan) < 7)
				{
					$data['keterangan'] = 'TIDAK LULUS';
				}
				else
				{
					$data['keterangan'] = 'LULUS';
				}
			}
			else
			{
				$data['keterangan'] = 'LULUS';
			}
			
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
				$data['username']=$this->input->post('username');			
				$data['password']=$this->input->post('password');			
				$data['no_identitas']=$this->input->post('no_identitas');
				$data['nama_lengkap']=$this->input->post('nama_lengkap');
				$data['nama_lengkap_arab']=$this->input->post('nama_lengkap_arab');
				$data['nama_panggilan']=$this->input->post('nama_panggilan');
				$data['jenis_kelamin']=$this->input->post('jenis_kelamin');
				$data['tanggal_lahir']=$this->input->post('tanggal_lahir');
				$data['bulan_lahir']=$this->input->post('bulan_lahir');
				$data['tahun_lahir']=$this->input->post('tahun_lahir');
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
			
			$tanggal_today=date('d');
			$bulan_today=date('m');
			$tahun_today=date('Y');
			
			$harilahir=gregoriantojd($data['bulan_lahir'],$data['tanggal_lahir'],$data['tahun_lahir']);
			$hariini=gregoriantojd($bulan_today,$tanggal_today,$tahun_today);
			
			$umur=$hariini-$harilahir; //menghitung selisih hari
			$tahun=$umur/365; //menghitung usia tahun
			$sisa=$umur%365; //sisa pembagian dari tahun untuk menghitung bulan
			$bulan=$sisa/30; //menghitung usia bulan
			$hari=$sisa%30; //menghitung sisa hari
			
			$data['usia']=floor($tahun)." tahun ".floor($bulan)." bulan ".floor($hari)." hari";
			
			if ((floor($tahun) <= 5))
			{
				if (floor($bulan) < 7)
				{
					$data['keterangan'] = 'TIDAK LULUS';
				}
				else
				{
					$data['keterangan'] = 'LULUS';
				}
			}
			else
			{
				$data['keterangan'] = 'LULUS';
			}
			
			$this->admin_model->tambahpeserta($data);
			redirect('admin/daftarpeserta');
		}
	}
		else
		{
			$this->template->home('admin/beranda');
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