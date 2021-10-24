<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    private $_table = "user_menu";
    private $_tabel = "user_sub_menu";

    public $id;
    public $menu;

    public $menu_id;
    public $title;
    public $url;
    public $icon;
    public $is_active;

    public function getSubMenu()
    {
        $query = "SELECT user_sub_menu.*, user_menu.menu FROM user_sub_menu JOIN user_menu ON user_sub_menu.menu_id = user_menu.id";
        return $this->db->query($query)->result_array();
    }

    public function deletemenu($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function deletesubmenu($id)
    {
        return $this->db->delete($this->_tabel, array("id" => $id));
    }

    public function deleterole($id)
    {
        return $this->db->delete("user_role", array("role_id" => $id));
    }
}
