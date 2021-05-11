<?php


class ThreadRequest
{
    private $comment_id;
    private $pro_player_id;
    private $title;
    private $description;
    private $post_date;

    /**
     * @return mixed
     */
    public function getCommentId()
    {
        return $this->comment_id;
    }

    /**
     * @param mixed $comment_id
     */
    public function setCommentId($comment_id): void
    {
        $this->comment_id = $comment_id;
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

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->post_date;
    }

    /**
     * @param mixed $post_date
     */
    public function setPostDate($post_date): void
    {
        $this->post_date = $post_date;
    }




}