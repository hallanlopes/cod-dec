<?php

$string=$_GET['msg'];
$newstring= " ";
$chave=$_GET['sp'];

for($i=0;$i<strlen($string);$i++){
	$ascii=ord($string[$i]);
	$ascii=$ascii + $chave;
	$newstring[$i]=chr($ascii);
	
	echo "<p>" . $ascii . "</p>";
    echo "<p>" . $string[$i] . "</p>"; 


}
       echo "<p>" . $newstring . "</p>";
?>

<html>
<body>
	<form>
		<textarea name=msg></textarea>
			<td>
				<input type=text size=2 name=sp>
				<input type=submit name=submit value=codificar>
					</form> 
</body>
</html>
