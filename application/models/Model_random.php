<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_random extends CI_Model
{
    private $_table = "tb_gejala";

    public function get1()
    {
        $query = "SELECT tmp_random.id_random, tmp_random.id_user, tmp_random.id_pertanyaan, tmp_random.pertanyaan, tmp_random.opsi1, tmp_random.opsi2, tmp_random.opsi3, a.gejala as gejala1, b.gejala as gejala2, c.gejala as gejala3, a.gambar as gb1, b.gambar as gb2, c.gambar AS gb3 FROM `tmp_random` JOIN tb_gejala a ON (tmp_random.opsi1=a.id_gejala) JOIN tb_gejala b ON (tmp_random.opsi2=b.id_gejala) JOIN tb_gejala c ON (tmp_random.opsi3=c.id_gejala)";
        return $this->db->query($query)->result_array();
    }

    public function delete($id)
    {
        $query = "DELETE FROM tmp_random WHERE id_user = $id";
        return $query;
    }

    public function hitung_jumlah_random()
    {
        $query = $this->db->get($this->_table);
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }
}
