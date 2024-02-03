<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Artigos</h5>
      <div class="card">
        <div class="card-body">
          <a href="#" class="icon-plus btn btn-primary"> Artigo</a>
        </div>
      </div>

      <div class="row">

        <?php foreach ($blogs as $key) : ?>

          <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"> <?= $key->title; ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Categoria: <?= $key->category_id; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Usuário: <?= $key->users_id; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Postagem: <?= date_fmt($key->post_at); ?></h6>
                <a href="<?= url("/admin/pessoas/$key->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>