<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Psicologa <?= $psychologist->fullName(); ?></h5>

      <div class="card">
        <div class="card-body">
          <a href="<?= url("/admin/psicologas-sociail/{$psychologist->psychoId}")?>" class="btn btn-warning">Redes Socias</a>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Dados Profissionais</h5>
          <hr>
          <div class="row">
            <div class="mb-3 col-3">
              <label for="exampleInputEmail1" class="form-label">CRP</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $psychologist->crp; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputEmail1" class="form-label">Data de Inscrição</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $psychologist->issuanceDate; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Registro</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $psychologist->registration; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Data de Validade</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $psychologist->expirationDate; ?>" disabled>
            </div>

          </div>

          <div class="row">
            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Login</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $psychologist->username; ?>" disabled>
            </div>
          </div>




          <div class="row">
            <div class="mb-3 col-3">
              <a href="#" class="btn btn-primary">Editar</a>
              <a href="#" class="btn btn-danger">Inativar</a>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>