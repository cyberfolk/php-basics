# Resume

A summary of the key things to know and remember

### Foreach

```php
<?php foreach ($hotels as $index => $hotel) : ?>
    <?= 'Elemento N ' . $index + 1 . ':'; ?>
    <ul>
        <?php foreach ($hotel as $key => $value) : ?>
            <li>
                <?= $key . '='. $value; ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
--- --- ------ --- --- --- ---
foreach ($foos as $foo){ ... }
foreach ($foos as $index => $foo){ ... }
foreach ($foo as $key => $value){ ... }
```

### Array Literal? Object?

```php
$hotels = [
    [
        'field1' => 'Hotel 1',
        'field2' => true,
    ], [
        'field1' => 'Hotel 2',
        'field2' => false,
    ],
];
```

### GET and POST

```php
$item1 = $_GET["field1"] ?? null;
$item2 = $_POST["field2"];
```

### array_filter

```php
$hotels = array_filter($hotels, function ($hotel) use ($stars) {
    return $hotel["vote"] >= $stars;
});
```

### Form

```php
<form action="index.php" method="get">
    <input name="parking" id="parking" type="checkbox">
    <input type="number" name="stars" id="stars" min="0" max="5">
    <button type="submit"></button>
    <button type="reset"></button>
</form>
```

### Function Utility

```php
$len_text = strlen($text);
str_replace("Original Value", "Value to be replaced", "String");
```

### Email-Validation backend

```php
$name = $_POST["name"];
$mail = $_POST["mail"];
$age = $_POST["age"];

$flag = false;

if (
    strlen($name) > 3 &&
    str_contains($mail, ".") &&
    str_contains($mail, "@") &&
    is_numeric($age)
) {
    $flag = true;
}
```

### Class with composition

```php
<?php
class Movie
{
    public $name;
    public $genres;

    public function __construct($name, array $genres)
    {
        foreach ($genres as $genre) {
            if (!($genre instanceof Genre)) {
                trigger_error('Array of objects passed to constructor must contain instances of Genre', E_USER_ERROR);
            }
        }
        $this->name = $name;
        $this->genres = $genres;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_genres_to_string()
    {
        $return_string = "";
        foreach ($this->genres as $genre) {
            $return_string = $return_string . $genre->get_name() . ", ";
        }
        return rtrim($return_string, ", ");
    }
}
```

### Include, Require and -once

```php
<?php include __DIR__ . "/assets/partials/head.php" ?>
<?php include_once __DIR__ . "/Views/layout/head.php" ?>
<?php require_once __DIR__ . "/Views/partials/products.php" ?>
```

### Exceptions

```php
try {
    $computer_list_exception = [
        new Laptop(get_random_img(0), "ASUS", "W3D5V", "00-08-74-4C-7F-1D", $components_list_0, 8),
    ];
} catch (Exception $e) {
    echo $e->getMessage();
}

try {
    $computer_list = [
        new Laptop(get_random_img(1), "ASUS", "W3D5V", "00-08-74-4C-7F-1D", $components_list_1, 8),
        new Desktop(get_random_img(2), "HP", "4V76B", "11-08-45-4C-3T-4G", $components_list_2),
        new Laptop(get_random_img(3), "LENOVO", "12G34", "11-08-45-4C-3T-1D", $components_list_3, 5),
        new Desktop(get_random_img(4), "APPLE", "35UH6", "21-08-45-4R-3T-FF", $components_list_4),
        new Laptop(get_random_img(5), "DELL", "24GG2", "34-08-45-AA-3T-5W", $components_list_5, 7),
        new Desktop(get_random_img(6), "HP", "PCN83", "56-08-45-4C-3T-1D", $components_list_6),
        new Laptop(get_random_img(7), "MICROSOFT", "FV089", "11-08-45-4C-3T-1D", $components_list_7, 10),
        new Desktop(get_random_img(8), "GOOGLE", "ASDFV", "38-08-2F-4C-3T-4Y", $components_list_8),
        new Laptop(get_random_img(9), "ACER", "JYE4T", "43-08-B5-4C-A2-1D", $components_list_9, 4),
    ];
} catch (Exception $e) {
    echo $e->getMessage();
}

```

### Class: _Computer_ - [Error] [Exception]

```php
class Computer
{
    public function __construct(protected string $img, protected string $brand, protected string $model,  protected string $MAC, protected array $components)
    {
        foreach ($components as $component) {
            if (!($component instanceof Component)) {
                trigger_error('Array of objects passed to constructor must contain instances of Component', E_USER_ERROR);
            }
        }
        $this->img = $img;
        $this->brand = $brand;
        $this->model = $model;
        $this->MAC = $MAC;
        $this->set_components($components);
    }

    public function get_brand()
    {
        return $this->brand;
    }

    public function get_model()
    {
        return $this->model;
    }

    public function get_MAC()
    {
        return $this->MAC;
    }

    public function get_typology()
    {
        return get_class();
    }

    public function set_components($components)
    {
        if (count($components) < 1) {
            throw new Exception("Components deve contenere almeno un elemento\n");
        }
        $this->components = $components;
    }

    public function get_img()
    {
        return $this->img;
    }

    public function get_components_details()
    {

        $return_string = "";
        foreach ($this->components as $component) {
            $return_string = $return_string . $component->get_details() . "<br>";
        }
        return rtrim($return_string, "\r\n");
    }
}
```

### Class: _Laptop_ - [Subclass]

```php
<?php
class Laptop extends Computer
{
    public function __construct(protected string $img, protected string $brand, protected string $model, protected string $MAC, protected array $components, protected int $battery_life)
    {
        parent::__construct($img, $brand, $model, $MAC, $components);
        $this->battery_life = $battery_life;
    }

    public function get_battery_life()
    {
        return $this->battery_life . " hour";
    }
    public function get_typology()
    {
        return get_class();
    }
}
```

### Trait: _Capacitable_

```php
<?php
trait Capacitable
{
    private int $capacity;

    public function get_capacity()
    {
        return $this->capacity;
    }

    public function set_capacity($capacity)
    {
        return $this->capacity = $capacity;
    }
}
```

### Class: _HDD_ - [Subclass] [use-Traits]

```php
<?php
require_once __DIR__ . "../../../Traits/Capacitable.php";

class HDD extends Component
{
    use Capacitable;
    public function __construct(
        protected string $brand,
        protected string $model,
        protected float $price,
        int $capacity
    ) {
        parent::__construct($brand, $model, $price);
        $this->set_capacity($capacity);
    }

    public function get_details()
    {
        return "<strong>" . get_class() . "</strong>" . ": "
            . parent::get_details()
            . $this->get_capacity() . "GB";
    }
}
```
