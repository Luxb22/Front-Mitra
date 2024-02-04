    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="<?= media();?>/images/uploads/avatar.png" alt="Imagen de Usuario">
        <div>
          <p class="app-sidebar__user-name">David Rodriguez</p>
          <p class="app-sidebar__user-designation">Administrador</p>
        </div>
      </div>
      <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?= base_url(); ?>/dashboard">
            <i class="app-menu__icon fas fa-tachometer-alt"></i>
            <span class="app-menu__label">Dashboard</span></a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa-solid fa-users"></i>
                <span class="app-menu__label">Usuarios</span>
                <i class="treeview-indicator fas fa-caret-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/usuarios">
                    <i class="icon far fa-user"></i> Usuarios</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/roles">
                    <i class="icon far fa-address-book"></i> Roles</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/permisos">
                    <i class="icon fas fa-user-tag"></i> Permisos</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fas fa-warehouse"></i>
                <span class="app-menu__label">Productos</span>
                <i class="treeview-indicator fas fa-caret-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/productos">
                    <i class="icon fab fa-product-hunt"></i> Productos</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/op">
                    <i class="icon far fa-list-alt"></i> OP</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/remision">
                    <i class="icon fas fa-list-ol"></i> Remision</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fas fa-people-carry"></i>
                <span class="app-menu__label">Movimientos</span>
                <i class="treeview-indicator fas fa-caret-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/extruccion">
                    <i class="icon  fas fa-tasks"></i> Extruccion</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/laminado">
                    <i class="icon fas fa-tasks"></i> Laminado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/refilado">
                    <i class="icon fas fa-tasks"></i> Refilado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/sellado">
                    <i class="icon fas fa-tasks"></i> Sellado</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/impresion">
                    <i class="icon fas fa-tasks"></i> Impresion</a>
                </li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fas fa-kaaba"></i>
                <span class="app-menu__label">Sedes</span>
                <i class="treeview-indicator fas fa-caret-right"></i></a>
            <ul class="treeview-menu">
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/bogota">
                    <i class="icon far fa-building"></i> Bogota</a>
                </li>
                <li>
                    <a class="treeview-item" href="<?= base_url(); ?>/mosquera">
                    <i class="icon fas fa-building"></i> Mosquera</a>
                </li>
            </ul>
        </li>
            <a class="app-menu__item" href="<?= base_url(); ?>/logout">
            <i class="app-menu__icon fas fa-sign-out-alt"></i>
            <span class="app-menu__label">Logout</span></a>
        </li>
      </ul>
    </aside>