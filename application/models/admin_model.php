<?php

class Admin_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}
	

function daftarpeserta()
	{
		return $this->db->get('peserta')->result();
		
	}

	
	function select_by_id($id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get('peserta')->row();
	}
	
	function up_biodata($id_peserta,$data)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
	}
	
	function hapus_peserta($id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->delete('peserta');
	}
	
	function tambahpeserta($data)
	{
		$this->db->insert('peserta',$data);
	}

	function updatePengumuman ($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pengumuman',$data);	
	}

	function isiPengumuman(){
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');

		return $this->db->get()->result();

	}
	
	function pesertabelumdiverifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		;
		$this->db->where('status','belum diverifikasi');
		$this->db->where('angkatan','44');
		
		
		return $this->db->get()->result();
	}
	
	function pesertatelahverifikasi()
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->order_by('jenis_kelamin asc, nama_lengkap asc, nilai_tahsin desc');
		$this->db->where('status','diverifikasi');
		$this->db->where('angkatan','44');
		
		return $this->db->get()->result();
	}
	
	function daftarpesan()
	{
		return $this->db->get('pesan')->result();
	}
	
	function bukapesan($id)
	{
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->where('id',$id);
		
		return $this->db->get()->row();
	}
	
	function uppesan($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pesan',$data);
	}
	
	function pengumuman()
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id','2');
		
		return $this->db->get()->row();
	}
	
	function uppengumuman($id,$data)
	{
		$this->db->where('id',$id);
		$this->db->update('pengumuman',$data);
	}
	
	function cek_akun($email,$password)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		
		return $this->db->get()->row();
	}
}