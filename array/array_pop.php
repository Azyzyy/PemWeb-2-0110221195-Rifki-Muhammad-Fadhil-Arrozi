<!DOCTYPE html>
<html>
<body>
<?php
	$name = ['rifki', 'bacang', 'beklin', 'zii'];
	array_pop($name);
	foreach($name as $person) {
		echo $person . '<br/>';
	}
?>
</body>
</html>