<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">FAQ's</h5>

      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="mb-3 col-6">
              <a href="<?= url("/admin/faq"); ?>" class="icon-plus btn btn-primary"> Faq</a>
            </div>
            <div class="mb-3 col-6 d-flex justify-content-end">
              <form action="<?= url("/admin/faq"); ?>" method="post">
                <!--ACTION SPOOFING-->
                <input type="hidden" name="action" value="InativarSelected" />
                <button class="btn btn-outline-danger">Excluir Selecionados</button>
            </div>
          </div>
        </div>

        <div class="row">

          <?php foreach ($faqs as $key) : ?>

            <div class="col-md-4">
              <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-end">
                    <input type="checkbox" name="selectedIds[]" value="selectedIds-<?= $key->id; ?>" id="">
                  </div>
                  <h5 class="card-title"> <?= $key->question; ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted">Criado: <?= date_fmt($key->created_at); ?></h6>
                  <h6 class="card-subtitle mb-2 text-muted">Atualizado: <?= date_fmt($key->update_at); ?></h6>
                  <a href="<?= url("/admin/faq/$key->id"); ?>" class="card-link">Visualizar</a>
                  <!-- <div class="icon-question-circle <?= ($key->status == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></div> -->
                  <div class="icon-question-circle status <?= ($key->status == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></div>

                </div>
              </div>
            </div>

          <?php endforeach; ?>
          </form>
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