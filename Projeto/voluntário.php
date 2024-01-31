<?php

Class Voluntário{

private $pdo;
//6 funções
public function __construct($dbname, $host, $user, $password) {
    try {
        $this->pdo = new PDO("mysql:dbname=".$dbname . ";host=" . $host, $user, $password);
    }
    catch(PDOException $e) {
        echo "Erro com base de dados: " . $e->getMessage();
        exit();
    }
    catch(Exception $e) {
        echo "Erro genérico: " . $e->getMessage();
        exit();
    }
    
}

public function buscarDados() {
    $res = array();
    $cmd = $this->pdo->query("SELECT * FROM volunt ORDER BY nome");
    $res = $cmd->fetchAll(pdo::FETCH_ASSOC);
    return $res;
}

public function inscreverVoluntario($nome, $telefone, $email, $senha) {
//verifica se o email já foi utilizado
    $cmd = $this->pdo->prepare("SELECT id from volunt WHERE email = :e"); 
    $cmd->bindValue(":e", $email);
    $cmd->execute();
    if ($cmd->rowCount() > 0) { 
        return false;
    } else {
        
        $cmd = $this->pdo->prepare("INSERT INTO volunt (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
        $cmd->bindValue(":n", $nome);
        $cmd->bindValue(":t", $telefone);  
        $cmd->bindValue(":e", $email);
        $cmd->bindValue(":s", $senha);
        $cmd->execute();
        return true;
    }
}

public function removerVoluntario($id) {
    $cmd = $this->pdo->prepare("DELETE FROM volunt WHERE id = :id");
    $cmd->bindValue(":id", $id);
    $cmd->execute();
}

public function buscarDadosVoluntario($id) {
    $res = array();
    $cmd = $this->pdo->prepare("SELECT * from volunt WHERE id = :id");
    $cmd->bindValue(":id", $id);
    $cmd->execute();
    $res = $cmd->fetch(PDO::FETCH_ASSOC);
    return $res;
}

public function editarVoluntario($id, $nome, $telefone, $email, $senha ) 
{


    $cmd = $this->pdo->prepare("UPDATE volunt SET nome = :n, telefone = :t, email = :e, senha = :s WHERE id = :id");
    $cmd->bindValue(":n", $nome);
    $cmd->bindValue(":t", $telefone);
    $cmd->bindValue(":e", $email);
    $cmd->bindValue(":s", $senha);
    $cmd->bindValue(":id", $id);
    $cmd->execute();
        
    }
}

?>