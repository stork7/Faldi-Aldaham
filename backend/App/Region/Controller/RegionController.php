<?php


namespace App\Region\Controller;



/**
 * @Controller(path="/region")
 */
class RegionController {

    /**
     * RegionController constructor.
     */
    public function __construct() {

    }


    /**
     * @Action(method="GET")
     */
    public function getRegions() {
        echo sprintf("GetRegions");
    }

    /**
     * @Action(method="POST")
     */
    public function addRegion() {
        echo sprintf("AddRegion");
    }

    /**
     * @Action(method="GET", path="/{id}")
     */
    public function getRegion($id) {
        echo sprintf("Get Region with id: %s", array($id));
    }

    /**
     * @Action(method="PUT", path="/{id}")
     */
    public function updateRegion($id) {
        echo sprintf("Updated Region with id: %s", array($id));
    }

    /**
     * @Action(method="DELETE", path="/{id}")
     */
    public function deleteRegion($id) {
        echo sprintf("Deleted Region with id: %s", array($id));
    }
}