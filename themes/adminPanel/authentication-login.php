<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?= $head; ?>
  <link rel="stylesheet" href="<?= theme("/assets/style.css", CONF_VIEW_ADMIN); ?>" />
  <link rel="icon" type="image/png" href="<?= theme("/assets/images/favicon.png", CONF_VIEW_ADMIN); ?>" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= theme("/assets/images/logos/dark-logo.svg", CONF_VIEW_ADMIN); ?>" width="180" alt="">
                </a>
                <p class="text-center"><?= CONF_SITE_NAME; ?></p>
                <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuário</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked>
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        Lembre-se deste dispositivo
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="./index.html">Esqueceu sua senha ?</a>
                  </div>
                  <a href="./index.html" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Entrar</a>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Novo por aqui?</p>
                    <a class="text-primary fw-bold ms-2" href="<?= url("/admin/cadastro"); ?>">Crie a sua conta aqui</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= theme("/assets/js/plugins.js", CONF_VIEW_ADMIN); ?>"></script>
</body>

</html>