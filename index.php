<?php
class Calculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }
}

$calc = new Calculator();
echo $calc->add(5, 3); // Outputs: 8
echo "\n";
echo $calc->subtract(5, 3); // Outputs: 2
