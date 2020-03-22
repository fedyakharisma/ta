<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mSoap extends CI_Model
{

    public function view()
    {
        $this->db->select("*");
        return $this->db->get("v_soap")->result();
    }

    public function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
                        
/* End of file Soap.php */
