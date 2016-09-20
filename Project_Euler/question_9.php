<h1>Question 9</h1>
<p></p>
<?php
	include_once "functions.php";
	for($a = 1; $a<=332; $a++) {
		for($b = 1; $b <= 499; $b++) {
			$c = 1000 - $a - $b;
			$asquared = pow($a, 2);
			$bsquared = pow($b, 2);
			$csquared = pow($c, 2);
			if($asquared + $bsquared == $csquared) {
				nicePrint("a: ".$a.", b: ".$b.", c: ".$c);
				nicePrint("product: ".($a*$b*$c));
			}
		}
	}