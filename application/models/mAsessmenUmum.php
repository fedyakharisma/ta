<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mAsessmenUmum extends CI_Model
{
    public function viewGetWhereUmum()
    {
        $this->db->select("*");
        return $this->db->get("asessmen_umum")->result();
    }
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
                        
/* End of file mAsessmen.php */
