<?php


namespace App\User\Controller;



/**
 * @Controller(path="/user")
 */
class UserController {

    /**
     * UserController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getUsers() {
        echo sprintf("GetUsers");
    }

    /**
     * @Action(method="POST")
     */
    public function addUser() {
        echo sprintf("AddUser");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getUser($id) {
        echo sprintf("Get user with id: %s", array($id));
    }

    /**
     * @Autorized(permission="admin")
     * @Action(method="PUT", path="/{id}")
     */
    public function updateUser($id) {
        echo sprintf("Updated user with id: %s", array($id));
    }

    /**
     * @Autorized(permission="admin")
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteUser($id) {
        echo sprintf("Deleted user with id: %s", array($id));
    }
}