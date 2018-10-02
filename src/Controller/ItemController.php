<?php
namespace Controller;

Class ItemController{


    public function index() {


    }


}

// src/Controller/ItemController.php
use Model;

$itemManager = new Model\ItemManager();
$items = $itemManager->selectAllItems();



require __DIR__ . '/../View/Item.php';










?>