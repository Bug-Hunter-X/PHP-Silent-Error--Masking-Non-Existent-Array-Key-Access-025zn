The solution involves removing the error suppression operator and using a safer approach to handle potential missing values.  The `isset()` function can explicitly check for the key's existence, or the null coalescing operator (`??`) can provide a default value if the key is missing. 
```php
<?php
$data = ['name' => 'John Doe'];
// Using isset():
if (isset($data['age'])) {
  $age = $data['age'];
} else {
  $age = 'Unknown';
}
echo "Age (using isset): " . $age; // Outputs: Age (using isset): Unknown

// Using null coalescing operator (??):
$age = $data['age'] ?? 'N/A';
echo "Age (using ??): " . $age; // Outputs: Age (using ??): N/A
?>
```