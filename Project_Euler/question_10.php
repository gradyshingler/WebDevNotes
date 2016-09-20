<h1>Question 10</h1>
<p>The sum of the primes below 10 is 2 + 3 + 5 + 7 = 17.

	Find the sum of all the primes below two million.</p>
<?php
	include_once "functions.php";

	$primeArray = [2];
	$primeCounter = 1;

	$currentValue = 3;

	while($currentValue < 2000000) {
		$isCurrentValuePrime = true;
		$currentValueRoot = pow($currentValue, 0.5);
		//nicePrint($currentValueRoot);
		foreach($primeArray as $currTestValue) {
			if($currTestValue > $currentValueRoot) { break; }
			if($currentValue % $currTestValue == 0){
				$isCurrentValuePrime = false;
				//nicePrint($currentValue." failed, divisible by: ".$currTestValue);
				break;
			}
		}
		if($isCurrentValuePrime) {
			//nicePrint($currentValue . " appears to be prime");
			$primeArray[] = $currentValue;
			$primeCounter++;
		}
		$currentValue += 2;
	}

	$addingAllPrimes = addArray($primeArray);
	nicePrint($addingAllPrimes);
