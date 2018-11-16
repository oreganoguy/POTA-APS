<?php 
class ArraySort {

    public function bublee($array) {
        $count = 0;
        for($i = 0; $i < count($array); $i++)
        {
           for($j = 0; $j < count($array) - 1; $j++)
           {
             if($array[$j] > $array[$j + 1])
             {
               $aux = $array[$j];
               $array[$j] = $array[$j + 1];
               $array[$j + 1] = $aux;
             }
             $count ++;
           }
        }
        return $count;
    }

    public function select($val) {
        return $val;
    }
    public function insertion($val) {
        return $val;
    }
    public function heap($val) {
        return $val;
    }
    public function merge($val) {
        return $val;
    }
    public function quick($val) {
        return $val;
    }

    public function count($val) {
        return $val;
    }

    public function bucket($val) {
        return $val;
    }

    public function radix($val) {
        return $val;
    }
}

?>