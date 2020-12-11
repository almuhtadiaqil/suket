<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_n1_n6 extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
        $this->load->helper('date');
    }
    public function index()
    {
        $data["surat_n1_n6"] = $this->M_surat_n1_n6->getAll()->result();
        $this->load->view("user", $data);
    }
    public function add()
    {
        $nama = $this->input->post('nama');
        $no_nik = $this->input->post('no_nik');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $rt = $this->input->post('rt');
        $rw = $this->input->post('rw');
        $kelurahan = $this->input->post('kelurahan');
        $kecamatan = $this->input->post('kecamatan');
        $kab_kota = $this->input->post('kab_kota');
        $alamat = $this->input->post('alamat');
        $nama_surat = "Surat Keterangan Usaha";
        $status_surat = "Pending";
        $today = mdate('%Y-%m-%d', now());


        $data = array(
            'nama' => $nama,
            'no_nik' => $no_nik,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'agama' => $agama,
            'pekerjaan' => $pekerjaan,
            'rt' => $rt,
            'rw' => $rw,
            'kelurahan' => $kelurahan,
            'kecamatan' => $kecamatan,
            'kab_kota' => $kab_kota,
            'alamat' => $alamat,
            'jenis_surat' => $nama_surat,
            'tgl_ajukan_surat' => $today,
            'status_surat' => $status_surat
        );

        $this->M_surat_n1_n6->save($data, 'sku');
        $this->session->set_flashdata('success', 'Berhasil disimpan');
        redirect('user/#riwayat');
    }
    function hapus($id_surat_n1)
    {
        $where = array('id_surat_n1' => $id_surat_n1);
        $this->M_surat_n1_n6->hapus_data($where, 'surat_n1');
        redirect('user/index');
    }

    function edit_form($id_surat_n1)
    {
        $where = array('id_surat_n1' => $id_surat_n1);
        $data['surat_n1'] = $this->surat_model->edit_data($where, 'surat_n1')->result();
        $this->load->view('admin/edit_form_suratKP', $data);
    }
}
