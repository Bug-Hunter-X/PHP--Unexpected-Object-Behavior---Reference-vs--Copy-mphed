The solution uses references to ensure that modifications to one object are reflected in the other.

```php
<?php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = &$obj1; // Reference assignment
$obj2->value = 20;

echo $obj1->value; // Outputs 20
?>
```
By using the `&` before `$obj1` in the assignment, we are creating a reference. Therefore any changes made through `$obj2` will directly change `$obj1` because they both point to the same memory location.