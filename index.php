<!-- Creare uno shop online.
strutturare le classi gestendo l'ereditarietà dove necessario.
provare a far interagire tra di loro gli oggetti
(l'utente dello shop per esempio inserisce una carta di credito) -->
<?php
class Product {

    public $name;

    public $price;

    public $category;

    public function __construct(string $name, int $price, string $category) {
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

    public $balance;

    public function __construct(string $name, string $surname, string $email, string $password, int $balance) {
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->password = $password;
        $this->balance = $balance;
    }


}


class Payments{

    public $price;

    public $card;

    public function __construct(int $price, string $card) {
        $this->price = $price;
        $this->card = $card;
    }

    public function buyProduct($productPrice, $balance){
      if ($productPrice <= $balance) {
        echo "Transazione andata a buon fine";
      }else {
        echo "Transazione non andata a buon fine";
      }
    }


}

// class Client extends Payments {
//
// }
//
// class Product extends Payments {
//
// }



$forno = new Product('Forno', '100$', 'Elettrodomestici');
var_dump($forno);

echo "<br><br>";

$cliente1 = new Client('andrea', 'lamanna', 'anlam@gm.it', 'Lamaan007', '50');
var_dump($cliente1);

echo "<br><br>";

$pagamento1 = new Payments($forno->price, 'visa');
var_dump($pagamento1);

echo "<br><br>";

buyProduct($forno->price, $cliente1->balance);
