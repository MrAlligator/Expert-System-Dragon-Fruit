    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <?php if (isset($user['email']) && $user['role_id'] == 1 || $user['role_id'] == 2) : ?>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/home') ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/logosp.png') ?>" alt="" width="30px" height="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Pakar Buah Naga</div>
            </a>
        <?php else : ?>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url() ?>">
                <div class="sidebar-brand-icon">
                    <img src="<?= base_url('assets/img/logosp.png') ?>" alt="" width="30px" height="30px">
                </div>
                <div class="sidebar-brand-text mx-3">Sistem Pakar Buah Naga</div>
            </a>
        <?php endif; ?>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <?php
        $role_id = $this->session->userdata('role_id');
        $queryMenu = "SELECT user_menu.id, menu FROM user_menu JOIN user_access_menu ON user_menu.id = user_access_menu.menu_id WHERE user_access_menu.role_id = $role_id ORDER BY user_access_menu.menu_id ASC";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <?php foreach ($menu as $m) : ?>
            <div class="sidebar-heading">
                <?= $m['menu']; ?>
            </div>

            <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT * FROM user_sub_menu WHERE menu_id = $menuId AND is_active = '1'";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm) : ?>
                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url($sm['url']) ?>">
                        <i class="<?php echo $sm['icon'] ?>"></i>
                        <span><?= $sm['title'] ?></span></a>
                </li>

            <?php endforeach; ?>

            <hr class="sidebar-divider mt-3">

        <?php endforeach; ?>

        <div class="sidebar-heading">
            Aksi
        </div>
        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link pb-0" href="" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider mt-3 d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>