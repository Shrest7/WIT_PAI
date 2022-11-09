<?php

namespace Application\Model;

class Miesiace {
    public function pobierzWszystkie() : array {
        return array (
            array("Styczen", 'blue'),
            array("Luty", 'yellow'),
            array("Marzec", 'black'),
            array("Kwiecien", 'gray'),
            array("Maj", 'magenta'),
            array("Czerwiec", 'green'),
            array("Lipiec", 'violet'),
            array("Sierpien", 'pink'),
            array("Wrzesien", 'gold'),
            array("Pazdziernik", 'silver'),
            array("Listopad", 'dark-gray'),
            array("Grudzien", 'orange'),
          );
    }
}