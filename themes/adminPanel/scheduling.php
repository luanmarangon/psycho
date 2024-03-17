<?php

use Source\Models\Auth;

$v->layout("_admin"); ?>

<div class="container-fluid">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-<?php echo Auth::user()->level == 6 ? '9' : '6' ?>">
          <h5 class="card-title fw-semibold mb-4">Agenda</h5>
        </div>
        <div class="col-<?php echo Auth::user()->level == 6 ? '3' : '6' ?>">
          <form action="<?= url("/admin/agenda") ?>" method="post">
            <input type="hidden" name="action" value="scheduling" />

            <div class="row">
              <?php if (Auth::user()->level != 6) : ?>
                <div class="col">
                  <select name="psycho" id="" class="form-select">
                    <option value="">Geral</option>
                    <?php foreach ($psychos as $psy) : ?>
                      <option value="<?= $psy->id; ?>"><?= $psy->people($psy->id)->firstName; ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              <?php endif; ?>
              <div class="col">
                <input type="date" class="form-control" value="<?=  date('Y-m-d'); ?>" name="date">
              </div>
              <div class="col-auto">
                <button class="btn btn-outline-info icon-refresh"></button>
              </div>
            </div>
          </form>


        </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <?php if ($scheduling) : ?>
        <div class="row">
          <?php foreach ($scheduling as $key) : ?>
            <div class="col-md-4">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title icon-calendar d-flex justify-content-end"></h5>
                  <h5 class="card-title"><?= $key->description; ?></h5>
                  <p>Cliente (a): <?= $key->schedulingPeople($key->people_id)->firstName; ?> <?= $key->schedulingPeople($key->people_id)->lastName; ?></p>
                  <p>Psicólogo (a): <?= $key->schedulingPsycho($key->psychologist_id)->firstName; ?></p>
                  <!-- <p><?= date_fmt($key->date); ?></p> -->
                  <p><?= date_fmt($key->date); ?> - <strong> <?= date("h:i A", strtotime($key->time)); ?></strong></p>
                  <a href="#" class="card-link">Visualizar</a>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <?= $paginator; ?>
        </div>
      <?php else : ?>
        <div class="row">
          <h4>Sem Agendamentos para a data!</h4>
        </div>
      <?php endif; ?>
    </div>
  </div>
</div>
</div>
</div>