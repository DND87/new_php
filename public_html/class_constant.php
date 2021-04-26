<?php

const TEST = 'aa';
echo TEST;
// TEST = 'bbb'; // Dòng này bị lỗi

$diep = 'xyz';


class Constant_Hunter {
    const DEFENSE_DEFAULT = 10;
    const OFFENSE_DEFAULT = 10;
}

class Hunter {
     private $_defense = 0;
     private $_offense = 0;
     const MAX_DEFENSE = 9;
     public function khoiTaoSucMang() {
            $this->_defense = Constant_Hunter::DEFENSE_DEFAULT;
            $this->_offense = Constant_Hunter::OFFENSE_DEFAULT;
     }

    public function getDefense() {
         return self::MAX_DEFENSE > $this->_defense ? $this->_defense : self::MAX_DEFENSE;
    }
}
$hunter = new Hunter();
$hunter->khoiTaoSucMang();
echo $hunter->getDefense();








?>












































