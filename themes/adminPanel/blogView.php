<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <?php if (!$blog) : ?>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Criação de Blog's</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/blog"); ?>" class="icon-plus btn btn-primary"> Blog</a>
              </div>
            </div>

          </div>
        </div>
        <div class="card">
          <form id="blogForm" action="<?= url("/admin/blog"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="create" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Titulo para o Blog</label>
                  <input type="text" class="form-control" name="title">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Categoria</label>
                  <input type="text" class="form-control d-none" name="categorieNew">

                  <select name="categorie" class="form-select ">
                    <option value="">Escolha uma categoria....</option>
                    <?php foreach ($categories as $key) : ?>
                      <option value="<?= $key->id; ?>"><?= $key->category; ?></option>
                    <?php endforeach; ?>
                  </select>
                  <div class="d-flex justify-content-end">
                    <a id="newCategory" class="small mt-2" href="#!">Novo</a>
                  </div>

                </div>
                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Postagem</label>
                  <input type="date" class="form-control" name="post_at">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Blog</label>
                  <!-- <textarea id="tiny"></textarea> -->

                  <textarea class="form-control" id="tiny" cols="30" rows="10" name="blog"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
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
        <h5 class="card-title fw-semibold mb-4">Criação de Blog's</h5>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="mb-3 col-6">
                <a href="<?= url("/admin/blog"); ?>" class="icon-plus btn btn-primary"> Blog</a>
              </div>
              <div class="mb-3 col-6 d-flex justify-content-end">
                <form id="blogForm" action="<?= url("/admin/blog/$blog->id"); ?>" method="post">
                  <!--ACTION SPOOFING-->
                  <input type="hidden" name="action" value="deletar" />
                  <div class="ajax_response"><?= flash(); ?></div>
                  <?= csrf_input(); ?>
                  <button type="submit" class="btn btn-danger">Deletar</button>

                </form>
                <!-- <a href="<?= url("/admin/blog"); ?>" class="icon-plus btn btn-primary"> Blog</a> -->
              </div>
            </div>

          </div>
        </div>
        <div class="card">
          <form id="blogForm" action="<?= url("/admin/blog/$blog->id"); ?>" method="post">
            <!--ACTION SPOOFING-->
            <input type="hidden" name="action" value="update" />
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <div class="card-body">
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="inputNome" class="form-label">Titulo para o Blog</label>
                  <input type="text" class="form-control" name="title" value="<?= $blog->title; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-6">
                  <label for="inputNome" class="form-label">Categoria</label>
                  <input type="text" class="form-control d-none" name="categorieNew">

                  <select name="categorie" class="form-select">
                    <option value="<?= $blog->category_id ?>"><?= $blog->category($blog->category_id)->category; ?></option>

                    <?php foreach ($categories as $key) : ?>
                      <?php if ($blog->category_id != $key->id) :  ?>
                        <option value="<?= $key->id; ?>"><?= $key->category; ?></option>
                      <?php endif; ?>
                    <?php endforeach; ?>
                  </select>
                  <div class="d-flex justify-content-end">
                    <a id="newCategory" class="small mt-2" href="#!">Novo</a>
                  </div>

                </div>
                <div class="mb-3 col-3">
                  <label for="inputNome" class="form-label">Postagem</label>
                  <input type="date" class="form-control" name="post_at" value="<?= $blog->post_at; ?>">
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <label for="exampleInputPassword1" class="form-label">Blog</label>
                  <!-- <textarea id="tiny"></textarea> -->

                  <textarea class="form-control" id="tiny" cols="30" rows="10" name="blog"><?= $blog->body; ?></textarea>
                </div>
              </div>
              <div class="row">
                <div class="mb-3 col-12">
                  <button type="submit" class="btn btn-primary">Atualizar</button>
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


<script>
  // document.addEventListener("DOMContentLoaded", function() {
  //   tinymce.init({
  //     selector: '#tiny',
  //     height: 500,
  //     menubar: true,
  //     plugins: [
  //       'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
  //       'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
  //       'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
  //     ],
  //     toolbar: 'undo redo | blocks | bold italic backcolor | ' +
  //       'alignleft aligncenter alignright alignjustify | ' +
  //       'bullist numlist outdent indent | removeformat | help'
  //   });
  // });
  // document.getElementById('blogForm').addEventListener('submit', function() {
  //   var content = tinymce.get('tiny').getContent();
  //   document.querySelector('#area').value = content;
  //   alert(content);
  // });

  document.addEventListener("DOMContentLoaded", function() {
    tinymce.init({
      selector: '#tiny',
      height: 500,
      menubar: true,
      file_picker_types: 'file image media',
      plugins: [
        'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
        'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
        'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
      ],
      toolbar: 'undo redo | blocks | bold italic backcolor | ' +
        'alignleft aligncenter alignright alignjustify | ' +
        'bullist numlist outdent indent | removeformat | help',
      forced_root_block: '', // Evita que o TinyMCE adicione automaticamente tags de parágrafo ao redor do conteúdo
      force_br_newlines: true, // Força quebrar linhas em <br>
      force_p_newlines: false // Evita a adição automática de tags de parágrafo
    });
  });
</script>