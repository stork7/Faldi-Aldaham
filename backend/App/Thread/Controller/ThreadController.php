<?php


namespace App\Thread\Controller;



/**
 * @Controller(path="/thread")
 */
class ThreadController {

    /**
     * ThreadController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getThreads() {
        echo sprintf("GetThreads");
    }

    /**
     * @Action(method="POST")
     */
    public function addThread() {
        echo sprintf("AddThread");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getThread($id) {
        echo sprintf("Get Thread with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateThread($id) {
        echo sprintf("Updated Thread with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteThread($id) {
        echo sprintf("Deleted Thread with id: %s", array($id));
    }
}