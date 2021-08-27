<?php

defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {

	Public function __construct()

        {

            parent::__construct();

            // Your own constructor code

				

			$this->load->helper(array('form', 'url','html','file'));

            $this->load->library(array('form_validation','table','Template'));

            $this->load->database();

            $this->load->model(array('M_Admin','M_Wilayah','M_Grafik'));

        }


        public function grafik($no_register)
        {
            $query['query'] = $this->M_Grafik->tampil_kms($no_register);
            $this->load->view('Admin/grafik',$query);
        }

	// Index login

	public function index() {

		$this->load->view('web_produk');

	}

    public function profil() {

        $this->load->view('web_profile');

    }

    public function login() {

        // Fungsi Login

        $valid = $this->form_validation;

        $username = $this->input->post('username');

        $password = $this->input->post('password');

        $valid->set_rules('username','Username','required');

        $valid->set_rules('password','Password','required');

        if($valid->run()) {

            $this->simple_login->login($username,$password, base_url('index.php/Admin'));

        }

        $this->load->view('login_view');

    }

	

	// Logout di sini

	public function logout() {

		$this->simple_login->logout();	

	}



    public function ambil_data()

    {

        $modul=$this->input->post('modul');

        $id=$this->input->post('id');



        if($modul=="kabupaten"){

        echo $this->M_Wilayah->kabupaten($id);

        }

        else if($modul=="kecamatan"){

        echo $this->M_Wilayah->kecamatan($id);



        }

        else if($modul=="kelurahan"){

        echo $this->M_Wilayah->kelurahan($id);

        }

    }



    //Tambah Admin

    public function tambahAdmin()

    {

        $this->form_validation->set_rules('id_admin', 'No KTP', 'required');

        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');

        $this->form_validation->set_rules('tgl_lahir', 'Tanggal Lahir', 'required');

        $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');

        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        $this->form_validation->set_rules('no_hp', 'No HP', 'required');

        $this->form_validation->set_rules('username', 'Username', 'required');

        $this->form_validation->set_rules('password', 'Password', 'required');



        $config['upload_path']          = './images/Admin';
        $config['allowed_types']        = '*';
        $config['max_size']             = '5024';
        $config['max_width']            = '5024';
        $config['max_height']           = '5024';


        $this->load->library('upload', $config); 

        $this->upload->initialize($config);

        if ($this->form_validation->run() == FALSE)

        {

            $data['provinsi']=$this->M_Wilayah->provinsi();

            $this->load->view('Admin/input_admin',$data);

        }

        else

        {

            if (!$this->upload->do_upload())

            {

                echo "<script> alert ('Upload Foto Gagal'); </script>";

                echo "<script> window.location=history.go(-1); </script>";

            }

            else

            {

                $datafoto = array('upload_data' => $this->upload->data());

                $config['image_library'] = 'gd2';

                $config['source_image'] = $datafoto['upload_data']['full_path'];

                $config['new_image']    = 'images/thumbnails/Admin';

                $config['create_thumb'] = TRUE;

                $config['maintain_ratio'] = TRUE;

                $config['width']    = 100;

                $config['height']   = 100; 

                $this->load->library('image_lib', $config); 

                $this->image_lib->resize();

                $img=$datafoto['upload_data']['file_name'];

                $img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];

				$id_admin = $_POST['id_admin'];
                $hasil_ktp = $this->M_Admin->cek_ktp($id_admin);

                $username = $_POST['username'];
                $hasil_username = $this->M_Admin->cek_username($username);

                if(count($hasil_ktp)!= 0)
                {
                    echo "<script> alert ('No KTP Sudah Digunakan'); </script>";
                    echo "<script> window.location=history.go(-1); </script>";
                }
                else if(count($hasil_username)!= 0)
                {
                    echo "<script> alert ('Username Sudah Digunakan'); </script>";
                    echo "<script> window.location=history.go(-1); </script>";
                }
                else
                {
                $data['id_admin']=$_POST['id_admin'];

                $data['nama']=$_POST['nama'];

                $data['tgl_lahir']=$_POST['tgl_lahir'];

                $data['jenis_kelamin']=$_POST['jenis_kelamin'];

                $data['id_provinsi']=$_POST['provinsi'];

                $data['id_kabupaten']=$_POST['kabupaten'];

                $data['id_kecamatan']=$_POST['kecamatan'];

                $data['id_kelurahan']=$_POST['kelurahan'];

                $data['alamat']=$_POST['alamat'];

                $data['no_hp']=$_POST['no_hp'];

                $data['foto']=$img_thumb;

                $data['username']=$_POST['username'];

                $data['password']=$_POST['password'];

                $this->M_Admin->tambah_admin($data);

                echo "<script> alert ('Input Admin Berhasil');

                location='".site_url('Login')."'</script>";
				}

            }

        }

    }

}