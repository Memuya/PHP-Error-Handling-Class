# PHP-Error-Handling-Class
A PHP class to handle the error messages that are displayed to a user. Can be used inside other classes to display messages back to the user.

# How to use

## Used inside a class

```PHP
//Require Error class if needed
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
    return Errors::displayErrors("Person successfully added!");
  }
}
```

```PHP
$person = new Person();
$person->add("Bob", 26);
```
## NOT displaying a success message
If you do not want to display a success message, simply put a 0 (ZERO) into the displayErrors() method

```PHP
return Errors::displayErrors(0);
```

## Output

If an error is being displayed it will show.
![Error Message](http://i.imgur.com/ksh5y8Q.png)

If no errors have been added, a success message will be displayed.
![Success Message](http://i.imgur.com/yW0QyHu.png)
