<?php

Class M_Jenis_Imunisasi extends CI_Model 
{
    public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

    //tambah jenis imunisasi
    public function tambah_jenis($data)
    {
		$this->db->insert('jenis_imunisasi', $data);
    }
	
	//lihat jenis imunisasi
	public function lihat_jenis($table)
	{
		$lihat = $this->db->get($table);
		return $lihat;
	}

	//tampil detail hapus jenis imunisasi
	public function detail_jenis($id_jenis)
    {
		$this->db->select('*');
		$this->db->from('jenis_imunisasi');
		$this->db->where('id_jenis',$id_jenis);
		$query = $this->db->get();
		return $query;
	}

	//update jenis imunisasi
	public function update_jenis($data, $table, $id)
	{
		$this->db->update($table, $data, $id);
	}

	//hapus jenis imunisasi
	public function hapus_jenis($id_jenis)
	{	
		$this->db->where('id_jenis', $id_jenis);
		$this->db->delete('jenis_imunisasi');
	}
}
?>