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

//ejercicio Reverse

function reverseString (string $string): string { // $tring = Hola qué tal
    $chars = mb_str_split($string);
    
    return implode('', array_reverse($chars));
}

function reverseWords (string $string): string {
    $words = explode(' ', $string);

    return implode(' ', array_reverse($words));
}

function reverseCharactersInWords (string $string): string {
    $words = explode(' ', $string);

    $turnWords = [];

    foreach($words as $word) {
        $turnWords[] = reverseString($word);
    }

    return implode(' ', $turnWords);
}







