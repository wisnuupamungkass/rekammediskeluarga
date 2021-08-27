<?php

Class M_RekamMedis extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

	public function lihat_rekammedis()
	{
		$sql="SELECT id_periksa, tanggal, keluhan, riwayat_penyakit, diagnosa, tindakan_medis, obat, orangtua.nama AS pasien, petugas.nama FROM rekammedis JOIN orangtua ON orangtua.no_ktp=rekammedis.no_ktp JOIN petugas ON petugas.id_petugas=rekammedis.id_petugas GROUP BY id_periksa UNION SELECT id_periksa, tanggal, keluhan, riwayat_penyakit, diagnosa, tindakan_medis, obat, anak.nama AS pasien , petugas.nama FROM rekammedis JOIN anak ON anak.no_register=rekammedis.no_register JOIN petugas ON petugas.id_petugas=rekammedis.id_petugas GROUP BY id_periksa";
		$lihat = $this->db->query($sql);
		return $lihat;
	}

	public function detail_rekammedis($id_periksa)
    {
		$sql="SELECT id_periksa, tanggal, keluhan, riwayat_penyakit, diagnosa, tindakan_medis, obat, orangtua.nama AS pasien, petugas.nama FROM rekammedis JOIN orangtua ON orangtua.no_ktp=rekammedis.no_ktp JOIN petugas ON petugas.id_petugas=rekammedis.id_petugas WHERE id_periksa= $id_periksa GROUP BY id_periksa UNION SELECT id_periksa, tanggal, keluhan, riwayat_penyakit, diagnosa, tindakan_medis, obat, anak.nama AS pasien , petugas.nama FROM rekammedis JOIN anak ON anak.no_register=rekammedis.no_register JOIN petugas ON petugas.id_petugas=rekammedis.id_petugas WHERE id_periksa= $id_periksa GROUP BY id_periksa";
		$query = $this->db->query($sql);
		return $query;
	}

	public function hapus_rekammedis($id_periksa)
	{	
		$this->db->where('id_periksa', $id_periksa);
		$this->db->delete('rekammedis');
	}
}
?>