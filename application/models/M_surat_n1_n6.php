<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_surat_n1_n6 extends CI_Model
{
    private $_table = "surat_n1";

    function getAll()
    {
        return $this->db->get('surat_n1');
    }
    function getSKU()
    {
        return $this->db->get('sku');
    }
    function save($data, $table)
    {

        $this->db->insert($table, $data);
    }
    public function ceknosurat()
    {
        $query = $this->db->query("SELECT MAX(no_surat) as no_surat from surat_kp");
        $hasil = $query->row();
        return $hasil->no_surat;
    }
    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    function get_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
