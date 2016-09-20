<?php
	function nicePrint($data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
	function multiplesOf ($value, $multipleOf) {
		$toReturn = [];
		for($val=2; $val < $multipleOf; $val++){
			if($val % $value == 0) {
				$toReturn[] = $val;
			}
		}
		return $toReturn;
	}
	function addArray ($array) {
		$toReturn = 0;
		foreach($array as $current) {
			$toReturn += $current;
		}
		return $toReturn;
	}
	function multArray ($array ) {
		$toReturn = 1;
		foreach($array as $current) {
			$toReturn *= $current;
		}
		return $toReturn;
	}
	function getFibonacci($maxValue){
		$val1 = 1;
		$val2 = 2;
		$toReturn = [1,2];
		while($val1 < $maxValue && $val2 < $maxValue){
			$tempVal = $val1 + $val2;
			$toReturn[] = $tempVal;
			$val1 = $val2;
			$val2 = $tempVal;
		}
		return $toReturn;
	}
	function isEven($var) {
		return !($var & 1);
	}
	function isPrime($number)
	{
		$n = abs($number);
		$i = 2;
		while ($i <= sqrt($n))
		{
			if ($n % $i == 0) {
				return false;
			}
			$i++;
		}
		return true;
	}
	function getPrimeFactors($value) {
		$toReturn = [];
		$i = 2;
		while($i <= sqrt($value)){
			if($value % $i ==0) {//i is a factor
				$toReturn[] = $i;
				$value /= $i;
			} else {
				$i++;
			}
		}
		$toReturn[] = $value;
		return $toReturn;
	}
	function isPalindrome($value) {
		//nicePrint("raw value: ".$value);
		$stringVal = strval($value);
		//nicePrint("StrValue : ".$stringVal);
		$stringLen = strlen($stringVal);
		//nicePrint("stringLen: ".$stringLen);
		$halfValue = $stringLen/2;
		//nicePrint("halfValue: ".$halfValue);
		$i = 0;
		$toReturn = true;
		while($i < floor($halfValue)) {
			//nicePrint("stringVal[".$i."]: ". $stringVal[$i]." =?= "."stringVal[".($stringLen-$i)."]: ". $stringVal[$stringLen-$i-1]);

			if($stringVal[$i] != $stringVal[$stringLen-$i-1]){
				$toReturn = false;
				return false;
			}
			$i++;
		}
		return $toReturn;
	}
	function createMulitplicationTableValues($n1, $n2) {
		$toReturn = [];
		if ($n1 > $n2 ) {
			$temp = $n2;
			$n2 = $n1;
			$n1 = $temp;
		}

		for($i=1;$i <= $n1; $i++) {
			for($j=1; $j <= $n2; $j++) {
				if($j >= $i) {
					$toReturn[] = $i * $j;
				}
			}
		}

		return $toReturn;

	}
	function countArray($array){
		$toReturn = [];
		foreach($array as $element) {
			$toReturn[$element]++;
		}
		nicePrint("countArray: ");
		nicePrint($toReturn);
		return $toReturn;
	}
	function mergeArraysKeepingLargest($array1, $array2){
		$toReturn = $array1;
		foreach($array2 as $pos => $currentVal) {
			if($toReturn[$pos] < $currentVal) {
				$toReturn[$pos] = $currentVal;
			}
		}
		nicePrint("Merged Array: ");
		nicePrint($toReturn);
		return $toReturn;
	}
	function stringToArray($array) {
		$toReturn = [];
		while(strlen($array)>0){
			$toReturn[] = strval(substr($array,0,1));
			$array = substr($array,1);
		}
		return $toReturn;
	}
	function nextPrimeExt($primeArray, $currentVal) {

	}