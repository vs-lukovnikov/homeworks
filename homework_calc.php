<?php

// Function calculate sum for any parameters amount.
/**
 * @param int[] ...$ints
 *
 * @return int
 */
function add (int ...$ints) {
  $result = 0;
  foreach ($ints as $k => $v) {
    $result += $v;
  }
  return $result;
}

// Function multiply for any parameters amount.
/**
 * @param int[] ...$ints
 *
 * @return int
 */
function multiply (int ...$ints) {
  $result = 1;
  foreach ($ints as $k => $v) {
    $result *= $v;
  }
  return $result;
}

// Function substruct for two numbers.
/**
 * @param $num1
 * @param $num2
 *
 * @return mixed
 */
function substract ($num1, $num2) {
  return $num1 - $num2;
}

// Function divide for two numbers.
/**
 * @param $num1
 * @param $num2
 *
 * @return float|int
 */
function divide ($num1, $num2) {
  return $num1 / $num2;
}

// Function change sign for number.
/**
 * @param $num
 *
 * @return float|int
 */
function changeSign ($num) {
  return $num * -1;
}


// Function calculate pow for number.
/**
 * @param $number
 * @param $power
 *
 * @return float|int
 */
function powNumber ($number, $power = 2) {
   if($power == 0)  {
     return 1;
   }
  return  $number * powNumber($number, $power-1);
}

// Function calculate sqrt for number.
/**
 * @param $number
 *
 * @return float
 */
function sqrtNumber ($number) {

  return  sqrt($number);
}


// Function calculate factorial for number.
/**
 * @param $number
 *
 * @return float|int
 */
function factorial ($number) {
  if($number == 0 || $number == 1)  {
    return 1;
  }
  if($number > 1) {
    return  $number * factorial($number-1);
  }
}

// Function calculate sin for grad.
/**
 * @param $grad
 *
 * @return float
 */
function sinCalc ($grad) {
  return sin(deg2rad($grad));
}

// Function calculate cos for grad.
/**
 * @param $grad
 *
 * @return float
 */
function cosCalc ($grad) {
  return cos(deg2rad($grad));
}
// Function calculate tan for grad.
/**
 * @param $grad
 *
 *
 * @return float
 */
function tanCalc ($grad) {
  return tan(deg2rad($grad));
}

//echo add(2,4,10,11);
//echo '<br>';
//echo add(10);
//echo '<br>';
//echo multiply(2,4,10,11);
//echo '<br>';
echo multiply(10, 5, 2);
//echo '<br>';
//echo substract(10, 5);
//echo '<br>';
//echo substract(10, 9);
//echo '<br>';
//echo divide(10, 5);
//echo '<br>';
//echo divide(100, 3);
//echo '<br>';
//echo changeSign(11);
//echo '<br>';
//echo changeSign(-100);
//echo '<br>';
//echo powNumber(2, 2 );
//echo '<br>';
//echo powNumber(3, 3);
//echo '<br>';
//echo sqrtNumber(2);
//echo '<br>';
//echo sqrtNumber(9);
//echo '<br>';
//echo factorial(4);
//echo '<br>';
//echo factorial(5);
//echo '<br>';
//echo sinCalc(45);
//echo '<br>';
//echo sinCalc(60);
//echo '<br>';
//echo sinCalc(90);
//echo '<br>';
//echo cosCalc(45);
//echo '<br>';
//echo cosCalc(60);
//echo '<br>';
//echo cosCalc(180);
//echo '<br>';
//echo tanCalc(45);
//echo '<br>';
//echo tanCalc(60);
//echo '<br>';
//echo tanCalc(180);