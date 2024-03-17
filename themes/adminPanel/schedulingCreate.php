<?php $v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title fw-semibold mb-4">Novo Compromisso</h5>
      <div class="card">
        <div class="card-body">
          <form action="<?php url("/admin/agenda/nova"); ?>" method="post">
            <input type="hidden" name="action" value="availability">
            <div class="row">
              <div class="col-5">
                <label for="">Psicólogo (a)</label>
                <select name="psycho" id="" class="form-select">
                  <option value="">Escolha...</option>
                  <?php foreach ($psychos as $psycho) : ?>
                    <option value="<?= $psycho->id; ?>"><?= $psycho->people($psycho->id)->firstName; ?>
                      <?= $psycho->people($psycho->id)->lastName; ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
              <div class="col-2"></div>
              <div class="col-3">
                <label for="">Data</label>
                <input type="date" class="form-control" name="date">
              </div>
              <div class="col-2 d-flex align-items-end">
                <button class="btn btn-outline-danger">Disponibilidade</button>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php if ($disponiveis) : ?>
        <div class="card">
          <div class="card-body">
            <div class="row">
              <?php foreach ($disponiveis as $key) : ?>
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <h5 class="card-title icon-calendar d-flex justify-content-end"></h5>
                      <h5 class="card-title"><?= $key; ?></h5>
                      <a href="#" class="card-link" data-bs-toggle="modal" data-bs-target="#exampleModal">Reservar</a>

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Agendamento</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="<?= url("/admin/agenda/novo"); ?>" method="post">
                                <input type="hidden" name="action" value="create">
                                <div class="row">
                                  <div class="col">
                                    <input type="text" class="form-control" readonly name="psycho" value="<?= $psychoScheduling->people($psychoScheduling->id)->firstName; ?>">
                                    <input type="hidden" name="psychoId" value="<?= $psychoScheduling->id; ?>">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col">
                                    <input type="text" class="form-control" name="description" placeholder="Descrição">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col-6">
                                    <input type="date" class="form-control" readonly name="date" value="<?= $dateScheduling; ?>">
                                  </div>
                                  <div class="col-6">
                                    <input type="time" class="form-control" readonly name="time" value="<?= $key; ?>">
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <div class="col">
                                    <select name="people" id="" class="form-select">
                                      <?php foreach ($peoples as $people) : ?>
                                        <option value="<?= $people->id; ?>"><?= $people->fullName(); ?></option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-primary">Agendar</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

      <?php endif; ?>



    </div>
  </div>
</div>