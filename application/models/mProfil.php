<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mProfil extends CI_Model
{

    public function getAll()
    {
        $this->db->select("*");
        return $this->db->get("v_pegawai")->result();
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
                        
/* End of file mProfil.php */
