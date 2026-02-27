<?php

$books = array(
    array(
        "Title"  => "PHP",
        "Author" => "Rasmus Lerdorf",
        "Pages"  => 320,
        "Price"  => 499,
        "ISSN"   => "9780596007126"
    ),
    array(
        "Title"  => "Java",
        "Author" => "James Gosling",
        "Pages"  => 450,
        "Price"  => 699,
        "ISSN"   => "9780135166307"
    ),
    array(
        "Title"  => "Python",
        "Author" => "Guido van Rossum",
        "Pages"  => 380,
        "Price"  => 599,
        "ISSN"   => "9780135224335"
    ),
    array(
        "Title"  => "C Language",
        "Author" => "Dennis Ritchie",
        "Pages"  => 280,
        "Price"  => 399,
        "ISSN"   => "9780131103627"
    ),
    array(
        "Title"  => "C++",
        "Author" => "Bjarne Stroustrup",
        "Pages"  => 420,
        "Price"  => 650,
        "ISSN"   => "9780321563842"
    ),
    array(
        "Title"  => "JavaScript",
        "Author" => "Brendan Eich",
        "Pages"  => 340,
        "Price"  => 550,
        "ISSN"   => "9781491952023"
    ),
    array(
        "Title"  => "DBMS",
        "Author" => "C. J. Date",
        "Pages"  => 500,
        "Price"  => 750,
        "ISSN"   => "9780321551689"
    )
);

echo "<b>All Book Details</b><br><br>";
foreach ($books as $book) {

    echo "Title : "  . $book["Title"]  . "<br>";
    echo "Author : " . $book["Author"] . "<br>";
    echo "Pages : "  . $book["Pages"]  . "<br>";
    echo "Price : "  . $book["Price"]  . "<br>";
    echo "ISSN : "   . $book["ISSN"]   . "<br>";

    echo "<hr>";
}


?>