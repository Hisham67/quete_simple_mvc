<?php
namespace Controller;
use Model\categoryManager;

use Twig_Loader_Filesystem;
use Twig_Environment;






Class categoryController{

    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }


    public function index() {

        $categoryManager = new categoryManager();
        $categories = $categoryManager->selectAllcategories();

        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $categoryManager = new categoryManager();
        $category = $categoryManager->selectOnecategory($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);

    }

}

?>