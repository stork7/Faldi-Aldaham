<?php namespace App\Database\Repository;


use App\Database\Connector;
use PDO;

abstract class Repository {

    private $databaseConnection;

    public function __construct() {
        $this->databaseConnection = Connector::getInstance();
    }

    protected function prepare($statement) {
        $query = $this->databaseConnection->prepare($statement);
        $query->setFetchMode(PDO::FETCH_CLASS, $this->getEntityName());

        return $query;
    }

    public function getById($id) {

        $query = $this->prepare("Select * from " . $this->getTableName() . " where id=:id");

        $query->execute(array(
            ":id" => $id
        ));

        return $query->fetch();
    }

    protected abstract function getEntityName();

    protected abstract function getTableName();
}