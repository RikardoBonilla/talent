<?php


class Main{

	/**
	 * 
	 * @param string $pattern
	 * @param string $text
	 * 
	 * this function valid if the regular expression is 
	 * valid against the submitted field
	 * 
	 */
	function isValidRegularExpression($pattern, $text){
		return preg_match($pattern, $text) ? true : false;
	}
}
?>