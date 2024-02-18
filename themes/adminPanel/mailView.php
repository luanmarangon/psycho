<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$mail) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro de E-Mail (SMTP)</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/configuracoes/email"); ?>" class=" btn btn-primary"> E-Mail</a>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/email"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-4">
                  <label for="inputCompany" class="form-label">Empresa</label>
                  <select name="company" id="" class="form-select">
                    <?php if ($companyCount > 1) : ?>
                      <option>Escolha...</option>
                    <?php endif; ?>
                    <?php foreach ($company as $compKey) : ?>
                      <option value="<?= $compKey->id; ?>" class="form-control"><?= $compKey->name; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-8">
                  <label for="inputEmail" class="form-label">E-Mail</label>
                  <input type="text" class="form-control" name="mail">
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="inputEmail" class="form-label">Senha do E-Mail</label>
                  <input type="text" class="form-control" name="senhaMail">
                </div>
                <div class="col-8">
                  <label for="inputEmail" class="form-label">Remetente do E-mail (ou Usuário)</label>
                  <input type="text" class="form-control" name="userMail">
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <label for="inputEmail" class="form-label">Servidor SMTP</label>
                  <input type="text" class="form-control" name="serverSMTP">
                </div>
                <div class="col-4">
                  <label for="inputEmail" class="form-label">Porta SMTP</label>
                  <input type="text" class="form-control" name="portSMTP">
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
        <h5 class="card-title fw-semibold mb-4">Cadastro de E-Mail (SMTP)</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/configuracoes/email"); ?>" class=" btn btn-primary"> E-Mail</a>
              </div>
            </div>


          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/configuracoes/email/$mail->id"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-4">
                  <label for="inputCompany" class="form-label">Empresa</label>

                  <select name="company" id="" class="form-select">
                    <option value="<?= $mail->company_id; ?>"><?= $mail->company($mail->company_id)->name; ?></option>
                    <?php foreach ($company as $key) : ?>
                      <?php if ($key->id != $mail->company_id) : ?>
                        <option value="<?= $key->id; ?>" class="form-control"><?= $key->name; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="col-8">
                  <label for="inputEmail" class="form-label">E-Mail</label>
                  <input type="text" class="form-control" name="mail" value="<?= $mail->mail; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <label for="inputEmail" class="form-label">Senha do E-Mail</label>
                  <input type="text" class="form-control" name="senhaMail" value="<?= $mail->password; ?>">
                </div>
                <div class="col-8">
                  <label for="inputEmail" class="form-label">Remetente do E-mail (ou Usuário)</label>
                  <input type="text" class="form-control" name="userMail" value="<?= $mail->sender; ?>">
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <label for="inputEmail" class="form-label">Servidor SMTP</label>
                  <input type="text" class="form-control" name="serverSMTP" value="<?= $mail->smtp; ?>">
                </div>
                <div class="col-4">
                  <label for="inputEmail" class="form-label">Porta SMTP</label>
                  <input type="text" class="form-control" name="portSMTP" value="<?= $mail->port; ?>">
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