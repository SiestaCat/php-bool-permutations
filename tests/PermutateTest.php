<?php

namespace Siestacat\BoolPermutations\Tests;

use PHPUnit\Framework\TestCase;
use Siestacat\BoolPermutations\Permutate;

class PermutateTest extends TestCase
{
    public function test1Length()
    {
        $expected = [[false], [true]];

        $this->assertEquals($expected, Permutate::get(1));
    }

    public function test2Length()
    {
        $expected = [[false, false], [false, true], [true, false], [true,true]];

        $this->assertEquals($expected, Permutate::get(2));
    }
}