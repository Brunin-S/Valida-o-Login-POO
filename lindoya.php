<?php

class login {
    private $nome;
    private $email;
    private $senha;

    public function __construct($nome, $email, $senha) {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function setNome($n) {
        $this->nome = $n;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEmail($e) {
        $this->email = $e;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($s) {
        $this->senha = $s;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function Logar() {
        if ($this-> email == "santanabruno.kg@gmail.com" && $this-> senha == "loveyouz1") {
            echo "Logado com sucesso senhor(a) " . $this->getNome() . ".";
        } else {
            echo "Credenciais invalidas!";
        }
    }
}

$login = new login("Bruno Santana", "santanabruno.kg@gmail.com", "loveyouz1");
$login->Logar();


