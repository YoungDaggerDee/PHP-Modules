# DATABASE - Instructions
    First of all you have to import the module. You can do it by downloading the file database.php in folder Modules.
    Then just require the module. This module have 2 addons demos (LOGIN and REGISTER).
## Setup
### You have to create an object with whatever name. In my case I called it db.
    $db = new Database();
### Then you have to setup your connection via function setup
    Function setup takes these parameters.
    $db->setup(host,user,password,database)
    In my case I used my database with name 'roc
    $db->setup('localhost','root','','roc');    
### To connect, you have to use function connect
    $db->connect();
## SQL Task
### WARNING!
    I have implemented an system that wil check if you're using correct sql task!

    To setup SQL task you have to use $db->setSql('TASK')
    After you setup your sql task. You can use one of these function.
    - select()
    - insertData()
    - update()
    - delete()
    Function select returns 2 arrays. First one have count of selected rows, second one have collumns
    echo $db->select()[0]['username']   -> returns first user's name.
    To get all data use for loop and inside of the loop use foreach.
## ADDONS
### Login
    This function returns arraylist incase you have logged in
### Register
    This function returns true if data were inserted into database
## FAQ
### Can I connect more databases?
    Sure you can, just use another object ($db1 = new Database(), $db2 = new Database()).
    Dont forget to setup connection and use function connect.
### Can I use any kind of sql command?
    Of course, use any kind of sql command that would work in terminal.