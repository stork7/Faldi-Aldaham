<?php namespace App\Teams\Repository;
use App\Database\Repository\Repository;

class TeamsRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Teams\TeamsEntity";
    }

    protected function getTableName()
    {
        return "teams";
    }
}
