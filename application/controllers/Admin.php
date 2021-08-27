<?php



class Admin extends CI_Controller 

{

    public function __construct()

    {

        parent::__construct();

        // Your own constructor code



        $this->load->helper(array('form', 'url', 'html', 'file'));

        $this->load->library(array('simple_login','session'));

        $this->load->database();

        $this->load->model (array('M_Admin','M_Wilayah','M_Grafik','M_User','M_Petugas','M_Anak','M_Jenis_Imunisasi','M_Imunisasi','M_Pertumbuhan','M_RekamMedis'));

        $this->simple_login->cek_login();

    }



    //Tampil Dashboard Home

    public function index()

    {

        $query['query'] = $this->M_Grafik->tampil_grafik();

        $this->template->display('Admin/home',$query);

    }

    public function grafik($no_register)
    {
        $query['query'] = $this->M_Grafik->tampil_kms($no_register);
        $this->template->display('Admin/grafik',$query);
    }



    //Tampil Profil Admin

    public function tampilAdmin($username)

    {

        $username = $this->session->username;

        $tampil['tampil'] = $this->M_Admin->tampil_admin($username);

        $this->template->display('Admin/data_admin',$tampil);

    }

    //Update Profil Admin

    public function update_admin($id_admin)

    {

        $this->form_validation->set_rules('nama','Nama Lengkap','required');



        if ($this->form_validation->run() == FALSE)

        {

            $query=$this->M_Admin->detail_admin($id_admin);

            foreach($query->result_array() as $data)

            {

                $data['id_admin'];

                $data['nama'];

                $data['tgl_lahir'];

                $data['jenis_kelamin'];

                $data['id_provinsi'];

                $data['id_kabupaten'];

                $data['id_kecamatan'];

                $data['id_kelurahan'];

                $data['alamat'];

                $data['no_hp'];

            }

            $data['provinsi']=$this->M_Wilayah->provinsi();

            $this->template->display('Admin/update_admin',$data);

        }

        else

        {

            $data['nama']=$_POST['nama'];

            $data['tgl_lahir']=$_POST['tgl_lahir'];

            $data['jenis_kelamin']=$_POST['jenis_kelamin'];

            $data['id_provinsi']=$_POST['provinsi'];

            $data['id_kabupaten']=$_POST['kabupaten'];

            $data['id_kecamatan']=$_POST['kecamatan'];

            $data['id_kelurahan']=$_POST['kelurahan'];

            $data['alamat']=$_POST['alamat'];

            $data['no_hp']=$_POST['no_hp'];



            $id_admin= array('id_admin'=> $id_admin);

            $this->M_Admin->update_profil($data,'admin',$id_admin);

            echo "<script> alert ('Update Profil Berhasil');

            location='".site_url('Admin/tampilAdmin/'.$this->session->username)."'</script>";

        }

    }



    //Update Foto Admin

    public function update_foto($id_admin)

