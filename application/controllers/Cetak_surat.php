<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak_surat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->library('pdf');
        $this->load->model("M_surat_n1_n6");
    }
    function index($id_surat_sku)
    {
        $where = array('id_surat_sku' => $id_surat_sku);
        $data['sku'] = $this->M_surat_n1_n6->get_data($where, 'sku')->result();
        $this->load->view('surat/cetak_SKU', $data);
    }
}
