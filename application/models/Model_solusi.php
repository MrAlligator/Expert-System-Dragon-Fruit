<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_solusi extends CI_Model
{
    private $_table = "tb_solusi";

    public $id_solusi;
    public $kode_solusi;
    public $id_hamapenyakit;
    public $hamapenyakit;
    public $solusi;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_solusi" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_solusi()
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
        return $this->db->delete($this->_table, array("id_solusi" => $id));
    }
}
