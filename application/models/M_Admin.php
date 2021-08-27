<?php



class M_Admin extends CI_Model

{

	public function __construct()

	{

        parent::__construct();

		$this->load->database();

    }

    

	public function tambah_admin($data)

	{

		$this->db->insert('admin', $data);

	}



	public function tampil_admin($username) 

	{

		$this->db->select('id_admin,admin.nama as nama_admin,tgl_lahir,jenis_kelamin, nama_provinsi,nama_kabupaten, nama_kecamatan,nama_kelurahan,alamat,no_hp,foto');

		$this->db->from('admin');

		$this->db->join('provinsi','admin.id_provinsi=provinsi.id_provinsi');

		$this->db->join('kabupaten','admin.id_kabupaten=kabupaten.id_kabupaten');

		$this->db->join('kecamatan','admin.id_kecamatan=kecamatan.id_kecamatan');

		$this->db->join('kelurahan','admin.id_kelurahan=kelurahan.id_kelurahan');

		$this->db->where('username',$username);

		$tampil = $this->db->get();

		return $tampil;

	}



	public function tampil_username($username) 

	{

		$this->db->select('*');

		$this->db->from('admin');

		$this->db->where('username',$username);

		$tampil = $this->db->get();

		return $tampil;

	}



	public function detail_admin($id_admin)

    {

		$this->db->select('*');

		$this->db->from('admin');

		$this->db->join('provinsi','admin.id_provinsi=provinsi.id_provinsi');

		$this->db->join('kabupaten','admin.id_kabupaten=kabupaten.id_kabupaten');

		$this->db->join('kecamatan','admin.id_kecamatan=kecamatan.id_kecamatan');

		$this->db->join('kelurahan','admin.id_kelurahan=kelurahan.id_kelurahan');

		$this->db->where('id_admin',$id_admin);

		$query = $this->db->get();

		return $query;

	}



	public function update_profil($data, $table, $id_admin)

	{

		$this->db->update($table, $data, $id_admin);

	}



	public function update_password($data, $table, $username)

	{

		$this->db->update($table, $data, $username);

	}

		function cek_username($username)
    {
        $sql = "select * from admin where username='$username'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }

    function cek_ktp($id_admin)
    {
        $sql = "select * from admin where id_admin='$id_admin'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }



}