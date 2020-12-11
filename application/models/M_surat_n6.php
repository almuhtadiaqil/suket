<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_surat_n6 extends CI_Model
{


    function getN6()
    {
        return $this->db->get('surat_n6');
    }

    function getUser()
    {
        return $this->db->get('user');
    }

    function getAdmin()
    {
        return $this->db->get('admin');
    }
}
