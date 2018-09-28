<!DOCTYPE html>
<html>
<head>
	<title>Dades Formulari</title>
</head>
<body>

	<?php

		$Text = $_REQUEST['mytext'];
		echo "<b>Texte</b>:\t$Text<br>";

		$Radio = $_REQUEST['myradio'];
		echo "<b>Radio Button</b>:\t$Radio<br>";

		$Checkbox = $_REQUEST['mycheckbox'];
		echo "<b>CheckBox</b>:\t$Checkbox<br>";

		$Select = $_REQUEST['myselect'];
		echo "<b>Select</b>:\t$Select<br>";

		$TextArea = $_REQUEST['mytextarea'];
		echo "<b>Text Area</b>:\t$TextArea\n";	

	?>

</body>
</html>