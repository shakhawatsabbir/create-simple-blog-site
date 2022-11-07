<?php

namespace App\classes;
use App\classes\Category;
class Home
{

    public $category, $categories;

    public function index()
    {

        $this->category= new Category();
        $this->categories = $this->category-> getAllCategory();

        header('Location: action.php?page=home');
    }
}