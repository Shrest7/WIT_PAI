<?php

namespace Application\Model;

class Liczby {
    public function generuj() : array {
        $arrParzyste = array();
        $arrNieparzyste = array();
        $number = 0;

        for($i = 0; $i<100; $i++){
            $number = rand(0, 1000);
            if($number % 2 == 0){
                $arrParzyste[] = $number;
            }
            else{
                $arrNieparzyste[] = $number;
            }
        }

        asort($arrParzyste);
        asort($arrNieparzyste);

        $resultArray = array(
            'arrParzyste' => $arrParzyste,
            'arrNieparzyste' => $arrNieparzyste
        );

        return $resultArray;
    }
}