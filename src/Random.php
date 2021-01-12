<?php

namespace Random;

class Random {

    public function create(){
        $string = str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        $string = substr($string, 0, rand(1, 99));
        return $string;
    }

}