<?php

namespace App\classes;


class Parentheses
{
    public function isValidParentheses($s) {
        $stack = [];
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            if (in_array($char, ['(', '{', '['])) {
                array_push($stack, $char);
            } else {
                if (empty($stack)) {
                    return false;
                }
                $top = array_pop($stack);
                if ($map[$char] !== $top) {
                    return false;
                }
            }
        }

        return empty($stack);
    }

}