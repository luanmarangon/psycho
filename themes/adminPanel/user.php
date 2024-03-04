<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Usuários do Sistema</h5>

      <div class="row">
        <?php if ($users) : ?>
          <?php foreach ($users as $key) : ?>
            <div class="col-md-4">
              <h5 class="card-title icon-user d-flex justify-content-end status <?= ($key->active == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></h5>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> <?= $key->firstName; ?> <?= $key->lastName; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Login: <?= $key->username; ?></h6>
                  <h6 class="card-subtitle mb-2 text-muted">Nivel: <?= $key->level($key->level); ?></h6>
                  <a href="<?= url("/admin/usuarios/$key->usersId"); ?>" class="card-link">Visualizar</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        <?php else : ?>
          <div class="card">
            <div class="card-body">
              <h5>Não há usuários cadastrados no momento. Favor verificar com o administrador.</h5>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>