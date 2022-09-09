<?php

echo "<h2>Atividade PHP POO (Orientado a Objeto)</h2>";
echo "<h3><u>Exercício 1</u></h3>";

class invoice { //classe
    //atributo
    private $numeroFatura;
    private $desItem;
    private $qtdItem;
    private $preco;


    public function __construct($par1, $par2, $par3, $par4){
        //consulta
        $this->numeroFatura = $par1;
        $this->desItem = $par2;
        if($par3 <= 0){
            $this->qtdItem = 0;
        }
        else{
            $this->qtdItem = $par3;
        }
        if($par4 <= 0){
            $this->preco = 0.0;
        }
        else{
            $this->preco = $par4;
        }
    }

    //Método set e get
    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    public function __get($atributo){
       return $this->$atributo;
    }

    //Método getInvoiceAmount
    public function getInvoiceAmount() {
        return ($this->preco * $this->qtdItem);
    }
} //fim da classe



$inf= new invoice(10, "Mouse", 5, 79.99);

//  print_r($inf);



echo "<p> Número fatura:" . $inf -> numeroFatura . "</p>";
echo "<p> Descrição de Item:" . $inf->desItem . "</p>";
echo "<p> Quantidade Comprada do Item:" . $inf->qtdItem . "</p>";
echo "<p> Valor unitário do produto:" . $inf->preco . "</p>";
echo "<p> Valor total da fatura:" . $inf->getInvoiceAmount() . "</p>";

echo "<br>";

echo "<h3><u>Exercício 2</u></h3>";

class Empregado{ //classe
    //atributo
    private $prim_nome;
    private $sobrenome;
    private $sal_mensal;


    public function __construct($par1, $par2, $par3){
        //consulta
        $this->prim_nome = $par1;
        $this->sobrenome = $par2;
        if($par3 <= 0){
            $this->sal_mensal = 0.0;
        }
        else{
            $this->sal_mensal = $par3;
        }
    }


    //Método set e get
    public function __set($atributo, $value){
        $this->$atributo = $value;
    }
    public function __get($atributo){
       return $this->$atributo;
    }

    //Método salário anual
    public function sal_anual() {
        return ($this->sal_mensal * 12);
    }

    //Método aumento de 10% de aumento no salário
    public function sal_men_ajust() {
        return ($this->sal_mensal + ($this->sal_mensal * 0.1));
   }
} //fim da classe


$emp = new Empregado("Laryssa", "Galdino", 4000);


echo " Primeiro nome: " . $emp -> prim_nome . "</p>";
echo " Sobrenome: " . $emp -> sobrenome . "</p>";
echo " Salário Mensal: R$" . $emp -> sal_mensal . ",00 </p>";
echo " Salário Anual: R$" . $emp -> sal_anual() . ",00</p>";
echo " Salário Mensal Ajustado (acréscimo de 10%): R$" . $emp -> sal_men_ajust() . ",00</p>";

echo "<br>";

echo "<h3><u>Exercício 3</u></h3>";

class Circulo{

    private $x;
    private $y;
    private $radius;

    public function contruct__($radius,$x = 0, $y = 0 ) {
        $this->x = $x;
        $this->y = $y;
        $this->setRadius($radius);
    }
 
    public function area() { return pi() * ($this->radius * 2); }

    public function move($point) {
        $this->x = $point->getX();
        $this->y = $point->getY();
    }

    public function increase($value) { $this->setRadius($this->radius + $value); }

    public function decrease($value) { $this->setRadius($this->radius - $value); }

    public function getX() { return $this->x; }

    public function setX($x) { $this->x = $x; }

    public function getY() { return $this->y; }

    public function setY($x) { $this->y = $y; }

    public function getRadius() { return $this->radius; }

    public function setRadius($radius) { $this->radius = $radius < 0 ? 0 : $radius; }
}

?>
