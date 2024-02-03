<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Redes Socias da Psicologa <?= $people->fullName(); ?></h5>
      <div class="card">
        <div class="card-body">
          <a href="#" class="ti ti-user-plus btn btn-primary"> Novo</a>
        </div>
      </div>
      <table>
        <tr>
          <th>Rede Social</th>
          <th>Link</th>
          <th></th>
        </tr>
        <?php foreach ($socialMediaPsychologist as $key) : ?>
          <tr>
            <td><?= $key->socialMedia; ?></td>
            <td><?= $key->link; ?></td>
            <td class="tableButton">
              <a href="<?= $key->link;?>" target="_blank" class="btn btn-outline-success"> Visualizar</a>
              <a href="#" class="btn btn-outline-secondary"> Editar</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>