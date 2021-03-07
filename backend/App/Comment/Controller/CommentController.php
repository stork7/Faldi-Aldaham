<?php


namespace App\Comment\Controller;



/**
 * @Controller(path="/Comment")
 */
class CommentController {

    /**
     * CommentController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getComments() {
        echo sprintf("GetComments: ");
    }

    /**
     * @Action(method="POST")
     */
    public function addComment() {
        echo sprintf("AddComment: ");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getComment($id) {
        echo sprintf("Get Comment with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateComment($id) {
        echo sprintf("Updated Comment with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteComment($id) {
        echo sprintf("Deleted Comment with id: %s", array($id));
    }
}