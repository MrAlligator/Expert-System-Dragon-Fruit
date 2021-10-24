<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengetahuan extends CI_Model
{
    private $_table = "tb_pengetahuan";

    public $id_pengetahuan;
    public $id_hamapenyakit;
    public $id_gejala;
    public $probabilitas;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pengetahuan" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_pengetahuan()
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
        return $this->db->delete($this->_table, array("id_pengetahuan" => $id));
    }

    public function selectGj($id)
    {
        $query = "SELECT 'tb_gejala'.'gejala' FROM 'tb_gejala' WHERE 'id_gejala' = $id";
        return $this->db->query($query)->result_array();
    }

    public function getHamaPenyakit()
    {
        $query = "SELECT tb_pengetahuan.*, tb_hamapenyakit.hamapenyakit, tb_gejala.gejala FROM tb_pengetahuan JOIN tb_hamapenyakit ON tb_pengetahuan.id_hamapenyakit = tb_hamapenyakit.id_hamapenyakit JOIN tb_gejala ON tb_pengetahuan.id_gejala = tb_gejala.id_gejala";
        return $this->db->query($query)->result();
    }
}
