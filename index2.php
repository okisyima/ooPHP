<?php

class murobbi
{

    public $suara;
    public $berat;

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

// $mur = new murobbi;
$murobbib = new murobbi;
$murobbib2 = new murobbi;

$murobbib->set_suara('Bismillahirrohman');
$murobbib->set_berat(100);
echo 'bunyinya.. ' . $murobbib->get_suara() . ' ' . 'beratnya itu ' . $murobbib->get_berat() . 'kg coy <br><br>';

$murobbib->set_suara('Assalamualaikum Warahmatullah');
$murobbib->set_berat(120);
echo 'bunyinya.. ' . $murobbib->get_suara() . ' ' . 'beratnya itu ' . $murobbib->get_berat() . 'kg coy';