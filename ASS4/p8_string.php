<?php

    $txt = "Hello PHP, PHP Bye PHP";
    $str1="Om";
    $str2="om";


    // 1 strlen()
    echo "1 strlen = " . strlen($txt);
    echo "<br>";


    // 2 strpos() -- show postion in giv here = 6
    echo "2 strpos = " . strpos($txt,"PHP");
    echo "<br>";


    // 3 strrpos()
    echo "3 strrpos = " . strrpos($txt,"PHP");
    echo "<br>";


    // 4 strcmp()
    echo "4 strcmp = " . strcmp($str1,$str2);
    echo "<br>";


    // 5 strcasecmp()
    echo "5 strcasecmp = " . strcasecmp($str1,$str2);
    echo "<br>";


    // 6 strstr()
    echo "6 strstr = ".strstr($txt,"PHP");
    echo "<br>";


    // 7 stristr()
    echo "7 stristr = ".stristr($txt,"php");
    echo "<br>";


    // 8 substr()                                                        //
    echo "8 substr = ".substr($txt,2,6);
    echo "<br>";


    // 9 chop()
    $str="Hello World   ";
    echo "9 chop = ".chop($str);
    echo "<br>";


    // 10 trim()
    $str="   PHP Programming   ";
    echo "10 trim = ".trim($str);
    echo "<br>";


    // 11 ltrim()
    $str="   Welcome";
    echo "11 ltrim = ".ltrim($str);
    echo "<br>";


    // 12 rtrim()
    $str="Hello   ";
    echo "12 rtrim = ".rtrim($str);
    echo "<br>";


    // 13 str_replace()
    echo "13 str_replace = ".str_replace("PHP","Java",$txt);
    echo "<br>";


    // 14 substr_replace()
    $str="Hello World";
    echo "14 substr_replace = ".substr_replace($str,"PHP",6);
    echo "<br>";


    // 15 strtolower()
    $str="HELLO WORLD";
    echo "15 strtolower = ".strtolower($str);
    echo "<br>";


    // 16 strtoupper()
    $str="hello world";
    echo "16 strtoupper = ".strtoupper($str);
    echo "<br>";


    // 17 ucfirst()
    $str="good morning students";
    echo "17 ucfirst = ".ucfirst($str);
    echo "<br>";


    // 18 ucwords()
    $str="good morning students";
    echo "18 ucwords = ".ucwords($str);
    echo "<br>";


    // 19 chr()
    echo "19 chr = ".chr(65);
    echo "<br>";


    // 20 ord()
    echo "20 ord = ".ord("A");
    echo "<br>";

    $str="Hello PHP";


    // 21 strrev()
    echo "21 Reverse = ".strrev($str);
    echo "<br>";


    // 22 strlen with array example
    echo "22 Length = ".strlen("Programming");
    echo "<br>";


    // 23 explode()
    $arr=explode(" ",$str);
    print_r($arr);
    echo "<br>";


    // 24 implode()
    $array=array("PHP","is","Easy");
    echo "24 implode = ".implode(" ",$array);
    echo "<br>";


    // 25 substr_count()
    echo "25 substr_count = ".substr_count("Hello Hello","Hello");
    echo "<br>";


?>