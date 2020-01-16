<?php 
 
 class Pengajar_model extends CI_Model
    {
            function __construct()
            {
                parent::__construct();
            }

    function cek_akun($nama_p, $no_hp)
    {
        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->where('nama_p',$nama_p);
        $this->db->where('no_hp', $no_hp);
        return $this->db->get()->row(); 
    }


    function peserta_halaqoh()
	{
        $nama = $this->session->userdata('nama_p');
		$this->db->select('*');
		$this->db->from('peserta');
        $this->db->join('pengajar','peserta.id_pengajar=pengajar.id_pengajar');
        $this->db->where('peserta.jenis_kelamin=pengajar.jenis_k'); 
        $this->db->where('pengajar.nama_p',$nama);
		
		
		return $this->db->get()->result();
    }
    function daftar_peserta(){
        $this->db->select('*');
        $this->db->from('peserta');
        return $this->db->get()->result();
        
    }
 
    function select_by_id($id_peserta)
	{
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get()->row();
    }
    
    	
	function up_biodata($id_peserta,$data)
	{
		$this->db->where('id_peserta',$id_peserta);
		$this->db->update('peserta',$data);
	}

    function update_perolehan_harian(){

    }

    function update_perolehan_juz(){

    }

    }
   




?>