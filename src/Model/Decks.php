<?php 

namespace App\Model;

class Decks {

    private $id;

    private $title;

    private $img;

    private $category;
    
    private $slug;

    private $theme;

    public function getId() :?int
    {
        return $this->id;
    }

    public function getTitle() :?string
    {
        return $this->title;
    }

    public function getImg()
    {
        return $this->img;
    }

    public function getCategory() :?string
    {
        return $this->category;
    }

    public function getSlug() :?string
    {
        return $this->slug;
    }

    public function getTheme()
    {
        return $this->theme;
    }

}