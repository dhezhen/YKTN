<?php 
class Staff_model extends CI_Model{

    function __construct()
	{
		parent::__construct();
	}

    function daftar_pengajar(){
        $angkatan=$this->session->userdata('angkatan');
        $this->db->select('*');
        $this->db->from('pengajar');
       //$this->db->where('angkatan',$angkatan);
        return $this->db->get()->result();
    }
    function daftar_muhaffizh(){
        
        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->where('jenis_k','L');
        return $this->db->get()->result();

    }

    function daftar_muhaffizhah(){

        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->where('jenis_k','P');
        return $this->db->get()->result();
    }

    function select_by_id($id_pengajar)
	{
		$this->db->where('id_pengajar',$id_pengajar);
		
		return $this->db->get('pengajar')->row();
    }
    
    function select_by_id_peserta($id_peserta)
	{
		$this->db->where('id_peserta',$id_peserta);
		
		return $this->db->get('peserta')->row();
    }
    
    function update_muhaffizh($id_peserta,$data)
    {
        $this->db->where('id_peserta',$id_peserta);
        $this->db->update('peserta',$data);
        
    }

    function update_muhaffizhah($id_peserta,$data)
    {
        $this->db->where('id_peserta',$id_peserta);
        $this->db->update('peserta',$data);
        
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

function daftar_halaqoh_ikhwan(){

    $angkatan = $this->session->userdata('angkatan');
    $this->db->select('*');
    $this->db->from('peserta');
   // $this->db->where('peserta.id_pengajar',0);
    $this->db->join('pengajar','peserta.id_pengajar = pengajar.id_pengajar');
    $this->db->where('peserta.angkatan',$angkatan);
    $this->db->where('peserta.jenis_kelamin','L');
    $this->db->where('status','diverifikasi');
    return    $this->db->get()->result();

}

function daftar_halaqoh_akhwat (){
    $a = $this->session->userdata('angkatan');
    $this->db->select('*');
    $this->db->from('peserta');
    $this->db->join('pengajar', 'peserta.id_pengajar = pengajar.id_pengajar');
    $this->db->where('peserta.angkatan',$a);
    $this->db->where('peserta.jenis_kelamin','P');
    $this->db->where('status','diverifikasi');
    return $this->db->get()->result();
}


}
?>