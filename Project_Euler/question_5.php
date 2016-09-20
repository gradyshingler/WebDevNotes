<h1>Question 5</h1>
<p>2520 is the smallest number that can be divided by each of the numbers from 1 to 10 without any remainder.
<br />
	What is the smallest positive number that is evenly divisible by all of the numbers from 1 to 20?</p>
<?php
	include_once "functions.php";

	$numArray = createMulitplicationTableValues(1,20);

	$LCFarray = [];
	$factorsArray = [];

	foreach($numArray as $n) {
		$LCFarray[] = getPrimeFactors($n);
	}

	$finalArray = [];
	foreach($LCFarray as $pos => $currentFactorization) {
		nicePrint("Adding Factors for: ".($pos+1));
		$finalArray = mergeArraysKeepingLargest($finalArray, countArray($currentFactorization));
	}

	nicePrint($finalArray);
	$total = 1;
	foreach($finalArray as $factor => $count) {
		$total *= pow($factor,$count);
	}

	nicePrint($total);