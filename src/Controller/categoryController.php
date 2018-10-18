<?php
namespace Controller;
use Model;

use Twig_Loader_Filesystem;
use Twig_Environment;




class categoryController extends AbstractController{

    protected $twig;

//    public function __construct()
//    {
//        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
//        $this->twig = new Twig_Environment($loader);
//    }


    public function index() {

        $categoryManager = new Model\categoryManager($this->pdo);;
        $categories = $categoryManager->selectAll();

        return $this->twig->render('category.html.twig', ['categories' => $categories]);
    }

    public function show(int $id)
    {
        $categoryManager = new Model\categoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        return $this->twig->render('showCategory.html.twig', ['category' => $category]);

    }

    public function add()
    {
        if (!empty($_POST)) {
            // TODO : validations des valeurs saisies dans le form
            // création d'un nouvel objet Item et hydratation avec les données du formulaire
            $category = new Model\Category();
            $category->setName($_POST['name']);

            $categoryManager = new Model\categoryManager($this->pdo);
            // l'objet $item hydraté est simplement envoyé en paramètre de insert()
            $categoryManager->insert($category);
            // si tout se passe bien, redirection
            header('Location: /categories');
            exit();
        }
        // le formulaire HTML est affiché (vue à créer)
        return $this->twig->render('addcategory.html.twig');
    }

    public function delete($id)
    {
        $categoryManager = new Model\categoryManager($this->pdo);
        $category = $categoryManager->selectOneById($id);

        if(!empty($_POST)){

            $category->setName($_POST['name']);
            $categoryManager->delete($category);

            header('Location: /categories');
            exit();
        }
        return $this->twig->render('deletecat.html.twig', ['category' =>$category]);
    }




}

?>