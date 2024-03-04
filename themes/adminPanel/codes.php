<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Licenças de Uso do Sistema</h5>
      <div class="card">
        <div class="card-body">
          <table>
            <tr>
              <th>Código</th>
              <th>Expiração</th>
            </tr>
            <?php foreach ($codes as $key) : ?>
              <tr>
                <td><?= $key->code; ?></td>
                <td><?= date_fmt($key->expiration, "d/m/Y"); ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>