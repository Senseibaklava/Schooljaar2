<?php

// Definieer de klasse Kamer (Room)
class Room {
    private $length;
    private $width;
    private $height;

    // Constructor
    public function __construct($length, $width, $height) {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    // Methoden om lengte, breedte, hoogte en volume op te halen
    public function getLength() {
        return $this->length;
    }

    public function getWidth() {
        return $this->width;
    }

    public function getHeight() {
        return $this->height;
    } 

    public function getVolume() {
        return $this->length * $this->width * $this->height;
    }
    
}

// Definieer de klasse Huis (House)
class House {
    private $rooms = array(); // Array om kamers op te slaan

    // Voeg een kamer toe aan het huis
    public function addRoom($room) {
        $this->rooms[] = $room;
    }

    // Methode om alle kamers op te halen
    public function getRooms() {
        return $this->rooms;
    }

    // Bepaal de totale grootte van het huis
    public function getTotalVolume() {
        $totalVolume = 0;
        foreach ($this->rooms as $room) {
            $totalVolume += $room->getVolume();
        }
        return $totalVolume; 
    }

    // Bepaal de prijs van het huis op basis van de totale grootte
    public function getPrice() {
        $pricePerCubicMeter = 3000; // Prijs per kubieke meter
        $totalVolume = $this->getTotalVolume();
        return $pricePerCubicMeter * $totalVolume;
    }
}

// Voorbeeld gebruik:

// Maak de kamers
$room1 = new Room(5.2, 5.1, 5.5); 
$room2 = new Room(4.8, 4.6, 4.9);
$room3 = new Room(5.9, 2.5, 3.1);

// Maak een huis
$house = new House();

// Voeg kamers toe aan het huis
$house->addRoom($room1); 
$house->addRoom($room2); 
$house->addRoom($room3); 

// Bereken totale volume van het huis en de prijs
$totalVolume = $house->getTotalVolume();
$price = $house->getPrice();

// Toon resultaten
echo "Inhoud van de kamers: \n";
foreach ($house->getRooms() as $room) {
    echo "Lengte: " . $room->getLength() . "m, Breedte: " . $room->getWidth() . "m, Hoogte: "  . $room->getHeight() . "m\n";
}
echo("</br>");
echo "Totaal volume: " . $totalVolume . "m^3\n";
echo "Prijs van het huis is: " . $price . " euro\n";

?>
