<?php
//Get the max / largest number from an array

// $largenum = [500,1000,600,700];
// $largest = max($largenum);
// echo "The largest number is:". $largest;

//Suppose we have an array [-1,-50,30,20,100]. Calculate the sum of positive numbers.

// $posinumbers = array (-1,-50,30,20,100);

// $total = 0;

// foreach($posinumbers as $number)
// {
//   if($number > 0)
//     $total += $number;
// }
// echo "The total number of positive number is:". $total;

//Get the multiplications of all odd numbers from 1 - 100. 

// $totalmul = 1;
// for($i=1; $i<=100; $i+=2){
//     if($i%2 != 0 ){
//         $totalmul = $totalmul*$i; 
//     }
// }

// echo $totalmul;

//Remove duplicate Elements from an Array

// $element = array('red','green','blue','red');

// $duplicate = array_unique($element);

// print_r($duplicate);

// Suppose we have a String of temperature of last 15 days. 
// "30,29,34,25,30,28,29,25,38,40,25,26,28,25,28" . Get the average temperature of 15 days from the string.


// $temperatures = array(30,29,34,25,30,28,29,25,38,40,25,26,28,25,28);
// $numbersInSet = 15;
//  $sum = 0;
//  foreach($temperatures as $temperature){
//      $sum  += $temperature;

// }
//  $average = $sum / $numbersInSet;

//$average = array_sum($temperatures) / count($temperatures);

 //echo $average;



 
 //Check for prime Number. [Must use a Form]


$userInput = $_POST['number'];


if($userInput % 2 != 0){
echo "yes odd";
}else{
    echo "even";
}





//  Suppose we have an array ['hellow', 'bangladesh', 'ramadan', 'eid'];
//  Get the last letter of each string and build a new array from it. 
//  OUTPUT => ['w', 'h', 'n', 'd']