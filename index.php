<!-- Creare uno shop online.
strutturare le classi gestendo l'ereditarietà dove necessario.
provare a far interagire tra di loro gli oggetti
(l'utente dello shop per esempio inserisce una carta di credito) -->
<?php
class Product {

    public $name;

    public $price;

    public $category;

    public function __construct(string $name, $price, string $category) {
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

    public function __construct(string $name, string $surname, string $email, string $password) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
    }

}

class Client extends Payments {

}

class Product extends Payments {

}



$forno = new Product('Forno', '100$', 'Elettrodomestici');
var_dump($forno);

echo "<br><br>";

$cliente1 = new Client('andrea', 'lamanna', 'anlam@gm.it', 'Lamaan007');
var_dump($cliente1);
