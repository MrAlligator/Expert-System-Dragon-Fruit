<!-- ======= Header ======= -->
<header id="header">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <!-- <h1 class="logo"><a href="index.html">Valera</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.html" class="logo"><img src="<?= base_url('assets/img/spbuahnaga-white.png') ?>" alt="" class="img-fluid"></a>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li><a href="<?= base_url() ?>">Home</a></li>
                <li class="drop-down"><a href="">Pengetahuan</a>
                    <ul>
                        <?php foreach ($ilmu as $il) : ?>
                            <li><a href="<?= base_url('welcome/details/' . $il['id_ilmu']) ?>"><?= $il['title'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <li><a href="<?= base_url('welcome/tentang') ?>">Tentang</a></li>
                <?php if (isset($user['email'])) : ?>
                    <?php
                    $role_id = $this->session->userdata('role_id');
                    $queryMenu = "SELECT user_menu.id, menu FROM user_menu JOIN user_access_menu ON user_menu.id = user_access_menu.menu_id WHERE user_access_menu.role_id = $role_id ORDER BY user_access_menu.menu_id ASC";
                    $menu = $this->db->query($queryMenu)->result_array();
                    ?>
                    <?php foreach ($menu as $m) : ?>
                        <li class="drop-down"><a href=""><?= $m['menu'] ?></a>
                            <ul>
                                <?php
                                $menuId = $m['id'];
                                $querySubMenu = "SELECT * FROM user_sub_menu WHERE menu_id = $menuId AND is_active = '1'";
                                $subMenu = $this->db->query($querySubMenu)->result_array();
                                ?>
                                <?php foreach ($subMenu as $sm) : ?>
                                    <li><a href="<?= base_url($sm['url']) ?>"><?= $sm['title'] ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endforeach; ?>
                    <li class="drop-down"><a href=""><?= $user['name'] ?></a>
                        <ul>
                            <li><a href="<?= base_url('frontend/profile') ?>">Profil</a></li>
                            <li><a href="<?= base_url('frontend/auth/logout') ?>">Logout</a></li>
                        </ul>
                    </li>
                <?php else : ?>
                    <li><a href="" data-toggle="modal" data-target="#staticBackdrop">Log In Sebagai</a></li>
                <?php endif; ?>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->