<?php



class M_User extends CI_Model

{

	public function __construct()

	{

        parent::__construct();

		$this->load->database();

    }

    

	public function update_password($data, $table, $username)

	{

		$this->db->update($table, $data, $username);

	}



	public function lihat_orangtua()

	{

		$this->db->select('*');

		$this->db->from('orangtua');

		$lihat = $this->db->get();

		return $lihat;

	}



	public function detail_orangtua($no_ktp)

    {

		$this->db->select('*');

		$this->db->from('orangtua');

		$this->db->where('no_ktp',$no_ktp);

		$query = $this->db->get();

		return $query;

	}

		

	public function hapus_orangtua($no_ktp)

	{	

		$this->db->where('no_ktp', $no_ktp);

		$this->db->delete('orangtua');

	}
}