<?php namespace App\Pro_Player\Repository;
use App\Database\Repository\Repository;

class Pro_PlayerRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Pro_Player\Pro_PlayerEntity";
    }

    protected function getTableName()
    {
        return "pro_player";
    }
}
