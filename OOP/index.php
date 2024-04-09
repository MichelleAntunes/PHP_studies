<?php


class Pessoas {
function falar(){
    echo"Olá, eu sou um objeto! <br>";
}
}


$michelle = new Pessoas;
$michelle->falar();

//Ex. 53

class Cachorro {
    function latir($nome){
        echo "Oi, eu sou $nome Au Au <br>";
    }
    function andar(){
        echo "Andando.... <br>";
    }
}

$nicolle = new Cachorro;
$nicolle->latir("Nicolle");
$nicolle->andar();

$nino = new Cachorro;
$nino->andar();

//Propriedades

class Car {
    public $rodas = 4;
    public $aro = 20; 

    public $cor = "vermelho";
}

$ferrari = new Car;

echo $ferrari->aro . "<br>";
echo $ferrari->rodas . "<br>";
echo $ferrari->cor= "verde" . "<br>";

//Ex. 54

class People {
    public $nome;
    public $idade;

    function andar($m){
        echo "Olá, a pessoa andou $m metros. <br>";
    }
};

$michelle = new People;
echo $michelle -> nome = "Michelle" ;
echo $michelle -> idade = 30 ;
$michelle -> andar(20);

echo "O nome dela é $michelle->nome e tem $michelle->idade anos <br>";

//Usando $this

class Animal {

    public $nome;

    function escolherNome($nome) {
    $this->nome = $nome;
    }

    function latir(){
        return "Au Au <br>";
    }

    function latirForte(){
        return strtoupper(($this->latir()));
    }
};

$frida = new Animal;

echo "O nome do animal é: $frida->nome <br>"; 

$frida -> escolherNome("Frida"); 

echo "O nome do animal é: $frida->nome <br>";

echo $frida->latir();
echo "<br>" . $frida->latirForte();

//Ex. 55

class Carro {
    public $cor;
    public $ano;
   public $velocidadeMaxima;

    function setVelocidadeMaxima($vel){
        $this->velocidadeMaxima = $vel;
    }

    function getVelocidadeMaxima(){
        echo "A velocidade máxima do carro é: $this->velocidadeMaxima km/h <br>";
    }
}

$fusca = new Carro;

$fusca->cor = ("branca");
$fusca->ano = (1993);

$fusca->setVelocidadeMaxima(200);	
$fusca->getVelocidadeMaxima();