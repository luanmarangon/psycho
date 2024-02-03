<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$socialCompany) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Redes Socias da Empresa - <?= $company->name; ?></h5>

        <div class="card">
          <div class="card-body">
            <!-- <a href="<?= url("/admin/empresa/redes-sociais"); ?>" class="ti ti-user-plus btn btn-primary"> Novo</a> -->
          </div>
        </div>

        <div class="card">
          <form action="<?= url("/admin/empresa/$company->id/redes-social"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <input type="hidden" name="company" value="<?= $company->id; ?>" />


            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputRedeSocial" class="form-label">Rede Social</label>
                  <input type="text" class="form-control" id="inputRedeSocial" name="redeSocialName">
                </div>
                <div class="mb-3 col-6">
                  <label for="inputLink" class="form-label">Link</label>
                  <input type="text" class="form-control" id="inputLink" name="redeSocialLink">
                </div>
              <!-- </div>
              <div class="row"> -->
                <div class="mb-3 col-3 align-self-end">
                  <button class="btn btn-primary">Cadastrar</button>
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
        <h5 class="card-title fw-semibold mb-4">Redes Socias da Empresa - <?= $company->name; ?></h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/empresa/{$company->id}/redes-social"); ?>" class="ti ti-user-plus btn btn-primary"> Novo</a>
              </div>
              <div class="mb-3 col-6 d-flex justify-content-end">
                <form action="<?= url("/admin/empresa/$company->id/redes-social"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="delete" />
                  <input type="hidden" name="socialMedia_id" value="<?= $socialCompany->id; ?>" />
                  <button class="btn btn-danger">Excluir</button>
                </form>
              </div>
            </div>

          </div>
        </div>

        <div class="card">
          <form action="<?= url("/admin/empresa/$company->id/redes-social"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <input type="hidden" name="socialMedia_id" value="<?= $socialCompany->id; ?>" />
            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputRedeSocial" class="form-label">Rede Social</label>
                  <input type="text" class="form-control" id="inputRedeSocial" value="<?= $socialCompany->socialMedia; ?>" name="redeSocialName">
                </div>
                <div class="mb-3 col-6">
                  <label for="inputLink" class="form-label">Link</label>
                  <input type="text" class="form-control" id="inputLink" value="<?= $socialCompany->link; ?>" name="redeSocialLink">
                </div>
              <!-- </div>
              <div class="row"> -->
                <div class="mb-3 col-3 align-self-end">
                  <button class="btn btn-primary">Atualizar</button>
                </div>
              </div>
            </div>

          </form>
        </div>

      </div>
    </div>
  <?php endif; ?>
</div>