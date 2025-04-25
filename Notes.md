**In the name of Allah**

# #004: PHP tags
- Tags 
    - Opening & Closing
    ```php
    <?php>

    ?>
    ```
    > *The best practise is to delete the closing tag if our code is only in **PHP**.*

    - Shortcut:
    ```php
    <?="";>
    ```
- PHP is not case sensitive.

# #005: Comments
```php
// Single line comment
# Single line comment

/*
Multi-line
comment
*/
print 'Test' /*this is a test*/;
```

# #006: Data Types
* bool.
* int.
* float (double).
* string.
* array.
* other types...

`gettype()`

# #008: Type Casting
* `(int)` or `(integer)`.
* `(float)`, `(double)` or `(real)`.
* `(bool)` or `(boolean)`.
* `(string)`.
* `(array)`.
* `(object)`.
* `(null)`.

# #009
`var_dump()`: outputs detailed information about a variable.

# #010
* String Escaping: `\`.
* New Line: `nl2br()`.

# #011: Herdoc & Nowdoc
* **Heredoc**: Allows default scaping of the strings.
* **Nowdoc**: Prints the string exactly as it is.

# #012: Array with complex tests
To print the items of an array, we use `print_r()` instead of `echo`.

# #013: Variables & Naming Rules
### Naming Rules:
* Start with a $ sign.
* Start with a letter or an underscore.
* Can use numbers inside the name.
* No special characters are allowed.
* Case sensitive.

> PHP is a **loosely typed language** (*dynamic*).

# #015: Variable Variable
Takes the value of a variable & treats it as the name of another variable.
example:
```php
$user = "Yuan";
$$user = "him";
echo $Yuan; // him
```

# #016: Assign by value & by reference
- *By default, variables are assigned **by value**.*
- When we assign **by reference**(`&`), we point the variable to the other.

> References are **NOT** pointers.

# #017: Predefined Variables
Check their list

# #018: Constants
- Declaration: `define("name", "value")`

# #019: Predefined & Magic Constants
- Predefined Constants [*Case sensitive*]:
    - `PHP_VERSION`
    - `PHP_OS_FAMILY`
    - `PHP_INT_MAX`
    - `DEFAULT_INCLUDE_PATH`
- Magic Constants [*case insensitive*]:
    - `__LINE__`
    - `__FILE__`
    - `__DIR__`
- Reserved Keywords:
    - break.
    - clone.

# #020: Arithmetic Operators
- `+$a`: **Identity** (*converts any string to a number*).
- `-$a`: **Negation** (*converts any string to a number and negate it*).

# #022 & #023: Comparison Operators
- `==`: Equal.
- `!=` or `<>`: Not Equal.
- `===`: Identical.
- `!==`: Not Identical.
- `<=>`: Spaceship [***Less than, Equal, or Greater***].
    * Less than ===> -1.
    * Equal ===> 0.
    * Greater than ===> 1.

# #025: Logical Operators
- `and`.
- `&&` [***has a greater precedence than `and`***].
- `or`.
- `||` [***has a greater precedence than `or`***].
- `xor`.
- `!`.

# #026: String Operators
- `.`: Concatenation.
- `.=`: 

# #027: Array Operators
- `+`: Union.
- `==`: Same key & value.
- `!=` or `<>`.
- `===`: Same key, value, order & type.
- `!==`.

# #028: Error Control Operator
@
- Variable.
- File.
- Include.

# #033: If, Elseif, Else 'Alternate Syntax'
```php
if (Condition) :
    Code;
endif;
```

# #040: foreach
```php
foreach (array as value) :
    code;
endforeach;

foreach (array as key => value) :
    code;
endforeach;
```

# #041: Include & Require
- `include()`: throws a **warning** if file's not found.
- `require()`: throws an **error** if file's not found.
- `include_once()`.
- `require_once()`.

# #045: Function Return & Echo
- `echo`: **NULL**; doesn't give you the data, only prints it.
- `return`: Gives you the actual output with its actual data type.  

# #046: Function Default Parameter Value
an example:
```php
function get_data($country = "Unknown", $name = "Unknown", $age = "Private") {
    $output = "Your country is $country. Your name is $name & your age is $age";
    return $output;
}
echo get_data(name: "Yuan");
```

# #047: Function Variable Arguments List
- `func_num_args()`.
- `func_get_arg(index)`.
- `func_get_args()`.

As an *alternative*, you can use the **splat (spread) operator** `...`.

# #049: Variable Function & Function Exists
- `function_exists("function name")`.

# #050: Passing Arguments by Reference
By default, function arguments are passed by <u>*value*</u>.
To pass them by <u>**reference**</u>, `&`.

You can return the data type you want of the function by putting `: data type` after its name.
Ex: 
```php 
function hello($num): string {}
```

# #051: Anonymous Function
Normally, the function cannot inherit a variable outside its scope.
To do this, code `use($variable)` after the function declaration.
```php
function () use ($variable) {}
```

# #052: Arrow Function
```php
fn() => code;
```
> Arrow function ***inherits*** automatically from the parent scope.

# #053: String Access
PHP deals with strings as an array of characters.

# #054 - #0: String Functions
- `trim()`: only deals with the beginnings & endings of the strings, not inside it.

