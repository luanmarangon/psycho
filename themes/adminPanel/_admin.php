<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $head; ?>
  <link rel="stylesheet" href="<?= theme("/assets/style.css", CONF_VIEW_ADMIN); ?>" />
  <link rel="icon" type="image/png" href="<?= theme("/assets/images/logos/favicon.ico", CONF_VIEW_ADMIN); ?>" />

  <!-- Tiny -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.tiny.cloud/1/<?= CONF_API_TINY; ?>/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
  <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@2/dist/tinymce-jquery.min.js"></script>



</head>

<body>

  <div class="ajax_load" style="z-index: 999;">
    <div class="ajax_load_box">
      <div class="ajax_load_box_circle"></div>
      <p class="ajax_load_box_title">Aguarde, carregando...</p>
    </div>
  </div>

  <div class="ajax_response"><?= flash(); ?></div>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Perfil</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/perfil"); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Perfil</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/dashboard"); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Cadastros</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/empresas"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-building"></i>
                </span>
                <span class="hide-menu">Empresa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/pessoas"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-users"></i>
                </span>
                <span class="hide-menu">Pessoas</span>
              </a>
            </li>

            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/servicos"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-briefcase"></i>
                </span>
                <span class="hide-menu">Serviços</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/agenda"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-calendar"></i>
                </span>
                <span class="hide-menu">Agenda</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/blogs"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-laptop"></i>
                </span>
                <span class="hide-menu">Blog</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/faqs"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-file-text"></i>
                </span>
                <span class="hide-menu">Faq</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/usuarios"); ?>" aria-expanded="false">
                <span>
                  <i class="icon-user-secret"></i>
                </span>
                <span class="hide-menu">Usuários</span>
              </a>
            </li>
            <!-- <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Configurações</span>
            </li> -->


            <?php

            use Source\Models\Auth;

            if (Auth::user()->level >= 8) : ?>
              <li class="sidebar-item">
                <a class="sidebar-link" href="<?= url("/admin/configuracoes"); ?>" aria-expanded="false">
                  <span>
                    <i class="icon-cogs"></i>
                  </span>
                  <span class="hide-menu">Configurações</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a class="sidebar-link" href="<?= url("/admin/codes"); ?>" aria-expanded="false">
                  <span>
                    <i class="icon-code-fork"></i>
                  </span>
                  <span class="hide-menu">Codigos</span>
                </a>
              </li>
            <?php endif; ?>
            <li class="sidebar-item">
              <a href="<?= url("/admin/logoff"); ?>" class="icon-sign-out btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>

              <!-- <a class="sidebar-link" href="<?= url("/admin/logoff"); ?>" aria-expanded="false"> -->
              <!-- class="icon-sign-out btn btn-outline-primary mx-3 mt-2 d-block" -->
              </a>
            </li>
            <!--<li class="sidebar-item">
              <a class="sidebar-link" href="<?= url("/admin/conf-email"); ?>" aria-expanded="false">
                <span>
                  <i class="ti ti-user-plus"></i>
                </span>
                <span class="hide-menu">Sobre</span>
              </a>
            </li>
             <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">EXTRA</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./icon-tabler.html" aria-expanded="false">
                <span>
                  <i class="ti ti-mood-happy"></i>
                </span>
                <span class="hide-menu">Icons</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="./sample-page.html" aria-expanded="false">
                <span>
                  <i class="ti ti-aperture"></i>
                </span>
                <span class="hide-menu">Sample Page</span>
              </a>
            </li> -->
          </ul>

        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div class="container-fluid">
        <?= $v->section("content"); ?>
      </div>
    </div>
  </div>
  <script src="<?= theme("/assets/scripts.js", CONF_VIEW_ADMIN); ?>"></script>
  <?= $v->section("scripts"); ?>

</body>

</html>