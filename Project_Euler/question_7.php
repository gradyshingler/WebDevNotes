<h1>Question 7</h1>
<p>By listing the first six prime numbers: 2, 3, 5, 7, 11, and 13, we can see that the 6th prime is 13.
	<br />
	What is the 10 001st prime number?</p>
<?php
	include_once "functions.php";

	$i = 4;
	$primeArray = [2, 3, 5, 7];
	$currentPrime = 7;
	$currentTest = $currentPrime;

	while ($i < 10002) {
		while(true) {
			$currentTest += 2;
			if(isPrime($currentTest)){
				$currentPrime = $currentTest;
				$primeArray[] = $currentPrime;
				$i++;
				nicePrint($i. ": ".$currentPrime);
			}
			if($i >= 10001){
				return false;
			}
		}
	}

	nicePrint($currentPrime);