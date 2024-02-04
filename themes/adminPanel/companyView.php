<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$company) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro de Nova Empresa </h5>
        <div class="card">
          <div class="card-body">
          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/empresa"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />

            <div class="card-body">
              <h5>Dados da Empresa</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-4">
                  <label for="inputCnpj" class="form-label">CNPJ</label>
                  <input type="text" class="form-control mask-cnpj" id="inputCnpj" name="cnpj" required>
                </div>

                <div class="mb-3 col-4">
                  <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                  <input type="text" class="form-control" id="inputRazaoSocial" name="socialReason" required>
                </div>

                <div class="mb-3 col-4">
                  <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
                  <input type="text" class="form-control" id="inputNomeFantasia" name="name" required>
                </div>

              </div>

              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputInscricaoEstadual" class="form-label">Inscrição Estadual</label>
                  <input type="text" class="form-control" id="inputInscricaoEstadual" name="stateRegistration">
                </div>
                <div class="mb-3 col-4">
                  <label for="inputResponsavel" class="form-label">Responsável</label>
                  <input type="text" class="form-control" id="inputResponsavel" name="responsible">
                </div>
              </div>

              <h5>Contato</h5>
              <hr>

              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputEmail1" class="form-label">E-mail 1</label>
                  <input type="text" class="form-control mask-email" id="inputEmail1" name="mail1" required>
                </div>
                <div class="mb-3 col-6">
                  <label for="inputEmail2" class="form-label">E-mail 2</label>
                  <input type="text" class="form-control mask-email" id="inputEmail2" name="mail2">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputPhone1" class="form-label">Telefone 1</label>
                  <input type="text" class="form-control mask-phone" id="inputPhone1" name="phone1" required>
                </div>
                <div class="mb-3 col-3">
                  <label for="inputPhone2" class="form-label">Telefone 2</label>
                  <input type="text" class="form-control mask-phone" id="inputPhone2" name="phone2">
                </div>
              </div>

              <h5>Endereço</h5>
              <hr>

              <div class="row">

                <div class="mb-3 col-3">
                  <label for="inputZipeCode" class="form-label">CEP</label>
                  <input type="text" class="form-control mask-cep" id="cep" name="zipcode">
                </div>

                <div class="mb-3 col-7">
                  <label for="inputLogradouro" class="form-label">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro" name="street" required>
                </div>

                <div class="mb-3 col-2">
                  <label for="inputNumero" class="form-label">N°</label>
                  <input type="text" class="form-control" id="inputNumero" name="number" required>
                </div>

              </div>

              <div class="row">

                <div class="mb-3 col-3">
                  <label for="inputComplemento" class="form-label">Complemento</label>
                  <input type="text" class="form-control" id="inputComplemento" name="complement">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputBairro" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="district" required>
                </div>

                <div class="mb-3 col-4">
                  <label for="inputCidade" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="city" required>
                </div>

                <div class="mb-3 col-2">
                  <label for="inputEstado" class="form-label">U.F.</label>
                  <input type="text" class="form-control" id="uf" name="state" required>
                </div>

              </div>

              <div class="row">
                <div class="mb-3 col-3">
                  <button class="btn btn-primary">Cadastrar</button>
                </div>
              </div>

            </div>
          </form>
        </div>
      </div>
    </div>
</div>
<?php else : ?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Editar Empresa: <?= $company->name; ?> </h5>
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="mb-3 col-6">
              <a href="<?= url("/admin/empresa"); ?>" class="ti ti-user-plus btn btn-primary"> Novo</a>
            </div>
            <div class="mb-3 col-6 d-flex justify-content-end">
              <form action="<?= url("/admin/empresa/$company->id"); ?>" method="post">
                <!--ACTION SPOOFING-->
                <input type="hidden" name="action" value="delete" />
                <button class="btn btn-danger">Excluir</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="card">
        <form action="<?= url("/admin/empresa"); ?>" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="update" />
          <input type="hidden" name="company_id" value="<?= $company->id; ?>" />

          <div class="card-body">
            <h5>Dados da Empresa</h5>
            <hr>
            <div class="row">
              <div class="mb-3 col-4">
                <label for="inputCnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control mask-cnpj" id="inputCnpj" name="cnpj" value="<?= $company->cnpj; ?>">
              </div>

              <div class="mb-3 col-4">
                <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="inputRazaoSocial" name="socialReason" value="<?= $company->socialReason; ?>">
              </div>

              <div class="mb-3 col-4">
                <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="inputNomeFantasia" name="name" value="<?= $company->name; ?>">
              </div>

            </div>

            <div class="row">
              <div class="mb-3 col-3">
                <label for="inputInscricaoEstadual" class="form-label">Inscrição Estadual</label>
                <input type="text" class="form-control" id="inputInscricaoEstadual" name="stateRegistration" value="<?= $company->stateRegistration; ?>">
              </div>
              <div class="mb-3 col-4">
                <label for="inputResponsavel" class="form-label">Responsável</label>
                <input type="text" class="form-control" id="inputResponsavel" name="responsible" value="<?= $company->responsible; ?>">
              </div>
            </div>

            <h5>Contato</h5>
            <hr>

            <div class="row">
              <div class="mb-3 col-6">
                <label for="inputEmail1" class="form-label">E-mail 1</label>
                <input type="text" class="form-control mask-email" id="inputEmail1" name="mail1" value="<?= $company->mail1; ?>">
              </div>
              <div class="mb-3 col-6">
                <label for="inputEmail2" class="form-label">E-mail 2</label>
                <input type="text" class="form-control mask-email" id="inputEmail2" name="mail2" value="<?= $company->mail2; ?>">
              </div>
            </div>
            <div class="row">
              <div class="mb-3 col-3">
                <label for="inputPhone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control mask-phone" id="inputPhone1" name="phone1" value="<?= $company->phone1; ?>">
              </div>
              <div class="mb-3 col-3">
                <label for="inputPhone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control mask-phone" id="inputPhone2" name="phone2" value="<?= $company->phone2; ?>">
              </div>
            </div>

            <h5>Endereço</h5>
            <hr>

            <div class="row">

              <div class="mb-3 col-3">
                <label for="inputZipeCode" class="form-label">CEP</label>
                <input type="text" class="form-control mask-cep" id="cep" name="zipcode" value="<?= $address->zipcode; ?>">
              </div>

              <div class="mb-3 col-7">
                <label for="inputLogradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" name="street" value="<?= $address->street; ?>">
              </div>

              <div class="mb-3 col-2">
                <label for="inputNumero" class="form-label">N°</label>
                <input type="text" class="form-control" id="inputNumero" name="number" value="<?= $address->number; ?>">
              </div>


            </div>

            <div class="row">

              <div class="mb-3 col-3">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento" name="complement" value="<?= $address->complement; ?>">
              </div>

              <div class="mb-3 col-3">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="district" value="<?= $address->district; ?>">
              </div>

              <div class="mb-3 col-4">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="city" value="<?= $address->city; ?>">
              </div>

              <div class="mb-3 col-2">
                <label for="inputEstado" class="form-label">U.F.</label>
                <input type="text" class="form-control" id="uf" name="state" value="<?= $address->state; ?>">
              </div>

            </div>

            <div class="row">
              <div class="mb-3 col-3">
                <button class="btn btn-primary">Atualizar</button>
              </div>
            </div>

          </div>

      </div>
      </form>
    </div>
  </div>
  </div>
  </div>
<?php endif; ?>

</div>