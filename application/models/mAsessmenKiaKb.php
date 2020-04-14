<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mAsessmenKiaKb extends CI_Model
{
    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    
    public function viewGetWhereUmum()
    {
        $this->db->select("*");
        return $this->db->get("asessmen_kia_kb")->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
                        
/* End of file mAsessmenKiaKb.php */
