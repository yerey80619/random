<?php

    include_once __DIR__ . '/src/Random.php';

    use Random\Random;

    $random = new Random();
    echo $random->create();

?>