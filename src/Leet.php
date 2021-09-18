<?php

namespace Leet;

class Leet
{
    /**
     * 変換文字列の定義
     *
     * @var array
     */
    public const LEET_STRINGS = [
        'a' => 4,
        'b' => 8,
        'd' => 17,
        'e' => 3,
        'g' => 6,
        'i' => 1,
        'l' => 1,
        'o' => 0,
        'p' => 9,
        'r' => 2,
        's' => 5,
        't' => 7,
        'z' => 2,
    ];

    /**
     * 変換
     *
     * @param string $str 変換前の文字列
     *
     * @return string
     */
    public static function generate($str = '')
    {
        $generated = '';
        if ($str === '') {
            return $generated;
        }

        $lower = strtolower($str);
        foreach (str_split($lower) as $value) {
            $generated .= self::LEET_STRINGS[$value] ?? $value;
        }

        return $generated;
    }
}
