<?php defined('BASEPATH') or exit('No direct script access allowed');

class Model_user extends CI_Model
{
    private $_table = "tb_user";

    public $id_user;
    public $name;
    public $email;
    public $foto_user;
    public $password;
    public $role_id;
    public $is_active;
    public $date_created;

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }

    public function getSome($limit, $start)
    {
        return $this->db->get($this->_table, $limit, $start)->result();
    }

    public function hitung_jumlah_user()
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
        // return $this->db->delete($this->_table, array("id_user" => $id));
        $row = $this->db->where('id_user', $id)->get('tb_user')->row();
        $old_image = $row->foto_user;
        // var_dump($old_image);
        // die;
        if ($old_image != 'farmer.png' || $old_image != 'administrator.png' || $old_image != 'expert.png') {
            unlink('./assets/img/userimage/' . $old_image);
            $this->db->where('id_user', $id);
            $this->db->delete($this->_table);
            return true;
        }
    }

    public function reset($id)
    {
        $row = $this->db->where('id_user', $id)->get('tb_user')->row();
        $role = $row->role_id;

        if ($role == 1) {
            $data = [
                'password' => password_hash('admin1234', PASSWORD_DEFAULT)
            ];
            $this->db->where('id_user', $id);
            $this->db->update('tb_user', $data);
            return true;
        } else if ($role == 2) {
            $data = [
                'password' => password_hash('pakar1234', PASSWORD_DEFAULT)
            ];
            $this->db->where('id_user', $id);
            $this->db->update('tb_user', $data);
            return true;
        } else if ($role == 3) {
            $data = [
                'password' => password_hash('user1234', PASSWORD_DEFAULT)
            ];
            $this->db->where('id_user', $id);
            $this->db->update('tb_user', $data);
            return true;
        }
    }
}
