<?php

// JOIN entre duas tabelas
$res = $pdo->query("SELECT * from tabela1  T1 join tabela2 T2 on T1.id_fk = T2.id where T1.coluna1 = '$variável'");	
// nota: seleciona tudo de ambas as tabelas. Note que T1 e T2 são apelidos. 
//A tabela1 está ligada à tabela 2 por uma foreign key. No caso, a tabela2 é a mãe.


?>
