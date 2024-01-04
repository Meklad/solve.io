<?php

namespace Owllog\SolveIo\MacberTest;

use Exception;

/**
* Divide the array into many sub-arrays,
* Where each subarray is at most of group size.
* 
* @method  static any[] group(any[] $array, int $size)
* @example MacberTest2::group([1, 2, 3, 4, 5], 2) -> [[ 1, 2], [3, 4], [5]]
* @example MacberTest2::group([1, 2, 3, 4, 5], 3) -> [[ 1, 2, 3], [4, 5]]
* @example MacberTest2::group([1, 2, 3, 4, 5], 6) -> [[ 1, 2, 3, 4, 5]]
*/
final class MacberTest2
{
    /**
     * This function is responsible for decomposing a large array into smaller arrays based on a
     * number that must be entered representing the number of elements inside other arrays.
     *
     * @param  array<mixed> $array
     * @param  int          $size
     * @return array<mixed> $finalResult
     * @throws Exception
     */
    public static function group(array $array, int $size): array
    {
        if($size > 0) {
            $finalResult = [];
            $subArray = [];
            
            foreach ($array as $item) {
                if (count($subArray) == $size) {
                    $finalResult[] = $subArray;
                    $subArray = [];
                }
    
                $subArray[] = $item;
            }
            
    
            if (!empty($subArray)) {
                $finalResult[] = $subArray;
            }
    
            return $finalResult;
        }
        
        dump("Exception: Size Connot be Empty!");
        dump("Line: 30");
        dd("File: MacberTest2.php");
    }
}