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
        // if ($this->category_id) {
        //     return (new Category())->findById($this->category_id);
        // }
        // return null;

        $this->query = "select * from blog b
                    inner join category c on b.category_id = c.id";
        return $this;
    }
}
