<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Serviços</h5>


      <div class="card">
        <div class="row">
          <div class="card-body col-6">
            <a href="<?= url("/admin/servico"); ?>" class="icon-plus btn btn-primary"> Serviço</a>
          </div>
          <div class="card-body col-6">
            <form action="<?= url("/admin/servicos"); ?>" method="post">
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

      <?php if ($services) : ?>

        <div class="row">
          <?php foreach ($services as $key) : ?>
            <div class="col-md-4">
              <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> <?= $key->name; ?> </h5>
                  <h6 class="card-subtitle mb-2 text-muted">Criado: <?= date_fmt($key->created_at); ?></h6>
                  <h6 class="card-subtitle mb-2 text-muted">Atualizado: <?= date_fmt($key->updated_at); ?></h6>
                  <a href="<?= url("/admin/servico/$key->id"); ?>" class="card-link">Visualizar</a>
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
              <h2>Ainda não possui cadastro de Serviços.</h2>
            </div>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>