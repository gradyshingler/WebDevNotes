<h1>Question 4</h1>
<p>A palindromic number reads the same both ways. The largest palindrome made from the product of two 2-digit numbers is 9009 = 91 x 99.
	<br />
	Find the largest palindrome made from the product of two 3-digit numbers.</p>
<?php
	include_once "functions.php";

	$possibleValues = createMulitplicationTableValues(999,999);

	$palindromes = array_filter($possibleValues, "isPalindrome");

	nicePrint($palindromes);
