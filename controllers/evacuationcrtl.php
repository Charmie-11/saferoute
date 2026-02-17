<?php
class EvacuationController {

    public function index() {

    $centers = [
    [
        "name" => "Vista Alegre Evacuation Center",
        "status" => "available",
        "address" => "Lot 21 Abada Eskay, Bacolod, 6100 Negros Occidental",
        "capacity" => 500,
        "evacuees" => 320,
        "space" => 180,
        "distance" => "9.9 km",
        "amenities" => ["Medical Station","Food Distribution","Water","Sanitation","WiFi"],
        "phone" => "(02) 8888-0001",
        "updated" => "5 min ago",
        "lat" => "10.65159",
        "lng" => "123.01701"
    ],
    [
        "name" => "Brgy. Zone 10 Evacuation Center",
        "status" => "nearfull",
        "address" => "Talisay, Negros Occidental",
        "capacity" => 300,
        "evacuees" => 285,
        "space" => 15,
        "distance" => "9.2 km",
        "amenities" => ["Medical Station","Food Distribution","Water","Sanitation"],
        "phone" => "(02) 8888-0002",
        "updated" => "3 min ago",
        "lat" => "10.73443",
        "lng" => "122.98054"
    ],
    [
        "name" => "Regional Evacuation Center",
        "status" => "full",
        "address" => "Bago, Negros Occidental",
        "capacity" => 400,
        "evacuees" => 398,
        "space" => 2,
        "distance" => "24.6 km",
        "amenities" => ["Medical Station","Food Distribution","Water"],
        "phone" => "(02) 8888-0003",
        "updated" => "2 min ago",
        "lat" => "10.52514",
        "lng" => "122.83385"
    ]
];
    require "views/evacuation.php";
     }
}

