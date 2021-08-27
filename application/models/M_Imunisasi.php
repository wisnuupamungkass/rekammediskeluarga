<?php

Class M_Imunisasi extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

	public function lihat_imunisasi()
	{
		$this->db->select('id_imunisasi,tanggal,anak.nama as nama_anak,petugas.nama as nama_petugas,nama_imunisasi');
		$this->db->from('imunisasi');
		$this->db->join('anak', 'anak.no_register = imunisasi.no_register');
		$this->db->join('petugas', 'petugas.id_petugas = imunisasi.id_petugas');
		$this->db->join('jenis_imunisasi', 'imunisasi.kode_imunisasi = jenis_imunisasi.id_jenis');
		$lihat = $this->db->get();
		return $lihat;
	}

	public function detail_imunisasi($id_imunisasi)
    {
		$this->db->select('id_imunisasi,tanggal,anak.nama as nama_anak,petugas.nama as nama_petugas,nama_imunisasi');
		$this->db->from('imunisasi');
		$this->db->join('anak', 'anak.no_register = imunisasi.no_register');
		$this->db->join('petugas', 'petugas.id_petugas = imunisasi.id_petugas');
		$this->db->join('jenis_imunisasi', 'imunisasi.kode_imunisasi = jenis_imunisasi.id_jenis');
		$this->db->where('id_imunisasi',$id_imunisasi);
		$query = $this->db->get();
		return $query;
	}

	public function hapus_imunisasi($id_imunisasi)
	{	
		$this->db->where('id_imunisasi', $id_imunisasi);
		$this->db->delete('imunisasi');
	}
}
?>