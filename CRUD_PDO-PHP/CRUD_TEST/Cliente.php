<?php

class Cliente{

    private $connect;
    
    // Conexao
    public function __construct($host,$dbname,$username,$password)// conexao
    {
        try{
            $this-> connect = new \PDO("mysql:host=$host;dbname=$dbname",$username,$password); 
        }catch(PDOException $e){
            echo "erro do banco de dados:".$e->getMessage();
        }catch(Exception $e){
            echo "erro generico: ".$e-> getMessage();
        }
        

    }

    // CRUD
    public function create($nome,$sobrenome,$email,$idade){

        $sql = "INSERT INTO clientes (nome,sobrenome,email,idade) VALUES (:n,:s,:e,:i)";
        $stmt = $this-> connect -> prepare($sql);

        $stmt -> bindValue(":n",$nome);
        $stmt -> bindValue(":s",$sobrenome);
        $stmt -> bindValue(":e",$email);
        $stmt -> bindValue(":i",$idade);

        $stmt-> execute();

        return true;

    }

    public function read(){
        $arr = array();
        $sql = "SELECT * FROM clientes";
        $stmt = $this-> connect-> prepare($sql);

        $stmt-> execute();

        $arr = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        return $arr;
    } 

    public function update($id,$nome,$sobrenome,$email,$idade){
        $sql = "UPDATE clientes SET nome = :n, sobrenome = :s , email = :e , idade = :i WHERE id = :id";
        $stmt = $this -> connect -> prepare($sql);
        
        $stmt-> bindValue(":n",$nome);
        $stmt-> bindValue(":id",$id);
        $stmt-> bindValue(":s",$sobrenome);
        $stmt-> bindValue(":e",$email);
        $stmt-> bindValue(":i",$idade);

        $stmt->execute();

        return true;
    }

    public function delete($id){
        
        $sql = "DELETE FROM clientes WHERE id = $id";
        $stmt = $this-> connect -> query($sql);
        
        return true;

    }


    function buscar($id){

            $cliente = new Cliente("localhost", "crudtest", "root", ""); 
            $dados = array();
            // pegando registro do usuario
            $sql = "SELECT * FROM clientes WHERE id = $id";
            $stmt = $cliente-> getConnect() -> query($sql);
            $dados = $stmt-> fetchAll(PDO::FETCH_ASSOC);
            
            return $dados;
    }


    // GET e SET

    


    /**
     * Get the value of connect
     */ 
    public function getConnect()
    {
        return $this->connect;
    }

    /**
     * Set the value of connect
     *
     * @return  self
     */ 
    public function setConnect($connect)
    {
        $this->connect = $connect;

        return $this;
    }
}

