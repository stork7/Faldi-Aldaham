<?php


class TeamsRequest
{
    private $pro_player_id;
    private $team;

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
    public function setTeam($team): void
    {
        $this->team = $team;
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
    public function setProPlayerId($pro_player_id): void
    {
        $this->pro_player_id = $pro_player_id;
    }


}