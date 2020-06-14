<?php

defined('BASEPATH') or exit('No direct script access allowed');

class mKunjungan extends CI_Model
{
    public function cekIdkunjungan()
    {
        $query = $this->db->query("SELECT MAX(id_kunjungan) as id_kunjungan from kunjungan");
        $hasil = $query->row();
        return $hasil->id_kunjungan;
    }


    public function hitungJumlahAssetU()
    {
        $this->db->where('poli_kode', 'PL003');
        $query = $this->db->get('v_antrian');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungJumlahAssetG()
    {
        $this->db->where('poli_kode', 'PL004');
        $query = $this->db->get('v_antrian');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function hitungJumlahAssetK()
    {
        $this->db->where('poli_kode', 'PL005');
        $query = $this->db->get('v_antrian');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function updateData($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function updateStatusKunjungan($no_rm, $poli)
    {
        $data = array('status' => 'Selesai diperiksa');
        $this->db->where('no_rm', $no_rm);
        $this->db->where('poli_kode', $poli);
        return $this->db->update('kunjungan', $data);
    }

    public function updateStatusKunjunganA($no_rm)
    {
        $data = array('status' => 'Dalam Antrian');
        $this->db->where('no_rm', $no_rm);
        return $this->db->update('kunjungan', $data);
    }

    public function updateStatusKunjungannext($id_kunjungan)
    {
        $data = array('status' => 'Diperiksa');
        $this->db->where('id_kunjungan', $id_kunjungan);
        return $this->db->update('kunjungan', $data);
    }
    public function updateStatusKunjunganback($id_kunjungan)
    {
        $data = array('status' => 'Dalam Antrian');
        $this->db->where('id_kunjungan', $id_kunjungan);
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
    public function viewberattinggi()
    {
        $this->db->select("*");
        return $this->db->get("kunjungan")->result();
    }

    public function viewGetWhereUmum()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli Umum');
        return $this->db->get("v_kunjungan")->result();
    }

    public function viewGetWhereKiaKb()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli KIA/KB');
        return $this->db->get("v_kunjungan")->result();
    }

    public function viewGetWhereGigiMulut()
    {
        $this->db->select("*");
        $this->db->where('poli', 'Poli Gigi dan Mulut');
        return $this->db->get("v_kunjungan")->result();
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function delete($id_kunjungan)
    {
        $this->db->where('id_kunjungan', $id_kunjungan);
        $this->db->delete('kunjungan');
    }
}
                        
/* End of file mKunjungan.php */
