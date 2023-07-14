<?php

class FirstTest extends PHPUnit\Framework\TestCase {

    function first_assertion() {
        $this->assertTrue(false);
    }

    function test_second_assertion() {  
        $this->assertTrue(false);
    }

    /** @test */

    function third_assertion() {
        $this->assertTrue(true);
    }

}
