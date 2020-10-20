<?php

namespace FizzBuzz;
require "FizzBuzz.php";

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase{

    private $fizzBuzz;

    protected function setUp(): void{
        parent::setUp();
        $this->fizzBuzz = new \FizzBuzz();
    }

    // Une méthode s'écrit en 3 points : (
    // Arrange : qui prépare les variables de tests
    // Act : qui appelle la fonction à tester
    // Assert : qui test si la fonction a donné le bon resultat)
    public function test_count_given1_shouldReturn1(){
        $actual = $this->fizzBuzz->count(1);

        $this->assertEquals("1", $actual);
    }

    public function test_count_given2_shouldReturn2(){
        $actual = $this->fizzBuzz->count(2);

        $this->assertEquals("2", $actual);
    }
}