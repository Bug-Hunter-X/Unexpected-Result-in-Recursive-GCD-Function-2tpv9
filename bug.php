```php
function myFunction($a, $b) {
  if ($a === 0) return $b;
  if ($b === 0) return $a;
  return myFunction($b, $a % $b);
}

$result = myFunction(10, 20);
echo $result; // Output: 10

$result = myFunction(20, 0);
echo $result; // Output: 20

$result = myFunction(0, 0);
echo $result; // Output: 0 // This is incorrect and should throw an error.
```