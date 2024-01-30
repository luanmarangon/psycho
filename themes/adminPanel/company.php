<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Empresa</h5>
      <div class="card">
        <div class="card-body">
          <a href="#" class="ti ti-user-plus btn btn-primary"> Novo</a>
        </div>
      </div>
      <table>
        <tr>
          <th>Razão Social</th>
          <th>CNPJ</th>

          <th></th>
        </tr>
        <?php foreach ($company as $key) : ?>
          <tr>
            <td><?= $key->socialReason; ?></td>
            <td><?= $key->cnpj; ?></td>
            <td class="tableButton">
              <a href="#" class="btn btn-outline-success"> Visualizar</a>
              <a href="#" class="btn btn-outline-secondary"> Editar</a>
              <a href="<?= url("/admin/empresa-social/{$key->id}"); ?>" class="btn btn-outline-primary"> Redes Sociais</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>