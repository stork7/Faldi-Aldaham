<?php


namespace App\Pro_Player\Controller;



/**
 * @Controller(path="/pro_player")
 */
class Pro_PlayerController {

    /**
     * Pro_PlayerController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getPro_Players() {
        echo sprintf("GetPro_Players");
    }

    /**
     * @Action(method="POST")
     */
    public function addPro_Player() {
        echo sprintf("AddPro_Player");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getPro_Player($id) {
        echo sprintf("Get Pro_Player with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updatePro_Player($id) {
        echo sprintf("Updated Pro_Player with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deletePro_Player($id) {
        echo sprintf("Deleted Pro_Player with id: %s", array($id));
    }
}