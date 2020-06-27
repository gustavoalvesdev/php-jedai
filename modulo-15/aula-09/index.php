<?php 

	$str = 'Gu
ok';

if (preg_match('/gu\\r\\nok/is', $str)) {
	echo 'ok';
}
