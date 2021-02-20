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

	public function update_sku_batal($id_surat_sku)
	{
		$where = array(
			'id_surat_sku' => $id_surat_sku
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_skb_batal($id_surat_kelakuanbaik)
	{
		$where = array(
			'id_surat_kelakuanbaik' => $id_surat_kelakuanbaik
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_bedanama_batal($id_surat_bedanama)
	{
		$where = array(
			'id_surat_bedanama' => $id_surat_bedanama
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_belumkerja_batal($id_surat_belumkerja)
	{
		$where = array(
			'id_surat_belumkerja' => $id_surat_belumkerja
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_bmr_batal($id_surat_bmr)
	{
		$where = array(
			'id_surat_bmr' => $id_surat_bmr
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_belummenikah_batal($id_surat_belummenikah)
	{
		$where = array(
			'id_surat_belummenikah' => $id_surat_belummenikah
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
	public function update_bp_batal($id_surat_bp)
	{
		$where = array(
			'id_surat_bp' => $id_surat_bp
		);
		$data = array(
			'status_surat' => "Dibatalkan",
		);
		$this->M_surat_n1_n6->update_data($where, $data, 'surat_n1');
		redirect('user');
	}
}
