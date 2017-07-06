<?php

$string=$_GET['msg']; // Variável da mensagem que será criptografada
$newstring= " "; // Variável que recebe o resultado da codificação
$chave=$_GET['sp']; // Variável que recebe o numero de casas que ira se deslocar 

for($i=0;$i<strlen($string);$i++){ //Faz o teste da codificação
	$ascii=ord($string[$i]); //Retorna o valor ASCII do caractere
	$ascii=$ascii + $chave; //Soma o valor ASCII com a chave
	$newstring[$i]=chr($ascii); //Torna o caractere da variável ASCCI em um valor específico 
	
	echo "<p>" . $ascii . "</p>"; //Imprime o valor da variável, com intuito de achar erros
    echo "<p>" . $string[$i] . "</p>"; //Imprime o valor da variável, com intuito de achar erros


}
       echo "<p>" . $newstring . "</p>";//Imprime o valor da variável codificada
?>

<html>
<body>
	<form>
		<textarea name=msg></textarea> <!-- Caixa de mensagem á ser codificada -->
			<td>
				<input type=text size=2 name=sp> <!-- Caixa de escolha de chave -->
				<input type=submit name=submit value=codificar> <!-- Botão de codifica -->
					</form> 
</body>
</html>
