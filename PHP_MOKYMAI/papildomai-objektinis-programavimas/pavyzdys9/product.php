<?php

class Product
{
    private $title;
    private $price;
    private $quantity;

    public function __construct($title, $price, $quantity) {
        $this->title = $title;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    public function PrintTableRow() {
        echo "<tr>"
            ."<td>$this->title</td>"
            ."<td>$this->price eur</td>"
            ."<td>$this->quantity</td>"
            ."</tr>";
    }

    public function PrintInfoInList() {
        echo "<ul>"
            ."<li><strong>Title:</strong> $this->title</li>"
            ."<li><strong>Price:</strong> $this->price eur</li>"
            ."<li><strong>Quantity:</strong> $this->quantity</li>"
            ."</ul>";
    }

    public function GetTotalValue() {
        return $this->price * $this->quantity;
    }

    public function GetQuantity() {
        return $this->quantity;
    }

    public function GetPrice() {
        return $this->price;
    }
}