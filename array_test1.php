<?php
$input_array =array("First"=>1, "SecOnd" =>4);
print_r(array_change_key_case($input_array, CASE_UPPER));
echo '</br>';
$input_array = array('a', 'b', 'c', 'd');
print_r(array_chunk($input_array, 1));
echo '</br>';
print_r(array_chunk($input_array, 1, true));
echo '</br>';
$records = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'middle_name' => 'good',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'middle_name' => 'good',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'middle_name' => 'good',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'middle_name' => 'good',
        'last_name' => 'Doe',
    )
);
$first_names = array_column($records, 'middle_name', 'id');
print_r($first_names);
echo '</br>';
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c);
echo '</br>';
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
echo '</br>';
$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);
print_r($result);
echo '</br>';
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "The 'first' element is in the array";
}
echo '</br>';
$ar1 = array('1', '2', '3');
$ar2 = array('one', 'two','3');
$result = array_merge_recursive($ar1, $ar2);
print_r($result);
$stack = array("orange", "banana");
$arr = array('1', '2', '3');
array_push($stack,$arr);
print_r($stack);
echo '</br>';
$base = array('citrus' => array( "orange") , 'berries' => array("blackberry", "raspberry"), );
$replacements = array('citrus' => array('pineapple'), 'berries' => array('blueberry'));

$basket = array_replace_recursive($base, $replacements);
print_r($basket);
echo '</br>';
$basket = array_replace($base, $replacements);
print_r($basket);
echo '</br>';
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
arsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
echo '</br>';