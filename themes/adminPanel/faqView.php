<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$faq) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro de Perguntas Frequentes</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/faq"); ?>" class="ti ti-user-plus btn btn-primary"> Nova Pergunta</a>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/faq"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Pergunta</label>
                  <input type="text" class="form-control" name="question">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Resposta</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="response"></textarea>
                </div>
              </div>
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
        <h5 class="card-title fw-semibold mb-4">Cadastro de Perguntas Frequentes</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/faq"); ?>" class="ti ti-user-plus btn btn-primary"> Nova Pergunta</a>
              </div>
              <div class="mb-3 col-6 d-flex justify-content-<?= ($faq->status == 'I') ? 'around' : 'end'; ?>">
              <?php if($faq->status === "I") :?>
                  <form action="<?= url("/admin/faq/{$faq->id}"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="active" />

                  <button class="btn btn-info">Ativar FAQ</button>
                </form>
                  <?php endif;?>
                <form action="<?= url("/admin/faq/{$faq->id}"); ?>" method="post">
                  <?php
                  $action = ($faq->status === 'A' ? 'Inativar' : 'Deletar');
                  $class = ($faq->status === 'A' ? 'danger' : 'warning');
                  ?>

                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="<?= $action; ?>" />
                  <input type="hidden" name="faq_id" value="<?= $faq->id; ?>" />

                  <button class="btn btn-<?= $class; ?>"><?= $action; ?> FAQ</button>
                </form>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/faq/{$faq->id}"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Pergunta</label>
                  <input type="text" class="form-control" name="question" value="<?= $faq->question; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Resposta</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="response"><?= $faq->response; ?></textarea>
                </div>
              </div>
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