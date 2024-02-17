<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$psychologist) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Criando o Cadastro do Psicologo (a) : <?= $people->fullName(); ?>
        </h5>

        <div class="card">
          <div class="card-body">
            <a href="#" class="btn btn-warning">Redes Socias</a>
          </div>
        </div>
        <form action="<?= url("/admin/pessoa/$people->id/novo-psicologo"); ?>" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="create" />

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
        <h5 class="card-title icon-user d-flex justify-content-end status <?= ($psychologist->userPsycho($psychologist->users_id)->active  == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></h5>
        <h5 class="card-title fw-semibold mb-4">Psicologa <?= $people->fullName(); ?> </h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/psicologo/{$people->psycho($people->id)->id}/redes-sociais"); ?>" class="btn btn-warning">Redes Socias</a>
              </div>
              <div class="mb-3 col-6 d-flex justify-content-end">
                <form action="<?= url("/admin/psicologo/{$people->psycho($people->id)->id}"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="delete" />
                  <button class="btn btn-danger">Inativar</button>
                </form>
              </div>

            </div>



          </div>
        </div>
        <form action="<?= url("/admin/pessoa/$people->id/novo-psicologo"); ?>" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="update" />

          <div class="card">
            <div class="card-body">
              <h5>Dados Profissionais</h5>
              <div class="checkbox-wrapper">
                <span>Psicologa Padrao:</span>
                <input type="checkbox" name="psychoStandard" class="form-control" <?= $psychologist->standard === 'S' ? 'checked' : '' ?>>
              </div>
              <hr>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputCRP" class="form-label">CRP</label>
                  <input type="text" class="form-control" name="crp" value="<?= $psychologist->crp; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputInscricao" class="form-label">Data de Inscrição</label>
                  <input type="date" class="form-control" name="issuanceDate" value="<?= $psychologist->issuanceDate; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputRegistration" class="form-label">Registro</label>
                  <input type="text" class="form-control" name="registration" value="<?= $psychologist->registration; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputValidade" class="form-label">Data de Validade</label>
                  <input type="date" class="form-control" name="expirationDate" value="<?= $psychologist->expirationDate; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputLogin" class="form-label">Login</label>
                  <input type="text" class="form-control" name="login" value="<?= $user->username; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <button class="btn btn-primary">Atualizar</button>
                </div>

              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
  <?php endif; ?>
</div>
</div>