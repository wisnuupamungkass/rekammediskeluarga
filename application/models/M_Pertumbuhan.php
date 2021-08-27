<?php

Class M_Pertumbuhan extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

	public function lihat_pertumbuhan()
	{
		$this->db->select('id_pertumbuhan,tanggal,pertumbuhan.lingkar_kepala,pertumbuhan.berat_badan,tinggi_badan,anak.nama as nama_anak,petugas.nama as nama_petugas');
		$this->db->from('pertumbuhan');
		$this->db->join('anak', 'anak.no_register = pertumbuhan.no_register');
		$this->db->join('petugas', 'petugas.id_petugas = pertumbuhan.id_petugas');
		$lihat = $this->db->get();
		return $lihat;
	}

	public function detail_pertumbuhan($id_pertumbuhan)
    {
		$this->db->select('id_pertumbuhan,tanggal,pertumbuhan.lingkar_kepala,pertumbuhan.berat_badan,tinggi_badan,anak.nama as nama_anak,petugas.nama as nama_petugas');
		$this->db->from('pertumbuhan');
		$this->db->join('anak', 'anak.no_register = pertumbuhan.no_register');
		$this->db->join('petugas', 'petugas.id_petugas = pertumbuhan.id_petugas');
		$this->db->where('id_pertumbuhan', $id_pertumbuhan);
		$query = $this->db->get();
		return $query;
	}

	public function hapus_pertumbuhan($id_pertumbuhan)
	{	
		$this->db->where('id_pertumbuhan', $id_pertumbuhan);
		$this->db->delete('pertumbuhan');
	}
}
?>