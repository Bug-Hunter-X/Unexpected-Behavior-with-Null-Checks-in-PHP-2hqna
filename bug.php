```php
function my_function($arg) {
  if ($arg === null) {
    return 'Argument is null';
  }

  // ... rest of the function
}

$result = my_function(null);
echo $result; // Outputs: Argument is null

$result = my_function('');
echo $result; //Notice: Undefined index:  ...
```