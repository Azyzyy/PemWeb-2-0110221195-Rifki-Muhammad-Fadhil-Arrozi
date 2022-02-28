<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['rifki', 'bacang', 'beklin', 'zii'];
	array_shift($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>