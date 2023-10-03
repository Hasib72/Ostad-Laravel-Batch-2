<?php
class Product
{
    private int $id;
    private string $name;
    private float $price;
	
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice(): float
    {
        return number_format($this->price, 2);
    }

    public function showDetails(): void
    {
        echo "Product Details:", PHP_EOL;
        echo "- ID    : ", $this->id, PHP_EOL;
        echo "- Name  : ", $this->name, PHP_EOL;
        echo "- Price : $", $this->getFormattedPrice(), PHP_EOL;
    }
}

$product = new Product(1, "T-shirt", 19.99);
$product->showDetails();