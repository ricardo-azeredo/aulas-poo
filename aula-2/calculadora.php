<?php

class Calculadora {
    public float $total = 0;
    public function add($x){
        $x + $this->total;
        $this->total += $x;
    }
    public function sub($x){
        $this->total -= $x;
    }
    public function multiply($x){
        $this->total *= $x;
    }
    public function divide($x){
        $this->total /= $x;
    }
    public function clear(){
        $this->total = 0;
    }
}