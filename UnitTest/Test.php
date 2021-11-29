<?php
require_once '../Revert.php';
use PHPUnit\Framework\TestCase;

class Test extends TestCase
{
    public function testFixedTests() {
        $this->assertEquals("olleH, ynhoJ! woH era uoy? mI enif.", Revert::revertCharacters('Hello, Johny! How are you? Im fine.'));
        $this->assertEquals("olleH, ynhoJ!", Revert::revertCharacters('Hello, Johny!'));
        $this->assertEquals("olleh?", Revert::revertCharacters("hello?"));
        $this->assertEquals("", Revert::revertCharacters(""));
    }
}
