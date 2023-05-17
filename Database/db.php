<?php
require_once __DIR__ . "/../Models/Component.php";
require_once __DIR__ . "/../Models/Component_subclass/Keyboard.php";
require_once __DIR__ . "/../Models/Component_subclass/Monitor.php";
require_once __DIR__ . "/../Models/Computer.php";
require_once __DIR__ . "/../Models/Computer_subclass/Desktop.php";
require_once __DIR__ . "/../Models/Computer_subclass/Laptop.php";

$keyboard_1 = new Keyboard("Dierya", "DK61E", 49.99, 60);
$keyboard_2 = new Keyboard("Akko", "3108 ", 95.99, 95);
$keyboard_3 = new Keyboard("DREVO", "5432 ", 80.99, 70);
$monitor_1 = new Monitor("Lenovo", "D24-45 ", 109.00, 24, "1920 x 1080");
$monitor_2 = new Monitor("KOORUI ", "S4C-65 ", 120.00, 27, "1920 x 1080");
$monitor_3 = new Monitor("HP ", "4F6-27 ", 200.00, 32, "2400 x 1920");

$components_list_1 = [$keyboard_1, $monitor_1];
$components_list_2 = [$keyboard_1, $monitor_2];
$components_list_3 = [$keyboard_1, $monitor_3];
$components_list_4 = [$keyboard_2, $monitor_1];
$components_list_5 = [$keyboard_2, $monitor_2];
$components_list_6 = [$keyboard_2, $monitor_3];
$components_list_7 = [$keyboard_3, $monitor_1];
$components_list_8 = [$keyboard_3, $monitor_2];
$components_list_9 = [$keyboard_3, $monitor_3];

$computer_list = [
    new Laptop("ASUS", "W3D5V", "00-08-74-4C-7F-1D", $components_list_1, 8),
    new Desktop("HP", "4V76B", "11-08-45-4C-3T-4G", $components_list_2),
    new Laptop("LENOVO", "12G34", "11-08-45-4C-3T-1D", $components_list_3, 5),
    new Desktop("APPLE", "35UH6", "21-08-45-4R-3T-FF", $components_list_4),
    new Laptop("DELL", "24GG2", "34-08-45-AA-3T-5W", $components_list_5, 7),
    new Desktop("HP", "PCN83", "56-08-45-4C-3T-1D", $components_list_6),
    new Laptop("MICROSOFT", "FV089", "11-08-45-4C-3T-1D", $components_list_7, 10),
    new Desktop("GOOGLE", "ASDFV", "38-08-2F-4C-3T-4Y", $components_list_8),
    new Laptop("ACER", "JYE4T", "43-08-B5-4C-A2-1D", $components_list_9, 4),
];
