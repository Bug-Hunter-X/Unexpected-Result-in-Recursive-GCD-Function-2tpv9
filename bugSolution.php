```php
function myFunction($a, $b) {
  if ($a === 0 && $b === 0) {
    throw new InvalidArgumentException("GCD is undefined for (0, 0)");
  }
  if ($a === 0) return $b;
  if ($b === 0) return $a;
  return myFunction($b, $a % $b);
}

$result = myFunction(10, 20);
echo $result; // Output: 10

$result = myFunction(20, 0);
echo $result; // Output: 20

try {
  $result = myFunction(0, 0);
echo $result; 
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage(); // Output: Error: GCD is undefined for (0, 0)
}
```