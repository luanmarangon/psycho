<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Cadastro <?= $people->fullName(); ?></h5>
      <div class="card">
        <div class="card-body">
          <?php if($psycho):?>
            <a href="<?= url("/admin/psicologas/{$people->peopleId}"); ?>" class="btn btn-success">Psicologa</a>

            <?php else: ?>
              <a href="#" class="btn btn-primary">Novo Psicologo (a)</a>

              <?php endif;?>
        </div>
      </div>
      <div class="card">
        <div class="card-body">
          <h5>Dados Pessoais</h5>
          <hr>
          <div class="row">
            <div class="mb-3 col-3">
              <label for="exampleInputEmail1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $people->firstName; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $people->lastName; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">RG</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->rg; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">CPF</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->cpf; ?>" disabled>
            </div>

          </div>

          <div class="row">

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Sexo:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->genre === "F" ? "Feminino" : "Masculino"; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Nascimento</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= date_fmt_br($people->dateBirth); ?>" disabled>
            </div>

          </div>

          <h5>Contato</h5>
          <hr>

          <div class="row">
            <?php foreach ($contactPeople as $key) : ?>
              <div class="mb-3 col-3">
                <label for="exampleInputPassword1" class="form-label"><?= $key->type === "email" ? "E-Mail" : "Celular"; ?></label>
                <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $key->contact; ?>" disabled>
              </div>
            <?php endforeach; ?>
          </div>


          <h5>Endereço</h5>
          <hr>

          <div class="row">

            <div class="mb-3 col-2">
              <label for="exampleInputPassword1" class="form-label">CEP</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->zipcode; ?>" disabled>
            </div>

            <div class="mb-3 col-6">
              <label for="exampleInputPassword1" class="form-label">Logradouro</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->street; ?>" disabled>
            </div>

            <div class="mb-3 col-2">
              <label for="exampleInputPassword1" class="form-label">N°</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->number; ?>" disabled>
            </div>

            <div class="mb-3 col-2">
              <label for="exampleInputPassword1" class="form-label">Complemento</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->complement; ?>" disabled>
            </div>

          </div>

          <div class="row">

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Bairro</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->district; ?>" disabled>
            </div>

            <div class="mb-3 col-3">
              <label for="exampleInputPassword1" class="form-label">Cidade</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->city; ?> - <?= $people->state; ?>" disabled>
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