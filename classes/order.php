<?php
class Order {
    public $name;
    public $phone;
    public $address;
    public $items;

    public function __construct($name, $phone, $address, $items) {
        $this->name = $name;
        $this->phone = $phone;
        $this->address = $address;
        $this->items = $items;
    }
    
    public function saveToDatabase($conn) {
        $stmt = $conn->prepare("INSERT INTO orders (name, phone, address, items) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$this->name, $this->phone, $this->address, $this->items]);
    }
}
?>
