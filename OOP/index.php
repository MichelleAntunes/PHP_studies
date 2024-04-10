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

class Humano {
    public const OLHOS = 2; // declara maiusculo e sem $
    public const PERNAS = 2;
    public const BRACO = 2;

    function mostrarConst(){
        echo self::BRACO . "<br>";
    }
}

$michelle = new Humano;

echo $michelle::OLHOS . "<br>"; // sintaxe para acessar diferente

$michelle->mostrarConst();

//Visibilidade

//Exemplo sendo public
class CarMichelle {

    public $rodas = 4;
    public $vidro = "Sem pelicula";
}

class Mecanico {

    public function alterarRodas($carro){
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro, $pelicula){
        $carro->vidro = $pelicula;
    }
}

$carro = new CarMichelle;

echo $carro->rodas . "<br>";

$mateus = new Mecanico;

$mateus->alterarRodas($carro);

echo $carro->rodas ."<br>";

$mateus->colocarPelicula($carro, "G20");

echo $carro->vidro . "<br>";

//Exemplo sendo private
// class CarMichelle {

//     private $rodas = 4;
//     private $vidro = "Sem pelicula"; //Retorna erro fatal
// }

// class Mecanico {

//     public function alterarRodas($carro){
//         $carro->rodas = 10;
//     }

//     public function colocarPelicula($carro, $pelicula){
//         $carro->vidro = $pelicula;
//     }
// }

// $carro = new CarMichelle;

// echo $carro->rodas . "<br>";

// $mateus = new Mecanico;

// $mateus->alterarRodas($carro);

// echo $carro->rodas ."<br>";

// $mateus->colocarPelicula($carro, "G20");

// echo $carro->vidro . "<br>";

class SerHumano {
 public  $idade = 30;

 public function falar (){

    echo"Olá mundo <br>";
 }


 private function gritar (){ ///como é private, tem que ter algo public para acessar esse metodo

    echo"GRITANDO <br>";
 }

 public function acessarGritando (){
    $this->gritar();
 }
 protected function falarBaixinho (){ // nao consigo acessar sem criar o metodo abaixo
    echo"estou falando baixinho <br>";
 }

 public function acessarBaixinho (){
    $this->falarBaixinho();
 }
};

$ze = new SerHumano;
$ze->falar();
$ze->acessarGritando();
$ze->acessarBaixinho();

class Programador extends SerHumano {
// aqui consigo acessar protected, porém nao consigo acessar private
}

$tiago = new Programador;

echo $tiago->idade . "<br>";
$tiago->falar();
$tiago->falar();
$tiago->acessarBaixinho();

//Ex. 56

class HumanoExercicio {
    public $idade = 30;
    public $nome = "Michele";

    public function falar (){
        echo "Olá sou o aluno, meu nome é $this->nome <br>"; 
    }
}

class Professor extends HumanoExercicio {
    public $idade = 34;
    public $nome = "Tiago";

    public function falar (){
        echo "Olá sou o professor, meu nome é $this->nome <br>"; 
    }
}

$michelle = new HumanoExercicio;
echo "$michelle->idade <br>";
$michelle->falar();
$tiago = new Professor;
echo "$tiago->nome <br>";
$tiago->falar();

//chegando ancestralidade

class HumanoAc {

}

$marcos = new HumanoAc;

if ($marcos instanceof HumanoAc) {  
    echo "Marcos é um humano <br>"; }

if ($michelle instanceof HumanoAc) {  
        echo "Michelle é um Humano  <br>"; } else{
            echo "Michelle não é um humano <br>";
        }
// interfaces

interface Caracteristicas {

    const nome = "Mateus";
    public function falar();
}

class Humaninho implements Caracteristicas {
    public $idade = 29;

    public function falar(){
    echo "Olá mundo interface exatamente igual <br>";
    }
    public function dizerNome(){
        // echo "O nome é " . self::nome . "<br>"; ambos funcionam
        echo "O nome é " . Caracteristicas::nome . "<br>";
    }
}

$mateus = new Humaninho;
$mateus->falar();
$mateus->dizerNome();

