<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model("M_surat_n1_n6");
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
    public function adlog()
    {
        $this->form_validation->set_rules('username', 'username', 'trim|required', [
            'required' => 'username harus di isi.'
        ]);
        $this->form_validation->set_rules('password', 'password', 'trim|required|min_length[8]');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Admin Login Page';
            $this->load->view('layout/authHeader', $data);
            $this->load->view('auth/admin-log');
            $this->load->view('layout/authFooter');
        } else {
            //validasi sukses
            $this->ad_login();
        }
    }
    private function ad_login()
    {
        session_start();
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();

        //jika usernya ada
        if ($admin) {
            if ($password == $admin['password']) {
                $data = [
                    'title' => 'Admin Pages',
                    'username' => $admin['username']
                ];
                $_SESSION["admin"] = true;
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert
                alert-danger" role="alert">Password anda salah</div>');
                redirect('auth/adlog');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert
            alert-danger" role="alert">Username yang anda masukan salah!</div>');
            redirect('auth/adlog');
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
                if ($password ==$user['password']) {
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
