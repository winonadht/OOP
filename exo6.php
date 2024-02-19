<?php

class beverage {
    private $name;
    private $color;
    private $price;
    private $temp;
    const bar = "Het Vervolg"; 

   public function __construct(string $name, string $color,float $price,string $temp = "cold", )
   {

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
   
    public function nameBeverage(): string 
    {
        return "this" . $this->getColor() . $this->getName() . "that costs:" . $this->getPrice() . "$, is" . $this->getTemp();
    }

    
    public static function sayWelcome(): string
    {
        return self::bar;
    }
}





$beverage1 = new beverage("orange juice","orange",2);
$beverage2 = new beverage("tea", "green", 3);
$beverage3 = new beverage("cola", "black", 2);






class beer extends beverage {
    private $alcoholPercent;
   public function __construct(string $name, string $color,float $price,string $temp,float $alcoholPercent){
        parent:: __construct($name, $color, $price,$temp);

        $this->alcoholPercent = $alcoholPercent;
    }
public function alcoholPercent()
{
return "this" . $this->getColor() . $this->getName() . "that costs:" . $this->getPrice() . "$, is" . $this->getTemp() . "is" . $this->alcoholPercent ." % of alcohol";
}
public static function sayWelcome(): string
    {
        return self::bar;
    }
}




$beer1 = new beer("Jupiler", "blond", 8.5,"cold", 3);


$beer1->alcoholPercent(); 


echo "welcome to the bar " . beverage::sayWelcome() . "<br>";

echo "welcome to the bar " . beer::sayWelcome();
 
