# SETUP
    -   $db = new Database(); 
    -   $db->setup('host','username','password','database_name'); 
    -   $db->connect(); //return false if error
# FUNCTIONS
##        SETUP
    - setup(host,user,password,database)
    - connect()
    - checkConnection()
    - setSql(sql_task)
##        CRUD
    - select()
    - update()
    - insertData()
    - delete()
