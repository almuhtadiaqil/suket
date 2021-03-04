<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Coba extends CI_Controller
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
		$data['title'] = 'Coba Upload Gambar';
		$data['gambar'] = $this->db->get('foto')->result_array();
		$this->load->view('layout/authHeader', $data);
		$this->load->view('user/cobagambar');
		$this->load->view('layout/authFooter');
	}
	public function gambar()
	{
		$images = $_FILES['gambar'];
		if ($images) {
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']  = '2048';
			$config['upload_path'] = './uploads/2';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$images = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'gambar tidak ada';
		}
		$foto = $_FILES['foto'];
		if ($foto) {
			$config['allowed_types'] = 'jpg|png|jpeg';
			$config['max_size']  = '2048';
			$config['upload_path'] = './uploads/1';


			$this->load->library('upload', $config);
			if ($this->upload->do_upload('foto')) {
				$foto = $this->upload->data('file_name');
			} else {
				// Jika gagal :
				echo $this->upload->display_errors();
			}
		} else {
			echo 'foto tidak ada';
		}
		$data = [
			'gambar' => $images,
			'foto' => $foto
		];
		$this->M_surat_n1_n6->save($data, 'foto');
		redirect('coba');
	}
}
