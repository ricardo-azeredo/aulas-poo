<?php 
class Post {
    public int $likes = 0;
    public array $comentarios = [];
    private string $autor; //Posso inicializar como vazio  = ''

    public function aumentarLikes() {
        $this->likes++;
    }
    //Consegue tratar a informação que chega
    public function setAutor($autor){
        if(strlen($autor) >= 3){
           ucfirst($autor); // Coloca o primeiro caracter maiúsculo.
            $this->autor = ucfirst($autor); // Coloca o primeiro caracter maiúsculo.
        } 
    }

    public function getAutor() {
        return $this->autor ?? 'Visitante';
    }
}

$post1 = new Post();
$post1->setAutor("pi");

$post2 = new Post();
$post2->setAutor("Fulano");
$post2->aumentarLikes();

//Não fazer deste jeito segundo o conceito do encapsulamento
// echo "Post 1: ".$post1->likes." likes - ".$post1->autor."</br>";
// echo "Post 2: ".$post2->likes." likes - ".$post2->autor."</br>";

echo "Post 1: ".$post1->likes." likes - ".$post1->getAutor()."</br>";
echo "Post 2: ".$post2->likes." likes - ".$post2->getAutor()."</br>";