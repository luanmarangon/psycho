<?php

namespace Source\App\Admin;

use Source\Models\Auth;
use Source\Models\People;
use Source\Support\Pager;
use Source\Models\Scheduling;
use Source\Models\Psychologist;


class Schedulings extends Admin
{

    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home(array $data): void
    {
        $user = Auth::user();

        $psychos = (new Psychologist())->find()->fetch(true);

        if ($user->level == 6) {
            $psycho = (new Psychologist())->find("users_id = {$user->id}")->fetch();
            $scheduling = (new Scheduling())->find("date = date(now()) and psychologist_id = {$psycho->id}");
        } else {
            $scheduling = (new Scheduling())->find("date = date(now())");
        }

        $search = null;
        $date = null;

        if (!empty($data["action"]) && $data["action"] == "scheduling") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $date = $data['date'];

            if ($user->level == 6) {
                $psycho = (new Psychologist())->find("users_id = {$user->id}")->fetch();
                $scheduling = (new Scheduling())->find("date = :d and psychologist_id = :u", "d={$data['date']}&u={$psycho->id}");
            } else if (!empty($data['psycho'])) {
                $scheduling = (new Scheduling())->find("date = :d and psychologist_id = :u", "d={$data['date']}&u={$data['psycho']}");
            } else {
                $scheduling = (new Scheduling())->find("date = :d", "d={$data['date']}");
            }

            // $search = null;

            // $all = ($search ?? "all");
            // $pager = new Pager(url("/admin/agenda/{$all}/"));
            // $pager->pager($scheduling->count(), 9, (!empty($data["page"]) ? $data["page"] : 1));

        }


        $all = ($search ?? "all");
        $pager = new Pager(url("/admin/agenda/{$all}/"));
        $pager->pager($scheduling->count(), 9, (!empty($data["page"]) ? $data["page"] : 1));

        // var_dump($scheduling);
        // exit(); 



        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("scheduling", [
            "head" => $head,
            "date" => $date,
            "psychos" => $psychos,
            "scheduling" => $scheduling->limit($pager->limit())->offset($pager->offset())->order("time ASC")->fetch(true),
            "paginator" => $pager->render()


        ]);
    }


    public function create(array $data): void
    {
        $psychos = (new Psychologist())->find()->fetch(true);
        $horarios_disponiveis = null;
        $psycho = null;
        $peoples = null;
        $psychoScheduling = null;
        $dateScheduling = null;

        if (!empty($data["action"]) && $data["action"] == "availability") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);
            $psychoScheduling = (new Psychologist())->findById($data['psycho']);
            $dateScheduling = $data['date'];
            $peoples = (new People())->distinct("*", "id != {$psychoScheduling->people_id}")->fetch(true);

            //Horários de Atendimentos
            $horario_inicio = strtotime('08:00:00');
            $horario_fim = strtotime('18:00:00');

            $horarios_sql = (new Scheduling())->find("psychologist_id = :p and date = :d", "p={$data['psycho']}&d={$dateScheduling}")->fetch(true);

            //Identificando os horários agendados
            $horarios_ocupados = array();
            if ($horarios_sql) {
                foreach ($horarios_sql as $horario) {
                    $horarios_ocupados[] = $horario->time;
                }
            }

            //Separando os Horários disponíveis.
            $horarios_disponiveis = array();
            for ($hora = $horario_inicio; $hora <= $horario_fim; $hora += 3600) {
                $horario_formatado = date('H:i', $hora);
                if (!in_array($horario_formatado, $horarios_ocupados)) {
                    $horarios_disponiveis[] = $horario_formatado;
                }
            }
        }


        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $schedulingCreate = new Scheduling();

            if (!empty($data['description'])) {
                $description = $data['description'];
            } else {
                $description = "Consulta";
            }

            //validar a data do agendamento e hora ser maior que a atual
            
            $schedulingCreate->psychologist_id = $data['psychoId'];
            $schedulingCreate->people_id = $data['people'];
            $schedulingCreate->description = $description;
            $schedulingCreate->date = $data['date'];
            $schedulingCreate->time = $data['time'];
            $schedulingCreate->status =  'A';

            if (!$schedulingCreate->save()) {
                $json["message"] = $schedulingCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Consulta agendada com sucesso...")->flash();
            redirect(url("/admin/agenda"));
        }


        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("schedulingCreate", [
            "head" => $head,
            "psychos" => $psychos,
            "disponiveis" => $horarios_disponiveis,
            "peoples" => $peoples,
            "psychoScheduling" => $psychoScheduling,
            "dateScheduling" => $dateScheduling



        ]);
    }
}
