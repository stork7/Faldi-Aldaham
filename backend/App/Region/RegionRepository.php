<?php namespace App\Region;
use App\Database\Repository\Repository;

class RegionRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Region\RegionEntity";
    }

    protected function getTableName()
    {
        return "region";
    }
}
