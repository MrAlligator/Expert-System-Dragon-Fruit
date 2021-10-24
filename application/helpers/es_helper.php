<?php

function is_logged_in()
{
    $es = get_instance();
    if (!$es->session->userdata('email')) {
        redirect('welcome');
    } else {
        $role_id = $es->session->userdata('role_id');
        $menu = $es->uri->segment(2);

        $queryMenu = $es->db->get_where('user_menu', ['menu' => $menu])->row_array();
        $menu_id = $queryMenu['id'];

        $userAccess = $es->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('backend/auth/blocked');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $es = get_instance();

    $result = $es->db->get_where('user_access_menu', [
        'role_id' => $role_id,
        'menu_id' => $menu_id
    ]);

    if ($result->num_rows() > 0) {
        return "checked = 'checked'";
    }
}
