<?php
declare(strict_types=1);
class beverage {
    private $name;
    private $color;
    private $price;
    private $temp;

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
    public function setPrice(float $price): void
{
    $this -> price = $price;
}
    public function nameBeverage()
    {
        echo "this $this->color $this->name that costs: $this->price $, is $this->temp";
    }


}

$beverage1 = new beverage("orange juice","orange",2);
$beverage2 = new beverage("tea", "green", 3);
$beverage3 = new beverage("cola", "black", 2);

?>

<?php
$beverage1->nameBeverage();
$beverage2->nameBeverage();
$beverage3->nameBeverage();

$beverage1->setPrice(3.5);
echo "The new price of beverage is " . $beverage1->getPrice();
?>
