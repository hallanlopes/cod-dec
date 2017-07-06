<?php

$string=$_GET['msg']; // Variavel da mensagem que será criptografada
$newstring= " "; // Variavel que recebe o resultado da codificação
$chave=$_GET['sp']; // Variavel que recebe o numero de casas que ira se deslocar 

for($i=0;$i<strlen($string);$i++){ //Faz o teste da codificação
	$ascii=ord($string[$i]); //Retorna o valor ASCII do caractere
	$ascii=$ascii + $chave; //Soma o valor ASCII com a chave
	$newstring[$i]=chr($ascii); //Torna o caractere da variavel ASCCI em um valor especifico 
	
	echo "<p>" . $ascii . "</p>"; //Imprime o valor da variavel, com intuito de achar erros
    echo "<p>" . $string[$i] . "</p>"; //Imprime o valor da variavel, com intuito de achar erros


}
       echo "<p>" . $newstring . "</p>";//Imprime o valor da variavel codificada
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
