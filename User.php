<?php

class User {
    protected $nome;
    protected $cognome;
    protected $email;

    function __contsruct($_nome, $_cognome, $_email) {
        $this->nome = $_nome;
        $this->cognome = $_cognome;
        $this->email = $_email;
    }

}

$mario = new User ('Mario', 'Rossi', 'rossimario@gmail.com');
$giacomo = new NewUser ('Giacomo','Verdi','giacomoverdigmail.com');
echo $mario;