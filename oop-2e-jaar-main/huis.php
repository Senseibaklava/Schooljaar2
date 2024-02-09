<?php

class House {
    private $floor;
    private $rooms;
    private $width;
    private $height;
    private $depth;
    private $volume;
    
    // Constructor
    public function __construct($floor, $rooms, $width, $height, $depth) {
        $this->floor = $floor;
        $this->rooms = $rooms;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->setVolume($width, $height, $depth);
    }

    // Set the volume based on width, height, and depth
    public function setVolume($width, $height, $depth) {
        $this->volume = $width * $height * $depth;
    }

    // Get house details
    public function getHouse(): string {
        return "Floor: {$this->floor}, Rooms: {$this->rooms}, Volume: {$this->volume} cubic meters";
    }

    // Get the price (hypothetical implementation)
    public function getPrice(): string {
        // This is a hypothetical implementation, you should replace this with your actual pricing logic
        $price_per_cubic_meter = 1000; // Hypothetical price per cubic meter
        $total_price = $this->volume * $price_per_cubic_meter;
        return "Total price: €{$total_price}";
    }
}

// Create an instance of House
$myHouse = new House(2, 4, 10, 3, 5);

// Output house details and price
echo $myHouse->getHouse() . "\n";
echo $myHouse->getPrice() . "\n";

?>
