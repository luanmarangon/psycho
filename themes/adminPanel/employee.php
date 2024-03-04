<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$employee) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Criando o Cadastro de Funcionário (a): <?= $people->fullName(); ?>
        </h5>
        <form action="<?= url("/admin/pessoa/$people->id/novo-funcionario"); ?>" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="create" />

          <div class="card">
            <div class="card-body">
              <h5>Dados Profissionais</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputLogin" class="form-label">Login</label>
                  <input type="text" class="form-control" name="login" disabled>
                </div>
                <div class="mb-3 col-3">
                  <label for="inputLogin" class="form-label">Informe a Senha</label>
                  <input type="text" class="form-control" name="login" disabled>
                </div>
                <div class="mb-3 col-3">
                  <label for="inputLogin" class="form-label">Confirme a Senha</label>
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
        <h5 class="card-title icon-user d-flex justify-content-end status <?= ($employee->userEmployee($employee->users_id)->active  == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></h5>
        <h5 class="card-title fw-semibold mb-4">Funcionário (a) <?= $people->fullName(); ?> </h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-12 d-flex justify-content-end">
                <form action="<?= url("/admin/funcionario/{$employee->id}"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <?php if ($user->active === 'I') : ?>
                    <input type="hidden" name="action" value="active" />
                    <button class="btn btn-success">Ativar</button>
                  <?php else : ?>
                    <input type="hidden" name="action" value="delete" />
                    <button class="btn btn-danger">Inativar</button>
                  <?php endif; ?>
                </form>
              </div>

            </div>



          </div>
        </div>
        <form action="<?= url("/admin/funcionario/{$employee->id}"); ?>" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="update" />

          <div class="card">
            <div class="card-body">
              <h5>Dados Profissionais</h5>
              <hr>
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