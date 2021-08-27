<?php

class M_Grafik extends CI_Model
{
	public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

	public function tampil_grafik()
	{
		$sql= "SELECT nama_provinsi,SUM(jumlah) AS jumlah FROM (SELECT provinsi.nama_provinsi, COUNT(rekammedis.no_register) AS jumlah FROM rekammedis JOIN anak ON anak.no_register=rekammedis.no_register JOIN orangtua ON orangtua.no_ktp=anak.ktp_no JOIN provinsi ON orangtua.id_provinsi=provinsi.id_provinsi GROUP BY nama_provinsi UNION SELECT provinsi.nama_provinsi, COUNT(rekammedis.no_ktp) AS jumlah FROM orangtua JOIN provinsi ON orangtua.id_provinsi=provinsi.id_provinsi JOIN rekammedis ON orangtua.no_ktp=rekammedis.no_ktp GROUP BY nama_provinsi) AS grafik GROUP BY nama_provinsi";
		$query = $this->db->query($sql);
        return $query;
    }

    public function tampil_kms($no_register){
    	$sql="SELECT ((YEAR(NOW())-YEAR(tanggal_lahir))*12)+(MONTH(tanggal_lahir)-MONTH(tanggal_lahir)) AS bulan, anak.berat_badan AS berat_badan FROM anak WHERE anak.no_register= '$no_register' UNION SELECT ((YEAR(tanggal)-YEAR(tanggal_lahir))*12)+(MONTH(tanggal)-MONTH(tanggal_lahir)) AS bulan, pertumbuhan.berat_badan AS berat_badan FROM anak LEFT JOIN pertumbuhan ON anak.no_register=pertumbuhan.no_register WHERE anak.no_register= '$no_register' ORDER BY bulan ASC";
    	$query = $this->db->query($sql);
        return $query;
    }
}