//usando use

trait Objeto {

    public function teste(){
        echo "Testanto trait de objeto <br>";
    }
};

trait Testanto {

    public function teste2(){
        echo "Testanto 2 trait de objeto <br>";
    }
};

class Central {
    use Objeto;
    use Testanto;

}

$xx = new Central;
$xx->teste();
$xx->teste2();

//classes abstratas

abstract class Teste {

    public static function testantoClasse (){
        echo "testando abstract <br>";
    }

    abstract public function testandoAbs (); //tem que serem implementados
    
}

Teste::testantoClasse();

class Nova extends Teste {

    public function testandoAbs (){
        echo "Teste ABS <br> ";
    }
}

$n = new Nova;
$n->testandoAbs();

//contrutores


class CarCar{
    public $portas;
    public $cor;
    public $marca;
    function __construct( $portas,$cor ,  $marca) {

        $this->portas = $portas;
        $this->cor = $cor; 
        $this->marca = $marca;
    }
}
 

$ferrari = new CarCar ( 4, "Vermela", "Ferrari");
echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor e tem $ferrari->portas portas. <br>";

//Ex. 57

class Cachorrinho {
    public $idade;
    public $cor;
    public $raca;
    function __construct( $idade,$cor ,  $raca) {

        $this->idade = $idade;
        $this->cor = $cor; 
        $this->raca = $raca;
    }
    public function exibirAnimal (){
        echo "O cachorro tem a idade de  $this->idade anos e tem a cor $this->cor e é da raça $this->raca. <br>";
    }
};

$nick = new Cachorrinho ( 10, "Branca", "Maltês");
$nick->exibirAnimal() ;

//classes anonimas

$pessoa = new class(){
    public $nome = "Mateus";

    public function dizerNome( ){
        echo "Olá meu nome é $this->nome <br>";
    }
};

echo $pessoa->nome . "<br>";

$pessoa->dizerNome();

//verificando classes


if ( class_exists("Cachorrinho")){
    echo "Class Cachorrinho existe <br>";

}


print_r(get_class_methods("Cachorrinho"));
print_r(get_class_vars("Cachorrinho"));

echo "<br>";
// verificando objetos
if (is_object($nick)){
    echo "é um objeto";
};
echo "<br>";

echo(get_class($nick));
echo "<br>";
if (method_exists($nick, "falar")){
    echo "Metodo falar existe para nick <br>";
}else{
    echo "Metodo falar não existe para nick";
}

//Ex. Programação 1

class Calculadora {

       function somar($a,$b){
        return $a + $b;
    }
    function subtrair($a,$b){
        return $a - $b;
    }
    function multiplicar($a,$b){
        return $a * $b;
    }
    function dividir($a,$b){
        return $a / $b;
    }
}
$calculadora = new Calculadora();

$a = 10;
$b = 2;



echo $calculadora->somar($a, $b);
echo "<br>";
echo $calculadora->subtrair($a, $b);
echo "<br>";
echo $calculadora->multiplicar($a, $b);
echo "<br>";
echo $calculadora->dividir($a, $b);

//Ex. Programação 2

class Task {
    private $title;
    private $description;
    private $completed;
 
    public function __construct($title, $description) {
        $this->title = $title;
        $this->description = $description;
        $this->completed = false;
    }
 
    public function markAsCompleted() {
        $this->completed = true;
    }
 
    public function markAsIncomplete() {
        $this->completed = false;
    }
 
    public function getTitle() {
        return $this->title;
    }
 
    public function getDescription() {
        return $this->description;
    }
 
    public function isCompleted() {
        return $this->completed;
    }
}
 
 
$task = new Task("Comprar arroz", "Comprar feijão, pão e ovos");
echo "Tarefa: " . $task->getTitle() . "\n";
echo "Descrição: " . $task->getDescription() . "\n";
echo "Status: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
 
$task->markAsCompleted();
echo "Status após marcação como concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";
 
$task->markAsIncomplete();
echo "Status após marcação como não concluída: " . ($task->isCompleted() ? "Concluída" : "Pendente") . "\n";