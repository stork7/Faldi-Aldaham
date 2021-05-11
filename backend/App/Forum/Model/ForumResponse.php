<?php


class ForumResponse
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
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
    public function setUserId($user_id): void
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
    public function setThreadId($thread_id): void
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
    public function setRegionId($region_id): void
    {
        $this->region_id = $region_id;
    }




}