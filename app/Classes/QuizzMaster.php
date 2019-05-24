<?php

// features/bootstrap/QuizzMaster.php

final class QuizzMaster
{
    private $questions = array();
    private $option = array();
    private $buttons = array();

    public function ifExists($buttonName)
    {
        if (in_array($buttonName, $this->buttons)) {
            return true;
        } else {
            return false;
        }
    }

    public function isClicked($buttonName)
    {
        return "clicked !";
    }

    public function openPage($buttonName)
    {
        return "clicked !";
    }

    /**
     * @return mixed
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * @param mixed $questions
     */
    public function setQuestions($questions): void
    {
        $this->questions = $questions;
    }

    /**
     * @return mixed
     */
    public function getOption()
    {
        return $this->option;
    }

    /**
     * @param mixed $option
     */
    public function setOption($option): void
    {
        $this->option = $option;
    }

    function __construct()
    {
    }

}
