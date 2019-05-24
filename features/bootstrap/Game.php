<?php


class Game
{

    private $scores;
    private $players;

    /**
     * @return mixed
     */
    public function getScores()
    {
        return $this->scores;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players): void
    {
        $this->players = $players;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $scores
     */
    public function setScores($scores): void
    {
        $this->scores = $scores;
    }

}