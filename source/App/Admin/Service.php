<?php


namespace Source\App\Admin;

use Source\Support\Pager;
use Source\App\Admin\Admin;
use Source\Models\Services;

class Service extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home(array $data)
    {
        $services = (new Services())->find();

        //read
        $search = null;

        if (!empty($data["search"]) && str_search($data["search"]) != "all") {
            $search = str_search($data["search"]);
            $services = (new Services())->find(" name LIKE CONCAT('%', :s, '%')", "s={$search}");

            $this->message->success("Foram encontrados [ {$services->count()} ] resultados referentes a pesquisa.")->flash();

            if (!$services->count()) {
                $services = (new Services())->find();
                $this->message->info("Sua pesquisa não obteve resultados. Por favor, revise seus critérios de pesquisa")->flash();
                redirect("/admin/servicos");
            }
        }
        $all = ($search ?? "all");
        $pager = new Pager(url("/admin/servicos/{$all}/"));
        $pager->pager($services->count(), 6, (!empty($data["page"]) ? $data["page"] : 1));

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("services", [
            "head" => $head,
            // "services" => $services
            "services" => $services->limit($pager->limit())->offset($pager->offset())->order("name ASC")->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    public function service(array $data)
    {

        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $serviceCreate = new Services();

            $serviceCreate->name = $data['name'];
            $serviceCreate->description = $data['description'];
            $serviceCreate->operation = $data['operation'];
            $serviceCreate->sessions = $data['sessions'];
            $serviceCreate->duration = $data['duration'];
            $serviceCreate->atendence = $data['atendence'];

            $service = (new Services())->find("name = :n", "n={$data['name']}")->fetch();

            if ($service) {
                $this->message->warning("Serviço já Cadastrado. Por favor verifique...")->flash();
                redirect(url("/admin/servicos"));
            }

            if (!$serviceCreate->save()) {
                $json["message"] = $serviceCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Serviço cadastrado com sucesso...")->flash();
            redirect(url("/admin/servico/$serviceCreate->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $serviceUpdate = (new Services())->findById($data['service_id']);

            $serviceUpdate->name = $data['name'];
            $serviceUpdate->description = $data['description'];
            $serviceUpdate->operation = $data['operation'];
            $serviceUpdate->sessions = $data['sessions'];
            $serviceUpdate->duration = $data['duration'];
            $serviceUpdate->atendence = $data['atendence'];

            if (!$serviceUpdate->save()) {
                $json["message"] = $serviceUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Serviço atualizado com sucesso...")->flash();
            redirect(url("/admin/servico/$serviceUpdate->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "Inativar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $serviceIncative = (new Services())->findById($data['service_id']);
            $serviceIncative->status = 'I';

            if (!$serviceIncative->save()) {
                $json["message"] = $serviceIncative->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Serviço inativado com sucesso...")->flash();
            redirect(url("/admin/servico/$serviceIncative->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "Deletar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $serviceDestroy = (new Services())->findById($data['service_id']);


            if (!$serviceDestroy->destroy()) {
                $json["message"] = $serviceDestroy->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Serviço deletado com sucesso...")->flash();
            redirect(url("/admin/servicos"));
        }

        if (!empty($data["action"]) && $data["action"] == "active") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $serviceActive = (new Services())->findById($data['service_id']);
            $serviceActive->status = 'A';

            if (!$serviceActive->save()) {
                $json["message"] = $serviceActive->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Serviço ativado com sucesso...")->flash();
            redirect(url("/admin/servico/$serviceActive->id"));
        }


        //read
        $service = null;
        if (!empty($data['service_id'])) {
            $serviceId = filter_var($data['service_id'], FILTER_SANITIZE_STRIPPED);
            $service = (new Services())->findById($serviceId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("servicesView", [
            "head" => $head,
            "service" => $service
        ]);
    }
}
