<?php



Class M_Petugas extends CI_Model 

{

    public function __construct()

	{

        parent::__construct();

		$this->load->database();

    }



    public function tambah_petugas($data)

	{

		$this->db->insert('petugas', $data);

	}

	

	public function lihat_petugas($table)

	{

		$lihat = $this->db->get($table);

		return $lihat;

	}

		

	public function detail_petugas($id_petugas)

    {

		$this->db->select('*');

		$this->db->from('petugas');

		$this->db->where('id_petugas',$id_petugas);

		$query = $this->db->get();

		return $query;

	}



	public function update_petugas($data, $table, $id)

	{

		$this->db->update($table, $data, $id);

	}

		

	public function hapus_petugas($id_petugas)

	{	

		$this->db->where('id_petugas', $id_petugas);

		$this->db->delete('petugas');

	}
		function cek_email($email)
    {
        $sql = "select * from petugas where email='$email'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }

    function cek_ktp($id_petugas)
    {
        $sql = "select * from petugas where id_petugas='$id_petugas'";
        $hasil = $this->db->query($sql);
        return $hasil->result();
    }


}

?>