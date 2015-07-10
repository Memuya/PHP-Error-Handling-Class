# PHP-Error-Handling-Class
A PHP class to handle the error messages that are displayed to a user. Can be used inside other classes to display messages back to the user.

# Example

```PHP
class Person {
  private $name, $age;
  
  public function add($name, $age) {
    $this->name = $name;
    $this->age = $age;
    
    if(empty($name) || empty($age)) {
      Errors::add("All fields are required");
    } else {
      //Add user here
    }
    
    return Errors::displayErrors("Person successfully added!");
  }
}
```
