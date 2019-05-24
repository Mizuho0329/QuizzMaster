<?php


class Options
{

    private $langue;
    private $son;

    /**
     * @return mixed
     */
    public function getSon()
    {
        return $this->son;
    }

    /**
     * @param mixed $son
     */
    public function setSon($son): void
    {
        $this->son = $son;
    }
    /**
     * @return mixed
     */
    public function getLangue()
    {
        return $this->langue;
    }

    /**
     * @param mixed $langue
     */
    public function setLangue($langue): void
    {
        $this->langue = $langue;
    }
}