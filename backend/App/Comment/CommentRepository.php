<?php namespace App\Comment;
use App\Database\Repository\Repository;

class CommentRepository extends Repository
{
    public function __construct()
    {
        parent::__construct();
    }

    protected function getEntityName()
    {
        return "App\Comment\CommentEntity";
    }

    protected function getTableName()
    {
        return "comment";
    }
}
