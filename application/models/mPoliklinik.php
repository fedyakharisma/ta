<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 
 */
class mPoliklinik extends CI_Model
{
    function poliklinik_list()
    {
        $hasil = $this->db->query('SELECT * FROM poli');
        return $hasil->result();
    }

    public function edit($kode)
    {
        $data = array(
            'poli_kode' => $this->input->post('kode_poli'),
            'poli' => $this->input->post('nama_poli'),
        );
        $this->db->where('poli_kode', $kode);
        $this->db->update('poli', $data);
    }

    public function cekKodePoli()
    {
        $query = $this->db->query("SELECT MAX(poli_kode) as poli_kode from poli");
        $hasil = $query->row();
        return $hasil->poli_kode;
    }

    public function delete($kode)
    {
        $this->db->where('poli_kode', $kode);
        $this->db->delete('poli');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function editData($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function view()
    {
        $this->db->select("*");
        return $this->db->get("poli")->result();
    }

    public function updatePoliklinik($poli_kode, $poli_nama)
    {
        $hasil = $this->db->query("UPDATE poli SET poli_kode='$poli_kode', poli='$poli_nama' WHERE poli_kode='$poli_kode'");
        return $hasil;
    }
}
