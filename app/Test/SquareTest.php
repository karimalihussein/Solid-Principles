<?php

use App\Principles\LSP\Square;
use App\Principles\LSP\Rectangle;



class SquareTest extends \PHPUnit\Framework\TestCase
{
   private  $square;
   public function setUp() : void
   {
       $this->square = new Rectangle();
       $this->square->setWidth(5);
       $this->square->setHeight(10); 
       
   }

   public function test_that_area_is_valid()
   {
       $this->assertEquals(50, $this->square->calculateArea());
   }
}
