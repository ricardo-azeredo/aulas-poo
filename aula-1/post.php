<?php 
class Post {
    public int $likes = 0;
    public array $comentarios = [];
    public string $autor;

    //Executa sempre que um objeto é criado.
    public function __construct($qtdLikes = 0){
        echo 'Teste </br>';
        $this->likes = $qtdLikes;
    }

    public function aumentarLikes() {
        echo 'abc</br>';
        //$this é o objeto que chama a função.
        $this->likes++;
    }
}

$post1 = new Post(25);

$post2 = new Post();
$post2->aumentarLikes();

echo "Post 1: ".$post1->likes."</br>";
echo "Post 2: ".$post2->likes."</br>";