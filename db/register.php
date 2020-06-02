<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP DATABASE MODULE -> REGISTER</title>
</head>
<body>
    <form method='post'>
        <input type='text' name='email'>
        <input type='password' name='password'>
        <input type='submit' name='register'>
    </form>
    <?php 
        require '../Modules/database.php';
        $db = new Database();
        $db->setup('localhost','root','','roc');
        $db->connect();

        if(isset($_POST['register'])){
            $email = $_POST['email'];
            $explode_username = explode('@',$email);
            $username = $explode_username[0];
            $password = $_POST['password'];

            $db->setSql('insert into users (email,name,password,teamkey,post,bundle) values ("'.$email.'","'.$username.'","'.$password.'","204psa","o","1")');
            if($db->insertData()){
                echo 'account created';
            }
        }
    ?>
</body>
</html>