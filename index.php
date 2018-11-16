<?php
include('ArraySort.php');

class main extends ArraySort {

    public function counter ($method,$init, $Final) {
        $count = 0;
        for ($i = 0; $i < 50; $i++) {
            $count += $this->$method(arrayCreator(0,4));
        }
    }
}


$teste = new main();
$count = 0;

for ($i = 0; $i < 50; $i++) {
    $count += $teste->bublee(arrayCreator(0,4));
}
echo 'bublee 5: '.$count."\n"; 

$count=0;
for ($i = 0; $i < 50; $i++) {
    $count += $teste->bublee(arrayCreator(0,9));
}
echo 'bublee 10: '.$count; 
exit;

function arrayCreator ($init, $final) {
    $array = range($init, $final);
    shuffle($array);
    return $array;
} 

/*
$ArraySort = new ArraySort();
$count = 0;
for ($i = 0; $i < 50; $i++) {
    $count += $ArraySort->bublee(arrayCreator(0,4));
}
echo 'bublee 5'.$count."\n"; 
$count=0;
for ($i = 0; $i < 50; $i++) {
    $count += $ArraySort->bublee(arrayCreator(0,9));
}
echo 'bublee 10'.$count; 


echo'<pre>';var_dump($array);

echo'----------------------------------';
echo'<pre>';var_dump($array);
*/