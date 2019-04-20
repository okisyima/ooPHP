<?php

class murobbi
{

    public $suara;
    public $berat;

    // construct
    public function __construct($suara,$berat)
    {
        $this->suara = $suara;
        $this->berat = $berat;
    }

    // metode set && get
    public function set_suara($suara)
    {
        $this->suara = $suara;
    }

    public function get_suara()
    {
        return $this->suara;
    }

    public function set_berat($berat)
    {
        $this->berat = $berat;
    }

    public function get_berat()
    {
        return $this->berat;
    }

}

