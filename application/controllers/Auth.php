<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->model("M_surat_n1_n6");
        $this->load->model('Usermodel');
    }
    public function index()
    {
        $this->form_validation->set_rules('no_kk', 'no_kk', 'trim|required', [
            'required' => 'Nomor Kartu Keluarga harus di isi.'
        ]);
        $this->form_validation->set_rules('no_nik', 'no_nik', 'trim|required', [
            'required' => 'NIK harus di isi.'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'User Login Page';
            $this->load->view('layout/authHeader', $data);
            $this->load->view('auth/user-log');
            $this->load->view('layout/authFooter');
        } else {
            //validasi sukses
            $this->_login();
        }
    }
    private function _login()
    {
        session_start();
        $no_kk = $this->input->post('no_kk');
        $no_nik = $this->input->post('no_nik');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['no_nik' => $no_nik])->row_array();

        //jika usernya ada
        if ($no_kk == $user['no_kk']) {
            if ($no_nik == $user['no_nik']) {
                if (password_verify($password, $user['password'])) {
                    if ($user['is_active'] == 1) {
                        $data = [
                            'title' => 'WEB Persuratan Desa Cinunuk',
                            'no_nik' => $user['no_nik'],
                            'nama' => $user['nama']
                        ];
                        $_SESSION["login"] = true;
                        $this->session->set_userdata($data);
                        redirect('user');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert
                        alert-danger" role="alert">Akun anda belum di aktifkan<br> Silahkan hubungi admin untuk mengaktivasi akun anda</div>');
                        redirect('auth');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert
                    alert-danger" role="alert">Password anda salah</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">NIK milik anda tidak terdaftar!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">Nomor Kartu Keluarga milik anda tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function regis()
    {
        $this->form_validation->set_rules('no_kk', 'no_kk', 'trim|required', [
            'required' => 'Nomor Kartu Keluarga harus di isi.'
        ]);
        $this->form_validation->set_rules('no_nik', 'no_nik', 'trim|required', [
            'required' => 'NIK harus di isi.'
        ]);
        $this->form_validation->set_rules(
            'password',
            'password',
            'trim|required|min_length[8]|regex_match[/(?=.*\d)(?=.*[a-z])(?=.*[A-Z])/]',
            array(
                'min_length' => 'Minimal 8 Karakter',
                'regex_match' => 'Password harus menyerkatakan Huruf Kapital, Huruf Kecil, dan Karakter'
            )
        );
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Register Page';
            $this->load->view('layout/authHeader', $data);
            $this->load->view('auth/register');
            $this->load->view('layout/authFooter');
        } else {
            //validasi sukses
            $this->_regis();
        }
    }

    public function _regis()
    {
        $no_kk = $this->input->post('no_kk');
        $no_nik = $this->input->post('no_nik');
        $nama = $this->input->post('nama');
        $password = $this->input->post('password');
        $password_hash = password_hash($password, PASSWORD_BCRYPT);
        $agama = $this->input->post('agama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $kab_kota = $this->input->post('kab_kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $alamat = $this->input->post('alamat');
        $is_active = 2;
        $image = 'default.jpg';

        $data = [
            'no_kk' => $no_kk,
            'no_nik' => $no_nik,
            'nama' => $nama,
            'password' => $password_hash,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'jenis_kelamin' => $jenis_kelamin,
            'pekerjaan' => $pekerjaan,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'rt' => $rt,
            'rw' => $rw,
            'alamat' => $alamat,
            'is_active' => $is_active,
            'image' => $image
        ];
        $this->Usermodel->insert_data('user', $data);
        $this->session->set_flashdata('message', '<div class="alert
        alert-success" role="alert">Akun anda berhasil di daftarkan</div>');
        redirect('auth');
    }

    public function logout()
    {
        session_start();
        $this->session->unset_userdata('no_nik');
        $this->session->set_flashdata('message', '<div class="alert
        alert-warning" role="alert">Anda sudah logout!</div>');
        redirect('auth');
        session_unset();
        session_destroy();
    }
    public function adlogout()
    {
        session_start();
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert
        alert-warning" role="alert">Anda sudah logout!</div>');
        redirect('auth/adlog');
        session_unset();
        session_destroy();
    }
}
