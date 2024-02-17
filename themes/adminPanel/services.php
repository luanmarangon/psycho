<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Serviços</h5>
      

      <div class="card">
        <div class="card-body">
          <a href="<?= url("/admin/servico");?>" class="icon-plus btn btn-primary"> Serviço</a>
        </div>
      </div>

      <div class="row">

        <?php foreach ($services as $key) : ?>

          <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"> <?= $key->name; ?> </h5>
                <h6 class="card-subtitle mb-2 text-muted">Criado: <?= date_fmt($key->created_at); ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Atualizado: <?= date_fmt($key->updated_at); ?></h6>
                <a href="<?= url("/admin/servico/$key->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
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