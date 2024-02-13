<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Perfil</h5>
      <div class="card">
        <div class="card-body">
          <form action="<?= url("/admin/perfil"); ?>" method="post">
               <!--ACTION SPOOFING-->
               <input type="hidden" name="action" value="update" />
               <input type="hidden" name="user_id" value="<?= $user->id; ?>" />
            <div class="row">
              <h4>Dados de Acesso</h4>
              <small>Alterar os dados de acesso a plataforma</small>
              <br>
              <div class="mb-3 col-3">
                <label for="exampleInputEmail1" class="form-label">Login</label>
                <input type="text" class="form-control" value="<?= $user->username; ?>" name="username">
              </div>
              <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type="password" class="form-control" name="password">
              </div>
              <div class="mb-3 col-4">
                <label for="exampleInputPassword1" class="form-label">Confirme a Senha</label>
                <input type="password" class="form-control" name="confpassword">
              </div>
              <div class="mb-3 col-1 d-flex align-self-end">
                <button class="btn btn-outline-dark icon-check"></button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </div>
</div>