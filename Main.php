<?php
include('ArraySort.php');

interface iMain {
    public function counter (int $size);
}

class Main extends ArraySort implements iMain {

    public function counter (int $size) {
        $response = ['bubble' => 0, 'quick'=> 0, 'radix' => 0];
        for ($i = 0; $i < 50; $i++) {
            $response['bubble'] += $this->bubble($this->randomArrayCreator($size));
        }
        $response['bubble'] =$response['bubble']/50; 
        // for ($i = 0; $i < 50; $i++) {
        //     $response['quick'] += $this->quick($this->randomArrayCreator($size));
        // }       
        // echo '</br>'.($response['quick']/50).'</br>';

        for ($i = 0; $i < 50; $i++) {
            $response['radix'] += $this->radix($this->randomArrayCreator($size));
        } 
        $response['radix'] =$response['radix']/50;
        return $response;
    }

    private function randomArrayCreator (int $size) : array{
        $size -= 1;
        $init = 0;
        $array = range($init, $size);
        shuffle($array);
        return $array;
    } 
}