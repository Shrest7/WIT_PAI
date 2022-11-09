<?php

declare(strict_types=1);

namespace Application\Controller;

use Application\Model\Data;
use Application\Model\Liczby;
use Application\Model\Miesiace;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function __construct(private Data $data, private Miesiace $miesiace,
        private Liczby $liczby)
    {
        
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function dataAction() {
        return [
            'dzis' => $this->data->dzisiaj(),
            'dni_tygodnia' => $this->data->dniTygodnia(),
        ];
    }

    public function miesiaceAction () {
        return [
            'miesiace' => $this->miesiace->pobierzWszystkie()
        ];
    }  

    public function liczbyAction () {
        return [
            'liczby' => $this->liczby->generuj()
        ];
    }  
}
