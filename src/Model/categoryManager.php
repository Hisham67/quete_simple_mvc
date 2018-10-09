<?php
/**
 * Created by PhpStorm.
 * User: hisha
 * Date: 08/10/18
 * Time: 14:59
 */
namespace Model;
require __DIR__ . '/../../app/db.php';

Class categoryManager{



    public function selectAllcategories() : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }

    public function selectOnecategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }

}
?>