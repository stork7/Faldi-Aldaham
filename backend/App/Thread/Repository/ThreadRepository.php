<?php namespace App\Thread\Repository;
use App\Database\Repository\Repository;

class ThreadRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Thread\ThreadEntity";
    }

    protected function getTableName()
    {
        return "thread";
    }
}
