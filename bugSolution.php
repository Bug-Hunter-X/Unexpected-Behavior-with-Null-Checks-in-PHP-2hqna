```php
function my_function($arg) {
  if ($arg === null) {
    return 'Argument is null';
  }
  //Check if the argument is empty string, then return an appropriate message
  elseif ($arg === ''){
    return 'Argument is an empty string';
  }
  // ... rest of the function, handle other cases as needed
}

$result = my_function(null);
echo $result; // Outputs: Argument is null

$result = my_function('');
echo $result; //Outputs: Argument is an empty string

$result = my_function(10);
echo $result; //Outputs: 10
```