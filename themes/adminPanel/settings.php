<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <!-- Sobre -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <h5 class="card-title fw-semibold mb-4">Sobre</h5>
        </div>
        <div class="col-6 d-flex justify-content-end">
          <?php if (!$about) : ?>
            <a href="<?= url("/admin/configuracoes/sobre"); ?>" class="btn btn-primary icon-plus"> Sobre</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="card">
        <?php if ($about) : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <label for="" class="form-label">Algumas palavras inspiradoras para se descrever</label>
                <input type="text" class="form-control" value="<?= str_limit_chars($about->inspiration, 100); ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="" class="form-label">Como cheguei aqui</label>
                <input type="text" class="form-control" value="<?= str_limit_chars($about->currentSituation, 100); ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="" class="form-label">Por que trabalhar comigo</label>
                <input type="text" class="form-control" value="<?= str_limit_chars($about->experience, 100); ?>">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="" class="form-label">Mais algumas palavras sobre mim</label>
                <input type="text" class="form-control" value="<?= str_limit_chars($about->someWords, 100); ?>">
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-12 d-flex justify-content-end">
                <a href="<?= url("/admin/configuracoes/sobre/$about->id"); ?>" class="btn btn-outline-success">Visualizar</a>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <h3>Não possui informações cadastradas no momento</h3>
              </div>
            </div>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
  <!-- Email -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-6">
          <h5 class="card-title fw-semibold mb-4">Configurações de E-Mail</h5>
        </div>
        <div class="col-6 d-flex justify-content-end">
          <?php if (!$mail) : ?>
            <a href="<?= url("/admin/configuracoes/email"); ?>" class="btn btn-primary icon-plus"> Novo E-Mail</a>
          <?php endif; ?>
        </div>
      </div>
      <div class="card">
        <?php if ($mail) : ?>
          <div class="card-body">

            <div class="row">
              <div class="col-12">
                <table>
                  <tr>
                    <th>Razão Social</th>
                    <th>E-Mail</th>
                    <th></th>
                  </tr>
                  <?php foreach ($mail as $key) : ?>
                    <tr>
                      <td><?= $key->company($key->company_id)->name; ?></td>
                      <td class=""><?= $key->mail; ?></td>
                      <td class="tableButton">
                        <a href="<?= url("/admin/configuracoes/email/$key->id"); ?>" class="btn btn-outline-success">Editar</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <h3>Não possui serviço de e-mail cadastrado</h3>
              </div>
            </div>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>
  <!-- Valores -->
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-11">
          <h5 class="card-title fw-semibold mb-4">Valores</h5>
        </div>
        <!-- <div class="col-6 d-flex justify-content-end">
          <a href="<?= url("/admin/configuracoes/valores"); ?>" class="btn btn-primary icon-plus"></a>
        </div> -->
        <div class="col-1 ">
          <a href="<?= url("/admin/configuracoes/valores"); ?>" class="btn btn-primary icon-plus teste"></a>
        </div>

      </div>
      <div class="card">
        <?php if ($values) : ?>
          <div class="card-body">

            <div class="row">
              <div class="col-12">
                <table>
                  <tr>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th></th>
                  </tr>
                  <?php foreach ($values as $key) : ?>
                    <tr>
                      <td><?= $key->value; ?></td>
                      <td><?= str_limit_chars($key->description, 150); ?></td>
                      <td>
                        <a href="<?= url("/admin/configuracoes/email/$key->id"); ?>" class="btn btn-outline-success">Editar</a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
          </div>
        <?php else : ?>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <h3>Não possui serviço de e-mail cadastrado</h3>
              </div>
            </div>
          </div>

        <?php endif; ?>

      </div>
    </div>
  </div>



</div>