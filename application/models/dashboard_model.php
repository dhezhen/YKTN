<?php

class Dashboard_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	

function daftarpeserta()
	{
		return $this->db->get('peserta')->result();
		
	}

	function daftarpeserta_ganjil()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		return $this->db->get()->result();
	}

	function daftarpeserta_genap()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','44');
		return $this->db->get()->result();
	}

	

			//Hitung Jumlah Peserta ganjil
	function total_peserta_ganjil()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		return $this->db->get()->result();
	}	

	function peserta_ig()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('jenis_kelamin','L');
		
		return $this->db->get()->result();
	}

	//Hitung Program -==========================================
	function program_sebulan_ig() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','1 Bulan 30 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();	

	}	function program_mutqin_ig() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','3 Bulan Mutqin');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();	

	}	

	function program_3pekan_ig() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','3 Pekan 15 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}
	function program_2pekan_ig() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','2 Pekan 10 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}	

	function program_1pekan_ig() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','1 Pekan 5 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}

	function program_weekend_ig_tahsin() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','weekend Tahsin Tuntas');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}
	function program_weekend_ig_tahfizh() {
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('program','weekend 1 Juz');
		$this->db->where('jenis_kelamin','L');
		return $this->db->get()->result();
	}

	
}