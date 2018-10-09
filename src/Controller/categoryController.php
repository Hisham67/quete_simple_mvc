<?php
namespace Controller;
use Model\categoryManager;

Class categoryController{


    public function index() {

        $categoryManager = new categoryManager();
        $categories = $categoryManager->selectAllcategories();

        require __DIR__ . '/../View/category.php';
    }

    public function show(int $id)
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOnecategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }

}

?>