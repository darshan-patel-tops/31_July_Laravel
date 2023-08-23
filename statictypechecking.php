<?php
// declare(strict_types=1);

// function add(int $a, int $b): int 
// {
//     return $a + $b;
// }

// $number1 = 5;
// $number2 = "10"; // This will produce a static type checking error.

// $result = add($number1, $number2);

// echo "The result is: $result";







declare(strict_types=1);

function add(int $a, int $b): int {
    return $a + $b;
}

function greet(string $name): string {
    return "Hello, $name!";
}

$number1 = 5;
$number2 = "10"; // Gradual typing error: should be (int)

$result = add($number1, $number2);

echo greet("Alice");

?>
