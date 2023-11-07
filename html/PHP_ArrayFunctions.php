<?php

//*-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-*
//                                  Practical-12 IU2141050039 
//*-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-**-*-*-*-*-*

// Create an array
$fruits = array("apple", "banana", "orange");

// Access an array element
echo $fruits[0]; // Output: apple

// Add an element to an array
$fruits[] = "grape";

// Print the array
print_r($fruits);

// Check if a key exists in an array
if (array_key_exists("banana", $fruits)) {
    echo "Banana exists in the array";
} else {
    echo "Banana does not exist in the array";
}

// Remove an element from an array
unset($fruits[1]);

// Sort an array
sort($fruits);

// Print the sorted array
print_r($fruits);

// Reverse an array
rsort($fruits);

// Print the reversed array
print_r($fruits);

// Count the number of elements in an array
$count = count($fruits);
echo "There are $count fruits in the array";

// Search for an element in an array
$search = "orange";
if (in_array($search, $fruits)) {
    echo "\nThe fruit $search is found in the array";
} else {
    echo "\nThe fruit $search is not found in the array";
}

// Merge two arrays
$vegetables = array("tomato", "potato", "carrot");
$fruitsAndVegetables = array_merge($fruits, $vegetables);

// Print the merged array
print_r($fruitsAndVegetables);

// Filter an array
$filteredFruits = array_filter($fruits, function($fruit) {
    return $fruit != "orange";
});

// Print the filtered array
print_r($filteredFruits);

// Map an array
$mappedFruits = array_map(function($fruit) {
    return strtoupper($fruit);
}, $fruits);

// Print the mapped array
print_r($mappedFruits);

?>
