<!-- Creare uno shop online.
strutturare le classi gestendo l'ereditarietà dove necessario.
provare a far interagire tra di loro gli oggetti
(l'utente dello shop per esempio inserisce una carta di credito) -->
<?php
class Product {

    public $name;

    public $price;

    public $category;

    public function __construct($name, $price, $category) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

}

class Client {

    public $name;

    public $surname;

    public $email;

    public $password;

    public function __construct($name, $surname, $email, $password) {
        $this->name = $name;
        $this->price = $price;
        $this->email = $email;
        $this->password = $password;
    }

}



$forno = new Product('Forno', '100$', 'Elettrodomestici');
var_dump($forno);

$
