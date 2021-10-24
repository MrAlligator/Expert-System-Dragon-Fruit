<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_hasil extends CI_Model
{
    public function getAll()
    {
        $query = "SELECT tb_hasil.*, a.name, b.hamapenyakit, c.solusi FROM tb_hasil JOIN tb_user a ON (tb_hasil.id_user=a.id_user) JOIN tb_hamapenyakit b ON (tb_hasil.id_hamapenyakit=b.id_hamapenyakit) JOIN tb_solusi c ON (tb_hasil.id_solusi=c.id_solusi)";
        return $this->db->query($query)->result_array();
    }
}
