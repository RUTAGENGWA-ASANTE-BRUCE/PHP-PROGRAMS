<?php
echo "<h1> For loop for a single array </h1>";
$marks = [10, 11, 12, 13, 14, 15];
for ($i = 0; $i < count($marks); $i++) {
    echo "The marks at index $i is " . $marks[$i] . "<br>";
}
$scores = [
    array(19, 67, 90),
    array(24, 57, 89),
    array(12, 45, 31)
];
echo "<h1>Foreach loop for multi-dimensional array</h1>";

echo "array: $scores.";
foreach ($scores as $key => $oneArray) {
    foreach ($oneArray as $k => $single) {
        echo "The score at $key and at $k is $single <br>";
    }
}
echo "<h1>Foreach loop for multi-dimensional array</h1>";


$provinces = [
    "Western" => ["Nyabihu" => 250, "karongi" => 688],
    "Eastern" => ["Nyagatare" => 566, "Kayonza" => 525],
    "Northern" => ["Musanze" => 424, "Gicumbi" => 133],
    "Kigali" => ["Gasabo" => 145, "Kicukiro" => 790]
];
foreach ($provinces as $key => $province) {
    foreach ($province as $k => $district) {
        echo "The population in $key and in $k is $district <br>  ";
    }
}
