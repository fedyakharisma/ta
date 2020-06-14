<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mSoap extends CI_Model
{

    function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function selectDistinct()
    {
        $this->db->distinct();
        $this->db->select('nama');
        $this->db->select('tgl_jam');
        $this->db->select('no_rm');
        $this->db->select('tanggal_lahir');
        $this->db->select('poli');
        $this->db->order_by('nama', 'ASC');
        return $this->db->get('v_soap');
    }

    function save_batch($data)
    {
        return $this->db->insert_batch('soap', $data);
    }

    function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    function view()
    {
        $this->db->select("*");
        return $this->db->get("v_soap")->result();
    }

    function getIcd10()
    {
        $this->db->select("*");
        return $this->db->get("icd_10")->result();
    }

    function getWhere($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
}
                        
/* End of file Soap.php */
