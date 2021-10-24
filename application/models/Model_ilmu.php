<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_ilmu extends CI_Model
{
    private $_table = "tb_ilmu";

    public $id_ilmu;
    public $class;
    public $title;
    public $gambar;
    public $p1;
    public $p2;
    public $p3;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getKeilmuan()
    {
        return $this->db->get_where($this->_table, ["class" => 1])->result_array();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_ilmu" => $id])->row_array();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_ilmu()
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
        // return $this->db->delete($this->_table, array("id_ilmu" => $id));
        $row = $this->db->where('id_ilmu', $id)->get('tb_ilmu')->row();
        unlink('./assets/img/ilmu/' . $row->gambar);
        $this->db->where('id_ilmu', $id);
        $this->db->delete($this->_table);
        return true;
    }
}
