<?php

namespace Hackathon\LevelA;

class Redux
{
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Cette méthode ne prends rien en paramétre et retourne la reduction du nombre.
     *
     * @return string
     */
    public function getReductedNumber()
    {
        $result = $this->number;

        if (strlen($result)===1) {

            return $result;
        }

        $this->number = array_sum(str_split($result));

        return $this->getReductedNumber();
    }
};
