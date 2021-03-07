<?php namespace App\Forum\Repository;
use App\Database\Repository\Repository;

class ForumRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Forum\ForumEntity";
    }

    protected function getTableName()
    {
        return "forum";
    }
}
