# PHP-Error-Handling-Class
A PHP class to handle the error messages that are displayed to a user. Can be used inside other classes to display messages back to the user.

# How to use
The Error class contains only static methods, so it does not have to be initiated to be used.

## 1. Add an error
```PHP
Errors::add("All fields are required");
```

## 2. Return the list of errors
```PHP
return Errors::displayErrors(0);
```

You may also pass a succes message to be displayed if no errors were added
```PHP
return Errors::displayErrors("Person successfully added!");
```

## Output
If an error is being displayed it will show.
![Error Message](http://i.imgur.com/ksh5y8Q.png)

If no errors have been added, a success message will be displayed.
![Success Message](http://i.imgur.com/yW0QyHu.png)

## NOT displaying a success message
If you do not want to display a success message, simply put a 0 (ZERO) into the displayErrors() method
```PHP
return Errors::displayErrors(0);
```
