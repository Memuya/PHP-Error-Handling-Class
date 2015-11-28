# PHP-Error-Handling-Class
A PHP class to handle the error messages that are displayed to a user. Can be used inside other classes to display messages back to the user.

# How to use
The Error class contains only static methods, so it does not have to be initiated to be used.

## 1. Use the namespace
```PHP
use Memuya\ErrorHandler\Errors;
```
or you can use it inline
```PHP
Memuya\ErrorHandler\Errors::add("Error message here");
```

## 2. Add an error
```PHP
Errors::add("All fields are required");
```

## 3. Return the list of errors
```PHP
return Errors::display(0);
```

You may also pass a success message to be displayed if no errors were added.
```PHP
return Errors::display("Person successfully added!");
```

You can change the style of the notice box by passing through a second value through to the method. By default all error messages will be displayed in a red notice box and do not require a value to be passed through to the method. All success messages will be displayed in a green notice box.

### No Notice Box
```PHP
return Errors::display("Success Message", 0);
```

### Red Error Notice
```PHP
return Errors::display("Success Message");
```
..is the same as..
```PHP
return Errors::display("Success Message", 1);
```

### Yellow Error Notice
```PHP
return Errors::display("Success Message", 2);
```

## Example (used inside a class)
```PHP
//Require the Error class if needed
require_once 'Error.php';

class Person {
  private $name, $age;
  
  public function add($name, $age) {
    $this->name = $name;
    $this->age = $age;
    
    if(empty($this->name) || empty($this->age)) {
      //Add an error
      Errors::add("All fields are required");
    } else {
      //Add user here
    }
    
    //Display all errors to user or a success message
    return Errors::display("Person successfully added!");
  }
}
```

```PHP
$person = new Person();
echo $person->add("Bob", 26); //Echo to display messages
```

## Output
If an error is being displayed it will show.
![Error Message](http://i.imgur.com/ksh5y8Q.png)

If no errors have been added, a success message will be displayed.
![Success Message](http://i.imgur.com/yW0QyHu.png)

## NOT displaying a success message
If you do not want to display a success message, simply put a 0 (ZERO) into the displayErrors() method
```PHP
return Errors::display(0);
```

## Clear All Errors
Using the clear() method allows you to clear all errors added so far
```PHP
Errors::clear();
```
# Other Methods
```PHP
//Check if an error exist inside the errors array
Errors::hasErrors();

//Counts the amount of errors currently in the errors array
Errors::getCount();
```
