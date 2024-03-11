<?php


namespace Source\App\Admin;

use Source\Models\Auth;
use Source\Models\Blog;
use Source\Support\Pager;
use Source\App\Admin\Admin;
use Source\Models\Category;

class Blogs extends Admin
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../../themes/" . CONF_VIEW_ADMIN . "/");
    }

    public function home(array $data): void
    {
        $blogs = (new Blog())->find();

         //read
         $search = null;

         if (!empty($data["search"]) && str_search($data["search"]) != "all") {
             $search = str_search($data["search"]);
             $blogs = (new Blog())->find(" title LIKE CONCAT('%', :s, '%')", "s={$search}");
 
             $this->message->success("Foram encontrados [ {$blogs->count()} ] resultados referentes a pesquisa.")->flash();
 
             if (!$blogs->count()) {
                 $blogs = (new Blog())->find();
                 $this->message->info("Sua pesquisa não obteve resultados. Por favor, revise seus critérios de pesquisa")->flash();
                 redirect("/admin/blogs");
             }
         }
         $all = ($search ?? "all");
         $pager = new Pager(url("/admin/blogs/{$all}/"));
         $pager->pager($blogs->count(), 6, (!empty($data["page"]) ? $data["page"] : 1));

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("blogs", [
            "head" => $head,
            "blogs" => $blogs->limit($pager->limit())->offset($pager->offset())->order("title ASC")->fetch(true),
            "paginator" => $pager->render()
        ]);
    }


    public function blog(array $data)
    {

        if (!empty($data["action"]) && $data["action"] == "create") {
            $content = $data['blog'];
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);


            if ($data['categorieNew']) {
                $categoryNew = $data['categorieNew'];
                $categoryQuery = (new Category())->find("category = :c", "c=$categoryNew")->fetch();

                if ($categoryQuery) {
                    $category = $categoryQuery->id;
                }

                if (!$categoryQuery) {
                    $category = new Category();
                    $category->category = $data['categorieNew'];

                    if (!$category->save()) {
                        $json["message"] = $category->message()->render();
                        echo json_encode($json);
                        return;
                    }

                    $category = $category->id;
                }
            }

            if ($data['categorie']) {
                $categoryQuery = (new Category())->findById($data['categorie']);
                $category = $categoryQuery->id;
            }


            $blogCreate = new Blog();

            $blogCreate->users_id = Auth::user()->id;
            $blogCreate->category_id = $category;
            $blogCreate->title = $data['title'];
            $blogCreate->body = str_replace(["{title}"], [$blogCreate->title], $content);
            $blogCreate->post_at = $data['post_at'];

            if (!$blogCreate->save()) {
                $json["message"] = $blogCreate->message()->render();
                echo json_encode($json);
                return;
            }
            $this->message->success("Blog cadastrado com sucesso...")->flash();
            redirect(url("/admin/blog/$blogCreate->id"));
        }

        //update
        if (!empty($data["action"]) && $data["action"] == "update") {
            $content = $data['blog'];
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            if ($data['categorieNew']) {
                $categoryNew = $data['categorieNew'];
                $categoryQuery = (new Category())->find("category = :c", "c=$categoryNew")->fetch();

                if ($categoryQuery) {
                    $category = $categoryQuery->id;
                }

                if (!$categoryQuery) {
                    $category = new Category();
                    $category->category = $data['categorieNew'];

                    if (!$category->save()) {
                        $json["message"] = $category->message()->render();
                        echo json_encode($json);
                        return;
                    }

                    $category = $category->id;
                }
            }

            if ($data['categorie']) {
                $categoryQuery = (new Category())->findById($data['categorie']);
                $category = $categoryQuery->id;
            }


            $blogUpdate = (new Blog())->findById($data['blog_id']);

            $blogUpdate->users_id = Auth::user()->id;
            $blogUpdate->category_id = $category;
            $blogUpdate->title = $data['title'];
            $blogUpdate->body = str_replace(["{title}"], [$blogCreate->title], $content);
            $blogUpdate->post_at = $data['post_at'];

            if (!$blogUpdate->save()) {
                $json["message"] = $blogUpdate->message()->render();
                echo json_encode($json);
                return;
            }
            $this->message->success("Blog atualizado com sucesso...")->flash();
            redirect(url("/admin/blog/$blogUpdate->id"));
        }

        //destroy
        if (!empty($data["action"]) && $data["action"] == "deletar") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $blogDestroy = (new Blog())->findById($data['blog_id']);

            if (!$blogDestroy->destroy()) {
                $json["message"] = $blogDestroy->message()->render();
                echo json_encode($json);
                return;
            }
            $this->message->success("Blog escluído com sucesso...")->flash();
            redirect(url("/admin/blogs"));
        }

        //read
        $blog = null;
        $categories = (new Category())->find()->fetch(true);
        if (!empty($data['blog_id'])) {
            $blogId = filter_var($data["blog_id"], FILTER_SANITIZE_STRIPPED);
            $blog = (new Blog())->findById($blogId);
        }

        $head = $this->seo->render(
            CONF_SITE_NAME . " | Admin",
            CONF_SITE_DESC,
            url("/admin"),
            theme("/assets/images.image.jpg", CONF_VIEW_ADMIN),
            false
        );

        echo $this->view->render("blogView", [
            "head" => $head,
            "categories" => $categories,
            "blog" => $blog
        ]);
    }
}
