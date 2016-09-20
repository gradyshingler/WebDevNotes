<h1>Question 3</h1>
<p>The prime factors of 13195 are 5, 7, 13 and 29.

	What is the largest prime factor of the number 600851475143 ?</p>
<?php
	include_once "functions.php";

	$factorArray=[];

	$firstFactor = getPrimeFactors(600851475143);
	nicePrint("Factors of 600851475143:");
	nicePrint($firstFactor);
