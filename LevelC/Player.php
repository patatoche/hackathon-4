<?php

namespace Hackathon\LevelC;

class Player
{
    private $id;
    private $orders;

    public function __construct($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSteps($partOfTheTrack, $context)
    {
        if (strlen($partOfTheTrack) > 1) {
            $plop = strpos(strrev($partOfTheTrack), "_");
            $lastFreePosition = strlen($partOfTheTrack) - $plop - 1;
            $advanceCount = $lastFreePosition + 1;
            $this->orders = str_repeat("M", $lastFreePosition);
        } elseif (strlen($partOfTheTrack) === 1) {
            $this->orders = "M";
//            $plop = "1";
//            $advanceCount = "1";
        } else {
            $this->orders = "SSSSS";
//            $plop = "undefined";
//            $advanceCount = "undefined";
        }

//        echo "partOfTheTrack = $partOfTheTrack\n";
//        echo "orders = " . $this->orders . "\n";
//        echo "plop = $plop\n";
//        echo "advanceCount = $advanceCount\n\n";

        return $this->orders;
    }
};
