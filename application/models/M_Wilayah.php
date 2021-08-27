<?php

class M_Wilayah extends CI_Model
{
	public function __construct()
	{
        parent::__construct();
		$this->load->database();
    }

	function provinsi()
	{
		$this->db->order_by('id_provinsi','ASC');
		$provinces= $this->db->get('provinsi');

		return $provinces->result_array();
	}


	function kabupaten($provId)
	{
		$kabupaten="<option value=''>--pilih--</pilih>";

		$this->db->order_by('id_kabupaten','ASC');
		$kab= $this->db->get_where('kabupaten',array('provinsi_id'=>$provId));

		foreach ($kab->result_array() as $data )
		{
			$kabupaten.= "<option value='$data[id_kabupaten]'>$data[nama_kabupaten]</option>";
		}
		return $kabupaten;
	}

	function kecamatan($kabId)
	{
		$kecamatan="<option value=''>--pilih--</pilih>";

		$this->db->order_by('id_kecamatan','ASC');
		$kec= $this->db->get_where('kecamatan',array('kabupaten_id'=>$kabId));

		foreach ($kec->result_array() as $data)
		{
			$kecamatan.= "<option value='$data[id_kecamatan]'>$data[nama_kecamatan]</option>";
		}

		return $kecamatan;
	}

	function kelurahan($kecId){
		$kelurahan="<option value=''>--pilih--</pilih>";

		$this->db->order_by('id_kelurahan','ASC');
		$kel= $this->db->get_where('kelurahan',array('kecamatan_id'=>$kecId));

		foreach ($kel->result_array() as $data)
		{
			$kelurahan.= "<option value='$data[id_kelurahan]'>$data[nama_kelurahan]</option>";
		}

		return $kelurahan;
	}
}