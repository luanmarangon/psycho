<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$people) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Cadastro de Pessoas</h5>
        <div class="card">
          <div class="card-body">
            <?php if ($psycho) : ?>
              <a href="<?= url("/admin/psicologas/{$people->peopleId}"); ?>" class="btn btn-success">Psicologa</a>

            <?php else : ?>
              <a href="#" class="btn btn-primary">Novo Psicologo (a)</a>

            <?php endif; ?>
          </div>
        </div>
        <div class="card">
          <form action="<?= url("/admin/pessoa"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <h5>Dados Pessoais</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="firstName">
                </div>

                <div class="mb-3 col-6">
                  <label for="inputSobrenome" class="form-label">Sobrenome</label>
                  <input type="text" class="form-control" name="lastName">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">RG</label>
                  <input type="text" class="form-control mask-rg" name="rg">
                </div>

                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">CPF</label>
                  <input type="text" class="form-control mask-cpf" name="cpf">
                </div>

                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">Sexo:</label>
                  <!-- <input type="text" class="form-control"  > -->
                  <select class="form-select" id="" name="genre">
                    <option value="">Escolha....</option>
                    <?php foreach ($genre as $key) : ?>
                      <option value="<?= $key->id; ?>"><?= $key->genre; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">Nascimento</label>
                  <input type="date" class="form-control" name="dateBirth">
                </div>
              </div>

              <h5>Contato</h5>
              <hr>

              <div class="row">
                <div class="mb-3 col-4">
                  <label for="exampleInputPassword1" class="form-label">Telefone</label>
                  <input type="text" class="form-control mask-phone" name="phone">
                </div>
                <div class="mb-3 col-7">
                  <label for="exampleInputPassword1" class="form-label">E-Mail</label>
                  <input type="text" class="form-control mask-email" name="mail">
                </div>
                <div class="mb-3 col-1 align-self-end">
                  <span class="btn btn-success icon-plus-circle d-none"></span>
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
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                  <a href="#" class="btn btn-danger">Inativar</a>
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
        <h5 class="card-title fw-semibold mb-4">Cadastro de Pessoas</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <?php if ($psycho) : ?>
                  <a href="<?= url("/admin/psicologo/{$people->psycho($people->peopleId)->id}"); ?>" class="btn btn-success">Psicologa</a>
                <?php elseif ($employee) : ?>
                  <a href="<?= url("/admin/funcionario/{$employee->id}"); ?>" class="btn btn-success">Funcionário</a>
                <?php else : ?>
                  <a href="<?= url("/admin/pessoa/$people->peopleId/novo-psicologo") ?>" data_post="<?= $people->peopleId; ?>" class="btn btn-primary">Novo Psicologo (a)</a>
                  <a href="<?= url("/admin/pessoa/$people->peopleId/novo-funcionario") ?>" data_post="<?= $people->peopleId; ?>" class="btn btn-primary">Novo Funcionário (a)</a>
                <?php endif; ?>
              </div>

              <div class="mb-3 col-6 d-flex justify-content-end">
                <form action="<?= url("/admin/pessoa/$people->peopleId"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="delete" />
                  <button class="btn btn-danger">Inativar</button>
                </form>
              </div>
            </div>


          </div>
        </div>
        <div class="card">

          <form action="<?= url("/admin/pessoa/$people->peopleId"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />


            <div class="card-body">
              <h5>Dados Pessoais</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Nome</label>
                  <input type="text" class="form-control" name="firstName" value="<?= $people->firstName; ?>">
                </div>

                <div class="mb-3 col-6">
                  <label for="inputSobrenome" class="form-label">Sobrenome</label>
                  <input type="text" class="form-control" name="lastName" value="<?= $people->lastName; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">RG</label>
                  <input type="text" class="form-control mask-rg" name="rg" value="<?= $people->rg; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">CPF</label>
                  <input type="text" class="form-control mask-cpf" name="cpf" value="<?= $people->cpf; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">Sexo:</label>
                  <!-- <input type="text" class="form-control"  > -->
                  <select class="form-select" id="" name="genre">
                    <option value=""><?= $people->genre($people->settingsGenre_id)->genre; ?></option>
                    <?php foreach ($genre as $key) : ?>
                      <?php if ($key->id != $people->settingsGenre_id) : ?>
                        <option value="<?= $key->id; ?>"><?= $key->genre; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                </div>
                <div class="mb-3 col-3">
                  <label for="exampleInputPassword1" class="form-label">Nascimento</label>
                  <input type="date" class="form-control" name="dateBirth" value="<?= $people->dateBirth; ?>">
                </div>
              </div>

              <h5>Contato</h5>
              <hr>

              <div class="row">
                <div class="mb-3 col-4">
                  <label for="exampleInputPassword1" class="form-label">Telefone</label>
                  <input type="text" class="form-control mask-phone" name="phone" value="<?= $people->phone; ?>">
                </div>
                <div class="mb-3 col-7">
                  <label for="exampleInputPassword1" class="form-label">E-Mail</label>
                  <input type="text" class="form-control mask-email" name="mail" value="<?= $people->mail; ?>">
                </div>
                <div class="mb-3 col-1 align-self-end">
                  <a href="#" class="btn btn-success icon-plus-circle"></a>
                </div>
              </div>

              <h5>Endereço</h5>
              <hr>
              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputZipeCode" class="form-label">CEP</label>
                  <input type="text" class="form-control mask-cep" id="cep" name="zipcode" value="<?= $people->zipcode; ?>">
                </div>

                <div class="mb-3 col-7">
                  <label for="inputLogradouro" class="form-label">Logradouro</label>
                  <input type="text" class="form-control" id="logradouro" name="street" value="<?= $people->street; ?>">
                </div>

                <div class="mb-3 col-2">
                  <label for="inputNumero" class="form-label">N°</label>
                  <input type="text" class="form-control" id="inputNumero" name="number" value="<?= $people->number; ?>">
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-3">
                  <label for="inputComplemento" class="form-label">Complemento</label>
                  <input type="text" class="form-control" id="inputComplemento" name="complement" value="<?= $people->complement; ?>">
                </div>

                <div class="mb-3 col-3">
                  <label for="inputBairro" class="form-label">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="district" value="<?= $people->district; ?>">
                </div>

                <div class="mb-3 col-4">
                  <label for="inputCidade" class="form-label">Cidade</label>
                  <input type="text" class="form-control" id="cidade" name="city" value="<?= $people->city; ?>">
                </div>

                <div class="mb-3 col-2">
                  <label for="inputEstado" class="form-label">U.F.</label>
                  <input type="text" class="form-control" id="uf" name="state" value="<?= $people->state; ?>">
                </div>
              </div>

              <div class="row">
                <div class="mb-3 col-6">
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
</div>