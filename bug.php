In PHP, a common yet subtle error arises when dealing with references and object assignments.  Consider this scenario:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = $obj1; // Assignment, not referencing
$obj2->value = 20;

echo $obj1->value; // Outputs 10, not 20
```

Many expect `$obj1->value` to be 20, as `$obj2` modifies `$obj1`. However, PHP's assignment creates a copy of the object. Changes in `$obj2` won't affect `$obj1`.

To achieve the desired behavior (modifying the original object), use references:

```php
class MyClass {
    public $value = 10;
}

$obj1 = new MyClass();
$obj2 = &$obj1; // Reference assignment
$obj2->value = 20;

echo $obj1->value; // Outputs 20
```

The `&` creates a reference.  Modifying `$obj2` directly changes `$obj1` because they point to the same memory location.  Misunderstanding this distinction frequently leads to unexpected results, particularly in larger projects.