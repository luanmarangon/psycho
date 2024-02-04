<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$psychologist) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Criando o Cadastro do Psicologo (a) : </h5>

        <div class="card">
          <div class="card-body">
            <a href="#" class="btn btn-warning">Redes Socias</a>
          </div>
        </div>
        <form action="<?= url("/admin/psicologas"); ?>" method="post">
         <!--ACTION SPOOFING-->
         <input type="hidden" name="action" value="create" />
         <!-- <input type="hidden" name="people_id" value="<?= $people->id; ?>" /> -->


          <div class="card">
            <div class="card-body">
              <h5>Dados Profissionais</h5>
              <div class="checkbox-wrapper">
                <span>Psicologa Padrao:</span>
                <input type="checkbox" name="psychoStandard" class="form-control">
              </div>
              <hr>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputCRP" class="form-label">CRP</label>
                  <input type="text" class="form-control" name="crp" required>
                </div>

                <div class="mb-3 col-3">
                  <label for="inputInscricao" class="form-label">Data de Inscrição</label>
                  <input type="date" class="form-control" name="issuanceDate">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputRegistration" class="form-label">Registro</label>
                  <input type="text" class="form-control" name="registration" required>
                </div>

                <div class="mb-3 col-3">
                  <label for="inputValidade" class="form-label">Data de Validade</label>
                  <input type="date" class="form-control" name="expirationDate">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputLogin" class="form-label">Login</label>
                  <input type="text" class="form-control" name="login" disabled>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <button class="btn btn-primary">Cadastrar</button>
                  <a href="#" class="btn btn-danger">Inativar</a>
                </div>

              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  <?php else : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Psicologa <?= $psychologist->fullName(); ?></h5>

        <div class="card">
          <div class="card-body">
            <a href="<?= url("/admin/psicologas-sociail/{$psychologist->psychoId}") ?>" class="btn btn-warning">Redes Socias</a>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <h5>Dados Profissionais</h5>
            <hr>
            <div class="row">
              <div class="mb-3 col-3">
                <label for="exampleInputEmail1" class="form-label">CRP</label>
                <input type="text" class="form-control" value="<?= $psychologist->crp; ?>" disabled>
              </div>

              <div class="mb-3 col-3">
                <label for="exampleInputEmail1" class="form-label">Data de Inscrição</label>
                <input type="text" class="form-control" value="<?= $psychologist->issuanceDate; ?>" disabled>
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
  <?php endif; ?>
</div>
</div>