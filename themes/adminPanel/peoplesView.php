<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Cadastro <?= $people->fullName(); ?></h5>

      <div class="card">
        <div class="card-body">

        </div>
      </div>

      <!-- <div class="row">


          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?= $people->fullName(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Rg: <?= $people->rg; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">CPF: <?= $people->cpf; ?></h6>
                <a href="<?= url("/admin/pessoas/$people->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>

      </div> -->
      <div class="card">
        <div class="card-body">
          <div class="col-3">
            <label for="exampleInputEmail1" class="form-label">Nome</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $people->firstName; ?>" disabled>
            <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $people->lastName; ?>" disabled>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">RG</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->rg; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">CPF</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->cpf; ?>" disabled>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Sexo:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->genre; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">Nascimento</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= date_fmt_br($people->dateBirth); ?>" disabled>
          </div>
          <h5>Contato</h5>
          <!-- <div class="mb-3">
            <?php if ($people->type == 'email') : ?>
              <label for="exampleInputPassword1" class="form-label">E-Mail:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->genre; ?>" disabled>
            <?php else : ?>
              <label for="exampleInputPassword1" class="form-label">Sexo:</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->genre; ?>" disabled>
            <?php endif; ?>
          </div> -->
          <h5>Endereço</h5>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Logradouro:</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->street; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">N°</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->number; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->complement; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->district; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->city; ?>" disabled>
            <label for="exampleInputPassword1" class="form-label">Estado</label>
            <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $people->state; ?>" disabled>



          </div>
          <a href="#" class="btn btn-primary">Visualizar</a>
        </div>
      </div>

      <!-- <h5 class="card-title fw-semibold mb-4">Disabled forms</h5> -->
      <!-- <div class="card mb-0">
        <div class="card-body">
          <form>
            <fieldset disabled>
              <legend>Disabled fieldset example</legend>
              <div class="mb-3">
                <label for="disabledTextInput" class="form-label">Disabled input</label>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
              </div>
              <div class="mb-3">
                <label for="disabledSelect" class="form-label">Disabled select menu</label>
                <select id="disabledSelect" class="form-select">
                  <option>Disabled select</option>
                </select>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                  <label class="form-check-label" for="disabledFieldsetCheck">
                    Can't check this
                  </label>
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </fieldset>
          </form>
        </div>
      </div> -->
    </div>
  </div>
</div>