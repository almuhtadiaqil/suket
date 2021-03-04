<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermodel extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('user');
	}
	public function getData($table)
	{
		return $this->db->get($table);
	}
	function insert_data($table, $data)
	{
		$this->db->insert($table, $data);
	}
	function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
	function get_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function get_data_($where, $table)
	{
		return $this->db->get_where($table, $where);
	}
	function hapus_warga($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	function update_warga($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
