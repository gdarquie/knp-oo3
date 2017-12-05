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

    public function getNameAndSpecs($useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->getName(),
                $this->getWeaponPower(),
                $this->getJediFactor(),
                $this->getStrength()
            );
        }
    }

}

