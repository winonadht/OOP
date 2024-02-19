<?php

class beverage {
    public $name;
    public $color;
    public $price;
    public $temp;

    public function __construct(string $name, string $color,float $price,string $temp = "cold"){

        $this->name = $name; 
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;

    }
    public function nameBeverage()
    {
        echo "this $this->color $this->name that costs: $this->price $, is $this->temp";
    }
}

$beverage1 = new beverage("orange juice","orange",2);
$beverage2 = new beverage("tea", "green", 3);
$beverage3 = new beverage("cola", "black", 2);




$beverage1->nameBeverage();
$beverage2->nameBeverage();
$beverage3->nameBeverage();



class beer extends beverage {
    public $alcoholPercent;
    public function __construct(string $name, string $color,float $price,string $temp,float $alcoholPercent){
        parent:: __construct($name, $color, $price,$temp);

        $this->alcoholPercent = $alcoholPercent;
    }
public function alcoholPercent()
{
echo "this $this->color $this->name that costs: $this->price $, is $this->temp is $this->alcoholPercent % of alcohol";
}
}


$beer1 = new beer("Jupiler", "blond", 8.5,"cold", 3);


$beer1->alcoholPercent(); 


