<?php


namespace App\Forum\Controller;



/**
 * @Controller(path="/forum")
 */
class ForumController {

    /**
     * ForumController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getForums() {
        echo sprintf("GetForums");
    }

    /**
     * @Action(method="POST")
     */
    public function addForum() {
        echo sprintf("AddForum");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getForum($id) {
        echo sprintf("Get forum with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateForum($id) {
        echo sprintf("Updated forum with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteForum($id) {
        echo sprintf("Deleted forum with id: %s", array($id));
    }
}