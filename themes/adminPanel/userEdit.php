<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Dados do Usuário</h5>
      <div class="card">
        <div class="card-body">
          <h5>Dados Pessoais</h5>
          <hr>
          <div class="row">
            <div class="mb-3 col-6">
              <label for="inputNome" class="form-label">Nome</label>
              <input type="text" class="form-control" name="firstName" value="<?= $user->level < 10 ? $user->firstName : "Administrador do Sistema"; ?>" disabled>
            </div>
            <div class="mb-3 col-6">
              <label for="inputSobrenome" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" name="lastName" value="<?= $user->level < 10 ? $user->lastName : "Administrador do Sistema"; ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="mb-3 col-6">
              <label for="inputNome" class="form-label">Telefone</label>
              <input type="text" class="form-control mask-phone" name="firstName" value="<?= $user->level < 10 ? $user->phone : "9999999999"; ?>" disabled>
            </div>
            <div class="mb-3 col-6">
              <label for="inputSobrenome" class="form-label">E-Mail</label>
              <input type="text" class="form-control mask-email" name="lastName" value="<?= $user->level < 10 ? $user->mail  : "Administrador do Sistema"; ?>" disabled>
            </div>
          </div>
          <h5>Credenciais de Acesso</h5>
          <hr>
          <div class="row">
            <div class="mb-3 col-6">
              <label for="inputNome" class="form-label">Login</label>
              <input type="text" class="form-control" name="firstName" value="<?= $user->username; ?>" disabled>
            </div>
            <div class="mb-3 col-6">
              <label for="inputSobrenome" class="form-label">Nivel</label>
              <input type="text" class="form-control" name="lastName" value="<?= $user->level($user->level); ?>" disabled>
            </div>
          </div>

          <div class="row">
            <div class="mb3 col-6">
              <a href="<?= url("/admin/usuarios/{$user->userId}?action=newpasswd") ?>" class="btn btn-success" disabled>Gerar nova Senha</a>
            </div>
            <div class="mb3 col-6 d-flex justify-content-end">
              <?php
              $action = ($user->active === 'A' ? 'Inativar' : 'Ativar');
              $class = ($user->active === 'A' ? 'danger' : 'primary');
              ?>
              <a href="<?= url("/admin/usuarios/{$user->userId}?action=$action"); ?>" class="btn btn-<?=$class;?>"><?= $action; ?> Usuário</a>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>
</div>