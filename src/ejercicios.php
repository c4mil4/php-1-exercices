<?php

declare(strict_types=1);

function sumArray(array $myArrayNumbers) : int{
    $sum= 0;

    foreach ($myArrayNumbers as $value) {
        $sum += $value;
    }
    return $sum;
};

function findMax(array $myArrayNumbersMaxMin) : int {

    $numberMax = 17; 

    foreach ($myArrayNumbersMaxMin as $value){
        if ($numberMax >= $value) {
        }
        return $value;
    }
} 

//ejercicio AverageAge

function AverageAge(array $people){

    $sum = 0;

    foreach ($people as $value){
        $sum += $value['age'];
    }
    $totalAge=$sum/count($value);
    return $totalAge;
};

//ejercicio testFilterAge






