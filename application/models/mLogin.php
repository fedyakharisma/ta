<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mLogin extends CI_Model
{

    public function cekLogin($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
                        
/* End of file mLogin.php */
