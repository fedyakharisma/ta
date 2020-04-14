<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mKunjungan extends CI_Model
{

    public function updateStatusKunjungan($no_rm)
    {
        $data = array('status' => 'Selesai diperiksa');
        $this->db->where('no_rm', $no_rm);
        return $this->db->update('kunjungan', $data);
    }

    public function editStatusKunjungan($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function getByid($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function view()
    {
        $this->db->select("*");
        return $this->db->get("v_kunjungan")->result();
    }

    public function viewGetWhereUmum()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli Umum');
        $this->db->where('status', 'Belum diperiksa');
        return $this->db->get("v_kunjungan")->result();
    }

    public function viewGetWhereKiaKb()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli KIA/KB');
        $this->db->where('status', 'Belum diperiksa');
        return $this->db->get("v_kunjungan")->result();
    }

    public function viewGetWhereGigiMulut()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli Gigi dan Mulut');
        $this->db->where('status', 'Belum diperiksa');
        return $this->db->get("v_kunjungan")->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete($no_rm)
    {
        $this->db->where('no_rm', $no_rm);
        $this->db->delete('kunjungan');
    }
}
                        
/* End of file mKunjungan.php */
