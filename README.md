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
