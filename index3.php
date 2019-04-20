<?php

require_once 'murobbi.php';
require_once 'ngaji.php';

$murobbib = new murobbi('Tabarakallah',100);
$murobbib2 = new murobbi('Ya habibal',123);

echo 'bunyinya.. ' . $murobbib->get_suara() . ' ' . 'beratnya itu ' . $murobbib->get_berat() . 'kg coy <br>';

echo 'bunyinya.. ' . $murobbib2->get_suara() . ' ' . 'beratnya itu ' . $murobbib2->get_berat() . 'kg coy <br><br>';

$murobbijago = new murobbi_tahfiz("Ta'awudz", 30);
echo $murobbijago->get_suara() . ' ,asli cakep';
echo ' terus apalannye ' . $murobbijago->get_berat() . 'juz <br>';
echo $murobbijago->get_senjata(); /* manggilnye gini karena diye function */