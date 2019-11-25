<?php 
class Staff_model extends CI_Model{

    function __construct()
	{
		parent::__construct();
	}

    function daftar_pengajar(){
        $this->db->select('*');
        $this->db->from('pengajar');
        return $this->db->get()->result();
    }
    function daftar_muhaffizh(){
        
        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->where('jenis_kelamin','L');
        return $this->db->get()->result();

    }

    function daftar_muhaffizhah(){

        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->where('jenis_kelamin','P');
        return $this->db->get()->result();
    }

    function select_by_id($id_pengajar)
	{
		$this->db->where('id_pengajar',$id_pengajar);
		
		return $this->db->get('pengajar')->row();
	}

function tambah_pengajar($data) {
    $this->db->insert('pengajar',$data);
}

function update_biodata($id_pengajar,$data)
{
    $this->db->where('id_pengajar',$id_pengajar);
    $this->db->update('pengajar',$data);
}

function hapus_pengajar($id_pengajar)
	{
		$this->db->where('id_pengajar',$id_pengajar);
		$this->db->delete('pengajar');
	}


function edit_muhaffizhah(){

}

function proses_update_muhaffizh(){
    
}

function proses_update_muhaffizhah(){

}
function delete_muhaffizh(){
    
}

function delete_muhaffizhah(){

}

}
?>