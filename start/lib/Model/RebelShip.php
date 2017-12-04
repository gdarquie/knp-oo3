<?php

class RebelShip extends Ship
{
    public function getFavoriteJedi(){
        $coolJedis = array('Yoda', 'Luc', 'Ben');
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    /**
     * @return string
     */
    public function getType()
    {
        return 'Rebel';
    }

    /**
     * @return boolean
     */
    public function isFunctional()
    {
        return true;
    }
}

