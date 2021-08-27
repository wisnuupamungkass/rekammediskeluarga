<?php

Class M_Anak extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }
	
	public function lihat_anak()
	{
		$sql="SELECT no_register,anak.nama AS nama_anak, tanggal_lahir, jam_lahir, gender AS jenis_kelamin, berat_badan, panjang_badan, lingkar_kepala, orangtua.nama AS nama_ibu FROM anak JOIN orangtua ON orangtua.no_ktp=anak.ktp_no";
		$lihat = $this->db->query($sql);
		return $lihat;
	}
	
	public function detail_anak($no_register)
    {
		$this->db->select('*');
		$this->db->from('anak');
		$this->db->where('no_register',$no_register);
		$query = $this->db->get();
		return $query;
	}
	
	public function hapus_anak($no_register)
	{	
		$this->db->where('no_register', $no_register);
		$this->db->delete('anak');
	}
}
?>