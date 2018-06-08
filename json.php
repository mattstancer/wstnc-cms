<?php
class nazwa
{
public $imie;
public $nazwisko;
public $rokur;
public function __constructor($iimie, $nnazwisko,$ddataur)
{
$this->imie=$iimie;
$this->nazwisko=$nnazwisko;
$this->rokur=$ddataur;
}
}
$osoba = new nazwa();
$osoba->__constructor("b","k",1);
echo json_encode($osoba);
?>