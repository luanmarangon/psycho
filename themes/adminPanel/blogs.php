<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Artigos</h5>
      <div class="card">
        <div class="card-body">
          <a href="<?= url("admin/blog"); ?>" class="icon-plus btn btn-primary"> Artigo</a>
        </div>
      </div>

      <div class="row">

        <?php foreach ($blogs as $key) : ?>

          <div class="col-md-4">
            <!-- <h5 class="card-title fw-semibold mb-4">Titles, text, and links</h5> -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title"> <?= str_limit_chars($key->title, 40); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Categoria: <?= $key->category($key->category_id)->category; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Usuário: <?= $key->userBlog($key->users_id)->firstName; ?></h6>
                <h6 class="card-subtitle mb-2 text-muted">Postagem: <?= date_fmt($key->post_at); ?></h6>
                <a href="<?= url("/admin/blog/$key->id"); ?>" class="card-link">Visualizar</a>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>