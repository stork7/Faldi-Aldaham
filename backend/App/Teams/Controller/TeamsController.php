<?php


namespace App\Teams\Controller;



/**
 * @Controller(path="/teams")
 */
class TeamsController {

    /**
     * TeamsController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getTeams() {
        echo sprintf("GetTeams");
    }

    /**
     * @Action(method="POST")
     */
    public function addTeam() {
        echo sprintf("AddTeam");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getTeam($id) {
        echo sprintf("Get Team with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateTeam($id) {
        echo sprintf("Updated Team with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteTeam($id) {
        echo sprintf("Deleted Team with id: %s", array($id));
    }
}