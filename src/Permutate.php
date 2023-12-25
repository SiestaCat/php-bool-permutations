<?php

namespace Siestacat\BoolPermutations;

class Permutate
{
    
    public static function get(int $lenght):array
    {
        return array_reduce
        (
            range(0, $lenght-1),
            function(?array $t, int $v)
            {
                return empty($t) ? self::getEmpty($v) : self::fill($t, $v);
            }
        );
    }

    private static function getEmpty(int $v):array
    {
        return
        [
            [$v => false],
            [$v => true]
        ];
    }

    private static function fill(array $t, int $v)
    {
        $arr = [];
        foreach ($t as $item) {
            $arr[] = array_merge($item, [$v => false]);
            $arr[] = array_merge($item, [$v => true]);
        }
        return $arr;
    }
}