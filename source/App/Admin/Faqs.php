<?php


namespace Source\App\Admin;

use Source\Models\Faq;
use Source\Models\Auth;
use Source\Support\Pager;
use Source\App\Admin\Admin;

class Faqs extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home(array $data): void
    {
        $faqs = (new Faq())->find();
        //read
        $search = null;

        if (!empty($data["search"]) && str_search($data["search"]) != "all") {
            $search = str_search($data["search"]);
            $faqs = (new Faq())->find(" name LIKE CONCAT('%', :s, '%')", "s={$search}");

            $this->message->success("Foram encontrados [ {$faqs->count()} ] resultados referentes a pesquisa.")->flash();


            if (!$faqs->count()) {
                $faqs = (new Faq())->find();
                $this->message->info("Sua pesquisa não obteve resultados. Por favor, revise seus critérios de pesquisa")->flash();
                redirect("/admin/faqs");
            }
        }
        $all = ($search ?? "all");
        $pager = new Pager(url("/admin/faqs/{$all}/"));
        $pager->pager($faqs->count(), 9, (!empty($data["page"]) ? $data["page"] : 1));

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("faq", [
            "head" => $head,
            "faqs" => $faqs->limit($pager->limit())->offset($pager->offset())->order("question ASC")->fetch(true),
            "paginator" => $pager->render()
        ]);
    }

    public function faq(array $data)
    {

        if (!empty($data["action"]) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $faqQuery = (new Faq())->find("question = :q", "q={$data['question']}")->fetch(true);

            if ($faqQuery) {
                $this->message->warning("Pergunta já cadastrada.Cadastre uma nova!")->flash();
                redirect(url("/admin/faqs"));
            }

            $faqCreate = new Faq();
            $faqCreate->question = $data['question'];
            $faqCreate->response = $data['response'];
            $faqCreate->status = 'A';
            $faqCreate->users_id = Auth::user()->id;

            if (!$faqCreate->save()) {
                $json["message"] = $faqCreate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pergunta e Resposta cadastrada com sucesso...")->flash();
            redirect(url("/admin/faq/$faqCreate->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "update") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $faqUpdate = (new Faq())->findById($data['faq_id']);
            $faqUpdate->question = $data['question'];
            $faqUpdate->response = $data['response'];
            $faqUpdate->status = 'A';
            $faqUpdate->users_id = Auth::user()->id;




            if (!$faqUpdate->save()) {
                $json["message"] = $faqUpdate->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pergunta e Resposta atualizada com sucesso...")->flash();
            redirect(url("/admin/faq/$faqUpdate->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "Inativar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $faqInactive = (new Faq())->findById($data['faq_id']);

            $faqInactive->status = 'I';
            $faqInactive->users_id = Auth::user()->id;

            if (!$faqInactive->save()) {
                $json["message"] = $faqInactive->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pergunta e Resposta inativado com sucesso...")->flash();
            redirect(url("/admin/faq/$faqInactive->id"));
        }

        if (!empty($data["action"]) && $data["action"] == "Deletar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $faqDestroy = (new Faq())->findById($data['faq_id']);

            if (!$faqDestroy->destroy()) {
                $json["message"] = $faqDestroy->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pergunta e Resposta excluída com sucesso...")->flash();
            redirect(url("/admin/faqs"));
        }

        if (!empty($data["action"]) && $data["action"] == "InativarSelected") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            if ($data['selectedIds']) {

                foreach ($data['selectedIds'] as $item) {
                    $sFaqSelected = str_replace('selectedIds-', '', $item);
                    $faqSelect = (new Faq())->findById($sFaqSelected);

                    // $socialMediaCompanyDelete = (new Faq())->find("id = {$sFaqSelected}")->fetch();
                    // $socialMediaDelete = (new SocialMedia())->findById($sFaqSelected);
                    $faqSelect->status = "I";
                    if (!$faqSelect->save()) {
                        $json["message"] = $faqSelect->message()->render();
                        echo json_encode($json);
                        return;
                    }
                    // if (!$socialMediaDelete->destroy()) {
                    //     $json["message"] = $socialMediaDelete->message()->render();
                    //     echo json_encode($json);
                    //     return;
                    // }
                }
            }

            $this->message->success("Pergunta e Resposta excluída com sucesso...")->flash();
            redirect(url("/admin/faqs"));
        }

        if (!empty($data["action"]) && $data["action"] == "active") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $faqActive = (new Faq())->findById($data['faq_id']);

            $faqActive->status = 'A';
            $faqActive->users_id = Auth::user()->id;

            if (!$faqActive->save()) {
                $json["message"] = $faqActive->message()->render();
                echo json_encode($json);
                return;
            }

            $this->message->success("Pergunta e Resposta inativado com sucesso...")->flash();
            redirect(url("/admin/faq/$faqActive->id"));
        }

        //read
        $faq = null;
        if (!empty($data['faq_id'])) {
            $faqId = filter_var($data["faq_id"], FILTER_SANITIZE_STRIPPED);
            $faq = (new Faq())->findById($faqId);
        }

        // var_dump($faq);
        // exit();
        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("faqView", [
            "head" => $head,
            "faq" => $faq
        ]);
    }
}
