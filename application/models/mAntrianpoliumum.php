<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mAntrianpoliumum extends CI_Model
{

    // public function updateStatusKunjungan($no_rm)
    // {
    //     $data = array('status' => 'Selesai diperiksa');
    //     $this->db->where('no_rm', $no_rm);
    //     return $this->db->update('kunjungan', $data);
    // }

    // public function editStatusKunjungan($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    // public function getByid($where, $table)
    // {
    //     return $this->db->get_where($table, $where);
    // }

    public function viewPUMUM()
    {
        $this->db->select("*");
        $this->db->order_by('no_antrian', 'ASC');
        $this->db->where('status','Dalam Antrian');
        $this->db->where('poli_kode','PL003');
        return $this->db->get("v_antrian")->result();
    }

    

    // public function viewGetWhereUmum()
    // {
    //     $this->db->select("*");
    //     $this->db->where('poli', 'Poli Umum');
    //     return $this->db->get("v_kunjungan")->result();
    // }

    // public function viewGetWhereKiaKb()
    // {
    //     $this->db->select("*");
    //     $this->db->where('poli', 'Poli KIA/KB');
    //     return $this->db->get("v_kunjungan")->result();
    // }

    // public function viewGetWhereGigiMulut()
    // {
    //     $this->db->select("*");
    //     $this->db->where('poli', 'Poli Gigi dan Mulut');
    //     return $this->db->get("v_kunjungan")->result();
    // }

    
    //poli umum
    public function viewnoantriumumm()
    {
       $this->db->select("*");
        $this->db->where('status','Dalam Antrian');
        $this->db->where('poli_kode','PL003');
        $this->db->order_by('no_antrian', 'ASC');
        $this->db->limit(1);
        $query=$this->db->get("v_antrian",1,1);
        if ($query->num_rows() >0) {
        return $query->result();
        }
        return 0;
    }
    public function viewnoantriumums()
    {
       $this->db->select("*");
        $this->db->where('status','Dalam Antrian');
        $this->db->where('poli_kode','PL003');
        $this->db->order_by('no_antrian', 'ASC');
        $this->db->limit(1);
        $query=$this->db->get("v_antrian");
        if ($query->num_rows() >0) {
        return $query->result();
        }
        return 0;
    }
    public function viewnoantriumumd()
    {
       $this->db->select("*");
        $this->db->where('status','diperiksa');
        $this->db->where('poli_kode','PL003');
        $this->db->order_by('no_antrian', 'ASC');
        $this->db->limit(1);
        $query=$this->db->get("v_antrian");
        if ($query->num_rows() >0) {
        return $query->result();
        }
        return 0; 
    }
    //poli umum

    

    public function input_dataPoliUmum($data, $table)
    {

        $this->db->insert($table, $data);
        $this->db->where('poli','Poli Umum');
    }
    
}
                        
/* End of file mKunjungan.php */
