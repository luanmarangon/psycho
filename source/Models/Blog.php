<?php

namespace Source\Models;

use Source\Core\Model;

class Blog extends Model
{
    public function __construct()
    {
        parent::__construct("blog", ["id"], ["users_id", "category_id", "title", "body", "post_at"]);
    }


    public function blogCategory()
    {
        $this->query = "select * from blog b
                    inner join category c on b.category_id = c.id";
        return $this;
    }

    public function category(): ?Category
    {
        if ($this->category_id) {
            return (new Category())->findById($this->category_id);
        }
        return null;
    }

    public function userBlog(): ?User
    {
        if ($this->users_id) {
            return (new User())->findUser("u.id=$this->users_id")->fetch();
        }
        return null;
    }
}
