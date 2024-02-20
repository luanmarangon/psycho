<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$values) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro dos Valores da Empresa/h5>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/valores"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Nome do Valor</label>
                  <input type="text" class="form-control" name="value">
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Descrição do Valor</label>
                  <textarea name="description" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro dos Valores da Empresa/h5>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/valores/$values->id"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Nome do Valor</label>
                  <input type="text" class="form-control" name="value" value="<?= $values->value; ?>">
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Descrição do Valor</label>
                  <textarea name="description" id="" cols="30" rows="6" class="form-control"><?= $values->description; ?></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
</div>