<?php
function easterDate($year)
{
	/**
	* Finds the Easter Date
	*/
    $x=24;
    $y=5;
    $a = $year%19;
    $b = $year%4;
    $c = $year%7;
    $d=(19*$a+$x) % 30;
    $e = ((2*$b)+(4*$c)+(6*$d)+$y) % 7;

    $f = $d+$e;

    if($f > 9) {
        $day = ($f-9);
        $month = 4;
    } else{
        $day = ($f+22);
        $month = 3;
    }

    if(strlen($day)==1) {
        $day = '0'.$day;
    }

    $easter = $year.'-0'.$month.'-'.$day;
    return $easter;
}

$year = 2020;

$pascoa = easterDate($year);
$carnaval = date('Y-m-d',strtotime('- 47 days', strtotime($pascoa)));
$corpoCristo = date('Y-m-d',strtotime('+60 days', strtotime($pascoa)));

echo 'Carnaval: '. $carnaval.'<br>';
echo 'Pascoa: '.$pascoa.'<br>';
echo 'Corpo de Cristo: '. $corpoCristo.'<br>';
echo 'Segunda-feira de Pascoa: '. date('Y-m-d',strtotime('+1 days', strtotime($pascoa)));
?>