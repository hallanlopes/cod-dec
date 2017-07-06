

Codec (Na visão de usuário):
========

 1. O que é (objetivo) e como funciona o mecanismo de cifragem/decifragem de César?
-----------
```
   O objetivo é tanto codificar uma mensagem especifica quanto descodificar a mesma, usandos um mecanismo de chave no qual soma 
```


```
gcc codec.c codec.h interface.c -o codec
```

Executando a aplicação
-----------
```
- ./codec
```

Codec (Na visão do desenvolvedor):
========

Visão geral do repositório:
-----------
1. interface.c: Funções responsáveis pela leitura (scanf) e escrita (printf) de informações ao usuário da aplicação.
2. codec.h: Definições (protótipo) das funções do arquivo (Codec.c).
3. codec.c: Funções principais responsáveis pela compressão/descompressão e compactação/descompactação.

Novas funcionalidades (Futuro):
-----------
- Remover a limitação de 30 chars para o nome do arquivo.
- Criar novas funções para compressão (Algorítimo Burrows–Wheeler).
