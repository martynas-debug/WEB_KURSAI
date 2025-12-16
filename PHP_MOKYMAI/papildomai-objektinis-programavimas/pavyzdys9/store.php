<?php

include("product.php");

class Store
{
    private $title;
    private $products;

    public function __construct($title, $products) {
        $this->title = $title;
        $this->products = $products;
    }

    public function PrintInfoWithHeader($header) {
        echo "<h1>$header</h1>";
        $this->PrintInfo();
    }

    public function PrintInfo() {
        echo "<h2>Store name: $this->title</h2>";

        $this->PrintProductsTable();

        echo "<p>Total products value: " . $this->AllProductsValue() . " eur</p>";
        echo "<p>Total products quantity: " . $this->AllProductsQuantity() . "</p>";

        echo "<p>Cheapest product:</p>";
        $cheapestProduct = $this->CheapestItem();
        $cheapestProduct->PrintInfoInList();

        echo "<p>Average product price: " . round($this->AveragePrice(), 2) . " eur</p>";
    }

    public function PrintProductsTable() {
        echo "<p>Products list:</p>"
            .'<table border="1">'
            ."<tr>"
            ."<th>Title</th>"
            ."<th>Price</th>"
            ."<th>Quantity</th>"
            ."</tr>";
        foreach ($this->products as $product) {
            $product->PrintTableRow();
        }
        echo "</table>";
    }

    public function AllProductsValue() {
        $value = 0;
        foreach ($this->products as $product) {
            $value += $product->GetTotalValue();
        }
        return $value;
    }

    public function AllProductsQuantity() {
        $total = 0;
        foreach ($this->products as $product) {
            $total += $product->GetQuantity();
        }
        return $total;
    }

    public function CheapestItem() {
        $cheapest = $this->products[0];
        foreach ($this->products as $product) {
            if ($product->GetPrice() < $cheapest->GetPrice()) {
                $cheapest = $product;
            }
        }
        return $cheapest;
    }

    public function AveragePrice() {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->GetPrice();
        }
        return $sum / count($this->products);
    }
}