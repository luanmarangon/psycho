<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Artigos</h5>
      <div class="card">
        <div class="row">
          <div class="card-body col-6">
            <a href="<?= url("admin/blog"); ?>" class="icon-plus btn btn-primary"> Artigo</a>
          </div>
          <div class="card-body col-6">
            <form action="<?= url("/admin/blogs"); ?>" method="post">
              <input type="hidden" name="action" value="search" />
              <div class="row">
                <div class="col-9">
                  <input class="form-control" type="text" name="search" id="" placeholder="Consulta">
                </div>
                <div class="col-1">
                  <button class="icon-search btn btn-search"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php if ($blogs) : ?>
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
        <?= $paginator; ?>
      <?php else : ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h2>Ainda não possui nenhum Artigo Criado.</h2>
            </div>
          </div>
        </div> 
      <?php endif; ?>
    </div>
  </div>
</div>