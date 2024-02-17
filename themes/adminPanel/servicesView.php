<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$service) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro de Serviços</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/faq"); ?>" class=" btn btn-primary icon-plus-square-o"> Serviço</a>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/servico"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Nome do Serviço</label>
                  <input type="text" class="form-control" name="name">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Descrição do Serviço</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="description"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Como funciona?</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="operation"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Quantidade de Sessões</label>
                  <input type="text" class="form-control" name="sessions">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Duração de cada Atendimento</label>
                  <input type="text" class="form-control" name="duration">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Forma de Atendimento</label>
                  <input type="text" class="form-control" name="atendence">
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
                <a href="<?= url("/admin/servico"); ?>" class=" btn btn-primary icon-plus-square-o"> Serviço</a>
              </div>
              <div class="mb-3 col-6 d-flex justify-content-<?= ($service->status == 'I') ? 'around' : 'end'; ?>">
                <?php if ($service->status === "I") : ?>
                  <form action="<?= url("/admin/servico/{$service->id}"); ?>" method="post">
                    <!--ACTION SPOOFING-->
                    <input type="hidden" name="action" value="active" />

                    <button class="btn btn-info">Ativar FAQ</button>
                  </form>
                <?php endif; ?>
                <form action="<?= url("/admin/servico/{$service->id}"); ?>" method="post">
                  <?php
                  $action = ($service->status === 'A' ? 'Inativar' : 'Deletar');
                  $class = ($service->status === 'A' ? 'danger' : 'warning');
                  ?>

                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="<?= $action; ?>" />
                  <input type="hidden" name="faq_id" value="<?= $service->id; ?>" />

                  <button class="btn btn-<?= $class; ?>"><?= $action; ?> Serviço</button>
                </form>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/servico/{$service->id}"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Nome do Serviço</label>
                  <input type="text" class="form-control" name="name" value="<?=$service->name; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Descrição do Serviço</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="description"><?=$service->description; ?></textarea>
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Como funciona?</label>
                  <textarea class="form-control" id="" cols="30" rows="10" name="operation"><?=$service->operation; ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Quantidade de Sessões</label>
                  <input type="text" class="form-control" name="sessions" value="<?=$service->sessions; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Duração de cada Atendimento</label>
                  <input type="text" class="form-control" name="duration" value="<?=$service->duration; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Forma de Atendimento</label>
                  <input type="text" class="form-control" name="atendence" value="<?=$service->atendence; ?>">
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