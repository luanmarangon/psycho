<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Cadastro de Pessoas</h5>

      <div class="card">
        <div class="card-body">
          <a href="<?= url("/admin/pessoa"); ?>" class="btn btn-primary">Novo</a>
        </div>
      </div>

      <div class="row">

        <?php foreach ($peoples as $key) : ?>

          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title icon-user d-flex justify-content-end status <?= ($key->status == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></h5>
                <h5 class="card-title"><?= $key->fullName(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Rg: <?= $key->rg; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">CPF: <?= $key->cpf; ?></h6>
                <a href="<?= url("/admin/pessoa/$key->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>