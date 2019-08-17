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
	
	function cek_username($username)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
		
		return $this->db->get()->row();
	}
	
	function daftar_peserta($data)
	{
		$this->db->insert('peserta',$data);
	}
	
	function cek_akun($username,$password)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('username',$username);
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
		$this->db->where('keterangan','LULUS');
		
		return $this->db->get()->result();
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