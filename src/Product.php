<?php

namespace Project9;

abstract class Product
{
    private string $name;
    private string $genre;
    private array $requirements = [];
    private string $image;
    private float $truePrice;
    private int $tax;
    private string $information;
    private float $gain;
    protected string $category;

    public function __construct(string $name, string $genre, string $image, float $truePrice, int $tax, string $information, float $gain)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->image = $image;
        $this->truePrice = $truePrice;
        $this->tax = $tax;
        $this->information = $information;
        $this->gain = $gain;
    }

    public function getName()
    {

    }

    public function getCategory()
    {
     return $this->setCategory();
    }

    public function getCalculatePrice()
    {

    }

    public function printInfo()
    {

    }

    abstract public function getInfo();

    abstract public function setCategory();

}