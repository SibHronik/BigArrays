<?php
namespace Sibhronik\ArraysMerger;

class ArraysMergerClass
{
    public static function inputArrays ($array1, $array2)
    {
        $start = microtime(true);   
        $newUsers = [];
        $updateUsers = [];
        foreach ($array1 as $arrayKey1 => $arrayValue1) {
            $array1Name = $arrayValue1['NAME'];
            $array1Bonuses = $arrayValue1['BONUSES'];
            if (array_key_exists($array1Name, $array2)) {
                $updateUsers[$array2[$array1Name]['NAME']] = $array2[$array1Name];
                unset($array2[$array2[$array1Name]['NAME']]);
            }
        }
        $newUsers = $array2;
        $time = microtime(true) - $start;
        echo sprintf("%f", $time);
    }
} 