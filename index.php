<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		class ERP{
			public static function ausgabeVonSD(){
				echo "Sales and Distribution";
			}
		}
		echo "Die statische Methode gibt aus: ";
		ERP::ausgabeVonSD();
		echo "<br>Das Objekt gibt aus: ";
		$a = new ERP;
		$a->ausgabeVonSD();
	?>
	
	<p>************************************************</p>
	<p><strong>Quellen PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>