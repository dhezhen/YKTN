<?php

class Dashboard_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
//daftar peserta keseluruhan
function daftarpeserta()
	{
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);

		return $this->db->get()->result();
		
	}


	

			//Hitung Jumlah Peserta ganjil
	function total_peserta()
	{
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		return $this->db->get()->result();
	}	


	function peserta_i()
	{
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('jenis_kelamin','L');
		
		return $this->db->get()->result();
	}

	//Hitung Program -==========================================
	function program_sebulan_i() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','1 Bulan 30 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();	

	}	function program_mutqin_i() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','3 Bulan Mutqin');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();	

	}	

	function program_3pekan_i() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','3 Pekan 15 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}
	function program_2pekan_i() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','2 Pekan 10 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}	

	function program_1pekan_i() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','1 Pekan 5 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}

	function program_weekend_i_tahsin() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','weekend Tahsin Tuntas');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}
	function program_weekend_i_tahfizh() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','weekend 1 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}

	// akhwat ganjil function peserta_ag()
	function peserta_a()                                     
	{
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('jenis_kelamin','P');
		
		return $this->db->get()->result();
	}

	//Hitung Program -==========================================

	function program_sebulan_a() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','1 Bulan 30 Juz');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();	

	}	function program_mutqin_a() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','3 Bulan Mutqin');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();	

	}	

	function program_3pekan_a() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','3 Pekan 15 Juz');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();
	}
	function program_2pekan_a() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','2 Pekan 10 Juz');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();
	}	

	function program_1pekan_a() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','1 Pekan 5 Juz');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();
	}

	function program_weekend_a_tahsin() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','weekend Tahsin Tuntas');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();
	}
	function program_weekend_a_tahfizh() {
		$angkatan = $this->session->userdata('angkatan');
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan',$angkatan);
		$this->db->where('program','weekend 1 Juz');
		$this->db->where('jenis_kelamin','P');
		return $this->db->get()->result();
	}



	// //=====peserta genap==========//

	// function peserta_ignp()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('jenis_kelamin','L');
		
	// 	return $this->db->get()->result();
	// }

	// //Hitung Program -==========================================
	// function program_sebulan_ignp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','1 Bulan 30 Juz');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();	

	// }	function program_mutqin_ignp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','3 Bulan Mutqin');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();	

	// }	

	// function program_3pekan_ignp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','3 Pekan 15 Juz');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();
	// }
	// function program_2pekan_ignp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','2 Pekan 10 Juz');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();
	// }	

	// function program_1pekan_ignp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','1 Pekan 5 Juz');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();
	// }

	// function program_weekend_ignp_tahsin() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','weekend Tahsin Tuntas');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();
	// }
	// function program_weekend_ignp_tahfizh() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','weekend 1 Juz');
	// 	$this->db->where('jenis_kelamin','L');
	// 	return $this->db->get()->result();
	// }

	// // akhwat ganjil function peserta_agnp()
	// function peserta_agnp()                                     
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('jenis_kelamin','P');
		
	// 	return $this->db->get()->result();
	// }

	// //Hitung Program -==========================================

	// function program_sebulan_agnp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','1 Bulan 30 Juz');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();	

	// }	function program_mutqin_agnp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','3 Bulan Mutqin');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();	

	// }	

	// function program_3pekan_agnp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','3 Pekan 15 Juz');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();
	// }
	// function program_2pekan_agnp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','2 Pekan 10 Juz');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();
	// }	

	// function program_1pekan_agnp() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','1 Pekan 5 Juz');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();
	// }

	// function program_weekend_agnp_tahsin() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','weekend Tahsin Tuntas');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();
	// }
	// function program_weekend_agnp_tahfizh() {
	// 	$this->db->select('*');
	// 	$this->db->from('peserta');
	// 	$this->db->where('angkatan','44');
	// 	$this->db->where('program','weekend 1 Juz');
	// 	$this->db->where('jenis_kelamin','P');
	// 	return $this->db->get()->result();
	// }                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
}