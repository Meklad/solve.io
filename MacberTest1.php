<?php

namespace Owllog\SolveIo\MacberTest;

/**
* Count string vowels.
* 
* @method static int count(string $string)
* @example MacberTest1::count('Hello!') === 2
* @example MacberTest1::count('Why?') === 0
*/
final class MacberTest1
{
    /**
     * Array that contains a list of vowels characters.
     * 
     * array<string>
     */
    const VOWELS = ['a', 'e', 'i', 'o', 'u'];

    /**
     * Check if a giving string contains vowels characters, then return the count of vowels.
     *
     * @param string $string
     * @return integer
     */
    public static function count(string $string): int
    {
        $counter = 0;

        for ($i = 0; $i < strlen(strtolower($string)); $i++) {
            if (in_array($string[$i], static::VOWELS)) {
                $counter++;
            }
        }

        return $counter;
    }
}