    {

        $this->form_validation->set_rules('userfile','Foto','not required');



        $config['upload_path']          = './images/Admin';

        $config['allowed_types']        = '*';

        $config['max_size']             = '5024';

        $config['max_width']            = '5024';

        $config['max_height']           = '5024';

        $config['overwrite']            = TRUE;



        $this->load->library('upload', $config); 

        $this->upload->initialize($config);



        if ($this->form_validation->run() == FALSE)

        {



            $query=$this->M_Admin->detail_admin($id_admin);

            foreach($query->result_array() as $data)

            {

                $data['id_admin'];

                $data['foto'];

            }

            $this->template->display('Admin/update_foto',$data);

        }

        else

        {

            if (!$this->upload->do_upload())

            {

                echo "<script> alert ('Upload Foto Gagal'); </script>";

                echo "<script> window.location=history.go(-1); </script>";

                $query=$this->M_Admin->detail_admin($id_admin);

                foreach($query->result_array() as $data)

                {

                    $data['id_admin'];

                    $data['foto'];

                }

                $this->template->display('Admin/update_foto',$data);

            }

            else

            {

                $datafoto = array('upload_data' => $this->upload->data());

                $config['image_library']    = 'gd2';

                $config['source_image']     = $datafoto['upload_data']['full_path'];

                $config['new_image']        = 'images/thumbnails/Admin';

                $config['create_thumb']     = TRUE;

                $config['maintain_ratio']   = TRUE;

                $config['width']            = 100;

                $config['height']           = 100;

                $config['overwrite']        = TRUE;

                $this->load->library('image_lib', $config); 

                $this->image_lib->resize();

                $img=$datafoto['upload_data']['file_name'];

                $img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];



                $data['foto'] = $img_thumb;



                $id_admin= array('id_admin'=> $id_admin);

                $this->M_Admin->update_profil($data,'admin',$id_admin);

                echo "<script> alert ('Update Foto Berhasil');

                location='".site_url('Admin/tampilAdmin/'.$this->session->username)."'</script>";

            }

        }

    }



    //Ubah Password Admin

    public function update_password($username)

    {

        $this->form_validation->set_rules('username','Username','required');

        $this->form_validation->set_rules('lama','Password Lama','required');

        $this->form_validation->set_rules('baru','Password Baru','required');

        $this->form_validation->set_rules('konfirm_baru','Konfirmasi Password Baru','required');



        if ($this->form_validation->run() == FALSE)

        {

            $username = $this->session->userdata('username');

            $lihat=$this->M_Admin->tampil_username($username);

            foreach ($lihat->result_array() as $data )

            {

                $data['username'];

            }

            $this->template->display('Admin/update_password',$data);

        }

        else

        {

            $username = $this->session->username;

            $lihat = $this->M_Admin->tampil_username($username);

            foreach ($lihat->result_array() as $data )

            {

                $data['username'];

                $data['password'];

            }

            //pengecekan password dan username

            $lama = $this->input->post('lama');

            $baru = $this->input->post('baru');

            $konfirm_baru = $this->input->post('konfirm_baru');

            if ($lama != $data['password'])

            {

                echo "<script>

                alert('Password Lama Tidak Sesuai');

                location='".site_url('Admin/update_password/'.$this->session->username)."'

                </script>";

            }

            else if($konfirm_baru != $baru)

            {

                echo "<script>

                alert('Password Konfirmasi Tidak Cocok');

                location='".site_url('Admin/update_password/'.$this->session->username)."'

                </script>";

            }

            else

            {

                $data['username']=$_POST['username'];

                $data['password']=$baru;

                

                $username = $this->session->userdata('username');

                $username= array('username'=> $username);

                $this->M_Admin->update_password($data,'admin',$username); 

                echo "<script>

                alert('Password Berhasil Diubah, Silahkan Login Kembali');

                location='".site_url('Login')."'

                </script>";

            }  

        }

    }



    //Tambah Petugas

    public function tambahPetugas()

    {

        $this->form_validation->set_rules('id_petugas', 'No KTP', 'required');

        $this->form_validation->set_rules('nama', 'Nama Petugas', 'required');

        $this->form_validation->set_rules('tgl_lahir', 'tgl_lahir', 'required');

        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');

        $this->form_validation->set_rules('alamat', 'alamat', 'required');

        $this->form_validation->set_rules('no_hp', 'no_hp', 'required');

        $this->form_validation->set_rules('username', 'username', 'required');

        $this->form_validation->set_rules('password', 'password', 'required');

        $this->form_validation->set_rules('nama_klinik', 'nama_klinik', 'required');

        $this->form_validation->set_rules('izin_praktek', 'izin_praktek', 'required');



        $config['upload_path']          = './images/Petugas';

        $config['allowed_types']        = 'gif|jpg|png';

        $config['max_size']             = '5024';

        $config['max_width']            = '5024';

        $config['max_height']           = '5024';



        $this->load->library('upload', $config); 

        $this->upload->initialize($config);



        if ($this->form_validation->run() == FALSE)

        {

            $data['provinsi']=$this->M_Wilayah->provinsi();

            $this->template->display('Petugas/input_petugas',$data);

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

                $config['new_image']    = 'images/thumbnails/Petugas';

                $config['create_thumb'] = TRUE;

                $config['maintain_ratio'] = TRUE;

                $config['width']    = 100;

                $config['height']   = 100; 

                $this->load->library('image_lib', $config); 

                $this->image_lib->resize();

                $img=$datafoto['upload_data']['file_name'];

                $img_thumb=$datafoto['upload_data']['raw_name']."_thumb".$datafoto['upload_data']['file_ext'];

		$id_petugas = $_POST['id_petugas'];
                $hasil_ktp = $this->M_Petugas->cek_ktp($id_petugas);

                $email = $_POST['username'];
                $hasil_email = $this->M_Petugas->cek_email($email);

                if(count($hasil_ktp)!= 0)
                {
                    echo "<script> alert ('No KTP Sudah Digunakan'); </script>";
                    echo "<script> window.location=history.go(-1); </script>";
                }
                else if(count($hasil_username)!= 0)
                {
                    echo "<script> alert ('Email Sudah Digunakan'); </script>";
                    echo "<script> window.location=history.go(-1); </script>";
                }
                else
                {
               

                $data['id_petugas']=$_POST['id_petugas'];

                $data['nama']=$_POST['nama'];

                $data['tgl_lahir']=$_POST['tgl_lahir'];

                $data['jenis_kelamin']=$_POST['jenis_kelamin'];

                $data['id_provinsi']=$_POST['provinsi'];

                $data['id_kabupaten']=$_POST['kabupaten'];

                $data['alamat']=$_POST['alamat'];

                $data['no_hp']=$_POST['no_hp'];

                $data['foto']=$img_thumb;

                $data['nama_klinik']=$_POST['nama_klinik'];

                $data['izin_praktek']=$_POST['izin_praktek'];

                $data['status']='belum';

                

                $data['email']=$_POST['username'];

                $data['password']=$_POST['password'];

                $this->M_Petugas->tambah_petugas($data);

                

                echo "<script> alert ('Input Petugas Berhasil');

                location='".site_url('Admin/lihat_petugas')."'</script>";
		}

            }

        }

    }



    //Update Petugas

    public function update_petugas($id_petugas)

    {

        $data['status']='sudah';



        $id_petugas= array('id_petugas'=> $id_petugas);

        $this->M_Petugas->update_petugas($data,'petugas',$id_petugas);   

        echo "<script>

            alert('Update Status Berhasil');

            location='".site_url('Admin/lihat_petugas')."'

            </script>";

    }



    //lihat daftar tabel orangtua

    public function lihat_orangtua()

    {

        $lihat['lihat'] = $this->M_User->lihat_orangtua('orangtua');

        $this->template->display('User/data_orangtua',$lihat);

    }



    //lihat daftar tabel petugas

    public function lihat_petugas()

    {

        $lihat['lihat'] = $this->M_Petugas->lihat_petugas('petugas');

        $this->template->display('Petugas/data_petugas',$lihat);

    }



    //lihat daftar tabel anak

    public function lihat_anak()

    {

        $lihat['lihat'] = $this->M_Anak->lihat_anak('anak');

        $this->template->display('Anak/data_anak',$lihat);

    }



    //lihat daftar tabel imunisasi

    public function lihat_imunisasi()

    {

        $lihat['lihat'] = $this->M_Imunisasi->lihat_imunisasi();

        $this->template->display('Anak/data_imunisasi',$lihat);

    }



    //lihat daftar jenis imunisasi

    public function lihat_jenis()

    {

        $lihat['lihat'] = $this->M_Jenis_Imunisasi->lihat_jenis('jenis_imunisasi');

        $this->template->display('Anak/data_jenis_imunisasi',$lihat);

    }



    //lihat daftar pertumbuhan

    public function lihat_pertumbuhan()

    {

        $lihat['lihat'] = $this->M_Pertumbuhan->lihat_pertumbuhan('pertumbuhan');

        $this->template->display('Anak/data_pertumbuhan',$lihat);

    }



    //lihat daftar rekam medis

    public function lihat_rekammedis()

    {

        $lihat['lihat'] = $this->M_RekamMedis->lihat_rekammedis('rekammedis');

        $this->template->display('RekamMedis/data_rekammedis',$lihat);

    }



    //tampil detail orangtua

    public function detail_orangtua($no_ktp)

    {

        $query['query']= $this->M_User->detail_orangtua($no_ktp);

        $this->template->display('User/detail_orangtua',$query);        

    }

    

    //tampil detail petugas

    public function detail_petugas($id_petugas)

    {

        $query['query']= $this->M_Petugas->detail_petugas($id_petugas);

        $this->template->display('Petugas/detail_petugas',$query);        

    }



    //tampil detail anak

    public function detail_anak($no_register)

    {

        $query['query']= $this->M_Anak->detail_anak($no_register);

        $this->template->display('Anak/detail_anak',$query);        

    }



    //tampil detail imunisasi

    public function detail_imunisasi($id_imunisasi)

    {

        $query['query']= $this->M_Imunisasi->detail_imunisasi($id_imunisasi);

        $this->template->display('Anak/detail_imunisasi',$query);       

    }



    //tampil detail jenis imunisasi

    public function detail_jenis($id_jenis)

    {

        $query['query']= $this->M_Jenis_Imunisasi->detail_jenis($id_jenis);

        $this->template->display('Anak/detail_jenis_imunisasi',$query);     

    }



    //tampil detail pertumbuhan anak

    public function detail_pertumbuhan($id_pertumbuhan)

    {

        $query['query']= $this->M_Pertumbuhan->detail_pertumbuhan($id_pertumbuhan);

        $this->template->display('Anak/detail_pertumbuhan',$query);     

    }



    //tampil detail rekam medis

    public function detail_rekammedis($id_periksa)

    {

        $query['query']= $this->M_RekamMedis->detail_rekammedis($id_periksa);

        $this->template->display('RekamMedis/detail_rekammedis',$query);     

    }



    //hapus orangtua

    public function hapus_orangtua($option,$no_ktp)

    {

        if ($option=='ya')

        {

            $query1=$this->m_Orangtua->hapus_orangtua($no_ktp);

            $data['query1']=$query1;

            $this->lihat_orangtua();

        }

        else

        {

            $query=$this->m_Orangtua->detail_orangtua($no_ktp);

            $data['query']=$query;

                

            $this->template->display('User/detail_orangtua',$data); 

        }

    }



    //hapus petugas

    public function hapus_petugas($option,$id_petugas)

    {

        if ($option=='ya')

        {

            $query1=$this->M_Petugas->hapus_petugas($id_petugas);

            $data['query1']=$query1;



            $this->lihat_petugas();
        }

        else

        {

            $query=$this->M_Petugas->detail_petugas($id_petugas);

            $data['query']=$query;

                

            $this->template->display('Petugas/detail_petugas',$data); 

        }

    }



    //hapus anak

    public function hapus_anak($option,$no_register)

    {

        if ($option=='ya')

        {

            $query1=$this->M_Anak->hapus_anak($no_register);

            $data['query1']=$query1;

            $this->lihat_anak();

        }

        else

        {

            $query=$this->M_Anak->detail_anak($no_register);

            $data['query']=$query;

                

            $this->template->display('Anak/detail_anak',$data); 

        }

    }



    //hapus imunisasi

    public function hapus_imunisasi($option,$id_imunisasi)

    {

        if ($option=='ya')

        {

            $query1=$this->M_Imunisasi->hapus_imunisasi($id_imunisasi);

            $data['query1']=$query1;

            $this->lihat_imunisasi();

        }

        else

        {

            $query=$this->M_Imunisasi->detail_imunisasi($id_imunisasi);

            $data['query']=$query;

                

            $this->template->display('Anak/detail_imunisasi',$data);    

        }

    }



    //hapus jenis imunisasi

    public function hapus_jenis($option,$id_jenis)

    {

        if ($option=='ya')

        {

            $query1=$this->M_Jenis_Imunisasi->hapus_jenis($id_jenis);

            $data['query1']=$query1;

            $this->lihat_jenis();

        }

        else

        {

            $query=$this->M_Jenis_Imunisasi->detail_jenis($id_jenis);

            $data['query']=$query;

                

            $this->template->display('Anak/detail_jenis',$data);    

        }

    }



    //hapus pertumbuhan

    public function hapus_pertumbuhan($option,$id_pertumbuhan)

    {

        if ($option=='ya')

        {

            $query1=$this->M_Pertumbuhan->hapus_pertumbuhan($id_pertumbuhan);

            $data['query1']=$query1;

            $this->lihat_pertumbuhan();

        }

        else

        {

            $query=$this->M_Pertumbuhan->detail_pertumbuhan($id_pertumbuhan);

            $data['query']=$query;

                

            $this->template->display('Anak/detail_pertumbuhan',$data);  

        }

    }



    //hapus rekam medis anak

    public function hapus_rekammedis($option,$id_periksa)

    {

        if ($option=='ya')

        {

            $query1=$this->M_RekamMedis->hapus_rekammedis($id_periksa);

            $data['query1']=$query1;

            $this->lihat_rekammedis();

        }

        else

        {

            $query=$this->M_RekamMedis->detail_rekammedis($id_periksa);

            $data['query']=$query;

                

            $this->template->display('RekamMedis/detail_rekammedis',$data);   

        }

    }



    //Tambah Jenis Imunisasi

    public function tambahJenisImunisasi()

    {

        $this->form_validation->set_rules('id_jenis', 'id_jenis', 'required');

        $this->form_validation->set_rules('nama_imunisasi', 'nama_imunisasi', 'required');

        $this->form_validation->set_rules('umur', 'umur', 'required');



        if ($this->form_validation->run() == FALSE)

        {

            $this->template->display('Anak/input_jenis');

        }

        else

        {

            $data['id_jenis']=$_POST['id_jenis'];

            $data['nama_imunisasi']=$_POST['nama_imunisasi'];

            $data['umur']=$_POST['umur'];

            

            $this->M_Jenis_Imunisasi->tambah_jenis($data);

            

            echo "<script> alert ('Input Jenis Imunisasi Berhasil');

            location='".site_url('Admin/lihat_jenis')."'</script>";

        }

    }



    //Update Jenis Imunisasi

    public function updateJenisImunisasi($id_jenis)

    {

        $this->form_validation->set_rules('id_jenis','ID Jenis Imunisasi', 'required');

        $this->form_validation->set_rules('nama_imunisasi','Nama Imunisasi', 'required');

        $this->form_validation->set_rules('umur','Umur', 'required');



        if ($this->form_validation->run() == FALSE)

        {

            $query=$this->M_Jenis_Imunisasi->detail_jenis($id_jenis);

            foreach($query->result_array() as $data)

            {

                $data['id_jenis'];

                $data['nama_imunisasi'];

                $data['umur'];

            }

            $this->template->display('Anak/update_jenis',$data);

        }

        else

        {

            $data['id_jenis']=$_POST['id_jenis'];

            $data['nama_imunisasi']=$_POST['nama_imunisasi'];

            $data['umur']=$_POST['umur'];



                $id_jenis= array('id_jenis'=> $id_jenis);

                $this->M_Jenis_Imunisasi->update_jenis($data,'jenis_imunisasi',$id_jenis);   

                echo "<script> alert ('Update Jenis Imunisasi Berhasil');

                location='".site_url('Admin/lihat_jenis')."'</script>";

        }

    }

}