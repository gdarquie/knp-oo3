<?php

class RebelShip extends AbstractShip
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

    public function getNameAndSpecs($useShortFormat = false)
    {
        $val = parent::getNameAndSpecs($useShortFormat);
        $val .= ' (Rebel)';

        return $val;
    }

    public function getJediFactor()
    {
        return rand(10,30);
    }

}

