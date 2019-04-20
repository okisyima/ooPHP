<?php

require_once 'murobbi.php';

// inheritance || pewarisan class
class murobbi_tahfiz extends murobbi
{
    public function get_senjata()
    {
        echo "saya punya do'a ..";
    }

    // overriding metode
    public function get_suara()
    {
        return 'kaya gini suaranya... ' . $this->suara;
    }
}