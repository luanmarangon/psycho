<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$about) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Informações Referentes ao Sobre da Empresa</h5>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/sobre"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Algumas palavras inspiradoras para se descrever</label>
                  <textarea name="inspiration" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Como cheguei aqui</label>
                  <textarea name="currentSituation" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Por que trabalhar comigo</label>
                  <textarea name="experience" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Mais algumas palavras sobre mim</label>
                  <textarea name="someWords" id="" cols="30" rows="6" class="form-control"></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php else : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Informações Referentes ao Sobre da Empresa</h5>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/sobre/$about->id"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Algumas palavras inspiradoras para se descrever</label>
                  <textarea name="inspiration" id="" cols="30" rows="6" class="form-control"><?= $about->inspiration; ?></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Como cheguei aqui</label>
                  <textarea name="currentSituation" id="" cols="30" rows="6" class="form-control"><?= $about->currentSituation; ?></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Por que trabalhar comigo</label>
                  <textarea name="experience" id="" cols="30" rows="6" class="form-control"><?= $about->experience; ?></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputCompany" class="form-label">Mais algumas palavras sobre mim</label>
                  <textarea name="someWords" id="" cols="30" rows="6" class="form-control"><?= $about->someWords; ?></textarea>
                </div>
              </div>
              <br>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  <?php endif; ?>
</div>
</div>