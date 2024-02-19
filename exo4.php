<?php
declare(strict_types=1);

class beverage {
   protected $name;
   protected $color;
   protected $price;
   protected $temp;

   public function __construct(string $name, string $color,float $price,string $temp = "cold"){

        $this->name = $name; 
        $this->color = $color;
        $this->price = $price;
        $this->temp = $temp;

    }
  


public function getName(): string 
{
    return $this -> name;

}
public function getColor(): string 
{
    return $this -> color;

}
public function getPrice(): float
{
    return $this -> price;

}
public function getTemp(): string 
{
    return $this -> temp;

}

public function setColor(string $color): void
{
    $this -> color = $color;

}
public function getInfo(): string
{
   return  "this $this->color $this->name that costs: $this->price $, is $this->temp";
}



}


class beer extends beverage {
   protected $alcoholPercent;

   public function __construct(string $name, string $color,float $price,string $temp,float $alcoholPercent){
        parent:: __construct($name, $color, $price,$temp);

        $this->alcoholPercent = $alcoholPercent;
    }

    public function getAlcoholPercent(): float
{
    return $this -> alcoholPercent;

}
public function alcoholPercent()
{
return "this". $this->getColor() . $this->getName() . "that costs:" . $this->getPrice() . "$, is" . $this->getTemp() . "is" . $this->getAlcoholPercent() . "% of alcohol";
}

public function beerInfo()
{
return "this". $this->getColor() . $this->getName() . "that costs:" . $this->getPrice() . "$, is" . $this->getTemp() . "is" . $this->getAlcoholPercent() . "% of alcohol";
}
}

$beer1 = new beer("Jupiler", "blond", 8.5,"cold", 3);


echo $beer1->getInfo() . "<br" ; 
echo $beer1->alcoholPercent();

$beer1->setColor("light");

 echo "The new color of beer is " . $beer1->getColor() . "<br>";
 echo $beer1->beerInfo();


