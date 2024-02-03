<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Empresa</h5>
      <div class="card">
        <div class="card-body">
          <a href="<?= url("/admin/empresa"); ?>" class="ti ti-user-plus btn btn-primary"> Novo</a>
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
            <td class="mask-cnpj"><?= $key->cnpj; ?></td>
            <td class="tableButton">
              <a href="<?= url("/admin/empresa/$key->id"); ?>" class="btn btn-outline-success">Editar</a>
              <a href="<?= url("/admin//empresa/{$key->id}/redes-sociais"); ?>" class="btn btn-outline-primary"> Redes Sociais</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>