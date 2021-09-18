<?php

use Leet\Leet;
use PHPUnit\Framework\TestCase;

class LeetTest extends TestCase
{
    public function test空文字の時に空文字が返る()
    {
        $this->assertSame('', Leet::generate(''));
    }

    public function testLeet文字に変換される()
    {
        $this->assertSame('48c173f6h1jk1mn09q257uvwxy2', Leet::generate('AbCdefGhiJkLmNOPQrStUVwxyZ'));
    }
}
