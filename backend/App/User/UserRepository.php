<?php namespace App\User;
use App\Database\Repository\Repository;

class UserRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\User\UserEntity";
    }

    protected function getTableName()
    {
        return "user";
    }
}
