<?php
require_once __DIR__ . "/../Models/Component.php";
require_once __DIR__ . "/../Models/Component_subclass/Keyboard.php";
require_once __DIR__ . "/../Models/Component_subclass/Monitor.php";
require_once __DIR__ . "/../Models/Computer.php";
require_once __DIR__ . "/../Models/Computer_subclass/Desktop.php";
require_once __DIR__ . "/../Models/Computer_subclass/Laptop.php";

$keyboard_1 = new Keyboard("Dierya", "DK61E", 49.99, 60);
$keyboard_2 = new Keyboard("Akko", "3108 ", 95.99, 95);
$monitor_1 = new Monitor("Lenovo", "D24-45 ", 109.00, 24, "1920 x 1080");
$monitor_2 = new Monitor("KOORUI ", "S4C-65 ", 120.00, 27, "1920 x 1080");

$components_list_1 = [$keyboard_1, $monitor_1];
$components_list_2 = [$monitor_2, $monitor_2];

$computer_list = [
    new Laptop("00-08-74-4C-7F-1D", $components_list_1, 8),
    new Desktop("11-08-45-4C-3T-1D", $components_list_2),
];
