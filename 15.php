<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019\7\23 0023
 * Time: 8:38
 */
function FirstNotRepeatingChar($str)
{
    $str = 'aassvvbbddkk';
//  /*  echo 'aassvvbbddkk';*/
    print_r($str);
    $arr = str_spoilt($str);
    foreach ($arr as $k=>$v)
    {
        if (substr_count($arr)==1)
        {
            return -1;
        }
    }
    print_r($str);
}