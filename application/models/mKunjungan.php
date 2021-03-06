<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mKunjungan extends CI_Model
{
<<<<<<< HEAD
    public function cekIdkunjungan()
    {
        $query = $this->db->query("SELECT MAX(id_kunjungan) as id_kunjungan from kunjungan");
        $hasil = $query->row();
        return $hasil->id_kunjungan;
    }
    

    public function hitungJumlahAssetU()
    {   
        $this->db->where('poli_kode','PL003');
        $query = $this->db->get('v_antrian');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function hitungJumlahAssetG()
    {   
        $this->db->where('poli_kode','PL004');
        $query = $this->db->get('v_antrian');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function hitungJumlahAssetK()
    {   
        $this->db->where('poli_kode','PL005');
        $query = $this->db->get('v_antrian');
        if($query->num_rows()>0)
        {
          return $query->num_rows();
        }
        else
        {
          return 0;
        }
    }

    public function updateStatusKunjungan($no_rm)
=======
    function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function updateStatusKunjungan($no_rm, $poli)
>>>>>>> 1e0a6ec831046be2c046241bd3c33d30561df3a9
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
