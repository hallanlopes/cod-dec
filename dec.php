<?php

$string=$_GET['msg']; // Variável da mensagem que será descriptografada
$newstring= " "; // Variável que recebe o resultado da descodificação
$chave=$_GET['sp']; // Variável que recebe o numero de casas que ira se deslocar 

for($i=0;$i<strlen($string);$i++){ //Faz o teste da descodificação
	$ascii=ord($string[$i]); //Retorna o valor ASCII do caractere
	$ascii=$ascii - $chave; //subtrai o valor ASCII com a chave
	$newstring[$i]=chr($ascii); //Torna o caractere da variável ASCCI em um valor específico 
	
	echo "<p>" . $ascii . "</p>"; //Imprime o valor da variável, com intuito de achar erros
    echo "<p>" . $string[$i] . "</p>"; //Imprime o valor da variável, com intuito de achar erros


}
       echo "<p>" . $newstring . "</p>"; //Imprime o valor da variável codificada
?>

<html>
<body>
	<form>
		<textarea name=msg></textarea> <!-- Caixa de mensagem á ser codificada -->
			<td>
				<input type=text size=2 name=sp> <!-- Caixa de escolha de chave -->
				<input type=submit name=submit value=decodificar> <!-- Botão de codifica -->
	</form> 
</body>
</html>
