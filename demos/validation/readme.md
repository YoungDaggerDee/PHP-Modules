# VALIDATION - Instructions
    This module checks if for example email is email and not just some random string. It also works for password.
    This module is following most common rules for basic email or password.
## Setup
### You have to create an object with whatever name. In my case I called it validator.
    $validator = new validation();
### Than you have to setup email and password
    $validator->email = $_POST['email'];
    $validator->password = $_POST['password'];
### Than just print the function
    echo $validator->verifyEmail();
    echo $validator->verifyPassword();
### Rules for EMAIL:
    - Must contains ('@','.' ) 
    - Minimum 2 letters and Maximum 3 letters at (.com)
    - Minimum 2 letters at domain (@something)
### Rules for PASSWORD:
    - Minimum 6 characters
    - Minimum 1 number
    - Minimum 1 capital letter
## FAQ
### Can I edit rules?
    Yes, just download validation.php from Modules and edit it your self.
    Commands to setup your own rules are coming soon!
### What if it doens't match rules?
    If your print function, it will return error.