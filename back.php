<?php


$baza = $_GET['baza'];
$izvor = $_GET['izvor'];
$mera = $_GET['mera'];


function fromDram($baza, $mera){
  switch ($mera) {
    case 'dan':
      return substr($baza/14.2857142857,0,4);
    case 'litra':
      return $baza/100;
    case 'kamen':
      return $baza/400;
    case 'dram':
      return 1;

  }
}
function fromLitra($baza, $mera){
  switch ($mera) {
    case 'dan':
      return $baza*7;
    case 'dram':
      return $baza*100;
    case 'kamen':
      return $baza/4;
    case 'litra':
      return 1;

  }
}
function fromDan($baza, $mera){
  switch ($mera) {
    case 'litra':
      return $baza/7;
    case 'dram':
      return $baza*14.30;
    case 'kamen':
      return $baza/28;
    case 'dan':
      return 1;

  }
}
function fromKamen($baza, $mera){
  switch ($mera) {
    case 'litra':
      return $baza*4;
    case 'dram':
      return $baza*400;
    case 'dan':
      return $baza*28;
    case 'kamen':
      return 1;

  }
}

switch ($izvor) {
  case 'dram':
    echo fromDram($baza, $mera);
    break;

  case 'litra':
    echo fromLitra($baza, $mera);
    break;

  case 'dan':
    echo fromDan($baza, $mera);
    break;

  case 'kamen':
    echo fromKamen($baza, $mera);
    break;


}

 ?>
