<?php namespace App\Teams;
use App\Database\Entity\Entity;

class TeamsEntity extends Entity
{
    private $id;
    private $pro_player_id;
    private $team;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getProPlayerId()
    {
        return $this->pro_player_id;
    }

    /**
     * @param mixed $pro_player_id
     */
    public function setProPlayerId($pro_player_id)
    {
        $this->pro_player_id = $pro_player_id;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team)
    {
        $this->team = $team;
    }
}