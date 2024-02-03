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
          <form action="" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />

            <div class="card-body">
              <h5>Dados da Empresa</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-4">
                  <label for="inputCnpj" class="form-label">CNPJ</label>
                  <input type="text" class="form-control mask-cnpj" id="inputCnpj">
                </div>

                <div class="mb-3 col-4">
                  <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                  <input type="text" class="form-control" id="inputRazaoSocial">
                </div>

                <div class="mb-3 col-4">
                  <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
                  <input type="text" class="form-control" id="inputNomeFantasia">
                </div>

              </div>

              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputInscricaoEstadual" class="form-label">Inscrição Estadual</label>
                  <input type="text" class="form-control" id="inputInscricaoEstadual">
                </div>
                <div class="mb-3 col-4">
                  <label for="inputResponsavel" class="form-label">Responsável</label>
                  <input type="text" class="form-control" id="inputResponsavel">
                </div>
              </div>

              <h5>Contato</h5>
              <hr>

              <div class="row">
                <div class="mb-3 col-4">
                  <label for="inputEmail1" class="form-label">E-mail 1</label>
                  <input type="text" class="form-control mask-email" id="inputEmail1">
                </div>
                <div class="mb-3 col-4">
                  <label for="inputEmail2" class="form-label">E-mail 2</label>
                  <input type="text" class="form-control mask-email" id="inputEmail2">
                </div>

                <div class="mb-3 col-2">
                  <label for="inputPhone1" class="form-label">Telefone 1</label>
                  <input type="text" class="form-control mask-phone" id="inputPhone1">
                </div>
                <div class="mb-3 col-2">
                  <label for="inputPhone2" class="form-label">Telefone 2</label>
                  <input type="text" class="form-control mask-phone" id="inputPhone2">
                </div>
              </div>

              <h5>Endereço</h5>
              <hr>

              <div class="row">

                <div class="mb-3 col-2">
                  <label for="inputZipeCode" class="form-label">CEP</label>
                  <input type="text" class="form-control mask-cep" id="cep">
                </div>

                <div class="mb-3 col-6">
                  <label for="inputLogradouro" class="form-label">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro">
                </div>

                <div class="mb-3 col-2">
                  <label for="inputNumero" class="form-label">N°</label>
                  <input type="text" class="form-control" id="inputNumero">
                </div>

                <div class="mb-3 col-2">
                  <label for="inputComplemento" class="form-label">Complemento</label>
                  <input type="text" class="form-control" id="inputComplemento">
                </div>

              </div>

              <div class="row">

                <div class="mb-3 col-3">
                  <label for="inputBairro" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairro">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputCidade" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidade">
                </div>

                <div class="mb-3 col-1">
                  <label for="inputEstado" class="form-label">U.F.</label>
                  <input type="text" class="form-control" id="uf">
                </div>

              </div>

              <div class="row">
                <div class="mb-3 col-3">
                  <a href="#" class="btn btn-primary">Cadastrar</a>
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
        </div>
      </div>
      <div class="card">
        <form action="" method="post">
          <!--ACTION SPOOFING-->
          <input type="hidden" name="action" value="update" />

          <div class="card-body">
            <h5>Dados da Empresa</h5>
            <hr>
            <div class="row">
              <div class="mb-3 col-4">
                <label for="inputCnpj" class="form-label">CNPJ</label>
                <input type="text" class="form-control mask-cnpj" id="inputCnpj" value="<?= $company->cnpj; ?>">
              </div>

              <div class="mb-3 col-4">
                <label for="inputRazaoSocial" class="form-label">Razão Social</label>
                <input type="text" class="form-control" id="inputRazaoSocial" value="<?= $company->socialReason; ?>">
              </div>

              <div class="mb-3 col-4">
                <label for="inputNomeFantasia" class="form-label">Nome Fantasia</label>
                <input type="text" class="form-control" id="inputNomeFantasia" value="<?= $company->name; ?>">
              </div>



            </div>

            <div class="row">
              <div class="mb-3 col-3">
                <label for="inputInscricaoEstadual" class="form-label">Inscrição Estadual</label>
                <input type="text" class="form-control" id="inputInscricaoEstadual" value="<?= $company->stateRegistration; ?>">
              </div>
              <div class="mb-3 col-4">
                <label for="inputResponsavel" class="form-label">Responsável</label>
                <input type="text" class="form-control" id="inputResponsavel" value="<?= $company->responsible; ?>">
              </div>
            </div>

            <h5>Contato</h5>
            <hr>

            <div class="row">
              <div class="mb-3 col-4">
                <label for="inputEmail1" class="form-label">E-mail 1</label>
                <input type="text" class="form-control mask-email" id="inputEmail1" value="<?= $company->mail1; ?>">
              </div>
              <div class="mb-3 col-4">
                <label for="inputEmail2" class="form-label">E-mail 2</label>
                <input type="text" class="form-control mask-email" id="inputEmail2" value="<?= $company->mail2; ?>">
              </div>

              <div class="mb-3 col-2">
                <label for="inputPhone1" class="form-label">Telefone 1</label>
                <input type="text" class="form-control mask-phone" id="inputPhone1" value="<?= $company->phone1; ?>">
              </div>
              <div class="mb-3 col-2">
                <label for="inputPhone2" class="form-label">Telefone 2</label>
                <input type="text" class="form-control mask-phone" id="inputPhone2" value="<?= $company->phone2; ?>">
              </div>
            </div>

            <h5>Endereço</h5>
            <hr>

            <div class="row">

              <div class="mb-3 col-2">
                <label for="inputZipeCode" class="form-label">CEP</label>
                <input type="text" class="form-control mask-cep" id="cep" value="<?= $address->zipcode; ?>">
              </div>

              <div class="mb-3 col-6">
                <label for="inputLogradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro" value="<?= $address->street; ?>">
              </div>

              <div class="mb-3 col-2">
                <label for="inputNumero" class="form-label">N°</label>
                <input type="text" class="form-control" id="inputNumero" value="<?= $address->number; ?>">
              </div>

              <div class="mb-3 col-2">
                <label for="inputComplemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="inputComplemento" value="<?= $address->complement; ?>">
              </div>

            </div>

            <div class="row">

              <div class="mb-3 col-3">
                <label for="inputBairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro" value="<?= $address->district; ?>">
              </div>

              <div class="mb-3 col-3">
                <label for="inputCidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" value="<?= $address->city; ?>">
              </div>

              <div class="mb-3 col-1">
                <label for="inputEstado" class="form-label">U.F.</label>
                <input type="text" class="form-control" id="uf" value="<?= $address->state; ?>">
              </div>

            </div>

            <div class="row">
              <div class="mb-3 col-3">
                <a href="#" class="btn btn-primary">Editar</a>
                <a href="#" class="btn btn-danger">Excluir</a>
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