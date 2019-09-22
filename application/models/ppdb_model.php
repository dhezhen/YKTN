<?php

class Ppdb_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	
	function semua_peserta()
	{
		return $this->db->get('peserta')->result();
	}
	
	function cek_email($email)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('email',$email);
		
		return $this->db->get()->row();
	}
	
	function daftar_peserta($data)
	{

		$this->db->insert('peserta',$data);
	}
	
	function cek_akun($email,$password)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}
	
	function select_by_id($id_peserta)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get()->row();
	}
	
	function update_biodata($data,$id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
	}
	
	function pengumuman()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('angkatan','43');
		$this->db->where('status','diverifikasi');
		$this->db->where('keterangan','LULUS');
			
		return $this->db->get()->result();
	}

	function jadwal()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
			return $this->db->get()->row();
	}
	
	function kirim_pesan($data)
	{
		$this->db->insert('pesan',$data);
	}
	
	function tampilpengumuman()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
		
		return $this->db->get()->row();
	}
}