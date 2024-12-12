The solution involves iterating over the array in reverse order. This way, removing an element does not affect the indexing of subsequent elements.

```php
<?php
$myArray = array(1, 2, 3, 4, 5);

for ($i = count($myArray) - 1; $i >= 0; $i--) {
    if ($myArray[$i] % 2 == 0) {
        unset($myArray[$i]);
    }
}

print_r($myArray); // Output: Array ( [0] => 1 [2] => 3 [4] => 5 )
?>
```
Alternatively, create a new array containing only the elements you want to keep:

```php
<?php
$myArray = array(1, 2, 3, 4, 5);
$newArray = array();
foreach ($myArray as $value) {
    if ($value % 2 != 0) {
        $newArray[] = $value;
    }
}
print_r($newArray); // Output: Array ( [0] => 1 [1] => 3 [2] => 5 )
?>
```