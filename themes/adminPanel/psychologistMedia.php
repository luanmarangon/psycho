<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Redes Socias da Psicologa <?= $people->fullName(); ?></h5>
      <div class="card">
        <div class="card-body">
          <a href="<?= url("/admin/psicologo/{$people->psycho($people->id)->id}/nova-rede-social"); ?>" class="ti ti-user-plus btn btn-primary"> Novo</a>
        </div>
      </div>
      <?php if ($socialMediaPsychologist) : ?>
        <table>
          <tr>
            <th>Rede Social</th>
            <th>Link</th>
            <th></th>
          </tr>
          <form action="<?= url("/admin/psicologo/{$people->psycho($people->id)->id}/rede-social"); ?>" method="post">
              <!--ACTION SPOOFING-->
              <input type="hidden" name="action" value="deleteSelected" />
          <?php foreach ($socialMediaPsychologist as $key) : ?>
            <tr>
              <td><?= $key->socialMedia; ?></td>
              <td><?= $key->link; ?></td>
              <td class="tableButton">
                <a href="<?= $key->link; ?>" target="_blank" class="btn btn-outline-success"> Visualizar</a>
                <a href="<?= url("/admin/psicologo/{$people->psycho($people->id)->id}/rede-social/{$key->id}") ?>" class="btn btn-outline-secondary"> Editar</a>
                <input type="checkbox" name="selectedIds[]" value="selectedIds-<?= $key->id; ?>" id="">
              
              </td>
            </tr>
          <?php endforeach; ?>
        </table>
        <br>
          <button class="btn btn-outline-danger">Excluir Selecionados</button>
          </form>
      <?php else : ?>
        <div class="card">
          <div class="card-body">
            <h5>Nenhuma rede social foi cadastrada para esse Psicologo (a).</h5>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>