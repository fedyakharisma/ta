<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mRole extends CI_Model
{
    public function view()
    {
        $this->db->select("*");
        return $this->db->get("tb_role")->result();
    }
}
                        
/* End of file mRole.php */
