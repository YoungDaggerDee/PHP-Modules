<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP DATABASE MODULE -> LOGIN</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='username'>
        <input type='password' name='password'>
        <input type='submit' name='login'>
    </form>
    <?php 
        require '../Modules/database.php';
        $db = new Database();
        $db->setup('localhost','root','','roc');
        $db->connect();

        if(isset($_POST['login'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $db->setSql('select * from users where name="'.$username.'" and password="'.$password.'"');

            if(gettype($db->select())=='array'){ // LOGGED IN 
                $user = $db->select()[0];
                            // PRINT DATA
                foreach($user as $x){
                    echo $x."<br />";
                }
            }else{
                echo 'Wrong username or password';
            }
        }
    ?>
</body>
</html>