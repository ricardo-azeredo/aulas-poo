<?php
//require será usado no index e nos arquivos na raiz.
require_once 'models/Usuario.php';


class UsuarioDaoMysql implements UsuarioDAO {
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuario $suario){
        $sql = $this->pdo->prepare("INSERT INTO tbl_usuarios (nome, email) VALUES (:nome, :email)");
        $sql->bindValue(":nome",$nome);
        $sql->bindValue(":email",$email);
        $sql->execute();

        $usuario->setId($this->pdo->lastInsertId());
        return $usuario;
    }
    
    public function findAll(){
        $array = [];

        $sql = $this->pdo->query("SELECT * FROM tbl_usuarios");
        if($sql->rowCount() > 0){
            $data = $sql->fetchAll();

            foreach($data as $item){
                $usuario = new Usuario();
                $usuario->setId($item['id']);
                $usuario->setNome($item['nome']);
                $usuario->setEmail($item['email']);

                $array[] = $usuario;
            }
        }

        return $array;
    }
    public function findByEmail($email) {
        $sql = $this->pdo->prepare("SELECT * FROM tbl_usuarios WHERE email = :email");
        $sql->bindValue(':email', $email);
        $sql->execute();
        if($sql->rowCount() > 0) {
            $data = $sql->fetch();
            $usuario = new Usuario();
            $usuario->setNome($data['nome']);
            $usuario->setEmail($data['email']);

            return $usuario;
        } else {
            return false;
        }
    }

    public function findById($id){

    }
    public function update(Usuario $suario){

    }
    public function delete($id){

    }
}