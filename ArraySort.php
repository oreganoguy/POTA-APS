<?php 

interface iArraySort {
    function bubble(array $array);
    function quick(array $array);
    function radix(array $array);
}

class ArraySort {

    protected function bubble($array) {
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

    protected function quick($val) {
        return $val;
    }

    protected function radix($elements) {
        $count = 0;
        // Array for 10 queues.
        $queues = array(
            array(), array(), array(), array(), array(), array(), array(), array(),
            array(), array()
        );
        // Queues are allocated dynamically. In first iteration longest digits
        // element also determined.
        $longest = 0;
        foreach ($elements as $el) {
            if ($el > $longest) {
            $longest = $el;
            }
            $count++;

            //array_push adiciona valor ao final do array.,
            array_push($queues[$el % 10], $el);
        }
        // Queues are dequeued back into original elements.
        $i = 0;
        foreach ($queues as $key => $q) {
            while (!empty($queues[$key])) {
                // array_shift remove o primeiro valor do array.
            $elements[$i++] = array_shift($queues[$key]);
            }
        }
        // Remaining iterations are determined based on longest digits element.
        $it = strlen($longest) - 1;
        $d = 10;
        while ($it--) {
            foreach ($elements as $el) {
            array_push($queues[floor($el/$d) % 10], $el);
            }
            $i = 0;
            foreach ($queues as $key => $q) {
                while (!empty($queues[$key])) {
                    $elements[$i++] = array_shift($queues[$key]);
                }
            }
            $d *= 10;
        }
        return $count;
    }
}

?>