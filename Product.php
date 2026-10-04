<?php

class Product
{
    public string $name;
    public string $brand;
    public string $image;
    public string $description;

    public float $price;
    public float $tax = 0.14;

    public function getName(): string
    {
        return $this->name;
    }

    public function priceAfterDiscount(): float
    {
        return $this->price * 0.90;
    }

    public function getFinalPrice(): float
    {
        $discountPrice = $this->priceAfterDiscount();

        return $discountPrice + ($discountPrice * $this->tax);
    }
}


$proOne = new Product();

$proOne->name = "iPhone 18 Pro Max";
$proOne->brand = "Apple";
$proOne->image = "imageOne";
$proOne->description = "iPhone 18 is an amazing phone";
$proOne->price = 107500;


$proTwo = new Product();

$proTwo->name = "Samsung S26 Ultra";
$proTwo->brand = "Samsung";
$proTwo->image = "imageTwo";
$proTwo->description = "Samsung new Ultra available now";
$proTwo->price = 84499;


$proThree = new Product();

$proThree->name = "ASUS TUF A16 Gaming";
$proThree->brand = "ASUS";
$proThree->image = "imageThree";
$proThree->description = "ASUS TUF is a powerful gaming laptop";
$proThree->price = 82999;