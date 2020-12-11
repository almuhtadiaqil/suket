<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tambah_warga extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
        $this->load->model("Usermodel");
        $this->load->helper('date');
    }

    public function add()
    {
        $no_kk = $this->input->post('no_kk');
        $no_nik = $this->input->post('no_nik');
        $nama = $this->input->post('nama');
        $password = "Changeme1";
        $agama = $this->input->post('agama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pekerjaan = $this->input->post('pekerjaan');
        $pendidikan = $this->input->post('pendidikan');
        $kepala_keluarga = $this->input->post('kepala_keluarga');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $provinsi = $this->input->post('provinsi');
        $kab_kota = $this->input->post('kab_kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $RT = $this->input->post('RT');
        $RW = $this->input->post('RW');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $status_nikah = $this->input->post('status_nikah');
        $status_keluarga = $this->input->post('status_keluarga');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');

        $data = [
            'no_kk' => $no_kk,
            'no_nik' => $no_nik,
            'password' => $password,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'provinsi' => $provinsi,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'RT' => $RT,
            'RW' => $RW,
            'kode_pos' => $kode_pos,
            'alamat' => $alamat,
            'kepala_keluarga' => $kepala_keluarga,
            'status_nikah' => $status_nikah,
            'status_keluarga' => $status_keluarga,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu
        ];
        $this->db->insert('user', $data);

        redirect('admin/profile');
    }

    public function update()
    {
        $id = $this->input->post('id');
        $no_kk = $this->input->post('no_kk');
        $no_nik = $this->input->post('no_nik');
        $nama = $this->input->post('nama');
        $password = "Changeme1";
        $agama = $this->input->post('agama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $kepala_keluarga = $this->input->post('kepala_keluarga');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $provinsi = $this->input->post('provinsi');
        $kab_kota = $this->input->post('kab_kota');
        $kecamatan = $this->input->post('kecamatan');
        $desa = $this->input->post('desa');
        $RT = $this->input->post('RT');
        $RW = $this->input->post('RW');
        $kode_pos = $this->input->post('kode_pos');
        $alamat = $this->input->post('alamat');
        $status_nikah = $this->input->post('status_nikah');
        $status_keluarga = $this->input->post('status_keluarga');
        $nama_ayah = $this->input->post('nama_ayah');
        $nama_ibu = $this->input->post('nama_ibu');

        $where = [
            'id' => $id
        ];
        $data = [
            'no_kk' => $no_kk,
            'no_nik' => $no_nik,
            'password' => $password,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'kewarganegaraan' => $kewarganegaraan,
            'provinsi' => $provinsi,
            'kab_kota' => $kab_kota,
            'kecamatan' => $kecamatan,
            'desa' => $desa,
            'RT' => $RT,
            'RW' => $RW,
            'kode_pos' => $kode_pos,
            'alamat' => $alamat,
            'kepala_keluarga' => $kepala_keluarga,
            'status_nikah' => $status_nikah,
            'status_keluarga' => $status_keluarga,
            'nama_ayah' => $nama_ayah,
            'nama_ibu' => $nama_ibu
        ];
        $this->Usermodel->update_data($where, $data, 'user');
        //$this->Usermodel->update_warga($where, $data, 'user');
        redirect('admin/profile');
    }
    public function update_n1_terima($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('admin');
    }
    public function update_n1_tolak($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('admin');
    }
    public function update_n1_batal($id_surat_n1)
    {
        $where = array(
            'id_surat_n1' => $id_surat_n1
        );
        $data = array(
            'status_surat' => "Dibatalkan",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
        redirect('user');
    }
    public function update_sku_terima($id_surat_sku)
    {
        $where = array(
            'id_surat_sku' => $id_surat_sku
        );
        $data = array(
            'status_surat' => "Diterima",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sku');
        redirect('admin');
    }
    public function update_sku_tolak($id_surat_sku)
    {
        $where = array(
            'id_surat_sku' => $id_surat_sku
        );
        $data = array(
            'status_surat' => "Ditolak",
        );
        $this->M_surat_n1_n6->update_data($where, $data, 'sku');
        redirect('admin');
    }
}
