<?php

// class
// boleh di awali dengan andeskor atau huruf
class murobbi {

    // property
    public $suara = 'bismillah';
    public $berat = 70;

    // metode
    public function bersuara()
    {
        echo 'suara orangnya .. ' . $this->suara . ' ';
    }

    public function berberat()
    {
        return $this->berat;
    }


}

$murobbi1 =  new murobbi;
$murobbi1->bersuara();
echo $murobbi1->berberat();

?>