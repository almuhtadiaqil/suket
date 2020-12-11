<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller

{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->library('form_validation');
        $this->load->model("M_surat_n1_n6");
        $this->load->model('Usermodel');
    }
    public function index()
    {
        $data = [
            'title' => 'WEB Persuratan Kelurahan Muarasanding',
            'surat_n1_n6' => $this->M_surat_n1_n6->getAll()->result(),
            'user' => $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array(),
            'data_sku' => $this->db->get_where('sku', ['no_nik' => $this->session->userdata('no_nik')])->result_array(),
        ];

        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/index', $data);
        $this->load->view('layout/userFooter');
    }

    public function profil()
    {
        $data['title'] = 'WEB Persuratan Desa Cinunuk | Ubah Profil';
        $data['user'] = $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array();
        $this->load->view('layout/userHeader', $data);
        $this->load->view('user/changeprofil', $data);
        $this->load->view('layout/userFooter');
    }

    public function update($no_nik)
    {

        $nama = $this->input->post('nama');
        $agama = $this->input->post('agama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $provinsi = $this->input->post('provinsi');
        $kab_kota = $this->input->post('kab_kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $status_nikah = $this->input->post('status_nikah');
        $status_keluarga = $this->input->post('status_keluarga');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');

        $data = [
            'nama' => $nama,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'provinsi' => $provinsi,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'rt' => $rt,
            'rw' => $rw,
            'kode_pos' => $kode_pos,
            'alamat' => $alamat,
            'status_nikah' => $status_nikah,
            'status_keluarga' => $status_keluarga,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu
        ];
        $where = array(
            'no_nik' => $no_nik
        );

        $this->Usermodel->update_data($where, $data, 'user');
        redirect('user');
    }

    public function ganti_password()
    {
        $data['title'] = 'User Page | Ganti Password';
        $data['user'] = $this->db->get_where('user', ['no_nik' => $this->session->userdata('no_nik')])->row_array();
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]', [
            'required' => 'Password harus di isi',
            'min_length[8]' => 'Password kurang dari 8'
        ]);

        if ($this->form_validation->run() == false) {

            $this->load->view('layout/userHeader', $data);
            $this->load->view('user/password', $data);
            $this->load->view('layout/userFooter');
        } else {
            $password = $this->input->post('password');
            // $password_hash = password_hash($password, PASSWORD_DEFAULT);

            $this->db->set('password', $password);
            $this->db->where('no_nik', $this->session->userdata('no_nik'));
            $this->db->update('user');
            redirect('user');
        }
    }



    public function sk_usaha()
    {
        $data['title'] = 'Kelurahan Muarasanding | Surat Keterangan Usaa';
        $data['user'] = $this->db->get_where('user', ['no_nik' =>
        $this->session->userdata('no_nik')])->row_array();
        $this->load->view('layout/userHeader', $data);
        $this->load->view('surat/sk_usaha', $data);
        $this->load->view('layout/userFooter');
    }
}
