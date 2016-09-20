<h1>Question 6</h1>
<p>The sum of the squares of the first ten natural numbers is,
<br />
12 + 22 + ... + 102 = 385
	<br />
The square of the sum of the first ten natural numbers is,
	<br />
(1 + 2 + ... + 10)2 = 552 = 3025
	<br />
Hence the difference between the sum of the squares of the first ten natural numbers and the square of the sum is 3025 − 385 = 2640.
	<br />
Find the difference between the sum of the squares of the first one hundred natural numbers and the square of the sum.</p>
<?php
	include_once "functions.php";

	$first100Numbs = createMulitplicationTableValues(1,100);

	$first100Added = addArray($first100Numbs);
	$first100AddedSquared = pow($first100Added, 2);
	nicePrint($first100AddedSquared);

	array_walk($first100Numbs, function(&$data) {
		$data = $data * $data;
	});
	$first100SquaredAdded = addArray($first100Numbs);
	nicePrint($first100SquaredAdded);

	nicePrint("Difference: ".($first100AddedSquared - $first100SquaredAdded));

