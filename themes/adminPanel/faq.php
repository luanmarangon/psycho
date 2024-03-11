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

        <?php if ($faqs) : ?>
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
                    <div class="icon-question-circle status <?= ($key->status == 'I') ? 'icon-inactive' : 'icon-active'; ?>"></div>

                  </div>
                </div>
              </div>
            <?php endforeach; ?>
            </form>
          </div>
          <?= $paginator; ?>
        <?php else : ?>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <h2>Ainda não possui perguntas cadastradas.</h2>
              </div>
            </div>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>