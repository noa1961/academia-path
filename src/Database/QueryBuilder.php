<?php
namespace App\Database;

use Connection;
use \PDO;

class QueryBuilder
{
    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function getAll($table,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }
    public function findById($table,$id,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE id=:id");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(['id'=>$id]);
        return $stmt->fetch();
    }
    public function deleteById($table,$id) {
        $stmt = $this->pdo->prepare("DELETE FROM $table WHERE id=:id");
        $stmt->execute(['id'=>$id]);
        return $stmt->rowCount() == 1;
    }
    public function create($table,$attributes) {
        $stmt = $this->pdo->prepare("INSERT INTO $table (".
            implode(",",array_keys($attributes)).
            ") VALUES (:".implode(', :', array_keys($attributes)).")");
        if ($stmt->execute($attributes))
            return $this->pdo->lastInsertId();
        else
            return false;
    }
    public function update($table,$id,$attributes) {
        $query = "UPDATE $table SET ";
        foreach ($attributes as $key => $attribute)
            $query .= "$key=:$key,";
        $query = rtrim($query, ",");
        $query .= ' WHERE id=:id';
        $attributes['id'] = $id;
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($attributes);
        return $stmt->rowCount() == 1;
    }
    public function getAllFiltered($table, $filters, $class = "StdClass") {
        $query = "SELECT * FROM $table WHERE ";
        foreach ($filters as $filter => $value)
            $query.= "$filter =: $filter AND ";
        $query = rtrim($query, "AND ");
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($filters);
        return $stmt->fetchAll(PDO::FETCH_CLASS, $class);
    }
    public function findBy($table,$column,$columnvalue,$class = "StdClass") {
        $stmt = $this->pdo->prepare("SELECT * FROM $table WHERE $column=:$column");
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        $stmt->execute(["$column"=>$columnvalue]);
        return $stmt->fetch();
    }
}