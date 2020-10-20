<?php

namespace FizzBuzz;
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase{
    public function test_count_given1_shouldReturn1(){
        // Arrange : qui prépare les variables de tests
        $fizzBuzz = new \FizzBuzz();

        //Act : qui appelle la fonction à tester
        $actual = $fizzBuzz->count(1);

        //Assert : qui test si la fonction a donné le bon resultat
        $this->assertEquals("1", $actual);
    }
}
