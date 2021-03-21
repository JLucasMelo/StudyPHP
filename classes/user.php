<?php

require_once 'database.php';

class User {
    private $conn;

    // Construtor
    public function __construct(){
      $database = new Database();
      $db = $database->dbConnection();
      $this->conn = $db;
    }


    // Execute queries SQL
    public function runQuery($sql){
      $stmt = $this->conn->prepare($sql);
      return $stmt;
    }

    // Inserir Usuário
    public function insert($name, $email){
      try{
        $stmt = $this->conn->prepare("INSERT INTO crud_users (name, email) VALUES(:name, :email)");
        $stmt->bindparam(":name", $name);
        $stmt->bindparam(":email", $email);
        $stmt->execute();
        return $stmt;
      }catch(PDOException $e){
        echo $e->getMessage();
      }
    }


    // Atualizar Usuário
    public function update($name, $email, $id){
        try{
          $stmt = $this->conn->prepare("UPDATE crud_users SET name = :name, email = :email WHERE id = :id");
          $stmt->bindparam(":name", $name);
          $stmt->bindparam(":email", $email);
          $stmt->bindparam(":id", $id);
          $stmt->execute();
          return $stmt;
        }catch(PDOException $e){
          echo $e->getMessage();
        }
    }


    // Deletar Usuário
    public function delete($id){
      try{
        $stmt = $this->conn->prepare("DELETE FROM crud_users WHERE id = :id");
        $stmt->bindparam(":id", $id);
        $stmt->execute();
        return $stmt;
      }catch(PDOException $e){
          echo $e->getMessage();
      }
    }

    // Método de redirecionamento de URL
    public function redirect($url){
      header("Location: $url");
    }
}
