<?php

// features/bootstrap/QuizzMaster.php

final class QuizzMaster
{
    private $questions = array();
    private $options = array();
    private $buttons = array();

    public function setButton($buttonName)
    {
        array_push($this->buttons, $buttonName);
    }

    public function clickButton($buttonName)
    {
        if (in_array($buttonName, $this->buttons)) {
            return $buttonName;
        }
    }

    // public function getProductPrice($product)
    // {
    //     return $this->priceMap[$product];
    // }
}
