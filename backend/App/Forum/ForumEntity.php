<?php namespace App\Forum;
use App\Database\Entity\Entity;

class ForumEntity extends Entity
{
    private $id;
    private $user_id;
    private $thread_id;
    private $region_id;

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
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getThreadId()
    {
        return $this->thread_id;
    }

    /**
     * @param mixed $thread_id
     */
    public function setThreadId($thread_id)
    {
        $this->thread_id = $thread_id;
    }

    /**
     * @return mixed
     */
    public function getRegionId()
    {
        return $this->region_id;
    }

    /**
     * @param mixed $region_id
     */
    public function setRegionId($region_id)
    {
        $this->region_id = $region_id;
    }
}