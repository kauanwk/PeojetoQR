<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "projetoqr";

try {
    $conexao = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Conexão falhou: " . $e->getMessage());
}

return $conexao;


/*CREATE TABLE `projetoqr`.`user` (`id` INT NOT NULL AUTO_INCREMENT , 
`nome` VARCHAR(100) NOT NULL ,
 `email` VARCHAR(255) NOT NULL ,
`idade` INT NOT NULL , 
`senha` VARCHAR(255) NOT NULL , 
PRIMARY KEY (`id`)) ENGINE = InnoDB; Não apague */