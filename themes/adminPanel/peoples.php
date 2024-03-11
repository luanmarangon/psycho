<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Cadastro de Pessoas</h5>

      <div class="card">
        <div class="row">
          <div class="card-body col-6">
            <a href="<?= url("/admin/pessoa"); ?>" class="btn btn-primary">Novo</a>
          </div>
          <div class="card-body col-6">
            <form action="<?= url("/admin/pessoas"); ?>" method="post">
              <input type="hidden" name="action" value="search" />
              <div class="row">
                <div class="col-9">
                  <input class="form-control" type="text" name="search" id="" placeholder="Consulta">
                </div>
                <div class="col-1">
                  <button class="icon-search btn btn-search"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php if ($peoples) : ?>
        <div class="row">
          <?php foreach ($peoples as $key) : ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title icon-user d-flex justify-content-end status <?= ($key->status == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></h5>
                  <h5 class="card-title"><?= $key->fullName(); ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted mask-rg">Rg: <?= $key->rg; ?></h6>
                  <h6 class="card-subtitle mb-2 text-muted mask-doc">CPF: <?= $key->cpf; ?></h6>
                  <a href="<?= url("/admin/pessoa/$key->id"); ?>" class="card-link">Visualizar</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?= $paginator; ?>
      <?php else : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h2>Ainda não possui cadastro de Pessoas.</h2>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>