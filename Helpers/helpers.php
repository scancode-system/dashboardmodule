<?php

function addString($string, $lenght, $char, $before = true) {
	$tot = $lenght - mb_strlen($string);

	for ($i = 0; $i < $tot; $i++) {
		if ($before)
			$string = $char . $string;
		else
			$string = $string . $char;
	}
	return $string;
}

function code_utf8($string){
	return mb_convert_encoding($string, 'UTF-8');
}
