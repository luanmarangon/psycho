<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Cadastro de Pessoas</h5>

      <div class="card">
        <div class="card-body">
        <a href="#" class="btn btn-primary">Novo</a>
        </div>
      </div>

      <!-- <div class="col-md-4">
        <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5>
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
              the
              card's content.</p>
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
          </div>
        </div>
      </div> -->

      <div class="row">

        <?php foreach ($peoples as $key) : ?>

          <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"><?= $key->fullName(); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Rg: <?= $key->rg; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">CPF: <?= $key->cpf; ?></h6>
                <a href="<?= url("/admin/pessoas/$key->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
      <!-- <div class="card">
          <div class="card-body">
            <div class="mb-3">


              <label for="exampleInputEmail1" class="form-label">Nome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $key->firstName; ?>" disabled>
              <label for="exampleInputEmail1" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $key->lastName; ?>" disabled>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">RG</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $key->rg; ?>" disabled>
              <label for="exampleInputPassword1" class="form-label">CPF</label>
              <input type="text" class="form-control" id="exampleInputPassword1" value="<?= $key->cpf; ?>" disabled>
            </div>
            <a href="#" class="btn btn-primary">Visualizar</a>
          </div>
        </div> -->

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