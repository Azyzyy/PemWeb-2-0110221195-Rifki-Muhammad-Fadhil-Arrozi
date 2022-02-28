<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['rifki', 'bacang', 'beklin', 'zii'];
	array_unshift($name, 'iki', 'ikok');
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>