<h1>Question 1</h1>
<p>If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

	Find the sum of all the multiples of 3 or 5 below 1000.</p>

<?php
	include_once "functions.php";

 	$mults3 = multiplesOf(3, 1000);
	$mults5 = multiplesOf(5, 1000);

	nicePrint("mults3: ".addArray($mults3));
	nicePrint("mults5: ".addArray($mults5));
	nicePrint("added: ".( addArray($mults3)+addArray($mults5)));

	$factors = array_unique(array_merge($mults3,$mults5), SORT_NUMERIC);

	nicePrint("Accounting for duplicates: ".addArray($factors));


