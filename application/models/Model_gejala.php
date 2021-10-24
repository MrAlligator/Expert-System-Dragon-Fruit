<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_gejala extends CI_Model
{
    private $_table = "tb_gejala";

    public $id_gejala;
    public $kode_gejala;
    public $gejala;

    public function getAll()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_gejala" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result_array();
    }

    public function hitung_jumlah_gejala()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_gejala" => $id));
    }
}
